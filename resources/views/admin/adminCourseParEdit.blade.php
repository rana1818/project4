@extends('layouts.app')

@section('content')
<?php $course = App\Course::where('id', $idedit)->first(); ?>
                    <form class="form-horizontal" role="form" method="POST" action="/admin/courseparedit/edit">
                        {{ csrf_field() }}
						<table border="2">
							<tr>
								<td>Hole</td>					
								@for ($i = 1; $i <= 18; $i++)
								<td>{{$i}}</td>
								@endfor
								
							</tr>
					
							<tr>
								<td>Par</td>
								@for ($i = 1; $i <= 18; $i++)

								<td><input type="text" size="2" name="{{'par' . $i}}" 				
							value="<?php echo $course->{'par' . $i}; ?>"></td>
								@endfor
								<td></td>
							</tr>
							<tr>
								<td>HDCP</td>
								@for ($i = 1; $i <= 18; $i++)
								<td><input type="text" size="2" name="{{'hdcp' . $i}}" 	
									value="<?php echo $course->{'hdcp' . $i}; ?>"></td>
								@endfor
								<td></td>
							</tr>                        
						</table>
										
						<div class="form-group">
                           				 <div class="col-md-6 col-md-offset-4">
                              					  <button type="submit" class="btn btn-primary" id = "idedit" name = "idedit" value = "{{$idedit}}">
                                    <i class="fa fa-btn fa-user"></i> Submit
                              					  </button>
                           				 </div>
                  			          </div>
			</form>
@endsection
