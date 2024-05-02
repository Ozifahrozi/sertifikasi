<?php
include '../koneksi.php';
$id_angg = $_GET['id_angg'];

mysqli_query($koneksi,
    "DELETE FROM anggota
    WHERE id_angg='$id_angg'"
);

header("location:anggota-admin.php");
?>
