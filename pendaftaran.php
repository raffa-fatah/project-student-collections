<?php 

require './functions.php';

if(!empty($_POST)) {
    if(addStudent($_POST) > 0) {
        echo "
            <script>
                alert('Selamat anda berhasil mendaftar!')
                document.location.href = 'datapendaftar.php'
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Anda Gagal Mendaftar')
            document.location.href = 'datapendaftar.php'
        </script>
    ";
    }
}

?>


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
            <a class="navbar-brand text-white fw-bold" href="index.php">Form pendaftaran siswa baru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- content -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-5">Form pendaftaran</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa <span class="text-danger">*</span></label>
                        <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jenis_kelamin">Jenis kelamin <span class="text-danger">*</span></label>
                        <div class="d-flex gap-3 mx-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki laki" id="laki_laki">
                                <label class="form-check-label" for="laki_laki">
                                    Laki laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin" id="perempuan" checked>
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama <span class="text-danger">*</span></label>
                        <select class="form-select" id="agama" name="agama" aria-label="Default select example" required>
                            <option selected>Pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah <span class="text-danger">*</span></label>
                        <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" required>
                    </div>
                    <button type="submit" class="btn btn-dark mt-4">Daftar</button>
                    <a href="index.php" class="btn btn-dark mt-4">Kembali ke home</a>
                </form>
                <div class="mb-5"></div>
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- source bootstrap js -->
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>