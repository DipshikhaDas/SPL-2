<?php

namespace App\Http\Controllers\journalAdmin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class JournalController extends Controller
{
    // In the controller

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'volume_no' => 'required|integer',
            'issue_no' => 'required|integer',
            'deadline_date' => 'required|date|after:today',
            'cover_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $faculty = auth()->user()->faculties()->first();

        $deadline_date = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('deadline_date'));

        $journal = new Journal();
        $journal->title = $request->input('title');
        $journal->description = $request->input('description');
        $journal->volume_no = $request->input('volume_no');
        $journal->issue_no = $request->input('issue_no');
        $journal->faculty_id = $faculty->id;
        $journal->deadline_date = $deadline_date;

        if ($request->hasFile('cover_photo')) {
            $cover_photo = $request->file('cover_photo');
            $filename = time() . '_' . $cover_photo->hashName();
            $path = $cover_photo->storeAs('public/cover-photos', $filename);
            $journal->cover_photo = $path;
            $journal->save();
        } else {
            $defaultCover = 'public/cover-photos/default.jpg';
            $journal->cover_photo = $defaultCover;
            $journal->save();
        }
        return redirect()->back()->with('success', 'Journal created successfully!');
    }

    public function getAvailableJournalsForSubmissionPage()
    {
        $journals = Journal::where('deadline_date', '>=', now()->toDateString())
            ->orderBy('deadline_date')
            ->get();

        return view('layouts.guests.viewJournals', compact('journals'));
    }

}