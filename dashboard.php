<?php
include "sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
            <h2 class="text-center fw-bold">SELAMAT DATANG DI SISTEM INFORMASI</h2>
            <h2 class="text-center fw-bold">TELKOM INDONESIA</h2>
            <h6 class="text-center fw-bold">Apakah Anda Sudah Lengkapi Data? Jika Belum, Klik <a href="register.php">DISINI</a></h6>
        </div>
        <br>
        <br>
        <div id="lokasi">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>LOKASI</h1>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <iframe width="1000" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1000&amp;height=500&amp;hl=en&amp;q=GRAPARI%20TELKOM%20GROUP,%20Jl.%20Merdeka%20No.1,%20Lancang%20Garam,%20Banda%20Sakti,%20Lhokseumawe%20City,%20Aceh%20Aceh+(Magang%20Telkom%20LSM)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href='https://maps-generator.com/'>Maps Generator</a>
                            <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7457321c9e6fb873f27db4b773ee463ba24911e5'></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
        </main>

</body>

</html>