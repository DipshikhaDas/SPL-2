<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Spatie\Permission\Models\Role;


class GoogleLoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function login(){
        try{
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->getId())->first();
            


            if (!$user){

                // dd ("user doesn't exist");

                $newUser = User::create([
                    'google_id' => $googleUser->getId(),
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                ]);

                $newUser->assignRole('author');
                Auth::login($newUser);

                return redirect()->intended('dashboard');
            } 
            else {
                Auth::login($user, true);
                return redirect()->intended('dashboard');
            }
        } catch(\Throwable $th){
            dd('Something went wrong!'. $th->getMessage());
        }
    }
}
