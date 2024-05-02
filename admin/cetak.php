<?php
require '../vendor/autoload.php';

use Dompdf\Dompdf;


$dompdf = new Dompdf();


include '../koneksi.php';


$query = "SELECT * FROM anggota";
$result = mysqli_query($koneksi, $query);


$html = '
<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Anggota</h2>
    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>';


while ($row = mysqli_fetch_assoc($result)) {
   
    $foto = $row['foto'];
    $no = htmlspecialchars($row['no']);
    $nama = htmlspecialchars($row['nama']);
    $jenis_kelamin = htmlspecialchars($row['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan');
    $alamat = htmlspecialchars($row['alamat']);

   
    $html .= "<tr>
                <td><img src='uploads/$foto' alt='Foto Anggota' width='50'></td>
                <td>$no</td>
                <td>$nama</td>
                <td>$jenis_kelamin</td>
                <td>$alamat</td>
              </tr>";
}

$html .= '
        </tbody>
    </table>
</body>
</html>';


$dompdf->loadHtml($html);


$dompdf->setPaper('A4', 'portrait');


$dompdf->render();


$dompdf->stream('data_anggota.pdf', ['Attachment' => false]);


