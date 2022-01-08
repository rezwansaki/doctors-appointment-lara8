@extends('layout')

@section('content')

@include('slider')

 <!-- Appoinment Section Start Here -->
 <section class="appointment-area">
  <div class="container">
   <div class="row">
      <div class="col-xl-12 appointment-area-main">
        <div class="appointment-area-main-title">Make an Appoinment</div>
          <div class="logged-in-user-info">You are logged in as <b>'Md. Rezwan Saki Alin'</b> and your user id is <b>5</b>.</div>

          <div class="logged-in-message">Note: Today is 29-December-2021 and you can apply for 30-December-2021. A total of 80 patients will be seen. Quickly fill out the form and check the email. No more new applications will be accepted after 80 patients.</div>

        <!-- registration start form -->
        <form action="" method="">
          <div class="mb-3">
            <label class="form-label">Appoinment Date</label>
            <input type="text" class="form-control" id="appoinmentdate" name="appoinmentdate" placeholder="dd/mm/yyyy">
          </div>
          <div class="mb-3">
            <label class="form-label">Appoinment Booking Date</label>
            <input type="text" class="form-control" id="appoinmentbookingdate" name="appoinmentbookingdate" placeholder="dd/mm/yyyy">
          </div>
          <div class="mb-3">
            <label class="form-label">Appoinment For</label>
            <select class="form-select" aria-label="Default select example" id="appoinmentfor" name="appoinmentfor">
              <option value="1">Self</option>
              <option value="2">Other</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Patient's Name</label>
            <input type="text" class="form-control" id="patientname" name="patientname">
          </div>
          <div class="mb-3">
            <label class="form-label">Patient's Address</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>
          <div class="mb-3">
            <label class="form-label">Patient's Phone Number</label>
            <input type="text" class="form-control" id="phonenumber" name="phonenumber">
          </div>
          <div class="mb-3">
            <label class="form-label">Gender</label>
            <select class="form-select" aria-label="Default select example" id="gender" name="gender">
              <option value="1">Male</option>
              <option value="2">Female</option>
              <option value="3">Others</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Patient's Birth Date</label>
            <input type="text" class="form-control" id="patientbirthdate" name="patientbirthdate" placeholder="dd/mm/yyyy">
          </div>
          <div class="mb-3">
            <label class="form-label">Patient's First Visit</label>
            <select class="form-select" aria-label="Default select example" id="patientfirstvisit" name="patientfirstvisit">
              <option value="1">Yes</option>
              <option value="2">No</option>
            </select>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Apply for Appoinment</button>
          </div>
        </form>
        <!-- registration end here form -->
      </div>
    </div>
   </div>
</section>
<!-- Appointment Section End Here -->
@endsection