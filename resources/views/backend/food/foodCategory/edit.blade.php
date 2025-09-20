@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">  
            <div class="card-header">
              <h4>Edit Food Category</h4>
            </div>

            <form action="{{ route('foodCategory.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                <input type="hidden" name="id" value="{{ $foodCategory->id }}" class="form-control">
                <!-- Product Name -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Category Name</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="name" value="{{ $foodCategory->name }}" class="form-control">
                  </div>
                </div>

                 <!-- File Upload -->
                <div class="form-group row mb-4 align-items-center">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Category Image</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="file" name="foodCategoryImage" class="form-control" id="singleImageInput">

                      <div class="mt-3">
                        <!-- Image (will switch between current and preview) -->
                        <img id="displayImage"
                             src="{{ asset($foodCategory->image) }}"
                             alt="{{ $foodCategory->name }}"
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
