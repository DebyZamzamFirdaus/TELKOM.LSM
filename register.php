<?php

@include 'config.php';

session_start();

if (isset($_POST['register'])) {

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    // var_dump($nik);
    // var_dump($nama);
    // var_dump($alamat);
    // var_dump($tgl_lahir);
    // var_dump($email);


    $query = "INSERT INTO data_form (nik, nama, alamat, tgl_lahir, email) VALUES ('$nik', '$nama', '$alamat', '$tgl_lahir', '$email')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['success'] = "Data Berhasil Dilengkapi..";
    }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lengkapi Data</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light" style="height:55px;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- <img src="" alt="" width="30" height="24"> -->
            </a>
        </div>
    </nav>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-primary container mx-auto" role="alert">
            <?php echo ($_SESSION['success']) ?>
        </div>
    <?php
        unset($_SESSION['success']);
    endif; ?>
    <div class="container">
        <div class="row mt-3 mb-4">
            <div class="col-lg-12">
                <h1 class="fs-3 text-danger mt-5 mb-3 flex-grow-5 ms-5 ps-5 ">
                    Lengkapi Data</h1>
            </div>
        </div>
    </div>

    <form action="" method="post">
        <div class="container">
            <div class="mb-3 me-5 row justify-content-center">
                <label class="text-danger col-lg-1 col-form-label" for="nik">NIK</label>
                <div class="col-lg-6">
                    <input type="text" required placeholder="enter your NIK" class="form-control border-2 rounded-3 border-danger shadow mb-2 bg-body rounded" id="nik" name="nik">
                </div>
            </div>
            <div class="mb-3 me-5  row justify-content-center mt-3">
                <label class="text-danger col-lg-1 col-form-label" for="nama">Nama</label>
                <div class="col-lg-6">
                    <input type="text" required placeholder="enter your Nama" class="form-control border-2 rounded-3  border-danger shadow mb-2 bg-body rounded" id="nama" name="nama">
                </div>
            </div>
            <div class="mb-3 me-5 row justify-content-center mt-3">
                <label class="text-danger col-lg-1 col-form-label" for="alamat">Alamat</label>
                <div class="col-lg-6">
                    <input type="text" required placeholder="enter your Alamat" class="form-control border-2 rounded-3  border-danger shadow mb-2 bg-body rounded" id="alamat" name="alamat">
                </div>
            </div>
            <div class="mb-3 me-5 row justify-content-center mt-3">
                <label class="text-danger col-lg-1 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
                <div class="col-lg-6">
                    <input type="date" class="form-control border-2 rounded-3  border-danger shadow mb-2 bg-body rounded" id="tgl_lahir" name="tgl_lahir">
                </div>
            </div>
            <div class="mb-3 me-5 row justify-content-center mt-3">
                <label class="text-danger col-lg-1 col-form-label" for="email">Email</label>
                <div class="col-lg-6">
                    <input type="text" required placeholder="enter your Email" class="form-control border-2 rounded-3  border-danger shadow mb-2 bg-body rounded" id="email" name="email">
                </div>
            </div>
            <div class="text-center mt-2">
                <button type="submit" class="btn btn-danger shadow-sm rounded-pill" name="register">DAFTAR</button>
                <p>Sudah ada data! <a href="dashboard.php">MASUK</a></p>
            </div>
        </div>
    </form>


    <footer class="bg-danger opacity-25 mt-5" style="overflow: hidden;">
        <div class="row">
            <div class="col-sm-12 mt-2 mb-2">
                <p class="text-center mt-2 mb-2">Copyright@2023 <i class="bi bi-heart-fill"></i><a href="" class="text-white fw-bold text-center">Deby Zamzam Firdaus</a>
                </p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>