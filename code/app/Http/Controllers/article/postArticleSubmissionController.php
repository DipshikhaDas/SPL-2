<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class postArticleSubmissionController extends Controller
{
    public function viewArticle($id)
    {
        $article = Article::find($id);

        return view('')
    }
}
