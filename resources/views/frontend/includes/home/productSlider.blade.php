{{-- Product Slider --}}
<section>
    
  <div class="product-container" style="margin-top:0;">
    <div class="owl-carousel owl-theme" id="product-slider">
      @foreach($foodCategory as $category)
      <a href="{{ route('categoryItems',$category->id) }}">
        <div class="item">
          <div class="card product-card">
            <img src="{{ asset($category->image) }}" style="width: 56px;" alt="{{ $category->name }}">
            <div class="card-body">
              <h5>{{ $category->name }}</h5>
            </div>
          </div>
        </div>
    </a>
      @endforeach
    </div>
  </div>

</section>