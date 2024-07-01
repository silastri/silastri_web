<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('meta.php'); ?>
</head>

<body>
  <!-- header -->
  <?php include('header.php'); ?>
  <!-- /header -->

  <!-- tentang -->
  <div id="tentang" class="mt-0 pt-1 px-4 py-5 my-5 text-center">
    <video class="img-fluid" preload="none" autoplay controls muted loop poster="../images/profil_foto.JPG" style="max-height: 400px; width: auto">
      <source src="../videos/Profil UPT BLK Singosari.mp4" type="video/mp4" />
    </video>
    <figcaption>Video Profil UPT BLK Singosari</figcaption>
    <div class="p-5"></div>
    <h1 class="display-5 fw-bold">Tentang Kami</h1>
    <div class="col-lg-8 mx-auto">
      <p class="lead mb-4">
        UPT BLK Singosari Malang adalah salah satu BLK milik Dinas Tenaga
        Kerja dan Transmigrasi Provinsi Jawa Timur. UPT BLK Singosari bertugas
        melaksanakan sebagian tugas Dinas dibidang pelaksanaan pelatihan
        kerja, pengembangan pengetahuan berdasarkan klaster kompetensi,
        ketatausahaan dan pelayanan masyarakat. Pelatihan yang diselenggarakan
        UPT BLK bersifat skilling, up-skilling dan re-skilling kepada
        masyarakat umum, industry, instansi pemerintah maupun swasta.
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a target="_blank" href="https://wa.me/6282334352225?text=Halo%20min,%20mau%20nanya%20nih!"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">
            Hubungi kami!
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