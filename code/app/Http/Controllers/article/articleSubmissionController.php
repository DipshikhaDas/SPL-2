<?php

namespace App\Http\Controllers\article;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;

class articleSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::where('deadline_date', '>=', now()->toDateString())
            ->orderBy('deadline_date')
            ->get();

        $defaultCover = 'public/cover-photos/default.jpg';
        return view('layouts.guests.availableJournalsForArticleSubmission', compact('journals', 'defaultCover'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}