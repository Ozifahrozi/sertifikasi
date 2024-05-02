<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .center {
            text-align: center;
        }
        .container {
            margin-top: 20px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
           
            padding: 10px 0;
            text-align: center;
            animation: slide 20s linear infinite;
        }
        @keyframes slide {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Dashboard</a>

    </nav>
    </header>
    <div class="container">
        <div class="alert alert-primary text-center" role="alert">
            <h3>DATA ANGGOTA</h3>
        </div>

        <div class="#">
            <a class="btn btn-primary" href="form-input.php" role="Input">Input Data</a>
            <a class="btn btn-secondary" href="cetak.php" role="Input">Cetak</a>
            <a class="btn btn-secondary" href="index-admin.php" role="Input">Kembali</a>
        </div>
        
        <table class="table table-striped table-bordered mt-4">
        <thead>
                <tr>
                    <th>Foto</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
        </thead>
            <tbody>
            <?php
                include '../koneksi.php';
                $result = mysqli_query($koneksi, "SELECT * FROM anggota");
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
                    echo "<tr>";
                    echo "<td><img src='uploads/" . htmlspecialchars($row['foto']) . "' alt='Foto Anggota' width='50' height='50'></td>";
                    echo "<td>" . htmlspecialchars($row['no']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($jenis_kelamin) . "</td>";
                    echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id_angg=" . $row['id_angg'] . "' class='btn btn-sm btn-primary mr-1'>Edit</a>";
                    echo "<a href='delete.php?id_angg=" . $row['id_angg'] . "' class='btn btn-sm btn-danger'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
            </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
