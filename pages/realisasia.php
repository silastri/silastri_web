<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('meta.php'); ?>
</head>

<body>
  <!-- header -->
  <?php include('header.php'); ?>
  <!-- /header -->

  <!-- tabel informasi angkatan -->
  <h1 class="display-5 fw-bold text-center my-5 pt-5">
    Informasi Realisasi Anggaran Tahun 2024 (Triwulan 1)
  </h1>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="table-primary">
            <th scope="col">No.</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Anggaran</th>
            <th scope="col">Realisasi</th>
            <th scope="col">Persentase</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-success">
            <th scope="row">Total</th>
            <td>Anggaran</td>
            <td>Rp. 7.510.000.000</td>
            <td>Rp. 1.085.832.044</td>
            <td>14.46%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <h2 class="text-center my-5 pt-5">
    Informasi Rinci dapat dilihat pada link berikut:
    <a href="https://sikangen.id/realisasi_real_time.php">Realisasi Anggaran Disnakertrans</a>
  </h2>

  <!-- kembali -->
  <?php include('kembali.php'); ?>
  <!-- /kembali -->

  <!-- footer -->
  <?php include('footer.php'); ?>
  <!-- /footer -->
</body>

</html>