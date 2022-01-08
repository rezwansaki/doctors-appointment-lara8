@extends('layout')

@section('content')

@include('slider')

    <section class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="login-form-area">
                        <div class="login-form-title">
                            Login
                        </div>

                        <div class="login-form">
                            <!-- login form start form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password" >
                                </div>

                                <div class="d-grid gap-2 py-2">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                            <!-- login form end here form -->
                        </div>

                        <div class="login-extra">
                            {{-- forget password --}}
                            @if (Route::has('password.request'))
                                <div class="forget-password"><a href="{{ route('password.request') }}">Forgot Password</a></div>
                            @endif
                            {{-- end of forget password --}}

                            <div class="new-register"><a href="{{ route('register') }}">Create an account</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection