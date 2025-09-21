 document.addEventListener("DOMContentLoaded", function () {
    const drawer = document.getElementById('drawer');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('closeDrawer');

    document.body.addEventListener('click', function(e) {
      if (e.target.closest('.add-to-cart-btn')) {
        if (drawer && overlay) {
          drawer.classList.add('open');
          overlay.classList.add('active');
        }
      }
    });

    if (closeBtn && drawer && overlay) {
      closeBtn.addEventListener('click', () => {
        drawer.classList.remove('open');
        overlay.classList.remove('active');
      });
    }

    if (overlay && drawer) {
      overlay.addEventListener('click', () => {
        drawer.classList.remove('open');
        overlay.classList.remove('active');
      });
    }
  });