@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Sauce</h4>
            </div>

            <form action="{{ route('sauces.update') }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                    <input type="hidden" name="id" value="{{ $sauces->id }}">
                <!-- Product Name -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="name" value="{{ $sauces->name }}" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="price" value="{{ $sauces->price }}" class="form-control">
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