<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Data Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .bs-example{
        margin: 20px;        
    }
    </style>
</head>
<body>
<?php
    include "koneksi.php";
    $nik = $_GET['nik'];
    $data = mysqli_query($conn, "select * from proses_client where nik='$nik'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <div class="container">
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
            <h2 class="text-center fw-bold">Edit Data Client</h2>
        <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
            <div class="bs-example">
            <form action="proses/edit_client.php" method="POST">
            <input type="hidden" name="nik" value="<?php echo $d['nik'];?>">
        <div class="form-group">
            <label for="recipient-name">Nama </label>
            <input name="nama" input type="text" class="form-control" id="recipient-name" value="<?php echo $d['nama'];?>" >
        </div>  
        <div class="form-group">
            <label for="recipient-name">NIK </label>
            <input name="nik" input type="text" class="form-control" id="recipient-name" value="<?php echo $d['nik'];?>">
        </div>
        <div class="form-group">
            <label for="recipient-name">Tanggal Pembuatan</label>
            <input name="tanggal_pembuatan" input type="text" class="form-control" id="recipient-name" value="<?php echo $d['tanggal_pembuatan'];?>">
        </div>
        <div class="form-group">
            <label for="recipient-name">Nomor Antri</label>
            <input name="no_antrian" input type="text" class="form-control" id="recipient-name" value="<?php echo $d['no_antrian'];?>">
        </div>
        <div class="col-3 m-auto">
        <button type="submit" class="btn btn-primary px-4 mt-2">Submit</button>
            </div>
        </form>
        <?php
    }
        ?>
    </body>
</html>