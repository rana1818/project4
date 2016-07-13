@extends('layouts.app') 
 
 
 @section('content') 

<?php $courseinfo = App\Tee::where('course_id', $idedit)->get(); ?> 
 
     <h1>Tee Color</h1> 
     <div class="table-responsive"> 
 
 
         <table class="table table-bordered table-striped table-hover"> 
             <thead> 
                 <tr> 
                      <th>CourseID</th> <th>TeeId</th> <th>Color</th> 
                 </tr> 
             </thead> 
             <tbody> 
              @foreach($courseinfo as $user)
                 <tr> 
	     		 <td> {{ $user->course_id }} </td>  <td>{{ $user->id }}</td>   <td> {{ $user->color }} </td> 
                 </tr>
              @endforeach 
             </tbody> 
         </table> 
 
 
     </div> 
 
 
 @endsection 

