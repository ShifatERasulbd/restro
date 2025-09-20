 document.addEventListener("DOMContentLoaded", function () {
    const drawer = document.getElementById('drawer');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('closeDrawer');

    // Use event delegation instead of static querySelectorAll
    document.body.addEventListener('click', function(e) {
      if (e.target.closest('.add-to-cart-btn')) {
        drawer.classList.add('open');
        overlay.classList.add('active');
      }
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', () => {
        drawer.classList.remove('open');
        overlay.classList.remove('active');
      });
    }

    if (overlay) {
      overlay.addEventListener('click', () => {
        drawer.classList.remove('open');
        overlay.classList.remove('active');
      });
    }
  });