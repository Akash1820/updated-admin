<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Mail\reject_reg;
use App\Mail\Approve_reg;
use App\Mail\Link_approve;
use App\Mail\Link_denied;


class WelcomeController extends Controller
{
    public function index()
    {
        
        return view('welcome');
    }
public function notfound()
{
    return view("eRRORrr");
}
   public function login($ip)
{
	$get=strcasecmp(trim($ip),"192.168.43.16");
	if($get == 0)
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
function ip(Request $ip)
	{
		
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
'link'=>'http://69e063fbd4c5.ngrok.io/'];
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

function lout(){

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
        
        return view('emergency')->with('Complaint',$complaint);
	

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
			

		return view('loginadmin');
}
}
function logadmin(Request $req){

$reg = DB::table('admin_registration')->get();

		$link = DB::table('admin_linkreq')->get();
       $details= ['reg'=>$reg,
     'link'=>$link];
       
         return view('mainadmin')->with('details',$details);

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

	return view('adminportal');
}

function Home(){
	return view('home');
}

}