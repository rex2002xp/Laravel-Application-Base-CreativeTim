@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="col-md-4 content-center">
        <div class="card card-login card-plain">
            <form class="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="header header-primary text-center">
                    <div class="logo-container">
                        <img src="{{ asset('img/now-logo.png') }}" alt="">
                    </div>
                </div>
                <div class="content">
                    <div class="input-group form-group-no-border input-lg">
                        <span class="input-group-addon">
                            <i class="now-ui-icons users_circle-08"></i>
                        </span>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Fullname" required >
                        
                    </div>
                    <div class="input-group form-group-no-border input-lg">
                        <span class="input-group-addon">
                            <i class="now-ui-icons ui-1_email-85"></i>
                        </span>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    </div>
                    <div class="input-group form-group-no-border input-lg">
                        <span class="input-group-addon">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                        </span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-group form-group-no-border input-lg">
                        <span class="input-group-addon">
                            <i class="now-ui-icons ui-1_check"></i>
                        </span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
                    </div>                    
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif                
                </div>
                <div class="footer text-center">
                    <input type="submit" value="Register" class="btn btn-primary btn-round btn-lg btn-block">
                </div>
                <div class="pull-left">
                    <h6>
                        <a href="{{ route('login') }}" class="link">Login</a>
                    </h6>
                </div>
                <div class="pull-right">
                    <h6>
                        <a href="{{ route('password.request') }}" class="link">Need recovery password?</a>
                    </h6>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
