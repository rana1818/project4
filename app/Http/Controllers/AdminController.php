<?php
namespace App\Http\Controllers; 
  
 use Illuminate\Http\Request; 
  
 use App\Http\Requests; 
 use App\User; 
 use App\Course;
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


  public function newCourse(Request $request){ 
 		$this->validate($request, [ 
 			'name' => 'required|max:255', 
        	    //    'email' => 'required|email|max:255|unique:users', 
                        'address' => 'required', 
 			'city' => 'required', 
 			'state' => 'required', 
 			'zip' => 'required|numeric|digits:5', 
 			'phone' => 'required|numeric|digits:10', 
 		]); 
 		$name = $request->input('name'); 
 		//verify 
 		$courseexist = Course::where('name', $name)->get(); 
 	
 		if (count($courseexist) >= 1){ 
 		  return redirect(route('adminnewcourse'))->withErrors(['name', 'Name Already Exists']); 
 		} 
 		$newCourse = new Course; 
 	//	$newCourse->email = $email; 
 		$newCourse->name = $request->input('name'); 
 		$newCourse->address = $request->input('address'); 
 		$newCourse->city = $request->input('city'); 
 		$newCourse->state = $request->input('state'); 
 		$newCourse->zip = $request->input('zip'); 
 		$newCourse->phone = $request->input('phone'); 
 		 
 		$newCourse->save(); 
 		 
 	
 		return redirect(route('courselist')); 
 	} 










 
}
