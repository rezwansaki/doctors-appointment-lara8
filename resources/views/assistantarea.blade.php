@extends('layout')

@section('content')

@include('slider')

  <!-- Assistant Section Start Here -->
  <section class="assistant-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 contact-area-main">
          <div class="contact-title">Assistant Area</div>
          <div class="row">
            <div class="col-xl-6">
              <div class="assistant-area-menubutton">               
                <button type="button" class="btn btn-sm btn-success">Today's Patient List</button>
                <button type="button" class="btn btn-sm btn-primary">All Patient List</button>   
              </div>                
            </div>
            <div class="col-xl-6">
              <div class="assistant-area-search-patient">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Search Patients..." aria-label="Recipient's username" aria-describedby="button-addon2" id="searchpatients" name="searchpatients">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="assistant-area-databasetable">
                <div class="assistant-area-database-title">Today's Patient List - (30-December-2021 - Thursday - 08:15 PM) - (Total Patients: 5)</div>
                <table class="table table-hover table-sm table-responsive">
                  <thead>
                    <tr>                        
                      <th scope="col">Serial Number</th>
                      <th scope="col">Patient Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Status</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Md. Milon</td>
                      <td>+8801918425554</td>
                      <td>
                        <select class="form-select" id="status" name="status">
                          <option value="1">Pending</option>
                          <option value="2">Done</option>
                          <option value="3">Cancelled</option>
                        </select>
                      </td>
                      <td><a type="button" class="btn btn-sm btn-danger">Status Change</a></td>
                      <td><a type="button" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Md. Sakib</td>
                      <td>+8801918425664</td>
                      <td>
                        <select class="form-select" id="status" name="status">
                          <option value="1">Pending</option>
                          <option value="2">Done</option>
                          <option value="3">Cancelled</option>
                        </select>
                      </td>
                      <td><a type="button" class="btn btn-sm btn-danger">Status Change</a></td>
                      <td><a type="button" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Mrs. Zerina</td>
                      <td>+8801918428854</td>
                      <td>
                        <select class="form-select" id="status" name="status">
                          <option value="1">Pending</option>
                          <option value="2">Done</option>
                          <option value="3">Cancelled</option>
                        </select>
                      </td>
                      <td><a type="button" class="btn btn-sm btn-danger">Status Change</a></td>
                      <td><a type="button" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Sonia</td>
                      <td>+8801919522252</td>
                      <td>
                        <select class="form-select" id="status" name="status">
                          <option value="1">Pending</option>
                          <option value="2">Done</option>
                          <option value="3">Cancelled</option>
                        </select>
                      </td>
                      <td><a type="button" class="btn btn-sm btn-danger">Status Change</a></td>
                      <td><a type="button" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Md. Zakir</td>
                      <td>+8801918325252</td>
                      <td>
                        <select class="form-select" id="status" name="status">
                          <option value="1">Pending</option>
                          <option value="2">Done</option>
                          <option value="3">Cancelled</option>
                        </select>
                      </td>
                      <td><a type="button" class="btn btn-sm btn-danger">Status Change</a></td>
                      <td><a type="button" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Assistant Section End Here -->
  
@endsection