@extends('layout')

@section('content')

@include('slider')

      <!-- Assistant Section Start Here -->
      <section class="assistant-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 contact-area-main">
              <div class="contact-title">Doctor Area</div>
              <div class="row">
                <div class="col-xl-6">
                  <div class="assistant-area-menubutton">               
                    <button type="button" class="btn btn-sm btn-success">Today's Income</button>
                  </div>                
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12">
                  <div class="assistant-area-databasetable">
                    <div class="assistant-area-database-title">Total Patients: 5 | Completed: 1 | Due: 3</div>
                    <div class="doctor-area-current-patient">
                      <span class="badge rounded-pill bg-primary">2</span>
                      <h2>Md. Sakib</h2>
                      <p>Male</p>
                      <p>Some other information</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Assistant Section End Here -->
  
@endsection