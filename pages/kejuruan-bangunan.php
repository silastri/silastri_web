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
        Bangunan</h1>

    <div class="container border rounded">
        <h3 class="m-3 display-6 fw-bold text-center">
            Program Finishing dengan Teknik Semprot
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
                        <td>Menyiapkan Pekerjaan Finishing</td>
                        <td class="text-center">C.310010.014.01</td>
                        <td class="text-center">32</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">2.</th>
                        <td>Menyiapkan Permukaan Komponen / Produk Untuk Finishing</td>
                        <td class="text-center">C.310010.015.01</td>
                        <td class="text-center">66</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">3.</th>
                        <td>Menyesuaikan Warna Finishing dengan Spesifikas</td>
                        <td class="text-center">C.310010.016.01</td>
                        <td class="text-center">32</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">4.</th>
                        <td>Mengerjakan Finishing dengan Teknik Semprot</td>
                        <td class="text-center">C.310010.018.01</td>
                        <td class="text-center">114</td>
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