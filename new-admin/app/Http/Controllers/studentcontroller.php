<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\facades\DB;

class Studentcontroller extends Controller { /** * Display a listing of the
resource. */
     
    
    public function index() { $complaint = DB::table('complaint')->get();
        
        return view('welcome')->with('Complaint',$complaint); }

   
}

