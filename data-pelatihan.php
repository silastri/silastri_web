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
    Informasi Data Pelatihan Tahun 2024 (Triwulan 1)
  </h1>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="table-primary">
            <th scope="col">No.</th>
            <th scope="col">Angkatan</th>
            <th scope="col">Paket Pelatihan</th>
            <th scope="col">Jumlah Siswa Pelatihan</th>
            <th scope="col">Siswa Lulus Uji Kompetensi</th>
            <th scope="col">Ket. APBN / APBD</th>
            <th scope="col">Pelaksanaan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>6</td>
            <td>96</td>
            <td>96 *</td>
            <td>APBD: 6</td>
            <td>Februari - Maret 2024</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>2</td>
            <td>13</td>
            <td>208</td>
            <td>208 *</td>
            <td>APBN: 8 <br />APBD: 5</td>
            <td>Februari - April 2024</td>
          </tr>
          <tr class="table-success">
            <th scope="row">Total</th>
            <td>2</td>
            <td>19</td>
            <td>304</td>
            <td>304*</td>
            <td>APBN: 8 <br />APBD: 11</td>
            <td>Februari - April 2024</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- kembali -->
  <?php include('kembali.php'); ?>
  <!-- /kembali -->

  <!-- footer -->
  <?php include('footer.php'); ?>
  <!-- /footer -->
</body>

</html>