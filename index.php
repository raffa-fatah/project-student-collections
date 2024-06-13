<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK N 11 Semarang</title>
    <!-- link bootstrap css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- link sc css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-sc-primary">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">SMK N 11 Semarang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pendaftaran.php">Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- content -->
    <div class="container">
        <div class="row section">
            <div class="col-lg-8 section-text">
                <h3>Selamat datang di</h3>
                <h1 class="fw-bold fs-sc-large">SMK N 11 Semarang</h1>
                <p>Sekolah yang mengedepankan akhlak dan prestasi</p>
                <div class="mt-4">
                    <a href="pendaftaran.php" class="btn btn-dark">Daftar siswa baru</a>
                    <a href="datapendaftar.php" class="btn btn-dark">Lihat siswa pendaftar</a>
                </div>
            </div>
            <div class="col-lg-4 text-center section-img">
                <img src="./assets/img/logo.png" class="img-fluid" alt="logo smkn 11" width="400" height="400">
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- source bootstrap js -->
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>