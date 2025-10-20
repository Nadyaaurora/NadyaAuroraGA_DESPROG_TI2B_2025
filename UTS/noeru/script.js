// Ambil data dari localStorage
function getCart() {
  return JSON.parse(localStorage.getItem("cart") || "[]");
}

function saveCart(cart) {
  localStorage.setItem("cart", JSON.stringify(cart));
  updateCartDisplay(cart);
}

// Update total di navbar dan checkout bar
function updateCartDisplay(cart) {
  let count = 0;
  let total = 0;
  cart.forEach(item => {
    count += item.qty;
    total += item.price * item.qty;
  });

  // Navbar
  const cartLink = document.querySelector(".cart-link");
  const totalSpan = document.querySelector(".cart-info .total");
  if (cartLink) cartLink.textContent = "🛒 Cart: " + count;
  if (totalSpan) totalSpan.textContent = "Rp" + total.toLocaleString("id-ID");

  // Checkout bar (shop.php)
  const totalPriceEl = document.getElementById("totalPrice");
  if (totalPriceEl) totalPriceEl.textContent = "Rp" + total.toLocaleString("id-ID");
}

// Fungsi untuk ubah harga saat pilih size
function changeSize(productId, button) {
  const price = button.getAttribute("data-price");
  const priceElement = document.getElementById("price" + productId);
  if (priceElement) {
    priceElement.textContent = parseInt(price).toLocaleString("id-ID");
  }

  const buttons = button.parentNode.querySelectorAll(".size-btn");
  buttons.forEach(btn => btn.classList.remove("active"));
  button.classList.add("active");
}

// Tambah produk ke cart
function addToCart(button) {
  const productCard = button.closest(".product-card");
  const name = productCard.querySelector("h3").textContent;
  const activeSize = productCard.querySelector(".size-btn.active");
  const size = activeSize ? activeSize.textContent : "Small";
  const price = parseInt(activeSize.getAttribute("data-price"));
  const qtyInput = productCard.querySelector("input[type='number']");
  const qty = parseInt(qtyInput.value);

  let cart = getCart();
  const existing = cart.find(item => item.name === name && item.size === size);
  if (existing) {
    existing.qty += qty;
  } else {
    cart.push({ name, size, price, qty });
  }

  saveCart(cart);
  alert(`${name} (${size}) ditambahkan ke keranjang!`);
}

// Reset cart (digunakan di success.php)
function resetCart() {
  localStorage.removeItem("cart");
  updateCartDisplay([]);
}

// Tampilkan keranjang & ringkasan pembayaran di checkout.php
function renderCheckout() {
  const cart = getCart();
  const container = document.getElementById("cartContainer");
  if (!container) return; // Stop jika bukan di checkout.php

  container.innerHTML = "";

  if (cart.length === 0) {
    container.innerHTML = "<p style='text-align:center;'>Keranjang kamu masih kosong!</p>";
    const orderBtn = document.querySelector(".order-btn");
    if (orderBtn) orderBtn.style.display = 'none';
    return;
  }

  let totalQty = 0;
  let unitPrice = 0;
  let totalAll = 0;

  cart.forEach(item => {
    const imgName = item.name.toLowerCase().replace(/[^a-z0-9 ]/g, '').replace(/ /g, '_');
    const subtotal = item.price * item.qty;
    totalQty += item.qty;
    unitPrice = item.price;
    totalAll += subtotal;

    container.innerHTML += `
      <div class="order-item">
        <img src="img/${imgName}.jpg" alt="${item.name}" style="width:100px; height:100px; object-fit:cover; border-radius:10px;">
        <div class="order-info">
          <h3>${item.name} (${item.size})</h3>
          <p>Harga: Rp${item.price.toLocaleString("id-ID")}</p>
          <p>Qty: ${item.qty}</p>
          <p><strong>Subtotal: Rp${subtotal.toLocaleString("id-ID")}</strong></p>
        </div>
      </div>
      <hr>
    `;
  });

  const summaryPrice = document.getElementById("summaryPrice");
  const summaryQty = document.getElementById("summaryQty");
  const summaryTotal = document.getElementById("summaryTotal");

  if (summaryPrice) summaryPrice.textContent = "Rp" + unitPrice.toLocaleString("id-ID");
  if (summaryQty) summaryQty.textContent = totalQty;
  if (summaryTotal) summaryTotal.textContent = "Rp" + totalAll.toLocaleString("id-ID");

  const cartDataInput = document.getElementById("cart_data");
  const totalInput = document.getElementById("total");
  if (cartDataInput) cartDataInput.value = JSON.stringify(cart);
  if (totalInput) totalInput.value = totalAll;
}

window.onload = () => {
  const cart = getCart();
  updateCartDisplay(cart);
  renderCheckout(); 
};
