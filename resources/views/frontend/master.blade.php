<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fixed Responsive Slider</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
 
</head>
<body>

<header>
  <a href="/" class="logo">My Website</a>
  <button id="nav-toggle" class="nav-toggle">&#9776;</button>
  <nav id="nav" class="nav-collapse">
    <ul>
      <li class="menu-item active"><a href="#home">Home</a></li>
      <li class="menu-item"><a href="#about">About</a></li>
      <li class="menu-item"><a href="#projects">Projects</a></li>
      <li class="menu-item"><a href="#blog">Blog</a></li>
    </ul>
  </nav>
</header>

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
<footer>
  <p>&copy; 2025 My Website</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
