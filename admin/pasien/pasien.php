<?php
include_once "../../src/koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <style>
    .card {
      margin: 0 10px;
    }

    .card .card-body a {
      margin: 0 -10px;
    }

    .card .card-body a.aedit {
      margin-right: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-3">DATA PASIEN</h1>
    <!-- Awal Tabel -->
    <div class="card mt-5">
      <div class="card-header bg-success text-white">
        <h5>Tabel Pasien</h5>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-stripped">
          <tr class="bg-dark-subtle">
            <th>ID Pasien</th>
            <th>Id Daftar</th>
            <th>Id CM</th>
            <th>Nama Pasien</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>No Telpon</th>
            <th>TTL</th>
            <th>Aksi</th>
          </tr>
          <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM pasien");
          while ($data = mysqli_fetch_array($sql)) {
          ?>
            <tr>
              <th><?php echo $data['id_pas']; ?></th>
              <th><?php echo $data['id_daftar']; ?></th>
              <th><?php echo $data['id_cm']; ?></th>
              <th><?php echo $data['nama_pas']; ?></th>
              <th><?php echo $data['nik']; ?></th>
              <th><?php echo $data['jenis_kelamin']; ?></th>
              <th><?php echo $data['telp_pas']; ?></th>
              <th><?php echo $data['ttl_pas']; ?></th>
              <td class="text-center">
                <a href="edit_pasien.php?id_pas=<?php echo $data['id_pas']; ?>" class="btn btn-warning aedit">Edit</a>
                <a href="hapus_pasien.php?id_pas=<?php echo $data['id_pas']; ?>" target="_self" onclick="return confirm('YAKIN INGIN MENGHAPUS DATA INI?')" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
    <!-- Akhir Tabel -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>