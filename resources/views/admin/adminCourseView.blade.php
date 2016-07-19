@extends('layouts.app') 
 
 
 @section('content') 
 <?php 

$useredit = App\Course::where('id', $idedit)->first(); ?> 
 <div class="container"> 
     <div class="row"> 
         <div class="col-md-10 col-md-offset-1"> 
             <div class="panel panel-default"> 
                 <div class="panel-heading">Golf course Info </div> 
 
 
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

	       	<div class="align-right"> 
 			<p align="right"><a href="{{route('adminCourseEdit', ['idedit' => $idedit])}}">Edit Information</a> </p>
 		</div> 

                  
               







			 </div>
	
                </div>
          </div>
     </div>
 </div>







 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-default">
                 <div class="panel-heading">Par&Handicap Info</div>
		  <div class="panel-body">

		  <table border="2">
		  <tr>
			<td> Holes </td>
			 @for($j=1;$j<=18;$j++)
				 <td> {{$j}}</td>
			 @endfor
			</tr>


		  <tr>
  			  <td>Par</td>
			   @for ($i = 1; $i <= 9; $i++)
				<td> <?php echo $useredit->{'par' . $i}; ?></td>
                           @endfor
			   @for ($i = 10; $i <= 18; $i++)
			        <td> <?php echo $useredit->{'par' . $i}; ?></td>
                           @endfor
		  </tr>





		  <tr>
			    <td>Handicap</td>
			    @for ($i = 1; $i <= 9; $i++)
				<td> <?php echo $useredit->{'hdcp' . $i}; ?></td>
               	            @endfor
			    @for ($i = 10; $i <= 18; $i++)
			        <td> <?php echo $useredit->{'hdcp' . $i}; ?></td>
                      	    @endfor
		</tr>



			</table>


                 <div class="panel-body">
                     parIn: {{ $useredit->parIN }}
                  </div>



                <div class="panel-body">
                     parOut: {{ $useredit->parOut }}
                  </div>



		 <div class="panel-body">
                     totalPar: {{ $useredit->totalpar }}
                  </div>
	
				 <div class="align-right">
                        <p align="right"><a href="{{route('adminCourseParEdit', ['idedit' => $idedit])}}">Edit Information</a> </p>
                </div>

        	  
		   </div>
 
             </div> 
         </div> 
     </div> 
 </div> 
 @endsection 

