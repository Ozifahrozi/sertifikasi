<?php
include '../koneksi.php';

$id_angg = $_POST['id_angg'];
$no = $_POST['no'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];


$foto_baru = '';

if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    $target_dir = "uploads/";

    $target_file = $target_dir . basename($_FILES['foto']['name']);
    
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($image_file_type, $allowed_types)) {
        
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
            $foto_baru = $target_file;
        }
    }
}


if ($foto_baru) {
    $query = "UPDATE anggota SET no='$no', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', foto='$foto_baru' WHERE id_angg='$id_angg'";
} else {
    $query = "UPDATE anggota SET no='$no', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id_angg='$id_angg'";
}


mysqli_query($koneksi, $query);

header("location:anggota-admin.php");
?>
