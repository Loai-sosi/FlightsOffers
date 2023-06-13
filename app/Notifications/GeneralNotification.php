<?php

namespace App\Notifications;

use NotificationChannels\Fcm\FcmChannel;

class GeneralNotification extends BaseFcmNotification
{
    protected $key = 'GENERAL';
}
