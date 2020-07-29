<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Foreach_;

class Studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function get_counter()
     {
        $total_crime = DB::table('complaints')
        ->count();
$records=DB::table('complaint_track')
        ->get();
        $solved =0;
        $submitted=0;
        $investigating=0;
        $cancelled=0;
        foreach($records as $data){
        if($data->status=="Complaint Submitted")
        {
            $submitted= $submitted+1;
        }
        else if($data->status=="Under Observation")
        {
            $investigating= $investigating+1;
        }
        else if($data->status=="Declined")
        {
            $cancelled= $cancelled+1;
        }
        else if($data->status=="FIR")
        {
            $solved= $solved+1;
        }
        }
         $details= ['total_complaints'=>$total_crime,
   'solved'=>$solved,
   'investigating'=>$investigating,
   'declined'=>$cancelled,
 ];
 
 return $details;
     }
    public function getData(){
		$total_crime = DB::table('complaints')
		->count();
		$complaints = DB::table('complaints')
		->get();
		$records=DB::table('complaint_track')
		->get();
		$admin=DB::table('login_credential')
		->get();
		$solved =0;
		$submitted=0;
		$investigating=0;
		$cancelled=0;
		$ps_property_crime=0;
		$ps_personal_crime=0;
		$ps_inchoate_crime=0;
		$ps_cyber_crime=0;
		$ps_satutory_crime=0;
		$ps_financial_crime=0;
		$ps_murder=0;
		$ps_rape=0;
		foreach($records as $data){
		if($data->status=="Complaint Submitted")
		{
			$submitted= $submitted+1;
		}
		else if($data->status=="Under Observation")
		{
			$investigating= $investigating+1;
		}
		else if($data->status=="Declined")
		{
			$cancelled= $cancelled+1;
		}
		else if($data->status=="FIR")
		{
			$solved= $solved+1;
		}
		}
		Foreach($complaints as $type){
if(($type->crime_type=="Cyber Crime")){
$ps_cyber_crime= $ps_cyber_crime+1;
}
else if(($type->crime_type=="Murder")||($type->crime_type=="Rape")){
	$ps_personal_crime= $ps_personal_crime+1;
	if($type->crime_type=="Murder"){$ps_murder= $ps_murder+1;}
	else if($type->crime_type=="Rape"){$ps_rape= $ps_rape+1;}
	}
		}
   $details= ['total_complaints'=>$total_crime,
   'solved'=>$solved,
   'investigating'=>$investigating,
   'declined'=>$cancelled,
   'Cyber Crime'=>$ps_cyber_crime,
   'Property Crime'=>$ps_property_crime,
   'Personal Crime'=>$ps_personal_crime,
   'Inchoate Crime'=>$ps_inchoate_crime,
   'Statutory Crime'=>$ps_satutory_crime,
   'Financial Crime'=>$ps_financial_crime,
   'Rape'=>$ps_rape,
   'Murder'=>$ps_murder,
   'Admins'=>$admin,
 ];
   
	 return view('aware')->with('details',$details);
	}
    public function dashadmin(Request $req)
    {
		if($req->session()->get('name')){
			return $this->getData();
		}
		else{
    return view('adminportal');
    	//	return $req->session()->get('password');
    	}
    	
	
	}
function delete(){

     $reg = DB::table('admin_linkreq')->get();
     $data=$this->get_counter();
       $details= ['reg'=>$reg,
       'total_complaints'=>$data['total_complaints'],
   'solved'=>$data['solved'],
   'investigating'=>$data['investigating'],
   'declined'=>$data['declined'],

   ];
       
         return view('aware')->with('details',$details);
    // return view('awarenes');
}

function Emrgncy()
{
     $complaint = DB::table('urgent_comp')->get();
   $data=$this->get_counter();
       $details= [
       'total_complaints'=>$data['total_complaints'],
   'solved'=>$data['solved'],
   'investigating'=>$data['investigating'],
   'declined'=>$data['declined'],

   ];
       
         // return view('emergency')->with('details',$details);
        
        return view('emergency')->with('Complaint',$complaint);
    

}

     public function index(Request $req)
    {
        $user_id= $req->uname;
        $user_password= $req->psw;
        $get= DB::table('login_credential')
        ->where([['User_ID','=',$user_id],['Password','=',$user_password]])
        ->count();
        $data= DB::table('login_credential')
        ->where([['User_ID','=',$user_id],['Password','=',$user_password]])
        ->get();
        if($get!=0){
            
        foreach ($data as $item) {
            $req->session()->put('name',$user_id);
            $req->session()->put('password',$user_password);
            $req->session()->put('station_address',$item->PS_name);
        }
            $complaint = DB::table('complaints')
            ->where('PS_name',$req->session()->get('station_address'))
            ->get();
         return view('welcome')->with('Complaint',$complaint);
            
        //  return $req->session()->get('password');
        }
        else{
            return "username or password invalid";
        }
       
    }
   
	public function Login_admin(Request $req){
		$user_id= $req->uname;
    	$user_password= $req->psw;
    	$get= DB::table('login_credential')
    	->where([['User_ID','=',$user_id],['Password','=',$user_password]])
    	->count();
    	$data= DB::table('login_credential')
    	->where([['User_ID','=',$user_id],['Password','=',$user_password]])
    	->get();
		if($get!=0)
		{
    		
    	foreach ($data as $item) {
    		$req->session()->put('name',$user_id);
    		$req->session()->put('password',$user_password);
    		$req->session()->put('station_address',$item->PS_name);
    	}
    		$complaint = DB::table('complaints')
    		->where('PS_name',$req->session()->get('station_address'))
			->get();
			return $this->getData();
	}
			else{
				return "username or password invalid";
			}
			
    		
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





