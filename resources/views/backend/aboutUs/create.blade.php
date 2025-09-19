@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Add About Us</h4>
            </div>

            <form action="{{route('aboutUs.store')}}" method="POST">
              @csrf
              <div class="card-body">

                <!-- Product Name -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Location Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="locationTitle" class="form-control">
                  </div>
                </div>

                 <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Location </label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="location" class="form-control">
                  </div>
                </div>

                
                 <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact Number Title </label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="contactNumberTitle" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact Number  </label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="contactNumber" class="form-control">
                  </div>
                </div>

                 <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Opening Hours Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="openingHoursTitle" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Opening Hours </label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="openingHours" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Order Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="orderTitle" class="form-control">
                  </div>
                </div>

                <!-- Submit -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">Publish</button>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>



 
@endsection