<!-- Popular Items -->
<section class="container-width">
  <div class="featured-header">
    <h1 class="title-shop">Popular Items</h1>
    <button class="view-all-btn">View All</button>
  </div>

  <div>
    <div class="row">
      @foreach($popularFood as $food)
      <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#C2F0C2">
          <img src="{{asset($food->image)}}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{$food->name}}</h5>
            <p class="card-text">{{$food->ingredients}}</p>
          </div>
          <button 
            class="add-to-cart-btn"
            data-id="{{ $food->id }}"
            data-name="{{ $food->name }}"
            data-price="{{ $food->offerPrice ?? $food->price }}"
            data-image="{{ asset($food->image) }}"
          >
            <i class="fa-solid fa-cart-plus"></i> Add
          </button>
        </div>
      </div>
      @endforeach

      {{-- Repeat your popular items --}}
      {{-- ... --}}
    </div>
  </div>
</section>