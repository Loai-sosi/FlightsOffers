<?php

namespace App\Listeners;

use App\Constants\HttpHeaders;
use App\Events\NewPersonalAccessToken;


class RegisterNewAccessTokenInformation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param NewPersonalAccessToken $event
     * @return void
     */
    public function handle(NewPersonalAccessToken $event)
    {
        $event->token->accessToken->device()->updateOrCreate(
            [
                's_udid' => $event->request>header(HttpHeaders::DEVICE_UDID),
            ],
            [
                's_pns_token' => $event->request->header(HttpHeaders::PNS_TOKEN),
                'fk_i_user_id' => $event->token->accessToken->tokenable->getKey(),
                'fk_i_token_id' => $event->token->accessToken->getKey(),
                'e_pns_type' => $event->request->header(HttpHeaders::PNS_TYPE),
                's_client_user_agent' => $event->request->header(HttpHeaders::USER_AGENT),
                's_client_version_name' => $event->request->header(HttpHeaders::VERSION_NAME),
                's_client_version_code' => $event->request->header(HttpHeaders::VERSION_CODE),
                's_client_platform_name' => $event->request->header(HttpHeaders::PLATFORM_NAME),
                's_client_device_name' => $event->request->header(HttpHeaders::DEVICE_NAME),
                's_client_timezone' => $event->request->header(HttpHeaders::TIMEZONE),
                's_client_language' => $event->request->header(HttpHeaders::LANGUAGE),
            ]);
    }
}
