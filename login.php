<?php

@include 'config.php';

if (isset($_POST['register'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['password2']);

    if ($pass == $cpass) {
        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {

            $error[] = 'user already exist!';
        } else {

            if ($pass != $cpass) {
                $error[] = 'password not matched!';
            } else {
                $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$pass')";
                mysqli_query($conn, $insert);
                header('location:sign.php');
            }
        }
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
    <title>DAFTAR AKUN</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <h1 class="fs-2 text-danger text-center mt-5 mb-3">DAFTAR AKUN</h1>

    <form action="" method="post">
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            };
        };
        ?>
        <div class="row mb-3 mt-5 ps-5 pe-5 justify-content-center">
            <div class="col-sm-7 mb-2">
                <label class="fs-6 form-label text-danger">Name :</label>
                <input type="text" name="name" required placeholder="enter your name" class="form-control border-top rounded-2 border-danger shadow-sm mb-2 bg-body rounded" id="exampleFormControlInput1">
            </div>
            <div class="col-sm-7 mb-2">
                <label class="fs-6 form-label text-danger">Email :</label>
                <input type="email" name="email" required placeholder="enter your email" class="form-control border-top rounded-2 border-danger shadow-sm mb-2 bg-body rounded" id="exampleFormControlInput1">
            </div>
            <div class="col-sm-7 mb-2">
                <label class="fs-6 form-label text-danger">Password :</label>
                <input type="password" name="password" required placeholder="enter your password" class="form-control border-top rounded-2 border-danger shadow-sm mb-2 bg-body rounded" id="exampleFormControlInput1">
            </div>
            <div class="col-sm-7 mb-2">
                <label class="fs-6 form-label text-danger">Konfigurasi Password :</label>
                <input type="password" name="password2" required placeholder="confirm your password" class="form-control border-top rounded-2 border-danger shadow-sm mb-2 bg-body rounded" id="exampleFormControlInput1">
            </div>
            <div class="col-sm-7 mb-2 text-center mt-2">
                <button type="submit" class="btn btn-danger shadow-sm rounded-pill" name="register">NEXT</button>
                <p>already have an account? <a href="sign.php">SIGN IN NOW</a></p>
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