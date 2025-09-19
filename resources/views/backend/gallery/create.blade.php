@extends('backend.master')
@section('main')
 <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Add galleryImages</h4>
            </div>

            <form action="{{route('gallery.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <!-- Multi File Upload -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Multi Images</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="file" name="galleryImages[]" class="form-control" id="multiImageInput" multiple>
                      <!-- Multiple Image preview -->
                      <div id="multiPreviewContainer" style="margin-top:10px; display:flex; flex-wrap:wrap; gap:10px;"></div>
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


 <!-- Multi Image Preview Script  -->
<script>
  document.getElementById('multiImageInput').addEventListener('change', function(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById('multiPreviewContainer');
    previewContainer.innerHTML = ""; // Clear old previews

    Array.from(files).forEach(file => {
      if (file && file.type.startsWith("image/")) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement("img");
          img.src = e.target.result;
          img.style.maxWidth = "150px";
          img.style.maxHeight = "150px";
          img.style.objectFit = "cover";
          img.style.border = "1px solid #ddd";
          img.style.padding = "5px";
          img.style.borderRadius = "5px";
          previewContainer.appendChild(img);
        };
        reader.readAsDataURL(file);
      }
    });
  });
</script>
@endsection