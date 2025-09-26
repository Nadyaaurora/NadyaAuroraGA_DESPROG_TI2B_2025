<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;

$nilaiTertinggi = [96, 92]; 
$nilaiTerendah = [64, 70];  

echo "Daftar nilai siswa: ";
for ($i = 0; $i < count($nilaiSiswa); $i++) {
    echo $nilaiSiswa[$i];
    if ($i < count($nilaiSiswa) - 1) echo ", ";
}
echo "<br>";

echo "Nilai yang dihitung (setelah mengabaikan 2 nilai tertinggi dan 2 terendah): ";
for ($i = 0; $i < count($nilaiSiswa); $i++) {
    if ($nilaiSiswa[$i] == $nilaiTertinggi[0] || $nilaiSiswa[$i] == $nilaiTertinggi[1] ||
        $nilaiSiswa[$i] == $nilaiTerendah[0] || $nilaiSiswa[$i] == $nilaiTerendah[1]) {
        continue;
    }

    echo $nilaiSiswa[$i];
    $totalNilai += $nilaiSiswa[$i];

    if ($i < count($nilaiSiswa) - 1) echo ", ";
}
echo "<br>";

$rataRata = $totalNilai / 6; 
echo "Total nilai: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata <br>";
?>


