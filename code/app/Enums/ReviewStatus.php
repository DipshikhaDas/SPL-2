<?php

namespace App\Enums;


enum ReviewStatus:string
{
    case UNDER_REVIEW = '<span class="badge badge-secondary font-weight-bold">under review</span>';
    case MINOR_REVISION  = '<span class="badge badge-info text-dark font-weight-bold"> Minor Revision</span>';

    case MAJOR_REVISION = '<span class="badge badge-warning text-dark font-weight-bold">Major Revision</span>';

    case ACCEPTED = '<span class="badge badge-success font-weight-bold">Accepted</span>';

    case REJECTED = '<span class="badge badge-danger font-weight-bold">Rejected</span>'; 
    public static function getValues(){
        return [self::MINOR_REVISION,self::MAJOR_REVISION,self::ACCEPTED, self::REJECTED];
    }
}