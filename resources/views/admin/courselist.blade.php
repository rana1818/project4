@extends('layouts.app') 
 
 
 @section('content') 
 <div class="container"> 
     <div class="row"> 
         <div class="col-md-10 col-md-offset-1"> 
            
             <div class="panel panel-default"> 
                <div class="panel-heading">Profiles</div> 
 				<div class="panel-body"> 
 				<a href="/admin/newcourse">Add New Course</a> 
 				</div> 
 				@foreach (App\Course::all() as $user) 
 					<div class="panel-body"> 
                     {{$user->name}}, {{$user->email}}



<form action ="{{route('adminTeeView', ['idedit' => $user->id])}}"> 
 					{{ csrf_field() }} 
 					<button  method = "POST"   class="btn btn-primary pull-right"     name = "idedit{{$user->id}}" value = "{{$user->id}}"> Tee Info</button> </form> 


 					<form action ="{{route('adminview', ['idedit' => $user->id])}}"> 
 					{{ csrf_field() }} 
 					<button  method = "POST"   class="btn btn-primary pull-right"  name = "idedit{{$user->id}}" value = "{{$user->id}}">  Course Info </button> </form> 
 					
 					
                 </div> 
 				@endforeach 
             </div> 
         </div> 
     </div> 
 </div> 
 @endsection 

