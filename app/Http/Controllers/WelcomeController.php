<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Mail\reject_reg;
use App\Mail\Notify_all;
use App\Mail\Link_approve;
use App\Mail\Link_denied;


class WelcomeController extends Controller
{
    public function index()
    {
        
        return view('login');
    }
public function notfound()
{
    return view("eRRORrr");
}
   public function login($ip)
{

	$get=DB::table('login_credential')
	->where('Ip_Address',trim($ip))
	->count();
	// $get=strcasecmp(,"192.168.43.16");
	if($get!= 0)
			{
			//$reg = DB::table('admin_registration')->get();

//		$link = DB::table('admin_linkreq')->get();
  //       $details= ['reg'=>$reg,
    //     'link'=>$link];
       
      //   return view('mainadmin')->with('details',$details);
        

		return view('login');
				
			}
			else{
		return view('Error1');
			}
}

function Dashbrd(Request $req){
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
       
         return view('dashboard')->with('details',$details);
}






function ip(Request $ip)
	{
	$session=$ip->session()->get('name');
		$get=strcasecmp(trim($session),"");
		if($get==0){
		$user=$_SERVER['HTTP_USER_AGENT'];
		 if(strpos($user,"Windows"))
		 {
			  exec('ipconfig',$out,$ret);
		 
		
		$ipad= implode(" ",$out);

		$ipvv=explode(":",(explode('IPv4 Address',$ipad,3))[1],3);
		$ipversion= explode("  ",$ipvv[1],2);
		 
		return $this->login($ipversion[0]);
		
		
		 }
		 else
		 {
			 return view('Error1');
		 }
		}
		else{
		// 	$complaint = DB::table('complaints')
  //   		->where('PS_name',$ip->session()->get('station_address'))
  //   		->get();
  //   	 return view('welcome')->with('Complaint',$complaint);
		return view('login');
		}
	}

function approve(Request $Request){


$reg = DB::table('admin_registration')
->where('ID_number',$Request->ID)
->get();
foreach ($reg as $item) {
	
 

$details = DB::table('login_credential')
->insert(['Ip_Address'=>$item->Ip_Address,

        'User_ID'=>$item->ID_number,
        'User_name'=>$item->Name,
        'Password'=>$item->PS_name,
        'PS_name'=>$item->PS_name   ]);
$details= ['name'=>$item->Name,
'User_id'=>$item->ID_number,
'Password'=>$item->PS_name,
'link'=>'http://797dd89bdb25.ngrok.io/'];
 \Mail::to($item->e_mail)->send(new Approve_reg($details));
return redirect()->back();
}

}

function reject(Request $Request){


$reg = DB::table('admin_registration')
->where('ID_number',$Request->ID)
->get();
foreach ($reg as $item) {
	$details= ['name'=>$item->Name];
 \Mail::to($item->e_mail)->send(new reject_reg($details));
 return redirect()->back();
}

}

function lout(Request $req){

	
    		$req->session()->forget('name');
    		$req->session()->forget('password');
    		$req->session()->forget('station_address');
    

	return view('login');

}

function lin(){
	return view('login');
}

function srakshan()
    {
        
        return view('login');
    } 

function caware()
    {
        
        return view('awareness');
    } 

function faq()
    {
        
        return view('reportupload');
    } 
function adminreg()
{
	return view('first_reg');
}
function Emrgncy()
{
	 $complaint = DB::table('urgent_comp')->get();
   $data=$this->get_counter();
       $details= ['Complaint'=>$complaint,
       'total_complaints'=>$data['total_complaints'],
   'solved'=>$data['solved'],
   'investigating'=>$data['investigating'],
   'declined'=>$data['declined'],

   ];
       
         return view('emergency')->with('details',$details);
        
        // return view('emergency')->with('Complaint',$complaint);
	

}

function admin(Request $Request){
	$user=$_SERVER['HTTP_USER_AGENT'];
		 if(strpos($user,"Windows"))
		 {
			  exec('ipconfig',$out,$ret);
		 
		
		$ipad= implode(" ",$out);

		$ipvv=explode(":",(explode('IPv4 Address',$ipad,3))[1],3);
		$ipversion= explode("  ",$ipvv[1],2);
		 
		return $this->login_admin($ipversion[0]);
		
		
		 }
		 else
		 {
			 return view('Error1');
		 }


}

function login_admin($ip){


	$get=strcasecmp(trim($ip),"192.168.43.16");
	if($get == 0)
			{
			

		return view('login');
}
}


function admindash(Request $req){

$user_id= $req->usrnm;
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
    		// $complaint = DB::table('complaints')
    		// ->where('PS_name',$req->session()->get('station_address'))
    		// ->get();
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
       
         return view('dashboard')->with('details',$details);

    		
    	//	return $req->session()->get('password');
    	}
    	else{
    		return "username or password invalid";
    	}
       

}



