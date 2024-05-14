<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('meta.php'); ?>
</head>

<body>
  <!-- header -->
  <?php include('header.php'); ?>
  <!-- /header -->

  <!-- halaman 404 -->
  <div id="not_found" class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="./images/maintenance.jpg" alt="Gambar Pendaftaran" />
    <h1 class="display-5 fw-bold">Halaman Tidak Tersedia</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">
        Halaman sedang tidak tersedia atau sedang dalam perbaikan. Mohon coba
        lagi nanti.
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="index.html"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">
            Kembali ke Beranda
          </button></a>
      </div>
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