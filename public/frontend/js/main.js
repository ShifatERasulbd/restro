$(document).ready(function() {
  // Product Slider
  $('#product-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive:{
      0:{ items:3 },      // Mobile view (width < 768px): 3 items
      768:{ items:6 }     // Desktop view (width >= 768px): 6 items
    },
   
  });

  // Main Slider next/prev
  const slideContainer = document.querySelector('.slide');
  let items = document.querySelectorAll('.slide .item');

  const nextSlide = () => {
    if (slideContainer && items.length > 0) {
      slideContainer.appendChild(items[0]);
      items = document.querySelectorAll('.slide .item');
    }
  };

  const prevSlide = () => {
    if (slideContainer && items.length > 0) {
      slideContainer.prepend(items[items.length - 1]);
      items = document.querySelectorAll('.slide .item');
    }
  };

  const nextBtn = document.querySelector('.next');
  const prevBtn = document.querySelector('.prev');
  if (nextBtn) {
    nextBtn.addEventListener('click', nextSlide);
  }
  if (prevBtn) {
    prevBtn.addEventListener('click', prevSlide);
  }

  // Auto-slide for main slider
  let autoSlide = null;
  if (slideContainer && items.length > 0) {
    autoSlide = setInterval(nextSlide, 3000); // Auto slide every 3 seconds
  }


  // Nav toggle
  const navToggle = document.getElementById("nav-toggle");
  const nav = document.getElementById("nav");
  navToggle.addEventListener("click", () => {
    nav.classList.toggle("opened");
    navToggle.innerHTML = nav.classList.contains("opened") ? "✖" : "&#9776;";
  });
});
