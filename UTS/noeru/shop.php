<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noéru - Shop</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'navbar.php'; ?>

  <div class="shop-container">
    <!-- PRODUCT 1 -->
    <div class="product-card">
      <img src="img/matcha_latte.jpg" alt="Matcha Latte">
      <div class="product-info">
        <h3>Matcha Latte</h3>
        <div class="stars">⭐ ⭐ ⭐ ⭐ ☆ <span>4.5 | 108rb+ terjual</span></div>
        <p class="price">Rp<span id="price1">22.000-27.000</span></p>

        <p>Size:</p>
        <button class="size-btn active" data-price="22000" onclick="changeSize(1, this)">Small</button>
        <button class="size-btn" data-price="25000" onclick="changeSize(1, this)">Medium</button>
        <button class="size-btn" data-price="27000" onclick="changeSize(1, this)">Large</button>

        <div class="qty">
          <label>Qty:</label>
          <input type="number" value="1" min="1" id="qty1">
        </div>

        <button class="add-to-cart" onclick="addToCart(this)">🛒 Tambahkan ke Keranjang</button>
      </div>
    </div>

    <!-- PRODUCT 2 -->
    <div class="product-card">
      <img src="img/matcha_espresso.jpg" alt="Matcha Espresso">
      <div class="product-info">
        <h3>Matcha Espresso</h3>
        <div class="stars">⭐ ⭐ ⭐ ⭐ ☆ <span>4.4 | 97rb+ terjual</span></div>
        <p class="price">Rp<span id="price2">23.000-28.000</span></p>

        <p>Size:</p>
        <button class="size-btn active" data-price="23000" onclick="changeSize(2, this)">Small</button>
        <button class="size-btn" data-price="26000" onclick="changeSize(2, this)">Medium</button>
        <button class="size-btn" data-price="28000" onclick="changeSize(2, this)">Large</button>

        <div class="qty">
          <label>Qty:</label>
          <input type="number" value="1" min="1" id="qty2">
        </div>

        <button class="add-to-cart" onclick="addToCart(this)">🛒 Tambahkan ke Keranjang</button>
      </div>
    </div>

    <!-- PRODUCT 3 -->
    <div class="product-card">
      <img src="img/matcha_foam.jpg" alt="Matcha Milk Foam">
      <div class="product-info">
        <h3>Matcha Milk Foam</h3>
        <div class="stars">⭐ ⭐ ⭐ ⭐ ☆ <span>4.6 | 200rb+ terjual</span></div>
        <p class="price">Rp<span id="price3">23.000-30.000</span></p>

        <p>Size:</p>
        <button class="size-btn active" data-price="23000" onclick="changeSize(3, this)">Small</button>
        <button class="size-btn" data-price="27000" onclick="changeSize(3, this)">Medium</button>
        <button class="size-btn" data-price="30000" onclick="changeSize(3, this)">Large</button>

        <div class="qty">
          <label>Qty:</label>
          <input type="number" value="1" min="1" id="qty3">
        </div>

        <button class="add-to-cart" onclick="addToCart(this)">🛒 Tambahkan ke Keranjang</button>
      </div>
    </div>

    <!-- PRODUCT 4 -->
    <div class="product-card">
      <img src="img/matcha_lemonade.jpg" alt="Matcha Lemonade">
      <div class="product-info">
        <h3>Matcha Lemonade</h3>
        <div class="stars">⭐ ⭐ ⭐ ⭐ ☆ <span>4.5 | 50rb+ terjual</span></div>
        <p class="price">Rp<span id="price4">22.000-25.000</span></p>

        <p>Size:</p>
        <button class="size-btn active" data-price="22000" onclick="changeSize(4, this)">Small</button>
        <button class="size-btn" data-price="23000" onclick="changeSize(4, this)">Medium</button>
        <button class="size-btn" data-price="25000" onclick="changeSize(4, this)">Large</button>

        <div class="qty">
          <label>Qty:</label>
          <input type="number" value="1" min="1" id="qty4">
        </div>

        <button class="add-to-cart" onclick="addToCart(this)">🛒 Tambahkan ke Keranjang</button>
      </div>
    </div>
  </div>

  <!-- === CHECKOUT BAR === -->
  <div class="checkout-bar">
    <div class="checkout-total">
      <p>Total: <span id="totalPrice">Rp0</span></p>
    </div>
    <a href="checkout.php" class="checkout-btn">CHECKOUT</a>
  </div>

  <script src="script.js"></script>
</body>
</html>