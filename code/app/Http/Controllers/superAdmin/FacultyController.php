<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();

        return response()->json($faculties);
    }

    public function store(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        $faculty = new Faculty();
        $faculty->name = $validatedData['name'];

        $faculty->save();

        return response()->json($faculty);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        $faculty = Faculty::findOrFail($id);

        $faculty->name = $validatedData['name'];
        $faculty->save();

        return response()->json($faculty);
    }

    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);

        $faculty->delete();

        return response()->json(['message' => 'Faculty deleted successfully']);
    }
}