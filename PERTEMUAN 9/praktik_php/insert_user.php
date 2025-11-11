<?php
include "koneksi.php"; 
mysqli_query($connect, 
    "INSERT INTO user (username, password)
    VALUES ('admin', MD5('admin123'))"
);

echo "Data berhasil dimasukkan ke tabel user.";
?>
