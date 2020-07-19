<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('welcome', compact('users'));
    }

    function ip(Request $ip)
	{
		 exec('ipconfig',$out,$ret);
		
		return explode(':',$out[23],2);
	}


}


