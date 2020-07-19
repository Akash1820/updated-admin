<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        if($user){
            if ($user->email_verified_at) {
                if(Hash::check($request->password, $user->password)){
                    Auth::login($user);
                    return back()->with('success', 'Login Success');
                }else{
                    return back()->with('error', 'Password not matched');
                }
            }else{
                return back()->with('error', 'Your Account has not verified yet!');
            }
            
        }else{
            return back()->with('error', 'User Not Found');
        }
    }
}
