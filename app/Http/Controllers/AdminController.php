<?php
namespace App\Http\Controllers; 
  
 use Illuminate\Http\Request; 
  
 use App\Http\Requests; 
 use App\User; 
 use App\Course;
 use App\Tee;
 use DB; 
 use Illuminate\Mail\Message; 
 class AdminController extends Controller 
 { 
 	protected $inputs = ['address', 'city', 'state', 'zip', 'phone', 'website', 'email', ]; 
  
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
        	        'email' => 'required|email|max:255|unique:users', 
                        'address' => 'required', 
 			'city' => 'required', 
 			'state' => 'required', 
 			'zip' => 'required|numeric|digits:5', 
 			'phone' => 'required|numeric|digits:10', 
 		]); 
 		$name = $request->input('name'); 
 		
 		$courseexist = Course::where('name', $name)->get(); 
 	
 		if (count($courseexist) >= 1){ 
 		  return redirect(route('adminnewcourse'))->withErrors(['name', 'Name Already Exists']); 
 		} 
 		$createCourse = new Course; 
 	//	$newCourse->email = $email; 
 		$createCourse->name = $request->input('name'); 
 		$createCourse->address = $request->input('address'); 
 		$createCourse->city = $request->input('city'); 
 		$createCourse->state = $request->input('state'); 
 		$createCourse->zip = $request->input('zip'); 
 		$createCourse->phone = $request->input('phone'); 
 

 
 		$sum1=0;
                $sum2=0;
                $totalsum1=0;
                $totalsum2=0;
                $totalsum=0;
                for($val=1;$val<=9;$val++){
                        $newPar = intval($request->input('par' . $val));
                        $createCourse->{'par' . $val} = $newPar;
                        $createCourse->{'hdcp' . $val} = intval($request->input('hdcp' . $val));
                        $totalsum1=$totalsum1+$newPar;

                }

                 for($val=10;$val<=18;$val++){
                        $newPar = intval($request->input('par' . $val));
                        $createCourse->{'par' . $val} = $newPar;
                        $createCourse->{'hdcp' . $val} = intval($request->input('hdcp' . $val));
                        $totalsum2=$totalsum2+$newPar;


                }
                $totalsum=$totalsum1+$totalsum2;

                $createCourse->parIN=$totalsum2;
                $createCourse->parOut=$totalsum1;
                $createCourse->totalpar=$totalsum;
                $createCourse->save();
 		$createCourse->save(); 
 		return redirect(route('courselist')); 
 	} 







 public function newTee(Request $request){


		$idedit = intval($request->input('idedit'));
		//$courseIdVal = Tee::where('course_id', $idedit)->first();
                $this->validate($request, [
                        
                        'color' => 'required',
                        
                ]);
                $color = $request->input('color');
                
                //verify
               // $courseexist = Course::where('color', $color)->get();

                //if (count($courseexist) >= 1){
                 // return redirect(route('adminnewTee'))->withErrors(['color', 'color Already Exists']);
              //  }
                $newTee = new Tee;
                $newTee->color = $request->input('color');
                $newTee->course_id = intval($request->input('idedit'));
                

                $newTee->save();


                return redirect(route('courselist'));
        }



public function editCourse(Request $request){
		$this->validate($request, [
			'name' => 'max:255',
  	  	  //      'email' => 'email|max:255|unique:users',
			'zip' => 'numeric|digits:5',
			'phone' => 'numeric|digits:10',
		]);
		$idedit = intval($request->input('idedit'));
		 echo " $idedit ";
		$useredit = Course::where('id', $idedit)->first();
              
		if ($request->input('name') != ""){
			$useredit->name = $request->input('name');
		}
		if ($request->input('address') != ""){
                        $useredit->address = $request->input('address');
                }

		if ($request->input('city') != ""){
			$useredit->city = $request->input('city');
		}
		if ($request->input('state') != ""){
			$useredit->state = $request->input('state');
		}
		if ($request->input('zip') != ""){
			$useredit->zip = $request->input('zip');
		}
	
		if ($request->input('phone') != ""){
			$useredit->phone = $request->input('phone');
		}
		if ($request->input('email') != ""){
                        $useredit->email = $request->input('email');
                }

		$useredit->save();
		return redirect('/admin/courselist');
	}

	 public function editCoursePar(Request $request){
		$idedit=intval($request->input('idedit')); 
		$editCourse = Course::where('id',  $idedit)->first();
		
		$sum1=0;
		$sum2=0;
		$totalsum1=0;
		$totalsum2=0;
		$totalsum=0;
		for($val=1;$val<=9;$val++){
			$newPar = intval($request->input('par' . $val));
			$editCourse->{'par' . $val} = $newPar;
			$editCourse->{'hdcp' . $val} = intval($request->input('hdcp' . $val));
			$totalsum1=$totalsum1+$newPar;

		}

		 for($val=10;$val<=18;$val++){
                        $newPar = intval($request->input('par' . $val));
                        $editCourse->{'par' . $val} = $newPar;
                        $editCourse->{'hdcp' . $val} = intval($request->input('hdcp' . $val));
                        $totalsum2=$totalsum2+$newPar;
			

                }
	 	$totalsum=$totalsum1+$totalsum2;

    	        $editCourse->parIN=$totalsum2;
  		$editCourse->parOut=$totalsum1;
		$editCourse->totalpar=$totalsum;	
	        $editCourse->save();
	        return redirect('/admin/courselist');	
	}

























 
}
