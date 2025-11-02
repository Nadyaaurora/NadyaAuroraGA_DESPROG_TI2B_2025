<?php
if (isset($_FILES['images'])) {
    $totalFiles = count($_FILES['images']['name']);
    $allowedExtensions = array("jpg","jpeg","png","gif");
    $maxSize = 5 * 1024 * 1024; // 5 MB
    $targetDirectory = "images/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $fileTmp = $_FILES['images']['tmp_name'][$i];
        $fileSize = $_FILES['images']['size'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($fileExt, $allowedExtensions)) {
            echo "File $fileName bukan gambar yang diizinkan.<br>";
            continue;
        }

        if ($fileSize > $maxSize) {
            echo "File $fileName melebihi ukuran maksimal 5 MB.<br>";
            continue;
        }

        $targetFile = $targetDirectory . $fileName;

        if (move_uploaded_file($fileTmp, $targetFile)) {
            echo "Gambar $fileName berhasil diunggah.<br>";
            echo "<img src='$targetFile' style='max-width:200px; height:auto; margin-bottom:10px;'><br>";
        } else {
            echo "Gagal mengunggah gambar $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>
