@extends('frontend.master')
@section('content')
{{-- Main Slider --}}
<section>
  <div class="container">
    <div class="slide">
      <div class="item" style="background-image: url('https://images.unsplash.com/photo-1478760329108-5c3ed9d495a0?q=80&w=1074&auto=format&fit=crop');">
        <div class="content">
          <div class="name">Scotland</div>
          <div class="des">Experience the mystical Highlands under twilight skies and misty lochs.</div>
          <button>See More</button>
        </div>
      </div>
      <div class="item" style="background-image: url('https://images.unsplash.com/photo-1439792675105-701e6a4ab6f0?q=80&w=1173&auto=format&fit=crop');">
        <div class="content">
          <div class="name">Norway</div>
          <div class="des">Chase the Northern Lights under star-lit skies along scenic fjord roads.</div>
          <button>See More</button>
        </div>
      </div>
      <div class="item" style="background-image: url('https://images.unsplash.com/photo-1483982258113-b72862e6cff6?q=80&w=1170&auto=format&fit=crop');">
        <div class="content">
          <div class="name">New Zealand</div>
          <div class="des">Wander dramatic, mist-laden mountain paths that feel straight out of a dream.</div>
          <button>See More</button>
        </div>
      </div>
      <div class="item" style="background-image: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?q=80&w=2070&auto=format&fit=crop');">
        <div class="content">
          <div class="name">Japan</div>
          <div class="des">Discover serene mountain temples shrouded in dusk and ancient forest trails.</div>
          <button>See More</button>
        </div>
      </div>
    </div>

    <div class="button">
      <button class="prev">◁</button>
      <button class="next">▷</button>
    </div>
  </div>
</section>

{{-- Product Slider --}}
<section>
  <div class="product-container" style="margin-top:0;">
    <div class="owl-carousel owl-theme" id="product-slider">

      <div class="item">
        <div class="card product-card">
          <img src="{{ asset('frontend/images/appetizers-thumb.png') }}" style="width: 56px;" alt="Product 1">
          <div class="card-body">
            <h5>Appetizers</h5>
          </div>
        </div>
      </div>

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