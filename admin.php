<?php
include "sidebar.php";
include "koneksi.php"
?>

<html>
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <body>
    <br>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="card">
  <div class="card-header">
  <h5 class="card-title">DATA ADMIN</h5>
  </div>
  <div class="card-body">
    <a href="fr_tambah_admin.php" class="btn btn-success">Tambah</a>
    <br>
    <div>
    <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIK</th>
      <th scope="col">Tanggal Pembuatan</th>
      <th scope="col">No Antrian</th>
      <th scope="col">Aksi</th>
      <th scope="col">Progres</th>
    </tr>
  </thead>
  
  <?php
  $no =1;
  $tampil= mysqli_query($conn, "SELECT * FROM proses_admin order by nik desc");
  while($data = mysqli_fetch_array($tampil)) :
  ?>

  <tbody>
    <tr>
      <th scope="row">
        <?= $no++ ?>
      </th>
      <td><?= $data['nama'] ?></td>
      <td><?= $data['nik'] ?></td>
      <td><?= $data['tanggal_pembuatan'] ?></td>
      <td><?= $data['no_antrian'] ?></td>
      <td>
      <a href="fr_edit_admin.php?nik=<?php echo $data['nik']; ?>" class="btn btn-warning">Edit</a>
      <a href="proses/delete_admin.php?nik=<?php echo $data['nik']; ?>" class="btn btn-danger">Hapus</a>
      </td>
      <td>
      <a href="#?nik=<?php echo $data['nik']; ?>" class="btn btn-warning">on proses</a>
      <a href="#?nik=<?php echo $data['nik']; ?>" class="btn btn-success">Siap</a>
      </td>
    </tr>
  
  </tbody>
  <?php endwhile; ?>

    </table>
    </div>
  
  </div>
</div>

</main>
  </body>
</html>
