<?php

namespace App\Enums;


enum ArticleStatus:string
{
    case MANUSCRIPT_SUBMITTED = '<span class="badge badge-secondary">Manusript Submitted</span>';
    case WITH_EDITOR = '<span class="badge badge-info">With Editor</span>';
    case IN_REVIEW = '<span class="badge badge-info">In Review</span>';

    case ACCEPTED = '<span class="badge badge-success">Accepted</span>';

    case REJECTED = '<span class="badge badge-danger">Rejected</span>';

    public static function getValues(){
        return [self::MANUSCRIPT_SUBMITTED,
                self::WITH_EDITOR,
                self::IN_REVIEW,];
    }
}