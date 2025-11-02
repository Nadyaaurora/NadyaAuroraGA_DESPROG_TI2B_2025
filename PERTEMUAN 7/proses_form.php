<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($nama) || empty($email) || empty($password)) {
    echo "Semua field harus diisi.";
} elseif (strlen($password) < 8) {
    echo "Password terlalu pendek! Minimal 8 karakter.";
} else {
    echo "Data berhasil dikirim!<br>Nama: $nama<br>Email: $email";
}
?>