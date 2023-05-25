<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyArticlesController extends Controller
{
    //
    public function index(){
        $articles = auth()->user()->articles()->orderBy('id', 'desc')->get();

        return view('layouts.dashboard.author.myarticles', compact('articles'));
    }
}
