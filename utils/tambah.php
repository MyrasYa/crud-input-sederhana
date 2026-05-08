<?php
    // hubungin ke koneksi database yang sudah di set di folder config/koneksi.php dan main.php
    require './config/koneksi.php';
    require './main.php';

    // ngambil values input dari input nama&nilai
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    // logic grade
    if ($nilai >= 90) $grade = "A";
    else if ($nilai >= 80) $grade = "B";
    else if ($nilai >= 70) $grade = "C";
    else $grade = "D";

    // logic status
    if ($grade >= "B" ) $status = "Lulus";
    else $status = "Tidak Lulus";

    // logic query database
    $query = "INSERT INTO students (nama, nilai, grade, status) VALUES ('$nama', '$nilai', '$grade', '$status')";

    // tampung data hasil queery ke variabel result
    $result = mysqli_query($koneksi, $query);

    // check jika logic query gagal
    if ($result) {
        echo json_encode([
            "success" => true,
            "messages" => "Sukses menambah data" 
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "messages" => "Gagal memasukkan data"
        ]);
    }
?>