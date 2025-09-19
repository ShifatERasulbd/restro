@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Add Sliders</h4>
            </div>

            <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">

                <!-- Product Name -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="title" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Title</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="subtitle" class="form-control">
                  </div>
                </div>

                <!-- Single File Upload -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slider Image</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="file" name="SliderImage" class="form-control" id="singleImageInput">
                      <!-- Single Image preview -->
                      <div id="singlePreviewContainer" style="margin-top:10px;">
                        <img id="singlePreviewImage" src="" alt="Image Preview" style="max-width: 200px; display: none; border:1px solid #ddd; padding:5px; border-radius:5px;">
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

<!-- {{-- Single Image Preview Script -->
<script>
  document.getElementById('singleImageInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        const previewImage = document.getElementById('singlePreviewImage');
        previewImage.src = e.target.result;
        previewImage.style.display = 'block';
      };
      reader.readAsDataURL(file);
    }
  });
</script>

 
@endsection