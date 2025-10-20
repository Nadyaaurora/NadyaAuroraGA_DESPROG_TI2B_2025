<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  echo "<!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='refresh' content='2;url=index.php'>
    <title>Feedback Submitted</title>
    <script>
      alert('Terima kasih atas feedback Anda, $name!');
      window.location.href='index.php';
    </script>
  </head>
  <body></body>
  </html>";
  exit;
}
?>
