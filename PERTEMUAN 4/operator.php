<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b ? "Benar" : "Salah";
$hasilTidakSama = $a != $b ? "Benar" : "Salah";
$hasilLebihKecil = $a < $b ? "Benar" : "Salah";
$hasilLebihBesar = $a > $b ? "Benar" : "Salah";
$hasilLebihKecilSama = $a <= $b ? "Benar" : "Salah";
$hasilLebihBesarSama = $a >= $b ? "Benar" : "Salah";

$hasilAnd = ($a && $b) ? "Benar" : "Salah";
$hasilOr = ($a || $b) ? "Benar" : "Salah";
$hasilNotA = (!$a) ? "Benar" : "Salah";
$hasilNotB = (!$b) ? "Benar" : "Salah";

$a = 10;
$hasilTambahSama = ($a += $b); 

$a = 10;
$hasilKurangSama = ($a -= $b); 

$a = 10;
$hasilKaliSama = ($a *= $b); 

$a = 10;
$hasilBagiSama = ($a /= $b); 

$a = 10;
$hasilModulusSama = ($a %= $b); 

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<h3>Hasil Operasi Aritmatika</h3>";
echo "Hasil Penjumlahan: $a + $b = $hasilTambah <br>";
echo "Hasil Pengurangan: $a - $b = $hasilKurang <br>";
echo "Hasil Perkalian: $a * $b = $hasilKali <br>";
echo "Hasil Pembagian: $a / $b = $hasilBagi <br>";
echo "Hasil Sisa Bagi: $a % $b = $sisaBagi <br>";
echo "Hasil Perpangkatan: $a ** $b = $pangkat <br>";
echo "<br>";

echo "<h3>Hasil Operasi Perbandingan</h3>";
echo "Apakah $a sama dengan $b? $hasilSama <br>";
echo "Apakah $a tidak sama dengan $b? $hasilTidakSama <br>";
echo "Apakah $a lebih kecil dari $b? $hasilLebihKecil <br>";
echo "Apakah $a lebih besar dari $b? $hasilLebihBesar <br>";
echo "Apakah $a lebih kecil sama dengan $b? $hasilLebihKecilSama <br>";
echo "Apakah $a lebih besar sama dengan $b? $hasilLebihBesarSama <br>";
echo "<br>";

echo "<h3>Hasil Operasi Logika</h3>";
echo "Apakah $a dan $b bernilai true? $hasilAnd<br>";
echo "Apakah $a atau $b bernilai true? $hasilOr<br>";
echo "Apakah $a bernilai false? $hasilNotA<br>";
echo "Apakah $b bernilai false? $hasilNotB<br>";

echo "<h3>Hasil Assignment Operator</h3>";
echo "Hasil a += b = $hasilTambahSama<br>";
echo "Hasil a -= b = $hasilKurangSama<br>";
echo "Hasil a *= b = $hasilKaliSama<br>";
echo "Hasil a /= b = $hasilBagiSama<br>";
echo "Hasil a %= b = $hasilModulusSama<br>";

echo "<h3>Hasil Identitas</h3>";
echo "Apakah $a identik dengan $b? " . ($hasilIdentik ? "Benar" : "Salah") . "<br>";
echo "Apakah $a tidak identik dengan $b? " . ($hasilTidakIdentik ? "Benar" : "Salah") . "<br>";
?>