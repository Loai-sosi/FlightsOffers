<?php

namespace App\Events;

use App\Models\TPersonalAccessToken;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class NewPersonalAccessToken
{
    use Dispatchable, SerializesModels;

    public $request;
    public $token;

    public function __construct($token, Request $request)
    {
        $this->token = $token;
        $this->request = $request;
    }
}
