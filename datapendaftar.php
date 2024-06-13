<?php

require './functions.php';

$students = getAllStudents() ?? [];

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
        <h2 class="mt-5">Data pendaftar di SMK N 11 Semarang</h2>
        <table class="table table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $student) : ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $student['nama_siswa'] ?></td>
                        <td><?= $student['alamat'] ?></td>
                        <td><?= $student['jenis_kelamin']?></td>
                        <td><?= $student['agama']?></td>
                        <td><?= $student['asal_sekolah']?></td>
                        <td>
                            <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?= $student['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- end content -->
    <!-- source bootstrap js -->
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>