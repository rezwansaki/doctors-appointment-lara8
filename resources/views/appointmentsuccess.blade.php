@extends('layout')

@section('content')

@include('slider')

 
  <!-- Appoinment Section Start Here -->
  <section class="appointment-area">
    <div class="container">
     <div class="row">
        <div class="col-xl-12 appointment-area-main">
          <div class="appointment-area-main-title">Appoinment Result</div>
            <div class="logged-in-user-info">You are logged in as <b>'Md. Rezwan Saki Alin'</b> and your user id is <b>5</b>.</div>

            <div class="appointment-success"><span class="badge bg-success">Congratulations!!</span> Your application has been successfully accepted. Your appointment id is <span class="badge bg-info text-dark">1025</span> and date <span class="badge bg-info text-dark">30-December-2021</span>. You will stay here <span class="badge bg-info text-dark">8:15 PM</span>.</div>
        </div>
      </div>
     </div>
  </section>
  <!-- Appointment Section End Here -->

@endsection