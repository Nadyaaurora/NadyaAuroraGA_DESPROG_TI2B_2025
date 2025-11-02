<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.<br>";

            // LANGKAH 5: Membuat thumbnail
            $thumbnailWidth = 200;
            list($width, $height) = getimagesize($targetFile);
            $ratio = $width / $thumbnailWidth;
            $thumbnailHeight = $thumbnailWidth * $ratio;

            // Buat resource gambar asli
            switch ($fileType) {
                case "jpg":
                case "jpeg":
                    $srcImage = imagecreatefromjpeg($targetFile);
                    break;
                case "png":
                    $srcImage = imagecreatefrompng($targetFile);
                    break;
                case "gif":
                    $srcImage = imagecreatefromgif($targetFile);
                    break;
            }

            // Buat resource untuk thumbnail
            $thumbImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);

            // Resize gambar asli ke thumbnail
            imagecopyresampled($thumbImage, $srcImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);

            // Simpan thumbnail ke folder uploads
            $thumbnailFile = $targetDirectory . "thumb_" . basename($_FILES["fileToUpload"]["name"]);

            switch ($fileType) {
                case "jpg":
                case "jpeg":
                    imagejpeg($thumbImage, $thumbnailFile);
                    break;
                case "png":
                    imagepng($thumbImage, $thumbnailFile);
                    break;
                case "gif":
                    imagegif($thumbImage, $thumbnailFile);
                    break;
            }

            imagedestroy($srcImage);
            imagedestroy($thumbImage);

            echo "Thumbnail berhasil dibuat: <a href='{$thumbnailFile}'>{$thumbnailFile}</a>";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
