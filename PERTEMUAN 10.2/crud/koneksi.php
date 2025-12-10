<?php
    $koneksi = pg_connect("host=localhost port=5432 dbname=prakwebdb user=postgres password=Nadyaaurora02");

    if (!$koneksi) {
        die("Koneksi database gaagl: " . pg_last_error());
    }
?>