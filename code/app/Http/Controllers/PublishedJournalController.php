<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\PublishedJournal;
use Illuminate\Http\Request;

class PublishedJournalController extends Controller
{
    public function store(Request $request)
{

    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'volume_no' => 'required',
        'issue_no' => 'required',
        'faculty_id' => 'required',
        'isbn' => 'required',
        'journal_pdf' => 'required|file|mimes:pdf',
    ]);


    if ($request->hasFile('journal_pdf')) {
        $file = $request->file('journal_pdf');
        $filePath = $file->store('public/journals');
        $validatedData['journal_pdf'] = $filePath;
    }

    $published_journal = new PublishedJournal();
    $published_journal->title = $validatedData['title'];
    $published_journal->description = $validatedData['description'];
    $published_journal->volume_no = $validatedData['volume_no'];
    $published_journal->issue_no = $validatedData['issue_no'];
    $published_journal->faculty_id = $validatedData['faculty_id'];
    $published_journal->isbn = $validatedData['isbn'];
    $published_journal->file = $validatedData['journal_pdf'];
    $published_journal->save();

    return redirect()->back()->with('success', 'Journal published successfully!');
}


}
