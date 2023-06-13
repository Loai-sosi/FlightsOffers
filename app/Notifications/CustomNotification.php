<?php

namespace App\Notifications;

use NotificationChannels\Fcm\FcmChannel;

class CustomNotification extends BaseFcmNotification
{
    protected $key = 'CUSTOM';
}
