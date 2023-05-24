<?php

@include 'config.php';

session_start();

if (isset($_POST['login'])) {
    // var_dump($_POST['email']);

    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $select = "SELECT email, password FROM user_form WHERE email = '$email' && password = '$pass' ";


    $result = mysqli_query($conn, $select);
    // var_dump($result);

    if (mysqli_num_rows($result) > 0) {
        echo "
            <script>
                window.location.href = 'page1.php';
            </script>
        ";
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
    <title>SELAMAT DATANG</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <h1 class="fs-2 text-danger text-center mt-5 mb-3">SELAMAT DATANG</h1>

    <form action="" method="post">
        <div class="row mb-3 mt-5 ps-5 pe-5 justify-content-center">
            <div class="col-sm-7 mb-2">
                <label class="fs-6 form-label text-danger">Email :</label>
                <input type="text" name="email" required placeholder="enter your email" class="form-control border-top rounded-2 border-danger shadow-sm mb-2 bg-body rounded" id="exampleFormControlInput1">
            </div>
            <div class="col-sm-7 mb-2">
                <label class="fs-6 form-label text-danger">Password :</label>
                <input type="password" name="password" required placeholder="enter your password" class="form-control border-top rounded-2 border-danger shadow-sm mb-2 bg-body rounded" id="exampleFormControlInput1">
            </div>
            <div class="col-sm-7 mb-2 text-center mt-2">
                <button type="submit" class="btn btn-danger shadow-sm rounded-pill" name="login">SIGN IN</button>
                <p>Apakah anda belum punya akun daftar <a href="login.php">DISINI</a></p>
            </div>
        </div>
    </form>

    <footer class="bg-danger w-full opacity-25">
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