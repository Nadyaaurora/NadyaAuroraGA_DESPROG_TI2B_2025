<?php
include "koneksi.php"; 

mysqli_query($connect, 
    "CREATE TABLE IF NOT EXISTS user (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL
    )"
);

echo "Tabel user berhasil dibuat!";
?>

