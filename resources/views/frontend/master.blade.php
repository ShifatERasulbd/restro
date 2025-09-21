<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fixed Responsive Slider</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/style_new.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('frontend/css/categoryItems.css') }}">
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
      <li class="menu-item">
        <a class="menu-cart-btn" style="position:relative;display:flex;align-items:center;cursor:pointer;">
          <i class="fa fa-shopping-cart" style="font-size:20px;margin-right:5px;"></i>
          <span>Cart</span>
          <span id="cart-count-badge" style="background:#C2F0C2;color:#333;border-radius:50%;padding:2px 8px;font-size:14px;position:absolute;top:-8px;right:-18px;min-width:24px;text-align:center;">0</span>
        </a>
      </li>
     
    </ul>
  </nav>
</header>

@yield('content')
<!-- Drawer -->
<div class="drawer" id="drawer">
  <button class="close-btn" id="closeDrawer">&times;</button>
  <h2>Shopping Cart</h2>
  <p>Your items will appear here...</p>
</div>
<!-- Overlay -->
<div class="overlay" id="overlay"></div>

<footer>
  <section style="background-color:#C2F0C2;margin-top:15px">
    <div class="container-width">
      <div class="row">
        <div class="col-md-4 mb-3" >
            <div class="footer-logo" style="margin-top: 25px;">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo">
                <h5>Subscribe to get Our Offers</h5>
                <input type="email" name="email" id="email" style="height:45px;    border-radius: 10px" placeholder="Enter your email">
                <button class="view-all-btn">Subscribe</button>

            </div>
        </div>

        <div class="col-md-4 mb-3" >
            <div class="footer-logo" style="margin-top: 25px;">
                
                <h5>Quick Links</h5>
                <ul class="no-marker">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>

            </div>
        </div>

         <div class="col-md-4 mb-3" >
            <div class="footer-logo" style="margin-top: 25px;">
                
                <h5>Find Us On</h5>
                <ul class="footer-list no-marker">
                  <li>
                    <a href="mailto:example@email.com">
                      <i class="fa-solid fa-envelope"></i> example@email.com
                    </a>
                  </li>
                  <li>
                    <a href="tel:+123456789">
                      <i class="fa-solid fa-phone"></i> +123 456 789
                    </a>
                  </li>
                </ul>
                    <div class="footer-social">
                <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
        </div>

    </div>
</section>
  <p>&copy; 2025 My Website</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="{{ asset('frontend/js/cart.js') }}"></script>
<script src="{{ asset('frontend/js/categoryItems.js') }}"></script>
</body>
</html>
