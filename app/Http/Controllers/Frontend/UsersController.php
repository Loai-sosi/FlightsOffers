<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\TActivity;
use App\Models\TUser;
use Carbon\Carbon;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function show($id)
    {
        $user = TUser::with('interests')->find($id);
        if(!$user) return "User not fond";
        $startDay = Carbon::now()->format('Y-m-d');
        $endDay = Carbon::now()->addYear()->format('Y-m-d');

        $fromDate = Carbon::now()->format('Y-m-d');
        $toDate = Carbon::now()->addDays(4)->format('Y-m-d');

        if(!empty(request('date_range'))){
            $rangeDate = explode(" - ",request('date_range'));
            if(sizeof($rangeDate) == 2) {
                $fromDate = $rangeDate[0];
                $toDate = $rangeDate[1];
            }

        }
        $activities = TActivity::where('fk_i_user_id',$id)->with(['periods' => function ($query) use($fromDate, $toDate) {
            $query->when($fromDate && $toDate , function ($q)use($fromDate, $toDate)  {
                $q->whereDate('dt_start_date', '<=', $fromDate)
                    ->orWhereDate('dt_end_date', '>=', $toDate);
            });
        }, 'interest'])
            ->whereHas('periods' , function ($query) use($fromDate, $toDate) {
                $query->when($fromDate && $toDate , function ($q)use($fromDate, $toDate)  {
                    $q->whereDate('dt_start_date', '<=', $fromDate)
                        ->orWhereDate('dt_end_date', '>=', $toDate);
                });
            })
            ->enabled()->latest()->paginate();


        $bookedDates = $user->whereHas('reservations.sessions', function ($query) use ($startDay,$endDay) {
            $query->where(function ($query) use ($startDay,$endDay) {

                $query->where(function ($query) use ($startDay,$endDay) {
                    $query->whereBetween('dt_from', [$startDay, $endDay])
                        ->orWhereBetween('dt_to', [$startDay, $endDay]);
                });
                $query->where(function ($query2) use ($startDay,$endDay) {
                    $query2->where('dt_from','<', $startDay)
                        ->orWhere('dt_to','>', $endDay);
                });
            });
        })->get()->each(function ($session){
            return [$session->dt_from , $session->dt_to];
        });



        return view('mobile.index',compact('user','fromDate','toDate','activities','bookedDates'));
    }

    public function activity()
    {
        $id = request('id');
        $activity = TActivity::find($id);
        return response(['page'=> view('mobile.activity_modal',compact('activity'))->render()]);
    }

}
