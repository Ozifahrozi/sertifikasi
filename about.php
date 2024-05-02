<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Club Motor Suka</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    
    <main id="main-content">
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Tentang Club Motor Suka</h1>
            <hr class="my-4">

            <div class="row">
                <div class="col-md-6">
                    <img src="img/logo-motor.png" alt="Tentang Club Motor Suka" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <p>Club Motor Suka adalah komunitas motor yang didedikasikan untuk menyatukan para penggemar motor di seluruh negeri. Kami berkomitmen untuk memberikan pengalaman berkendara yang tak terlupakan dan membangun persaudaraan yang kuat di antara anggota kami.</p>
                    <p>Visi kami adalah menciptakan komunitas yang inklusif dan menyenangkan di mana setiap anggota dapat berkembang dalam lingkungan yang suportif. Kami mengadakan berbagai acara, tur, dan pertemuan untuk mempererat hubungan di antara anggota dan mengeksplorasi dunia otomotif.</p>
                    <p>Apakah Anda seorang penggemar motor berpengalaman atau baru saja memulai, Club Motor Suka menyambut Anda dengan tangan terbuka. Bergabunglah dengan kami untuk menjelajahi dunia motor dan merasakan kebersamaan dalam komunitas kami.</p>
                </div>
            </div>

            <hr class="my-4">
            <h3 class="text-center">Nilai-Nilai Kami</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Komunitas:</strong> Kami menghargai persaudaraan dan kebersamaan di antara anggota.</li>
                <li class="list-group-item"><strong>Keamanan:</strong> Keselamatan berkendara adalah prioritas kami.</li>
                <li class="list-group-item"><strong>Petualangan:</strong> Kami bersemangat untuk menjelajahi dunia bersama.</li>
                <li class="list-group-item"><strong>Inklusivitas:</strong> Kami menyambut semua orang dari berbagai latar belakang.</li>
            </ul>

            <div class="mt-4 text-center">
                <a href="join.php" class="btn btn-primary btn-lg">Bergabung Sekarang</a>
            </div>
        </div>
    </div>
</main>


    
    <script>
        function openNav() {
            document.getElementById("sidebar").style.width = "250px";
            document.getElementById("main-content").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("main-content").style.marginLeft = "0";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
