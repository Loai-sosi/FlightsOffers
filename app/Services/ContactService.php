<?php


namespace App\Services;


class ContactService
{

    public function sync($contacts)
    {

        $user = auth()->user();
        $contacts = collect($contacts)->map(function ($contact) {
            $contact['s_phone'] = $this->preparePhone($contact['s_phone']);
            return $contact;
        })->filter(function ($contact) {
            return strlen($contact['s_name']) > 255
                || preg_match('/^([0-9\+]*)$/', $contact['s_phone'])
                || strlen($contact['s_phone']) > 20;
        });

        $user->contacts()->forceDelete();
        $user->contacts()->createMany($contacts);


        $contacts = auth()->user()->contacts()->select(
            't_synced_contacts.*',
            't_users.s_avatar',
            't_users.pk_i_id as fk_i_user_id'
        )->where('t_synced_contacts.s_phone', '!=', auth()->user()->s_phone)->leftJoin('t_users', function ($join) {
            $join->on('t_users.s_phone', '=', 't_synced_contacts.s_phone')->whereNull('t_users.dt_deleted_date');
        })
            ->orderByRaw('ISNULL(t_users.pk_i_id) asc, s_name asc')
//          ->orderBy('s_name', 'asc')
          ->get();


        return $contacts;
    }


    protected function preparePhone($phone)
    {
        if (strpos($phone, '+') !== false) {
            return str_replace("+", "00", $phone);
        }

        return $phone;
    }

}
