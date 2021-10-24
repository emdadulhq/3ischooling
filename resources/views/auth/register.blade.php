@extends('3i_school.layouts.master')

@section('title')
Register
@stop

@section('content')

<div class="container loginpadding" style="margin: 100px;">
    <div class="row center">
        <div class="col-md-6 offset-md-3"> 
            <h2 class="sub-title position-relative onwhitetitle">Register</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">  
            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label  class="onwhite">Name</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="form-group">
                    <label  class="onwhite">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  class="onwhite">Phone</label>
                    <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" required>

                    @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  class="onwhite">Gender</label>
                    <input class="form-control" type="text" name="gender" value="{{ old('gender') }}" required>

                    @if ($errors->has('gender'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label  class="onwhite">Password</label>
                    <input class="form-control" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div>
                    <label  class="onwhite">Confirm Password</label>
                    <input  class="form-control" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="readon"  style="margin-top: 30px;">Register <i class="flaticon flaticon-right-arrow"></i></button>
                </div>
                <p  class="onwhite"> Already a member? <a href="{{ route('login') }}">Sign in</a> </p>
            </form>
        </div>
    </div>
</div>

@stop
