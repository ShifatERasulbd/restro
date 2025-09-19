@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Add Food Category</h4>
            </div>

            <form action="{{ route('foodCategory.store') }}" method="POST" >
              @csrf
              <div class="card-body">

                <!-- Product Name -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Category Name</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="name" class="form-control">
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
