<?php
// hubungin ke koneksi database yang sudah di set di folder config/koneksi.php dan main.php
require __DIR__ . '/../config/koneksi.php';

// kirim data saat klik submit

// ngambil values input dari input nama&nilai
$id = $_POST['id'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];


// validasi simpel (biar gak kosong)
if ($nama == "" || $nilai == "") {
    echo "Data tidak boleh kosong";
    exit;
}

// logic grade
if ($nilai >= 90) $grade = "A";
else if ($nilai >= 80) $grade = "B";
else if ($nilai >= 70) $grade = "C";
else $grade = "D";

// logic status
if ($nilai >= 80) $status = "Lulus";
else $status = "Tidak Lulus";

// =========================
// SQL YANG SUDAH AMAN
// =========================
$siapkanQuery = mysqli_prepare(
    $koneksi,
    "INSERT INTO students (nama, nilai, grade, status) VALUES (?, ?, ?, ?)"
);

mysqli_stmt_bind_param(
    $siapkanQuery,
    "siss",
    $nama,
    $nilai,
    $grade,
    $status
);

// jalankan query
$hasilEksekusi = mysqli_stmt_execute($siapkanQuery);

// cek hasil
if ($hasilEksekusi) {
    header("Location: ../main.php");
    exit;

    // ini kebawah ga bakal di eksekusi sih wkwkkw
    echo json_encode([
        "success" => "true",
        "messages" => "Sukses nambah data"
    ]);
} else {
    echo json_encode([
        "success" => "false",
        "messages" => "Gagal nambah data"
    ]);
}

// tutup koneksi statement
mysqli_stmt_close($siapkanQuery);



    // logic query database
    // $query = "INSERT INTO students (nama, nilai, grade, status) VALUES ('$nama', '$nilai', '$grade', '$status')";

    // tampung data hasil queery ke variabel result
    // $result = mysqli_query($koneksi, $query);

    // check jika logic query gagal
    // if ($result) {
    //     echo json_encode([
    //         "success" => true,
    //         "messages" => "Sukses menambah data" 
    //     ]);
    // } else {
    //     echo json_encode([
    //         "success" => false,
    //         "messages" => "Gagal memasukkan data"
    //     ]);
    // }
