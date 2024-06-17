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
    Informasi Realisasi PAD Tahun 2024 (Triwulan 1)
  </h1>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="table-primary">
            <th scope="col">No.</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Target (Disnakertrans)</th>
            <th scope="col">Realisasi</th>
            <th scope="col">Persentase</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-success">
            <th scope="row">Total</th>
            <td>PAD</td>
            <td>Rp. 7.200.000.000</td>
            <td>Rp. 20.224.000</td>
            <td>0.17%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <h2 class="text-center my-5 pt-5">
    Informasi Rinci dapat dilihat pada file berikut:
    <a href="files/Laporan Realisasi Pendapatan TW 1.pdf">Realisasi PAD Disnakertrans</a>
  </h2>

  <!-- kembali -->
  <?php include('kembali.php'); ?>
  <!-- /kembali -->

  <!-- footer -->
  <?php include('footer.php'); ?>
  <!-- /footer -->
</body>

</html>