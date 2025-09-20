@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">

    <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card">
                <div class="card-header">
                  <h4>Add Food Items</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Food Name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label>Food Price</label>
                      <input type="number" name="price" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                      <label>Food Offer Price</label>
                      <input type="number" name="offerPrice" class="form-control">
                    </div>

                    <div class="form-group col-md-12">
                      <label>Food Ingredients</label>
                      <input type="text" name="ingredients" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                      <label>Food Image</label>
                      <input type="file" name="FoodImage" class="form-control" id="singleImageInput">
                        <!-- Single Image preview -->
                        <div id="singlePreviewContainer" style="margin-top:10px;">
                          <img id="singlePreviewImage" src="" alt="Image Preview" style="max-width: 200px; display: none; border:1px solid #ddd; padding:5px; border-radius:5px;">
                        </div>
                    </div>

                 <div class="form-group col-md-6">
                      <label>Select Category</label>
                        <select class="form-control" name="categoryId">
                          @foreach($foodCategory as $foodCategory)
                          <option value="{{ $foodCategory->id }}">{{ $foodCategory->name }}</option>
                          @endforeach
                         
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                      <input type="checkbox"  name="featuredItems">
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

<!-- Ingredients Script -->
<script>
$(document).ready(function(){
  let ingredients = [];

  $("#ingredientInput").on("keyup", function(e){
    if(e.key === ","){ 
      let value = $(this).val().trim().replace(/,$/, ""); // remove trailing comma
      if(value){
        ingredients.push(value);
        $("#ingredientList").append(
          `<span class="badge badge-primary mr-1 mb-1">${value}</span>`
        );
        $("#ingredientsHidden").val(ingredients.join(",")); // update hidden field
      }
      $(this).val(""); // clear input
    }
  });
});
</script>

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
