@extends('backend.master')
@section('main')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Review</h4>
            </div>

            <form action="{{ route('customerReview.update') }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <input type="hidden" name="id" value="{{ $customerReview->id }}" class="form-control">

                <!-- Customer Name -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Customer Name</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" name="customerName" value="{{ $customerReview->customerName }}" class="form-control">
                  </div>
                </div>

                <!-- Review -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Review</label>
                  <div class="col-sm-12 col-md-7">
                    <textarea class="summernote" name="review">{{ $customerReview->review }}</textarea>
                  </div>
                </div>

                <!-- Submit -->
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">Update</button>
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
