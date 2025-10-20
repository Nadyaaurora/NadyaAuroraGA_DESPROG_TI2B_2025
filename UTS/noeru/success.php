<?php
session_start();
$name = $_POST['name'] ?? '';
$cartData = isset($_POST['cart_data']) ? json_decode($_POST['cart_data'], true) : [];
$total = $_POST['total'] ?? 0;
$payment = $_POST['pay'] ?? 'Transfer Bank';

unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pesanan Berhasil</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script> 
</head>
<body class="success-page">
  <div class="checkmark">
    <div class="circle"></div>
    <div class="tick">✔</div>
  </div>
  <h2>Pesanan Berhasil!</h2>

  <div class="details">
    <p><strong>Nama:</strong> <?php echo htmlspecialchars($name); ?></p>
    <?php if (!empty($cartData)) : ?>
      <?php foreach ($cartData as $item): ?>
        <p><strong><?php echo htmlspecialchars($item['name']); ?></strong> (<?php echo htmlspecialchars($item['size']); ?>)</p>
        <p>Qty: <?php echo $item['qty']; ?> × Rp<?php echo number_format($item['price'], 0, ',', '.'); ?></p>
        <hr>
      <?php endforeach; ?>
      <p><strong>Total Pembayaran:</strong> Rp<?php echo number_format($total, 0, ',', '.'); ?></p>
      <p><strong>Metode Pembayaran:</strong> <?php echo htmlspecialchars($payment); ?></p>
    <?php else : ?>
      <p>Tidak ada data pesanan.</p>
    <?php endif; ?>
  </div>

  <script>
    $(".tick").hide().fadeIn(800);

    resetCart();
  </script>
</body>
</html>
