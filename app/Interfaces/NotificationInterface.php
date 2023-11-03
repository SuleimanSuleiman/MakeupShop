<?php

namespace App\Interfaces;

interface NotificationInterface
{
    public function createNotification($action, $type, $objectId);
    public function getNotification($numberOfNotification);
}