function logadmin(Request $req){

$reg = DB::table('admin_registration')->get();

		$link = DB::table('admin_linkreq')->get();
       $details= ['reg'=>$reg,
     'link'=>$link];
       
         return view('mainadmin')->with('details',$details);
//return $req->session()->get('password');
	//return view('mainadmin');
}

 function registr(){
 	return view('admin_register');
 }

 
function approve_link(Request $Request){


$reg = DB::table('admin_linkreq')
->where('User_ID',$Request->id)
->get();
foreach ($reg as $item) {

	$details= ['name'=>$item->User_name];
DB::table('link_validation')
     ->insert([
         'PS_name'=>$item->PS_name,
        'User_ID'=>$item->User_ID]);

 \Mail::to($item->User_mailid)->send(new Link_approve($details));

 DB::table('admin_linkreq')
				->where('User_ID',$Request->id)
				->delete();
 return redirect()->back();
// return view('linkreqtable');

}

}


function reject_link(Request $Request){


$reg = DB::table('admin_linkreq')
->where('User_ID',$Request->id)
->get();
foreach ($reg as $item) {
	$details= ['name'=>$item->User_name];
	
 \Mail::to($item->User_mailid)->send(new Link_denied($details));

 DB::table('admin_linkreq')
				->where('User_ID',$Request->id)
				->delete();
 return redirect()->back();
 // return view('linkreqtable');
}

}

function Lreq(){

	

		$link = DB::table('admin_linkreq')->get();
       
       
         return view('linkreqtable')->with('details',$link);
}
function First_reg(Request $Request){

	DB::table('admin_linkreq')
     ->insert([

         'User_name'=>$Request->usrnm,
         'PS_name'=>$Request->station_name,
         
        'User_mailid'=>$Request->email,
      
        'User_ID'=>$Request->id_num]);

     return redirect()->back();
        


}

function finalreg(Request $req){

$get=DB::table('login_credential')
->where('PS_name',$req->PS_code)
->count();
if($get==0){
$name=$req->usrnm;
        $station_name=$req->PS_code;
        //$station_address=$req->station_addr;
        $ip_address=$req->ip_addr;
        $id_num=$req->id_num;
        $email=$req->email;
                // upload id proof
      $file= $req->file('ID');
      $extn = $file->getClientOriginalExtension();
      $proof_name= $id_num.".".$extn;
      $file->storeAs('./proofs',$proof_name);
                //upload signature
      $sign= $req->file('signature');
      $extn_sign = $sign->getClientOriginalExtension();
      $signature_name= $req->id_num."_signautre.".$extn_sign;
     $file->storeAs('./signature',$signature_name);
DB::table('admin_registration')
     ->insert([

         'Name'=>$name,
         'PS_name'=>$station_name,
        'e_mail'=>$email,
        'Ip_address'=>$ip_address,
        'ID_number'=>$id_num,
        'ID_proof'=>$proof_name,
        'E_sign'=>$signature_name,
     ]);
      return redirect()->back() ->with('alert', 'Registration submitted we will notify you within 3-4 days');
 }
 else{
 	return redirect()->back() ->with('alert', 'police station already registered');
 }
}


function AdminFreg(){

$reg = DB::table('admin_linkreq')->get();
       $details= ['reg'=>$reg];
       
         return view('mainadmin')->with('details',$details);

}

function Portal(){

	return view('login');
}

function Home(){
	return view('home');
}


function delete(){

	// $reg = DB::table('admin_linkreq')->get();
 //       $details= ['reg'=>$reg];
       
         // return view('aware-copy')->with('details',$details);
	return view('awarenes');
}

function Admin_notification(Request $req){
$msg=$req->message;
	
$get= DB::table('login_credential')
->get();
foreach($get as $data){
	$details= ['message'=>$msg,
	'name'=>$data->User_name
];
	 \Mail::to($data->e_mail)->send(new Notify_all($details));
}

return redirect()->back();
}


}