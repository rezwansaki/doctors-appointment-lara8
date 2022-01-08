@extends('layout')

@section('content')
<section class="register-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
         <div class="login-form-area">
          <div class="login-form-title">
            Forget Password
          </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

          <div class="login-form">
              <!-- login form start form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
                </div>
                <div class="d-grid gap-2 py-2">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>

            </form>
            <!-- login form end here form -->
          </div>

         </div>
        </div>
      </div>
    </div>
  </section>    
@endsection