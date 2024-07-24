<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('meta.php'); ?>
</head>

<body>
    <!-- header -->
    <?php include ('header.php'); ?>
    <!-- /header -->

    <!-- tabel informasi angkatan -->
    <h1 class="display-5 fw-bold text-center mt-5">
        Informasi Program Pelatihan</h1>
    <h2 class="display-6 fw-bold text-center">
        kejuruan
    </h2>
    <h1 class="display-5 fw-bold text-center mb-5">
        Manufaktur</h1>

    <div class="container border rounded">
        <h3 class="m-3 display-6 fw-bold text-center">
            Program Pengoperasian Mesin Produksi
        </h3>
        <li class="dropdown-divider"></li>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Unit Kompetensi</th>
                        <th scope="col">Kode Unit</th>
                        <th scope="col">Jam Pelatihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">1.</th>
                        <td>Menerapkan Prinsip Keselamatan dan Kesehatan Kerja di Tempat Kerja</td>
                        <td class="text-center">M.74100.001.02</td>
                        <td class="text-center">8</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">2.</th>
                        <td>Menerapkan Prosedur-Prsedur Mutu
                        </td>
                        <td class="text-center">M.74100.002.02</td>
                        <td class="text-center">8</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">3.</th>
                        <td>Mengukur dengan Menggunakan Alat Ukur</td>
                        <td class="text-center">M.74100.005.02</td>
                        <td class="text-center">10</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">4.</th>
                        <td>Membaca Gambar Teknik
                        </td>
                        <td class="text-center">M.74100.009.02</td>
                        <td class="text-center">48</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">5.</th>
                        <td>Menggunakan Perkakas Tangan</td>
                        <td class="text-center">M.74100.010.01</td>
                        <td class="text-center">146</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">6.</th>
                        <td>Mengasah / Memelihara Pahat / Alat Potong
                        </td>
                        <td class="text-center">M.74100.010.01</td>
                        <td class="text-center">146</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">7.</th>
                        <td>Membubut Dasar</td>
                        <td class="text-center">M.74100.010.01</td>
                        <td class="text-center">146</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">8.</th>
                        <td>Mengefrais Dasar</td>
                        <td class="text-center">M.74100.010.01</td>
                        <td class="text-center">146</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="m-5"></div>

    <div class="container mt-5">
        <p class="text-center">
            <b>Catatan: </b>Jam Pelatihan dapat berubah sesuai dengan kebijakan
        </p>
    </div>

    <!-- kembali -->
    <?php include ('kembali.php'); ?>
    <!-- /kembali -->

    <!-- footer -->
    <?php include ('footer.php'); ?>
    <!-- /footer -->
</body>

</html>