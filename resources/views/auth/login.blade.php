@extends('3i_school.layouts.master')

@section('title')
Login
@stop

@section('content')

<div class="container loginpadding" style="margin: 100px;" >
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">

                    <!-- [Start] Login/ Register Input Here -->
                    <label for="exampleInputEmail1" class="onwhite">Username</label>
                    <input id="exampleInputEmail1" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="onwhite">Password</label>
                    <input id="exampleInputPassword1" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span data-placeholder="Password" class="help-block" >
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                </div>

                <!-- [End] Login/ Register Input Here -->
                
                <div class="col-md-12">
                    <button type="submit" class="readon" name="login_user" style="margin-top: 30px; margin-bottom: 20px;">Login <i class="flaticon flaticon-right-arrow"></i></button>
                </div>
                <div class="col-md-12">
                   <span class="onwhite text-left">Not yet a member? <a href="{{ route('register') }}">Sign up</a></span>
                   <br>
                   <span class="onwhite text-align"> Forgot Your Password? <a href="{{ route('password.request') }}"> Recover Password </a></span>

               </div>
           </form>
       </div>
   </div>
</div>
@stop