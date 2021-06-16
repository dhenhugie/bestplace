<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <?php include('assetsview/navbar.php'); ?>
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
                            <!-- <p class="text-subtitle text-muted">For user to check they list</p> -->
                            <p><button class="btn btn-primary" id="tambah-tempat">Tambah Data</button></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tempat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Simple Datatable
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tempat as $key) { ?>
                                        <tr>
                                            <td><?= $key->nama ?></td>
                                            <td><?= $key->alamat ?></td>
                                            <td><?= mb_strimwidth(strip_tags($key->deskripsi), 0, 50, "..."); ?></td>
                                            <td>
                                                <?php $data = $this->model->kategori_pertempat($key->id_tempat)->result();
                                                $num = 0;
                                                foreach ($data as $kat) { ?>
                                                    <a href="<?= base_url('kategori/' . $kat->id_kategori) ?>"><?php echo $num > 0 ? ", " : "" ?><b><?= $kat->nama_kategori ?></b></a>
                                                <?php $num++;
                                                } ?>
                                            </td>
                                            <td style="width: 180px;">
                                                <a href="<?= base_url('tempat/view-data/' . $key->id_tempat) ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail" id="detail-tempat"><i class="bi bi-eye-fill"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>assets/js/extensions/sweetalert2.js"></script>
    <script src="<?= base_url() ?>assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <?php include('assetsview/script.php'); ?>

    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
        $("#tambah-tempat").click(function() {
            location.href = "<?= base_url('tempat/tambah-data') ?>";
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>