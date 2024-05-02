<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Talent</title>
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
<div id="sidebar" class="sidebar">
        <a href="#">...</a>
        <a href="artikel.php">Artikel</a>
        <a href="event.php">Event</a>
        <a href="galeri.php">Galeri Foto</a>
        <a href="anggota.php">Data Anggota</a>
        <a href="klien.php">Klien Kami</a>
        <a href="login.php">Login</a>
        
    </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo-motor.png" width="30" height="30" alt="Logo Club Motor Suka" class="mr-2">
            Club Motor Suka
        </a>
        <button class="navbar-toggler" type="button" onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visi.php">Visi dan Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.php">Produk Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>
    
        <h2>tes</h2>
        <table class="table table-striped table-bordered mt-3" style="width: 81%; margin-left: auto;">

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
                include 'koneksi.php';
                $result = mysqli_query($koneksi, "SELECT * FROM anggota");
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
                    echo "<tr>";
                    echo "<td><img src='admin/uploads/" . htmlspecialchars($row['foto']) . "' alt='Foto Anggota' width='60' height='60'></td>";
                    echo "<td>" . htmlspecialchars($row['no']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($jenis_kelamin) . "</td>";
                    echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                    
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
