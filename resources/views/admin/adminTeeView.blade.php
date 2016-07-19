@extends('layouts.app') 
 
 
 @section('content') 

<?php $courseinfo = App\Tee::where('course_id', $idedit)->get(); ?> 
<?php $course = App\Course::where('id', $idedit)->first(); ?>

   <h3>Tee Color: <b> {{$course->name}} </b></h3>
 
  
                                    
     <div class="table-responsive"> 
 
	
         <table class="table table-bordered table-striped table-hover"> 
             <thead> 
                 <tr> 
                       <th>CourseId</th> <th>TeeId</th> <th>Color</th> 
                 </tr> 
             </thead> 
             <tbody> 
              @foreach($courseinfo as $user)
                 <tr> 
	     		<td> {{$user->course_id}}</td> <td>{{ $user->id }}</td>   <td> {{ $user->color }} </td> 
                 </tr>
              @endforeach 
             </tbody> 
         </table> 

                <div class="align-right">
                     

			 <p align="right"><a href="{{route('adminnewTee', ['idedit' => $idedit])}}">Add New Color</a> </p>
               </div>
    </div> 
 
 
 @endsection 

