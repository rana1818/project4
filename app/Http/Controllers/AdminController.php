<?php
namespace App\Http\Controllers; 
  
 use Illuminate\Http\Request; 
  
 use App\Http\Requests; 
 use App\User; 
 use DB; 
 use Illuminate\Mail\Message; 
 class AdminController extends Controller 
 { 
  
  
     public static function isAdmin(){ 
 		if (\Auth::guest() == false){ 
 			$isAdminTrue = \Auth::user()->isadmin; 
 			if ($isAdminTrue === true){ 
 				return true; 
 			} 
 		} 
 		return false; 
     } 
}
