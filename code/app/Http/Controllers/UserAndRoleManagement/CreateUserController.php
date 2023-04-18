<?php

namespace App\Http\Controllers\UserAndRoleManagement;

use App\Http\Controllers\Controller;
use App\Models\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.dashboard.journalAdmin.createUser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.dashboard.journalAdmin.createUserForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
            // 'role' => 'required|in:admin,user'
        ]);

        // dd($validatedData);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($request->password);
        // $user->role = $validatedData['role'];
        $user->save();

        // dd($user);

        return redirect()->route('createUser.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CreateUser $createUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreateUser $createUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CreateUser $createUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreateUser $createUser)
    {
        //
    }
}
