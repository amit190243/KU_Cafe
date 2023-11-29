@extends('layouts.login')

@section('content')

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url({{ asset('images/login.jpg') }});">

        <div class="login-box card">
            <div class="card-body loginpage">
                <form class="form-horizontal form-material" method="post" id="loginform" action="{{ route('login') }}">
                    @csrf
                    <a href="javascript:void(0)" class="text-center db"><br/><img width="60" src="{{ asset('images/logo.png') }}" alt="Home" /></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" name="email"
                                   value="{{ old('email', null) }}" type="email" required placeholder="Email Address">
                        </div>
                        @if($errors->has('email'))
                            <p class="help-block text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" value="" type="password" required placeholder="Password">
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember-me">
                        <label class="form-check-label" for="remember-me">Remember me plz!</label>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-login btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@endsection
