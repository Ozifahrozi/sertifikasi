<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>


    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index-admin.php">Admin Dashboard</a>
        <span class="navbar-text">
            Selamat datang, Admin!
        </span>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Data Anggota
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lihat, tambahkan, atau edit data anggota.</p>
                        <a href="http://localhost/Sertifikasi/admin/anggota-admin.php" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Data Produk
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lihat, tambahkan, atau edit data produk.</p>
                        <a href="produk-admin.html" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Data Event
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lihat, tambahkan, atau edit data event.</p>
                        <a href="event-admin.html" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Pengaturan
                    </div>
                    <div class="card-body">
                        <p class="card-text">Edit pengaturan situs dan akun admin.</p>
                        <a href="pengaturan-admin.html" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Laporan
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lihat laporan dan statistik.</p>
                        <a href="laporan-admin.html" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Keluar
                    </div>
                    <div class="card-body">
                        <p class="card-text">Keluar dari akun admin.</p>
                        <a href="../login.php" class="btn btn-danger">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
