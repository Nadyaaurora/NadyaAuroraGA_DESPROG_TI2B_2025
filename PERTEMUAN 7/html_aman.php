<!DOCTYPE html>
<html lang="id">
<head>
    <title>Hasil Input Aman</title>
</head>
<body>
    <h2>Hasil Input Aman</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        $email = $_POST['email'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

            echo "<h3>Hasil input yang sudah aman:</h3>";
            echo "<p>Teks: $input</p>";
            echo "<p>Email: $email</p>";
        } else {
            echo "<p>Email yang dimasukkan tidak valid!</p>";
        }
    } else {
        echo "<p>Tidak ada data yang dikirim!!</p>
        <p>Silakan isi form dulu di <a href='html_form.php'>halaman form</a>.</p>";
    }
    ?>
</body>
</html>
