@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Offer</h4>
            </div>

            <form action="{{route('orderDesing.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                <input type="hidden" name="id" value="{{ $offer->id }}" class="form-control">
                <!-- Title -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="title" value="{{ $offer->title }}" class="form-control">
                  </div>
                </div>

                <!-- Sub Title -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="subtitle" value="{{ $offer->subtitle }}" class="form-control">
                  </div>
                </div>

                <!-- File Upload -->
                <div class="form-group row mb-4 align-items-center">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Offer Image</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="file" name="OfferImage" class="form-control" id="singleImageInput">

                      <div class="mt-3">
                        <!-- Image (will switch between current and preview) -->
                        <img id="displayImage"
                             src="{{ asset($offer->image) }}"
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
