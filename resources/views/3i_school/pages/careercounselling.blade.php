@extends('3i_school.layouts.master')

@section('title')
Register For Winter Schooling
@stop

@section('content')
<div class="container pb-3">
	<h1 class="text-center  sub-title position-relative onwhitetitle pb-7">Register For Career Consultation</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">  
          <form method="post" action="register.php">
            
            <div class="form-group">
              	<label  class="onwhite">Please Enter Name</label>
              	<input class="form-control" type="text" name="username" value="">
             </div>

            <div class="form-group">
              	<label  class="onwhite">Choose Gender</label>
              	<td>
					<select name="type" class="form-control">
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
				</td>
            </div>

            <div class="form-group">
              	<label  class="onwhite">Degree Earned Till</label>
              	<td>
					<select name="type" class="form-control">
						<option value="SSC">SSC</option>
						<option value="HSC">HSC</option>
						<option value="BSC">BSC</option>
					</select>
				</td>
            </div>
            <div class="form-group">
              	<label  class="onwhite">Preferred mode of counselling</label>
              	<td>
					<select name="type" class="form-control">
						<option value="person">In person</option>
						<option value="virtual">Virtual Counselling</option>
	
					</select>
				</td>
            </div>

            <div class="form-group">
              	<label  class="onwhite">Please Enter Phone Number</label>
              	<input class="form-control" type="number" name="password_1">
            </div>
            
            <div class="form-group">
              	<label  class="onwhite">Email</label>
              	<input class="form-control" type="email" name="email" value="">
            </div>
            
            <div class="input-group">
              <button type="submit" class="readon" name="login_user" style="margin-top: 30px;">Register <i class="flaticon flaticon-right-arrow"></i></button>
            </div>
          </form>
    	</div>
    </div>
</div>


@stop
