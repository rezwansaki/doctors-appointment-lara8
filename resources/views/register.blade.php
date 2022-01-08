@extends('layout')

@section('content')

@include('slider')

<section class="register-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="register-info-area">
            <div class="registration-info-title">
              Information
            </div>
            <div class="registration-info-desc">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet corporis eius mollitia praesentium error? Quis nostrum facilis quod veritatis minus rem, enim dolore modi distinctio qui mollitia explicabo natus, id minima asperiores repellendus architecto adipisci? Quod, repellat natus odio voluptas iusto officia corrupti! Molestiae itaque ex, corrupti porro ipsam numquam.</p>
              <p><span><i class="fas fa-info-circle"></i></span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti doloremque laudantium voluptate!</p>
              <p><span><i class="fas fa-info-circle"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga veritatis harum explicabo eligendi dicta! Explicabo placeat quam quasi soluta molestias, aliquam repellendus neque rerum quia.</p>
              <p><span><i class="fas fa-info-circle"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum delectus ipsam beatae ut aliquid possimus atque. Commodi unde a asperiores modi veniam impedit suscipit nihil, perferendis debitis dolorem, eius facilis ab odio?</p>
              <p><span><i class="fas fa-info-circle"></i></span>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
         <div class="registration-form-area">
          <div class="registration-form-title">
            Register
          </div>
          <div class="registration-form">

              <!-- registration start form -->
               <form method="POST" action="{{ route('register') }}">
                   @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus>
                </div>
                <div class="mb-3">
                  <label class="form-label">Birth Date</label>
                  <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="dd/mm/yyyy" :value="old('birthdate')" required autofocus>
                </div>
                <div class="mb-3">
                  <label class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" name="address" :value="old('address')" required autofocus>
                </div>
                <div class="mb-3">
                  <label class="form-label">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" :value="old('phone')" required autofocus>
                </div>
                <div class="mb-3">
                  <label class="form-label">Gender</label>
                  <select class="form-select" aria-label="Default select example" id="gender" name="gender" :value="old('gender')" required autofocus>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" :value="old('email')" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                </div>
                
                <div class="mb-3">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>

                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
              <!-- registration end here form -->

          </div>
         </div>
        </div>
      </div>
    </div>
  </section>
@endsection