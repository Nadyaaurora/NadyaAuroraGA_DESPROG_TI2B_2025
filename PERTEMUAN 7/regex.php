<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Contoh Regular Expression</title>
</head>
<body>
    <h3>Contoh Pencocokan Pola (Regular Expression)</h3>

    <?php
    $pattern = '/[a-z]/'; // Cocokkan huruf kecil.
    $text = 'This is a Sample Text.';

    echo "<p>1. Pencarian huruf kecil</p>";
    echo "<p>Teks: $text</p>";

    if (preg_match($pattern, $text)) {
        echo "<p><strong>Hasil:</strong> Huruf kecil ditemukan!</p>";
    } else {
        echo "<p><strong>Hasil:</strong> Tidak ada huruf kecil!</p>";
    }


    $pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
    $text = 'There are 123 apples.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    echo "<br><br>";
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; // Output: "I like banana pie."

    echo "<br><br>";

    $pattern = '/go{1,2}d/';
    $text = "god is good.";
    if (preg_match_all($pattern, $text, $matches)) {
        echo "<p>Cocokkan: " . implode(", ", $matches[0]) . "</p>";
    } else {
        echo "<p>Tidak ada yang cocok!</p>";
    }
    ?>
</body>
</html>

