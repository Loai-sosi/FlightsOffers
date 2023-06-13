<?php


namespace App\Constants;


use ReflectionClass;

class TaskStatusType
{
    const PENDING = "PENDING";
    const IN_PROGRESS = "IN_PROGRESS";
    const DONE = "DONE";

    public static function options()
    {
        return (new ReflectionClass(get_called_class()))->getConstants();
    }

    public static function getColorForOption($status)
    {
        $color = '';
        switch ($status):
            case TaskStatusType::DONE:
                $status = "green";
                break;
            case TaskStatusType::IN_PROGRESS:
                $status = "orangg";
                break;
            default:
                $status ='blue';
        endswitch;
        return $status;
    }

}
