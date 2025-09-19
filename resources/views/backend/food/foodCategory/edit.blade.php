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

            <form action="{{ route('foodCategory.update') }}" method="POST" >
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
