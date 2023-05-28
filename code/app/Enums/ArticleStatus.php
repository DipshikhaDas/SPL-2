<?php

namespace App\Enums;


enum ArticleStatus:string
{
    case MANUSCRIPT_SUBMITTED = "manuscript submitted";
    case WITH_EDITOR = "with editor";

    case IN_REVIEW = "in review";

    public static function getValues(){
        return [self::MANUSCRIPT_SUBMITTED,
                self::WITH_EDITOR,
                self::IN_REVIEW,];
    }
}