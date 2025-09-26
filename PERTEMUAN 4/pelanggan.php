<?php
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 20; 
}

$hargaDiskon = $hargaProduk * ($diskon / 100);
$hargaBayar = $hargaProduk - $hargaDiskon;

echo "Harga produk: Rp $hargaProduk <br>";
echo "Diskon: $diskon% <br>";
echo "Harga yang harus dibayar: Rp $hargaBayar <br>";
?>
