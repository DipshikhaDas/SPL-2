<?php

namespace App\Enums;

enum ConsideredReviewerStatus: string
{
    case CONSIDERED = "considered";
    case REQUEST_SENT = "review request sent";
    case ACCEPTED_REQUEST = "review request accepted";

    case DECLINED_REQUEST = "review request declined";


    public  static function getValues()
    {
        return [
            self::CONSIDERED,
            self::REQUEST_SENT,
            self::ACCEPTED_REQUEST,
            self::DECLINED_REQUEST,
        ];
    }
}