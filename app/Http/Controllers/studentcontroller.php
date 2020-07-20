<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class Studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
     
    
    public function index()
    {
        $complaint = DB::table('complaints')->get();
        
        return view('welcome')->with('Complaint',$complaint);
    }
   
   function ip(Request $ip)
	{
			  exec('ipconfig',$out,$ret);
		 
		
		$ipad= implode(" ",$out);

		$ipvv=explode(":",(explode('IPv4 Address',$ipad,3))[1],3);
		$ipversion= explode("  ",$ipvv[1],2);

		 return $ipversion ;
	}

	
	function store(Request $request){

	 $file=$request->file;
	 $extn= $file->getClientOriginalExtension();
	 $save=$file->storeAs('./public/','abc.'.$extn);
	 $url=Storage::url('abc.pdf');
	 $ur=explode('storage/',$url,2);
	//return $ur[1];
	 $complaint = DB::table('urgent_comp')->get();
        
        return view('emergency')->with('Complaint',$complaint);	


	}



function update_data(Request $request){
	
	DB::table('complaints')
	->where('id', $request->id)
	->update(['status'=>$request->status]
			
		);
	DB::table('complaint_track')
	->where('id', $request->id)
	->update(['status'=>$request->status]
			
		);
	
        // $complaint = DB::table('complaints')->get();
        
        // return view('welcome')->with('Complaint',$complaint);
	return redirect('/welcome');

}	

}


/*
$officier_name = $request->input('officier_name');
$Date = $request->input('date');
$remark = $request->input('remark');
$status = $request->input('status');
$data=array('officier_name'=>$officier_name,"date"=>$date,"status"=>$status,"status"=>$status);
DB::table('complaint_track')->insert($data);
echo "Record inserted successfully.<br/>";

}
  




	//public function Invst(Request $request,$id) {
//$users = DB::select('select * from complaints');
//return view('welcome',['users'=>$rows]);
//$Status = $request->input('Status');
//$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());
//DB::update('update Complaint set Status-? where id = ?',[$Status]);
//echo "Record updated successfully.
//";
//echo 'Click Here to go back.';

	}





