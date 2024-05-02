<?php

function active_radio_button($value, $input){
    $result = $value == $input ? 'checked' : '';
    return $result;
}



include '../koneksi.php';
$id_angg      = $_GET['id_angg'];
$anggota  = mysqli_query($koneksi, "select * from anggota where id_angg='$id_angg'");
$row        = mysqli_fetch_array($anggota);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
<header>
<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index-admin.php">Admin Dashboard</a>
    </nav>
</header>

<div class="container">
    <br>
<div class="alert alert-primary text-center" role="alert">
            <h3>EDIT DATA ANGGOTA</h3>
        </div>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['id_angg']; ?>" name="id_angg">
    <table>
        <tr>
            <td>FOTO</td>
            <td>
            <input type="file" name="foto">
            <p>Foto saat ini: <?php echo htmlspecialchars($row['foto']); ?></p>
            </td>
        </tr>
        <tr>
            <td>NO ANGGOTA</td>
            <td><input type="text" value="<?php echo $row['no']; ?>" name="no"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki laki
                <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
            </td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                <a href="anggota-admin.php">Kembali</a>
            </td>
        </tr>
    </table>
                </div>
</form>


    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>