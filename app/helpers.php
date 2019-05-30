<?php 
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


function checkUserRole(){
	$user =Auth::User()->role_id;
	if($user == 1 || $user == 2 || $user == 3 ){
		return TRUE;
	}
  return FALSE;
}