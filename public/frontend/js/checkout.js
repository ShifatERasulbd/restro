   

    document.addEventListener("DOMContentLoaded", function () {
        // Utility: Get cart from localStorage
        function getCart() {
            return JSON.parse(localStorage.getItem('cart') || '[]');
        }

        // Render cart items for checkout
        function renderCheckoutCart() {
            const cart = getCart();
            const container = document.getElementById('checkout-cart-items');
            if (!container) return;

            let html = '<h4>Your Order</h4>';
            let total = 0;
            if (cart.length === 0) {
                html += '<p>No items in cart.</p>';
            } else {
                html += `
                    <table style="width:100%; border-collapse: collapse; margin-bottom: 20px;">
                        <thead>
                            <tr style="background: #e9ecef; border-bottom: 1px solid #dee2e6;">
                                <th style="padding: 8px; text-align: left; font-weight: bold;">Item</th>
                                <th style="padding: 8px; text-align: center; font-weight: bold;">Price</th>
                                <th style="padding: 8px; text-align: center; font-weight: bold;">Qty</th>
                                <th style="padding: 8px; text-align: center; font-weight: bold;">Subtotal</th>
                                <th style="padding: 8px; text-align: center; font-weight: bold;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                `;
                cart.forEach((item, index) => {
                    const itemTotal = item.qty * parseFloat(item.price);
                    total += itemTotal;
                    html += `
                        <tr style="border-bottom: 1px solid #dee2e6;">
                            <td style="padding: 8px; vertical-align: middle;">
                                <img src="${item.image}" alt="${item.name}" style="width:40px;height:40px;object-fit:cover;border-radius:5px;margin-right:8px;">
                                <span>${item.name}</span>
                            </td>
                            <td style="padding: 8px; text-align: center; vertical-align: middle;">$${item.price}</td>
                            <td style="padding: 8px; text-align: center; vertical-align: middle;">
                                <button class="qty-btn qty-minus" data-index="${index}">-</button>
                                <span class="qty-display">${item.qty}</span>
                                <button class="qty-btn qty-plus" data-index="${index}">+</button>
                            </td>
                            <td style="padding: 8px; text-align: center; vertical-align: middle; font-weight: bold;">$${itemTotal.toFixed(2)}</td>
                            <td style="padding: 8px; text-align: center; vertical-align: middle;">
                                <button class="delete-btn" data-index="${index}"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    `;
                });
                html += `
                        </tbody>
                    </table>
                `;
                html += `<div style="font-weight:bold;font-size:18px;text-align:right;">Total: $${total.toFixed(2)}</div>`;
            }
            container.innerHTML = html;
        }

        // Function to update quantity
        function updateQuantity(index, change) {
            const cart = getCart();
            if (cart[index]) {
                cart[index].qty += change;
                if (cart[index].qty <= 0) {
                    cart.splice(index, 1); // Remove item if qty <= 0
                }
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCheckoutCart();
            }
        }

        // Function to delete item
        function deleteItem(index) {
            const cart = getCart();
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            renderCheckoutCart();
        }

        // Event delegation for qty and delete buttons
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('qty-plus')) {
                const index = parseInt(e.target.dataset.index);
                updateQuantity(index, 1);
            } else if (e.target.classList.contains('qty-minus')) {
                const index = parseInt(e.target.dataset.index);
                updateQuantity(index, -1);
            } else if (e.target.classList.contains('delete-btn') || e.target.closest('.delete-btn')) {
                const index = parseInt(e.target.dataset.index || e.target.closest('.delete-btn').dataset.index);
                deleteItem(index);
            }
        });

        // Handle form submission
        document.getElementById('checkout-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const cart = getCart();
            if (cart.length === 0) {
                alert('Your cart is empty. Please add items before placing an order.');
                return;
            }

            const formData = new FormData(this);
            formData.append('cart', JSON.stringify(cart));

            // Get CSRF token
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

            fetch('/order', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    // Clear cart
                    localStorage.removeItem('cart');
                    renderCheckoutCart();
                    // Optionally redirect to home or order confirmation page
                    // window.location.href = '/';
                } else {
                    if (data.errors) {
                        let errorMsg = 'Please fix the following errors:\n';
                        for (let field in data.errors) {
                            errorMsg += `${field}: ${data.errors[field].join(', ')}\n`;
                        }
                        alert(errorMsg);
                    } else {
                        alert(data.message || 'An error occurred.');
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while placing the order. Please try again.');
            });
        });

        // Initial render
        renderCheckoutCart();
    });
