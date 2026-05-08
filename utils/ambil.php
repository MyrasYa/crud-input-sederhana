<?php
    // intelliphense error handle

// /** @var mysqli $koneksi */


// hubungin ke koneksi database yang sudah di set di folder config/koneksi.php dan main.php
require __DIR__ . '/../config/koneksi.php';

// logic querry database
$query = "SELECT * FROM students ORDER BY id DESC";

// simpan data hasil query ke dalam variabel
$result = mysqli_query($koneksi, $query);

// inisialisasi variabel array penampung data hasil query
$data = [];

// inisiliasasi variabel interpretasi hitung baris yg ada di result
// $CHECK_DATA_ROWS = mysqli_num_rows($result);


// ngecek apakah hasil query kosong atau tidak
if ($result &&  mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
