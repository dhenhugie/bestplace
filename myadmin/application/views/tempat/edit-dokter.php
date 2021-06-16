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
                            <h3>Edit Data Dokter</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Data Dokter</li>
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
                                    <h4 class="card-title">Edit Data Dokter</h4>
                                </div>
                                <?php if ($result) { ?>
                                    <div class="alert alert-success alert-dismissible show fade">
                                        Data Dokter Berhasil Disimpan
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="<?= base_url('dokter/update-data') ?>">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nip">NIP</label>
                                                        <input type="hidden" name="id_dokter" value="<?= $dokter->id_dokter ?>">
                                                        <input type="number" id="nip" class="form-control <?php echo form_error('nip') ?  "is-invalid" : "" ?>" placeholder="Masukan NIP, Contoh : 12345" name="nip" value="<?= $dokter->nip ?>" required>
                                                        <?php if (form_error('nip')) {
                                                            echo
                                                            "<div class='invalid-feedback'>
                                                                <i class='bx bx-radio-circle'></i>
                                                                " . form_error('nip') . "
                                                            </div>";
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Lengkap</label>
                                                        <input type="text" id="nama" class="form-control <?php echo form_error('nama') ?  "is-invalid" : "" ?>" placeholder="Masukan Nama Lengkap, Contoh : John Doe" name="nama" value="<?= $dokter->nama_dokter ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Tempat Tanggal Lahir</label>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="text" id="kota" class="form-control <?php echo form_error('kota') ?  "is-invalid" : "" ?>" placeholder="Masukan Tempat Lahir, Contoh : Jakarta" name="kota" value="<?= $dokter->tempat ?>" required>
                                                            </div>
                                                            <div class="col">
                                                                <input type="date" id="tanggal" class="form-control <?php echo form_error('tanggal') ?  "is-invalid" : "" ?>" name="tanggal" value="<?= $dokter->tgl_lahir ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                                                    <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Masukan Alamat Lengkap" required><?= $dokter->alamat ?></textarea>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="notelpepon">Nomor Telepon</label>
                                                        <input type="number" id="notelpepon" class="form-control <?php echo form_error('notelepon') ?  "is-invalid" : "" ?>" name="notelepon" placeholder="Masukan Nomor Telepon, Contoh : 08xxxx" value="<?= $dokter->no_hp ?>" required>
                                                        <?php if (form_error('notelepon')) {
                                                            echo
                                                            "<div class='invalid-feedback'>
                                                                <i class='bx bx-radio-circle'></i>
                                                                " . form_error('notelepon') . "
                                                            </div>";
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="poli">Poli</label>
                                                        <select class="choices form-select" name="poli" id="poli">
                                                            <?php foreach ($poli as $key) { ?>
                                                                <option value="<?= $key->id_poli ?>" <?= $dokter->id_poli == $key->id_poli ? "selected" : "" ?>><?= $key->jenis_poli ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
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
        $("#tambah-dokter").click(function() {
            alert("add");
        });
    </script>
</body>

</html>