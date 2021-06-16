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
                            <h3>Data Tempat</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Tempat</li>
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
                                    <h4 class="card-title">Data Tempat</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="<?= base_url('tempat/simpan-data') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Tempat</label>
                                                        <input type="text" id="nama" class="form-control" name="nama">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nama">Ringkasan</label>
                                                        <input type="text" id="ringkasan" class="form-control" name="ringkasan">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-md-6 col-12 mt-4">
                                                <label for="deskripsi" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" rows="4"></textarea>
                                            </div>
                                            <div class="col-md-12 col-md-6 col-12 mt-4">
                                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="15"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="notelpepon" class="mb-3 mt-3">Kategori</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <?php foreach ($kategori as $key) { ?>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="checkbox">
                                                                            <input type="checkbox" class="form-check-input" id="checkbox2" name="kategori[]" value="<?= $key->id_kategori ?>">
                                                                            <label for="checkbox2"><?= $key->nama_kategori ?></label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-check form-switch mt-3 mb-3">
                                                        <input class="form-check-input" type="checkbox" id="tiket" name="tiket" checked>
                                                        <label class="form-check-label" for="tiket">Tiket untuk masuk tempat ini</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" id="harga" class="form-control" value="" placeholder="Harga Tiket" name="harga">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="file" id="image-source" name="userfile[]" multiple="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button class="btn btn-primary me-1 mb-1" type="submit">Simpan</button>
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
    <script src="<?= base_url() ?>assets/vendors/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/tinymce/plugins/code/plugin.min.js"></script>

    <script src="<?= base_url() ?>assets/vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <?php include('assetsview/script.php'); ?>
    <script>
        tinymce.init({
            selector: '#deskripsi'
        });
        tinymce.init({
            selector: '#dark',
            toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
            plugins: 'code'
        });
    </script>
</body>

</html>