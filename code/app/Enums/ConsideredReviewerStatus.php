<?php

namespace App\Enums;

enum ConsideredReviewerStatus: string
{
    case REQUEST_PENDING = '<span class="badge badge-warning text-dark font-weight-bold">Request Pending</span>';
    case REQUEST_SENT = '<span class="badge badge-primary font-weight-bold">Request Sent</span>';
    case ACCEPTED_REQUEST = '<span class="badge badge-success font-weight-bold">Request Accepted</span>';

    case DECLINED_REQUEST = '<span class="badge badge-danger font-weight-bold">Request Declined</span>';


    public  static function getValues()
    {
        return [
            self::REQUEST_PENDING,
            self::REQUEST_SENT,
            self::ACCEPTED_REQUEST,
            self::DECLINED_REQUEST,
        ];
    }
}