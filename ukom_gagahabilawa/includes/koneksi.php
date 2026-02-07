<?php

$SERVER    = "localhost";
$user       = "root";
$password   = "";
$database   = "db_aspirasi_ukom26";

$koneksi = mysqli_connect($SERVER, $user, $password, $database) or die("Gagal terhubung dengan server");

$db     = mysqli_select_db($koneksi, $database) or die("Database tidak ditemukan");
