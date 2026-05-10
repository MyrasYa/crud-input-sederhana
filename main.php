<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./services/edit_button.js"></script>
    <script src="./services/hapus_button.js"></script>
    <script src="./services/loadData.js"></script>
    <script src="./services/update_button.js"></script>
    <link rel="stylesheet" href="styles/globals.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title></title>
</head>

<body>
    <!-- <h1>CRUD BASIC RASYA AKBAR MUHAMMAD ZEIN_24552010015_A1</h1> -->
    <div class="input">
        <h2>Input Student</h3>
        <form action="utils/tambah.php" method="POST">
            <label for="nama">Masukkan Nama</label>
            <input type="text" name="nama" id="nama">
            <label for="nilai">Masukkan Nilai</label>
            <input type="number" name="nilai" id="nilai">
            <input type="submit" name="submit" value="Kirim Data" class="input_submit">
        </form>
    </div>

    <div class="tabel">
        <table border="1" cellpadding="1" cellspacing="20">
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
    <div id="popupEdit">

        <h2>Edit Student</h3>

        <input type="hidden" id="edit_id">

        <label>Nama</label>
        <input type="text" id="edit_nama">

        <label>Nilai</label>
        <input type="number" id="edit_nilai">

        <button onclick="updateStudent()">Update</button>

        
        <button onclick="closePopup()">Close</button>

    </div>
</body>

</html>