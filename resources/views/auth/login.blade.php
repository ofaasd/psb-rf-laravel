@extends('layouts/layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">

                    @if(!empty(Session::has('message')))

                        <p class="alert alert-primary {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif

                    @if(!empty(Session::has('error')))
                        <p class="alert alert-danger {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                    @endif

                    <form method="POST" id="login-form" action="{{ URL::to('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Username</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="username" value="" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
						<div class="row mb-3">
                            <div class="col-md-6 offset-md-4">

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">

								<button class="g-recaptcha btn btn-primary"
									data-sitekey="6LceL90kAAAAAMYJvlgwCqf7GQ0UvgGeqXxQHgFb"
									data-callback='onSubmit'
									data-action='submit'
									>Login</button>
                                    <a href="{{URL::to('forgot_password')}}" class="btn btn-secondary">Lupa Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
 <script>
   function onSubmit(token) {
     document.getElementById("login-form").submit();
   }
 </script>
@endsection
