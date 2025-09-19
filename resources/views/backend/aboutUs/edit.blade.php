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

            <form action="{{route('aboutUs.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                <input type="hidden" name="id" value="{{ $aboutUs->id }}" class="form-control">
                <!-- Product Name -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Location Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="locationTitle"  value="{{ $aboutUs->locationTitle }}" class="form-control">
                  </div>
                </div>

                 <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Location </label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="location" value="{{ $aboutUs->location }}" class="form-control">
                  </div>
                </div>

                
                 <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact Number Title </label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="contactNumberTitle" value="{{ $aboutUs->contactNumberTitle }}" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact Number  </label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="contactNumber" value="{{ $aboutUs->contactNumber }}" class="form-control">
                  </div>
                </div>

                 <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Opening Hours Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="openingHoursTitle"  value="{{ $aboutUs->openingHoursTitle }}" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Opening Hours </label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="openingHours" value="{{ $aboutUs->openingHours }}" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Order Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="orderTitle" value="{{ $aboutUs->orderTitle }}" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Us Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="aboutUsTitle" value="{{ $aboutUs->aboutUsTitle }}" class="form-control">
                  </div>
                </div>

                 <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Us Sub Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="aboutUsSubTitle" value="{{ $aboutUs->aboutUsSubTitle }}" class="form-control">
                  </div>
                </div>

                 <!-- Details -->
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Details</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote" name="description">{{ $aboutUs->description }}</textarea>
                </div>
              </div>

              <!-- File Upload -->
                <div class="form-group row mb-4 align-items-center">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Image</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="file" name="AboutImage" class="form-control" id="singleImageInput">

                      <div class="mt-3">
                        <!-- Image (will switch between current and preview) -->
                        <img id="displayImage"
                             src="{{ asset($aboutUs->image) }}"
                             alt="Slider Image"
                             style="max-width: 200px; border:1px solid #ddd; padding:5px; border-radius:8px;">
                      </div>
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



 <!-- Script -->
<script>
  document.getElementById('singleImageInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const displayImage = document.getElementById('displayImage');

    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        displayImage.src = e.target.result; // Replace current image
      };
      reader.readAsDataURL(file);
    }
  });
</script>
@endsection