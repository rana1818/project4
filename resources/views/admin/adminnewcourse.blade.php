@extends('layouts.app')
 
 @section('content') 
 <div class="container"> 
     <div class="row"> 
         <div class="col-md-8 col-md-offset-2"> 
             <div class="panel panel-default"> 
                 <div class="panel-heading">New Course</div> 
                <div class="panel-body"> 
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('adminnewcourse') }}"> 
                         {{ csrf_field() }} 
 

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
                             <label for="name" class="col-md-4 control-label">Name</label> 
 

                             <div class="col-md-6"> 
                                 <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> 
 
 
                                 @if ($errors->has('name')) 
                                     <span class="help-block"> 
                                         <strong>{{ $errors->first('name') }}</strong> 
                                     </span> 
                                 @endif 
                             </div> 
                         </div> 
 
 
                        <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                             <label for="email" class="col-md-4 control-label">E-Mail Address</label> 
 
 
                             <div class="col-md-6"> 
                                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"> 
 

                                 @if ($errors->has('email')) 
                                     <span class="help-block"> 
                                         <strong>{{ $errors->first('email') }}</strong> 
                                     </span> 
                                 @endif 
                             </div> 
                         </div> -->
 
 
                       <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                             <label for="name" class="col-md-4 control-label">Address</label>
 
 
 
                             <div class="col-md-6"> 
                                 <input id="address" type="text" class="form-control"  name="address" value="{{ old('address') }}"> 
 
 
                                 @if ($errors->has('address')) 
                                     <span class="help-block"> 
                                         <strong>{{ $errors->first('address') }}</strong> 
                                     </span> 
                                 @endif 
                             </div> 
                         </div> 
 
 
 			<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}"> 
                             <label for="city" class="col-md-4 control-label">City:</label> 
 
 
                             <div class="col-md-6"> 
                                 <input id="city" type="text" class="form-control"  name="city" value="{{ old('city') }}"> 
 
 
                                 @if ($errors->has('city')) 
                                     <span class="help-block"> 
                                         <strong>{{ $errors->first('city') }}</strong> 
                                     </span> 
                                 @endif 
                             </div> 
                         </div> 
 

    			<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}"> 
                             <label for="state" class="col-md-4 control-label">State:</label> 
 
                             <div class="col-md-6"> 
                                 <input id="state" type="text" class="form-control"  name="state" value="{{ old('state') }}"> 
 
 
                                 @if ($errors->has('state')) 
                                     <span class="help-block"> 
                                         <strong>{{ $errors->first('state') }}</strong> 
                                     </span> 
                                 @endif 
                             </div> 
                         </div> 
 

 				<div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}"> 
                             <label for="zip" class="col-md-4 control-label">Zip Code:</label> 
 
 
                             <div class="col-md-6"> 
                                 <input id="zip" type="text" class="form-control"  name="zip" value="{{ old('zip') }}"> 
 
 
                                 @if ($errors->has('zip')) 
                                     <span class="help-block"> 
                                         <strong>{{ $errors->first('zip') }}</strong> 
                                     </span> 
                                 @endif 
                             </div> 
                         </div> 
 
 
 
                           
 					<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}"> 
                             <label for="phone" class="col-md-4 control-label">Phone:</label> 
 
 
                             <div class="col-md-6"> 
                                 <input id="phone" type="text" class="form-control"  name="phone" value="{{ old('phone') }}"> 
 
                                 @if ($errors->has('phone')) 
                                     <span class="help-block"> 
                                         <strong>{{ $errors->first('phone') }}</strong> 
                                     </span> 
                                 @endif 
                             </div> 
                         </div> 
 
 				<div class="form-group"> 
                             <div class="col-md-6 col-md-offset-4"> 
                                 <button type="submit" class="btn btn-primary"> 
                                     <i class="fa fa-btn fa-user"></i> Register 
                                 </button> 
                             </div> 
                       </div> 
 
                         
                     </form> 
                </div> 
             </div> 
         </div> 
     </div> 
 </div> 
 @endsection 

