<?php
// hubungin ke koneksi database yang sudah di set di folder config/koneksi.php dan main.php
require __DIR__ . '/../config/koneksi.php';

// ngambil value id
$id = $_POST['id'];

// logic query database
$query = "DELETE FROM students WHERE id='$id'";

// nampung data hasil query database
$result = mysqli_query($koneksi, $query);

// check error
if ($result) {
    echo json_encode([
        "success" => true,
        "message" => "Data berhasil dihapus"
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => mysqli_error($koneksi)
    ]);
}
