<?php
    // hubungin ke env untuk ngambil variabel 
    $env = parse_ini_file(__DIR__ . '/../.env');

    //Set up database
    $host = $env['DB_HOST'];
    $username = $env['DB_USER'];
    $pass = $env['DB_PASS'];
    $db_name = $env['DB_NAME'];
    
    //Buat Koneksi ke sql
    $koneksi = mysqli_connect($host, $username, $pass, $db_name);

    //Check jika error
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>