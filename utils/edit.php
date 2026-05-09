<?php
// hubungin ke koneksi database yang sudah di set di folder config/koneksi.php dan main.php
require __DIR__ . '/../config/koneksi.php';

// ngambil value id
$id = $_POST['id'];

// logic query database
$query = "SELECT * FROM students WHERE id='$id'" ;

// nampung data hasil query database
$result = mysqli_query($koneksi, $query);

// inisialisasi variabel tipe array untuk menampung hasil json
$data = mysqli_fetch_assoc($result);

// ngirim hasil ebrupa json
echo json_encode($data);

?>
