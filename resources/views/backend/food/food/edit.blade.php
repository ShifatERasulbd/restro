
@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">

    <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <form action="{{ route('food.update') }}" method="POST" enctype="multipart/form-data">
             @csrf
              @method('PUT')
              <input type="hidden" name="id" value="{{ $food->id }}">
              <div class="card">
                <div class="card-header">
                  <h4>Edit Food Items</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Food Name</label>
                       <input type="text" name="name" value="{{ $food->name }}" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label>Food Price</label>
                      <input type="text" name="price" value="{{ $food->price }}" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                      <label>Food Offer Price</label>
                      <input type="text" name="offerPrice" value="{{ $food->offerPrice }}" class="form-control">
                    </div>

                    <div class="form-group col-md-12">
                      <label>Food Ingredients</label>
                      <input type="text" name="ingredients" value="{{ $food->ingredients }}" class="form-control">
                    </div>

                      <!-- Single File Upload -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Image</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="file" name="FoodImage" class="form-control" id="singleImageInput">
                      <!-- Single Image preview -->
                      <div id="singlePreviewContainer" style="margin-top:10px;">
                        @if($food->image)
                          <img id="singlePreviewImage" src="{{ asset($food->image) }}" alt="Current Image" style="max-width: 200px; border:1px solid #ddd; padding:5px; border-radius:5px;">
                        @else
                          <img id="singlePreviewImage" src="" alt="Image Preview" style="max-width: 200px; display: none; border:1px solid #ddd; padding:5px; border-radius:5px;">
                        @endif
                      </div>
                  </div>
                </div>

                 <div class="form-group col-md-6">
                      <label>Select Category</label>
                        <select class="form-control" name="categoryId">
                          <option value="{{ $food->categoryId }}">{{ $food->category->name }}</option>  
                          @foreach($foodCategory as $foodCategory)
                          <option value="{{ $foodCategory->id }}">{{ $foodCategory->name }}</option>
                          @endforeach
                         
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                      <input type="checkbox"  name="featuredItems" value="on" {{ $food->featuredItems == 'on' ? 'checked' : '' }}>
                        <label>Featured Items</label>
                    </div>

                     

                    <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">Publish</button>
                  </div>
                </div>

                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
     
    </div>
</section>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Single Image Preview Script -->
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
