<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./services/edit_button.js"></script>
    <script src="./services/hapus_button.js"></script>
    <script src="./services/loadData.js"></script>
    <script src="./services/update_button.js"></script>
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
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody id="tabelBody"></tbody>
            <?php
            // ambil utils ambil.php
            // require __DIR__ . '/utils/ambil.php';

            // if (!empty($data)) {
            //     $no = 1;
            //     foreach ($data as $row) {
            //         echo "<tr>";
            //         echo "<td>" . $no++ . "</td>";
            //         echo "<td>" . $row['nama'] . "</td>";
            //         echo "<td>" . $row['nilai'] . "</td>";
            //         echo "<td>" . $row['grade'] . "</td>";
            //         echo "<td>" . $row['status'] . "</td>";
            //         echo "<td><span>
            //         <button onclick='editStudent(" . $row['id'] . ")'> Edit </button>
            //         <button onclick='deleteStudent()'> Hapus </button>
            //         </span></td>";
            //         echo "</tr>";
            //     }
            // } else {
            //     echo "<tr><td colspan='5'>Data kosong</td></tr>";
            // }
            ?>
        </table>
    </div>

    <!-- POPUP EDIT -->
    <div id="popupEdit"
        style="display:none; position:fixed; top:30%; left:40%; background:white; border:1px solid black; padding:20px;">

        <h3>Edit Student</h3>

        <input type="hidden" id="edit_id">

        <label>Nama</label>
        <input type="text" id="edit_nama">

        <br><br>

        <label>Nilai</label>
        <input type="number" id="edit_nilai">

        <br><br>

        <button onclick="updateStudent()">Update</button>

        <button onclick="closePopup()">Close</button>

    </div>
</body>

</html>