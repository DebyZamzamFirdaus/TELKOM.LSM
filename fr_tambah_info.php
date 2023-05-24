<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TAMBAH DATA INFORMASI</title>
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
    <div class="container">
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
        <h2 class="text-center fw-bold">TAMBAH DATA INFORMASI</h2>
        <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
        <div class="bs-example">
            <form action="proses/tambah_info.php" method="POST">
        <div class="form-group">
            <label for="recipient-name">Nama </label>
            <input name="nama" input type="text" class="form-control" id="recipient-name">
        </div>  
        <div class="form-group">
            <label for="recipient-name">NIK </label>
            <input name="nik" input type="text" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="recipient-name">Tanggal Pembuatan</label>
            <input name="tanggal_pembuatan" input type="date" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="recipient-name">Nomor Antri</label>
            <input name="no_antrian" input type="text" class="form-control" id="recipient-name">
        </div>
        <div class="col-3 m-auto">
        <button type="submit" class="btn btn-primary px-4 mt-2">Submit</button>
            </div>
        </form>
    </body>
</html>