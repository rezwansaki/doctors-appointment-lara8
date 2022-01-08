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

          <div class="appointment-success"><span class="badge text-black bg-danger">Sorry!!</span> Your application has not been accepted. You applied for the date <span class="badge bg-info text-dark">30-December-2021</span>.</div>
      </div>
    </div>
   </div>
</section>
<!-- Appointment Section End Here -->

@endsection