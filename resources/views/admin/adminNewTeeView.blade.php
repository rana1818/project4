@extends('layouts.app')
 
 @section('content')
 <?php $useredit = App\Tee::where('id', $idedit)->first(); ?> 
 <div class="container"> 
     <div class="row"> 
         <div class="col-md-8 col-md-offset-2"> 
             <div class="panel panel-default"> 
                 <div class="panel-heading">New Color</div> 
                <div class="panel-body"> 
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('adminnewTeeColorView') }}"> 
                         {{ csrf_field() }} 
 

                         <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}"> 
                             <label for="name" class="col-md-4 control-label">Color</label> 
 

                             <div class="col-md-6"> 
                                 <input id="color" type="text" class="form-control" name="color" value="{{ old('color') }}"> 
 
 
                                 @if ($errors->has('color')) 
                                     <span class="help-block"> 
                                         <strong>{{ $errors->first('color') }}</strong> 
                                     </span> 
                                 @endif 
                             </div> 
                         </div> 
 
 
				 <div class="form-group">
                     		       <div class="col-md-6 col-md-offset-4">
                                		<button type="submit" class="btn btn-primary" name="idedit" id="idedit" value="{{$idedit}}">
                                    <i class="fa fa-btn fa-user"></i>Add
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

