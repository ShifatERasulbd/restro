@extends('frontend.master')
@section('content')

{{-- Main Slider --}}
<section>
  <div class="container">
    <div class="slide">
      @foreach($slider as $item)
        <div class="item" style="background-image: url('{{ asset($item->image) }}');">
          <div class="content">
            <div class="name">{{ $item->title }}</div>
            <div class="des">{{ $item->subTitle }}</div>
            <button>See More</button>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- Product Slider --}}
<section>
  <div class="product-container" style="margin-top:0;">
    <div class="owl-carousel owl-theme" id="product-slider">
      @foreach($foodCategory as $category)
        <div class="item">
          <div class="card product-card">
            <img src="{{ asset($category->image) }}" style="width: 56px;" alt="{{ $category->name }}">
            <div class="card-body">
              <h5>{{ $category->name }}</h5>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@if($FeaturedFood->count() > 0)
<!-- Featured Items -->
<div class="container-width">
  <section>
    <div class="featured-header">
      <h1 class="title-shop">Featured Items</h1>
      <button class="view-all-btn">View All</button>
    </div>

    <div class="main bd-grid">
      @foreach($FeaturedFood as $food)
        <article class="card">
          <div class="card__img">
            <img src="{{ asset($food->image) }}" alt="{{ $food->name }}">
          </div>
          <div class="card__name">
            <p>{{ $food->name }}</p>
          </div>
          <div class="card__precis">
            <a href="#" class="card__icon"><ion-icon name="heart-outline"></ion-icon></a>
            @if($food->offerPrice)
              <div>
                <span class="card__preci card__preci--before">${{ $food->price }}</span>
                <span class="card__preci card__preci--now">${{ $food->offerPrice }}</span>
              </div>
            @else
              <div>
                <span class="card__preci card__preci--now">${{ $food->price }}</span>
              </div>
            @endif
            <a href="#" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
          </div>
        </article>
      @endforeach
    </div>
  </section>
</div>
@endif

<!-- Offers -->
<section>
  <div class="container-width">
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="card h-100" style="background-color:#C2F0C2">
          <img src="{{ asset('frontend/images/subscribe.png') }}" class="card-img-top" alt="Subscribe">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-3">
        <div class="card h-100" style="background-color:#F2E6E8">
          <img src="{{ asset('frontend/images/subscribe.png') }}" class="card-img-top" alt="Subscribe">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Popular Items -->
<section class="container-width">
  <div class="featured-header">
    <h1 class="title-shop">Popular Items</h1>
    <button class="view-all-btn">View All</button>
  </div>

  <div>
    <div class="row">
      <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#C2F0C2">
          <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
          <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
          </button>
        </div>
      </div>

      {{-- Repeat your popular items --}}
      {{-- ... --}}
    </div>
  </div>
</section>

@endsection
