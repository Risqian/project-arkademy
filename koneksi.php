<?php
    $host = "localhost"; //Host Database
    $username = "root"; //Username Database
    $password = ""; //Password Database
    $db = "profile";

    $koneksi = new mysqli($host, $username, $password, $db);  //Membuat koneksi ke server

    if ($koneksi->connect_error) {
        die("Koneksi ke database gagal");
    }
?>
