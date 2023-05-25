<?php

namespace App\Http\Controllers\journalAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function viewSubmittedArticles(){
        return view('layouts.dashboard.journalAdmin.viewSubmittedArticlesButton');
    }
}
