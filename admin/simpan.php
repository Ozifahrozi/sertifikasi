<?php
include '../koneksi.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $foto = '';

    
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    
        $targetDir = 'uploads/';
       
        $filename = basename($_FILES['foto']['name']);
        
        $targetFilePath = $targetDir . $filename;
    
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFilePath)) {
            
            $foto = $filename;
        } else {
            die("Error: Gagal mengunggah file.");
        }
    }


    $query = "INSERT INTO anggota (foto, no, nama, jenis_kelamin, alamat) VALUES ('$foto', '$no', '$nama', '$jenis_kelamin', '$alamat')";
    if (mysqli_query($koneksi, $query)) {
        header("Location: anggota-admin.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
