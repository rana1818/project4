@extends('layouts.app') 
 
 
 @section('content') 
 <?php 

$useredit = App\Course::where('id', $idedit)->first(); ?> 
 <div class="container"> 
     <div class="row"> 
         <div class="col-md-10 col-md-offset-1"> 
             <div class="panel panel-default"> 
                 <div class="panel-heading">Golf course Info</div> 
 
 
                 <div class="panel-body"> 
                     Name: {{ $useredit->name }} 
                 </div> 
 
 
 			<div class="panel-body"> 
                     Email: {{ $useredit->email }} 
                 </div> 
 
 
  			<div class="panel-body"> 
                     Address: {{ $useredit->address }}, {{$useredit->city}}, {{ $useredit->state }}, {{ $useredit->zip }} 
                 </div> 
 
 
 		
 
 
 			<div class="panel-body"> 
                     Phone Number: {{ $useredit->phone }} 
                 </div> 
 			<div class="panel-body"> 
 
 			</div> 
             </div> 
         </div> 
     </div> 
 </div> 
 @endsection 

