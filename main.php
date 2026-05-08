<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>CRUD BASIC RASYA AKBAR MUHAMMAD ZEIN_24552010015_A1</h1>
    <div class="input">
        <form action="utils/tambah.php" method="POST">
            <label for="nama">Masukkan Nama</label>
            <input type="text" name="nama" id="nama">
            <label for="nilai">Masukkan Nilai</label>
            <input type="number" name="nilai" id="nilai">
            <input type="submit" name="submit" value="Kirim Data">
        </form>
    </div>

    <div class="tabel">
        <table border="1" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Status</th>
            </tr>
            <?php
            // ambil utils ambil.php
            require __DIR__ . '/utils/ambil.php';

            // agar tambah.php ke trigger hanya saat tombol di klik
            if (isset($_POST['submit'])) {
                require __DIR__ . '/utils/tambah.php';
            }


            if (!empty($data)) {
                $no = 1;
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['nilai'] . "</td>";
                    echo "<td>" . $row['grade'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Data kosong</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>