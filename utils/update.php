<?php

// hubungin ke koneksi database yang sudah di set di folder config/koneksi.php dan main.php
require __DIR__ . '/../config/koneksi.php';

// ngambil value id
$id = $_POST['id'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

// logic grade
if ($nilai >= 90) $grade = "A";
else if ($nilai >= 80) $grade = "B";
else if ($nilai >= 70) $grade = "C";
else $grade = "D";

// logic status
if ($nilai >= 80) $status = "Lulus";
else $status = "Tidak Lulus";


// logic query database
$query = "UPDATE students SET nama='$nama', nilai='$nilai', grade='$grade', status='$status' WHERE id='$id'";
// $query = "SELECT * FROM students WHERE id = $id" ;


// nampung data hasil query database
$result = mysqli_query($koneksi, $query);

// inisialisasi variabel tipe array untuk menampung hasil json
// $data = [];

// check jika error
if ($result) {
    echo json_encode([
        "succes" => true,
        "message" => "Sukses update data"
    ]);
} else {
    echo json_encode([
        "succes" => false,
        "message" => $koneksi->error
    ]);
}
