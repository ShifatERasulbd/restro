 document.addEventListener("DOMContentLoaded", function () {
    const drawer = document.getElementById('drawer');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('closeDrawer');

    // Utility: Get cart from localStorage
    function getCart() {
      return JSON.parse(localStorage.getItem('cart') || '[]');
    }

    // Utility: Save cart to localStorage
    function saveCart(cart) {
      localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Render cart items in drawer
    function renderCart() {
      const cart = getCart();
      // Update cart count badge in nav
      const cartCountBadge = document.getElementById('cart-count-badge');
      if (cartCountBadge) {
        let count = 0;
        cart.forEach(item => { count += item.qty; });
        cartCountBadge.textContent = count;
      }
      if (!drawer) return;
      let html = '<h2>Shopping Cart</h2>';
      let total = 0;
      if (cart.length === 0) {
        html += '<p>Your items will appear here...</p>';
      } else {
        html += `
          <table style="width:100%; border-collapse: collapse; margin-bottom: 20px;">
            <thead>
              <tr style="background: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                <th style="padding: 12px; text-align: left; font-weight: bold;">Item</th>
                <th style="padding: 12px; text-align: center; font-weight: bold;">Price</th>
                <th style="padding: 12px; text-align: center; font-weight: bold;">Quantity</th>
                <th style="padding: 12px; text-align: center; font-weight: bold;">Subtotal</th>
                <th style="padding: 12px; text-align: center; font-weight: bold;">Actions</th>
              </tr>
            </thead>
            <tbody>
        `;
        cart.forEach(item => {
          const itemTotal = item.qty * parseFloat(item.price);
          total += itemTotal;
          html += `
            <tr style="border-bottom: 1px solid #dee2e6;">
              <td style="padding: 12px; vertical-align: middle;">
                <img src="${item.image}" alt="${item.name}" style="width:50px;height:50px;object-fit:cover;border-radius:5px;margin-right:10px;">
                <span>${item.name}</span>
              </td>
              <td style="padding: 12px; text-align: center; vertical-align: middle;">$${item.price}</td>
              <td style="padding: 12px; text-align: center; vertical-align: middle;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                  <button class="cart-qty-btn" data-id="${item.id}" data-action="decrease" style="background:#eee;border:none;font-size:16px;padding:5px 10px;border-radius:4px;">-</button>
                  <span class="cart-qty-value" style="min-width:30px;display:inline-block;text-align:center;font-weight:bold;">${item.qty}</span>
                  <button class="cart-qty-btn" data-id="${item.id}" data-action="increase" style="background:#eee;border:none;font-size:16px;padding:5px 10px;border-radius:4px;">+</button>
                </div>
              </td>
              <td style="padding: 12px; text-align: center; vertical-align: middle; font-weight: bold;">$${itemTotal.toFixed(2)}</td>
              <td style="padding: 12px; text-align: center; vertical-align: middle;">
                <button class="remove-cart-item" data-id="${item.id}" style="background:none;border:none;color:red;font-size:18px;cursor:pointer;" title="Remove"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
          `;
        });
        html += `
            </tbody>
          </table>
        `;
        html += `<div style="width:100%;position:sticky;bottom:0;z-index:2;background:#fff;padding-bottom:10px;">
          <div style="font-weight:bold;font-size:18px;text-align:right;margin-bottom:10px;">Total: $${total.toFixed(2)}</div>
          <button class="checkout-btn" style="width:100%;padding:10px 0;background:#C2F0C2;color:#333;border:none;border-radius:5px;font-size:18px;cursor:pointer;">Checkout</button>
        </div>`;
      }
      drawer.innerHTML = `<button class=\"close-btn\" id=\"closeDrawer\">&times;</button>` + html;
    }

    // Add to cart handler
    document.body.addEventListener('click', function(e) {
    // Cart drawer close button handler
    if (e.target.classList.contains('close-btn') || e.target.closest('.close-btn')) {
      if (drawer && overlay) {
        drawer.classList.remove('open');
        overlay.classList.remove('active');
      }
      return;
    }
    // Quantity change handler (+/- buttons)
    if (e.target.classList.contains('cart-qty-btn')) {
      const btn = e.target;
      const id = btn.getAttribute('data-id');
      const action = btn.getAttribute('data-action');
      let cart = getCart();
      const item = cart.find(i => i.id === id);
      if (item) {
        if (action === 'increase') {
          item.qty += 1;
        } else if (action === 'decrease' && item.qty > 1) {
          item.qty -= 1;
        }
        saveCart(cart);
        renderCart();
      }
      return;
    }
    // Remove cart item handler
    if (e.target.classList.contains('remove-cart-item') || (e.target.closest('.remove-cart-item'))) {
      const btn = e.target.classList.contains('remove-cart-item') ? e.target : e.target.closest('.remove-cart-item');
      const id = btn.getAttribute('data-id');
      let cart = getCart();
      cart = cart.filter(item => item.id !== id);
      saveCart(cart);
      renderCart();
      return;
    }
      // Product add-to-cart button
      const addBtn = e.target.closest('.add-to-cart-btn');
      if (addBtn && addBtn.hasAttribute('data-id')) {
        if (drawer && overlay) {
          drawer.classList.add('open');
          overlay.classList.add('active');
        }
        // Get product info from data attributes
        const id = addBtn.getAttribute('data-id');
        const name = addBtn.getAttribute('data-name');
        const price = addBtn.getAttribute('data-price');
        const image = addBtn.getAttribute('data-image');
        const qtyInput = document.getElementById('quantity');
        const qty = qtyInput ? parseInt(qtyInput.value) || 1 : 1;
        if (id && name && price && image) {
          let cart = getCart();
          // Check if item already in cart
          const existing = cart.find(item => item.id === id);
          if (existing) {
            existing.qty += qty;
          } else {
            cart.push({ id, name, price, image, qty: qty });
          }
          saveCart(cart);
          renderCart();
        }
        return;
      }
      // Main menu cart button just opens drawer
      const menuCartBtn = e.target.closest('.menu-cart-btn');
      if (menuCartBtn) {
        if (drawer && overlay) {
          drawer.classList.add('open');
          overlay.classList.add('active');
        }
        return;
      }
    });

    // Initial render
    renderCart();

    if (overlay && drawer) {
      overlay.addEventListener('click', () => {
        drawer.classList.remove('open');
        overlay.classList.remove('active');
      });
    }
  });