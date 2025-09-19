@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Foods</h4>
            </div>

            <form action="{{ route('food.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="hidden" name="id" value="{{ $food->id }}">
              <div class="card-body">

                <!-- Product Name -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Name</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="name" value="{{ $food->name }}" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Price</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="price" value="{{ $food->price }}" class="form-control">
                  </div>
                </div>

               <!-- Ingredients -->
               <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Ingredients</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" id="ingredientInput" class="form-control" placeholder="Type and press comma (,)">
                  
                  <!-- Ingredients List -->
                   
                  <div id="ingredientList" class="mt-2"></div>
                  <!-- Hidden input to store ingredients array -->
                  <input type="hidden" name="ingredients" id="ingredientsHidden">
                </div>
              </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Packing Price</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="packagingPrice" value="{{ $food->packagingPrice }}" class="form-control">
                  </div>
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

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Ingredients Script -->
<script>
$(document).ready(function(){
  let ingredients = [];

  // Initialize ingredients from server data
  let existingIngredients = @json(explode(',', $food->ingredients));
  ingredients = existingIngredients.filter(i => i.trim() !== "");

  // Render existing ingredients as badges with delete button
  ingredients.forEach(function(ingredient, index){
    $("#ingredientList").append(
      `<span class="badge badge-primary mr-1 mb-1" data-index="${index}">${ingredient} <span class="badge-delete" style="cursor:pointer; margin-left:5px;">&times;</span></span>`
    );
  });

  // Set hidden input value
  $("#ingredientsHidden").val(ingredients.join(","));

  $("#ingredientInput").on("keyup", function(e){
    let inputVal = $(this).val();
    if(inputVal.includes(",")){
      let newIngredients = inputVal.split(",").map(i => i.trim()).filter(i => i !== "");
      newIngredients.forEach(function(ingredient){
        if(ingredient && !ingredients.includes(ingredient)){
          ingredients.push(ingredient);
          $("#ingredientList").append(
            `<span class="badge badge-primary mr-1 mb-1">${ingredient} <span class="badge-delete" style="cursor:pointer; margin-left:5px;">&times;</span></span>`
          );
        }
      });
      $("#ingredientsHidden").val(ingredients.join(",")); // update hidden field
      $(this).val(""); // clear input
    }
  });

  // Handle ingredient deletion
  $(document).on("click", ".badge-delete", function(){
    let badge = $(this).parent();
    let index = ingredients.indexOf(badge.text().trim().replace(' ×', ''));
    if(index > -1){
      ingredients.splice(index, 1);
      badge.remove();
      $("#ingredientsHidden").val(ingredients.join(","));
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
