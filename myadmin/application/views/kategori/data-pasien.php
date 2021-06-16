<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Layout - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="<?= base_url() ?>https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <?= include('assetsview/navbar.php') ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pasien</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pasien</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Pasien</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="noid">No Identitas</label>
                                                    <input type="number" id="noid" class="form-control" value="<?= $pasien->no_ktp ?>" name="noid" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" id="nama" class="form-control" value="<?= $pasien->nama ?>" name="nama" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Tempat Tanggal Lahir</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" id="kota" class="form-control" value="<?= $pasien->tempat ?>" name="kota" readonly>
                                                        </div>
                                                        <div class="col">
                                                            <input type="date" id="tanggal" class="form-control" value="<?= $pasien->tgl_lahir ?>" name="tanggal" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="kelamin">Jenis Kelamin</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jenkel" value="1" id="jenkel1" <?= $pasien->jenkel == 1 ? "checked" : "" ?>>
                                                                <label class="form-check-label" for="jenkel1">
                                                                    Laki-laki
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jenkel" value="2" id="jenkel1" <?= $pasien->jenkel == 2 ? "checked" : "" ?>>
                                                                <label class="form-check-label" for="jenkel1">
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                                <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Masukan Alamat Lengkap" readonly><?= $pasien->alamat ?></textarea>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class='form-check'>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="bpjs" name="bpjs" class='form-check-input' <?= $pasien->bpjs == 1 ? "checked" : "" ?>>
                                                            <label for="bpjs">Pengguna BPJS</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nobpjs">Nomor BPJS</label>
                                                    <input type="number" id="nobpjs" class="form-control" name="nobpjs" value="<?= $pasien->no_bpjs ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="notelpepon">Nomor Telepon</label>
                                                    <input type="number" id="notelpepon" class="form-control" name="notelepon" value="<?= $pasien->no_hp ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="pekerjaan">Pekerjaan</label>
                                                    <input type="text" id="pekerjaan" class="form-control" name="pekerjaan" value="<?= $pasien->pekerjaan ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button onclick="history.back()" class="btn btn-primary me-1 mb-1">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Riwayat kunjungan pasien</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Pemeriksaan</th>
                                                    <th>Diagnosa</th>
                                                    <th>Dokter</th>
                                                    <th>Poli</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($riwayat as $key) { ?>
                                                    <tr>
                                                        <td class="text-bold-500"><?= $key->tgl_periksa ?></td>
                                                        <td><?= $key->pemeriksaan ?></td>
                                                        <td><?= $key->diagnosa ?></td>
                                                        <td><?= $key->nama_dokter ?></td>
                                                        <td><?= $key->jenis_poli ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>assets/vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <?php include('assetsview/script.php'); ?>
    <script>
        $("#tambah-pasien").click(function() {
            alert("add");
        });
    </script>
</body>

</html>