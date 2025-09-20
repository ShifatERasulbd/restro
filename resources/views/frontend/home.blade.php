@extends('frontend.master')
@section('content')
{{-- Main Slider --}}
<section>
  <div class="container">
    <div class="slide">
        @foreach($slider as $slider)
      <div class="item" style="background-image: url('{{asset($slider->image)}}');">
        <div class="content">
          <div class="name">{{ $slider -> title }}</div>
          <div class="des">{{ $slider->subTitle }}</div>
          <button>See More</button>
        </div>
      </div>
      @endforeach
    </div>

    <!-- <div class="button">
      <button class="prev">◁</button>
      <button class="next">▷</button>
    </div> -->
  </div>
</section>

{{-- Product Slider --}}
<section>
  <div class="product-container" style="margin-top:0;">
    <div class="owl-carousel owl-theme" id="product-slider">
  @foreach($foodCategory as $foodCategory)
      <div class="item">
        <div class="card product-card">
          <img src="{{ asset($foodCategory->image) }}" style="width: 56px;" alt="Product 1">
          <div class="card-body">
            <h5>{{$foodCategory->name}}</h5>
          </div>
        </div>
      </div>
    @endforeach

      <div class="item">
        <div class="card product-card">
          <img src="{{ asset('frontend/images/beef_entrees-thumb.png') }}" style="width: 56px;" alt="Product 2">
          <div class="card-body">
            <h5>Beef Entrees</h5>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card product-card">
          <img src="{{ asset('frontend/images/flame_grill_burgers-thumb.png') }}" style="width: 56px;" alt="Product 3">
          <div class="card-body">
            <h5>Burgers</h5>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card product-card">
          <img src="{{ asset('frontend/images/hot_chicken_entrees-thumb.png') }}" style="width: 56px;" alt="Product 4">
          <div class="card-body">
            <h5>Chicken Entrees</h5>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card product-card">
          <img src="{{ asset('frontend/images/house_special_salads-thumb.png') }}" style="width: 56px;" alt="Product 5">
          <div class="card-body">
            <h5>Salads</h5>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card product-card">
          <img src="{{ asset('frontend/images/sandwich_from_the_grill-thumb.png') }}" style="width: 56px;" alt="Product 6">
          <div class="card-body">
            <h5>Sandwiches</h5>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card product-card">
          <img src="{{ asset('frontend/images/seafood_entrees-thumb.png') }}" style="width: 56px;" alt="Product 7">
          <div class="card-body">
            <h5>Seafood</h5>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- featured Items -->
 <div class="container-width">
<section>
     <div class="featured-header">
          <h1 class="title-shop">Featured Items</h1>
          <button class="view-all-btn">View All</button>
    </div>
<div class="main bd-grid">
            <article class="card">
                <div class="card__img">
                    <img src="https://i.postimg.cc/8PkwdTYd/image.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

         
            <article class="card">
                <div class="card__img">
                    <img src="https://i.postimg.cc/4dBHXR1Z/image.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="https://i.postimg.cc/DfRL0nTy/image.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

               <article class="card">
                <div class="card__img">
                    <img src="https://i.postimg.cc/DfRL0nTy/image.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>
               <article class="card">
                <div class="card__img">
                    <img src="https://i.postimg.cc/DfRL0nTy/image.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

               <article class="card">
                <div class="card__img">
                    <img src="https://i.postimg.cc/DfRL0nTy/image.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

               <article class="card">
                <div class="card__img">
                    <img src="https://i.postimg.cc/DfRL0nTy/image.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="https://i.postimg.cc/DfRL0nTy/image.png" alt="">
                </div>
                <div class="card__name">
                    <p>AIR ZOOM PEGASUS</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">$990.00</span>
                        <span class="card__preci card__preci--now">$749.00</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="cart-outline"></ion-icon></a>
                </div>
            </article>
  </div>
</section>
  </div>
<!-- offers -->
<section>
  <div class="container-width">
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="card h-100" style="background-color:#C2F0C2">
          <img src="{{ asset('frontend/images/subscribe.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-3">
        <div class="card h-100" style="background-color:#F2E6E8">
          <img src="{{ asset('frontend/images/subscribe.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container-width">
  <div class="featured-header">
          <h1 class="title-shop">Popular Items</h1>
          <button class="view-all-btn">View All</button>
    </div>
  <div >
    <div class="row">
      <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#C2F0C2">
          <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
          <!-- Add to Cart Button -->
            <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
            </button>
        </div>
      </div>

     <div class="col-md-3 mb-3">
        <div class="card h-100 position-relative" style="background-color:#F2E6E8">
            <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
            </div>

            <!-- Add to Cart Button -->
            <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
            </button>
        </div>
        </div>

        <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#F2E6E8">
          <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
          <!-- Add to Cart Button -->
            <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
            </button>
        </div>
      </div>

        <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#F2E6E8">
          <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
          <!-- Add to Cart Button -->
            <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
            </button>
        </div>
      </div>

        <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#F2E6E8">
          <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
          <!-- Add to Cart Button -->
            <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
            </button>
        </div>
      </div>

        <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#F2E6E8">
          <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
          <!-- Add to Cart Button -->
            <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
            </button>
        </div>
      </div>

        <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#F2E6E8">
          <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
          <!-- Add to Cart Button -->
            <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
            </button>
        </div>
      </div>

        <div class="col-md-3 mb-3">
        <div class="card h-100" style="background-color:#F2E6E8">
          <img src="https://i.postimg.cc/8PkwdTYd/image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Subscribe to our newsletter</h5>
            <p class="card-text">Get the latest updates on new products and upcoming sales</p>
          </div>
          <!-- Add to Cart Button -->
            <button class="add-to-cart-btn">
            <i class="fa-solid fa-cart-plus"></i> Add
            </button>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection