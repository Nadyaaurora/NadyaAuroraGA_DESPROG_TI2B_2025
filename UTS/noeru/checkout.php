<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="checkout-container">
  <h2>Checkout</h2>

  <!-- Form Checkout -->
  <form id="checkoutForm" action="success.php" method="post">
    <div class="form-group">
      <label for="name_user">Nama Pelanggan</label>
      <input type="text" id="name_user" name="name" required>
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea id="message" name="message" minlength="10" required></textarea>
    </div>

    <div id="cartContainer"></div>

    <!-- Ringkasan Pembayaran -->
    <div class="payment-summary">
      <h3>Ringkasan Pembayaran</h3>
      <table>
        <tr>
          <td>Harga</td>
          <td id="summaryPrice">-</td>
        </tr>
        <tr>
          <td>Jumlah</td>
          <td id="summaryQty">-</td>
        </tr>
        <tr>
          <td><strong>Total pembayaran</strong></td>
          <td><strong id="summaryTotal">-</strong></td>
        </tr>
      </table>
    </div>

    <input type="hidden" name="cart_data" id="cart_data">
    <input type="hidden" name="total" id="total">

    <div class="payment-method">
      <h3>Metode Pembayaran</h3>
      <label><input type="radio" name="pay" value="Transfer Bank" checked> Transfer Bank</label><br>
      <label><input type="radio" name="pay" value="Kartu Kredit / Debit"> Kartu Kredit / Debit</label><br>
      <label><input type="radio" name="pay" value="Cash On Delivery"> Cash On Delivery</label>
    </div>

    <button type="submit" class="order-btn">PESAN SEKARANG</button>
  </form>
</div>

<script src="script.js"></script>

<script>

document.getElementById("checkoutForm").addEventListener("submit", function(e) {
  const name = document.getElementById('name_user').value.trim();
  const message = document.getElementById('message').value.trim();

  if (!name || !message) {
    alert("Nama dan pesan wajib diisi!");
    e.preventDefault(); 
    return;
  }

  if (message.length < 10) {
    alert("Pesan minimal 10 karakter ya!");
    e.preventDefault();
    return;
  }
});
</script>

</body>
</html>