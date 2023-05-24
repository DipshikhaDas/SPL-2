<?php

namespace App\Http\Controllers\article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class postArticleSubmissionController extends Controller
{
    public function viewArticle(Article $article)
    {
        // $article = Article::find($id);

        return view('layouts.dashboard.editorAndJournalAdmin.viewArticle', compact('article'));
    }
}
