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
    <header>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index-admin.php">Admin Dashboard</a>

    </nav>
    </header>
    <div class="container">
        <div class="alert alert-primary text-center" role="alert">
            <h3>INPUT DATA ANGGOTA</h3>
        </div>
        <form method="post" action="simpan.php" enctype="multipart/form-data">
            <table>
                <tr><td>FOTO</td><td><input type="file" name="foto" accept=".jpg, .jpeg, .png"></td>
                <tr><td>NO ANGGOTA</td><td><input type="text" onkeyup="isi_otomatis()" name="no"></td>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td>
                <tr><td>JENIS KELAMIN</td><td>
                
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td> </tr>
                    <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                    <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
                    </tr>
                </tr>
            </table>
        </form>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>