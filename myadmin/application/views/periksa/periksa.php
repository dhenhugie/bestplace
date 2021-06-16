<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Layout - Mazer Admin Dashboard</title>

    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/choices.js/choices.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/fontawesome/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <?php include('assetsview/navbar.php'); ?>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
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
                            <h3>Pemeriksaan</h3>
                            <!-- <p class="text-subtitle text-muted">Multiple form layout you can use</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pemeriksaan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="col-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Pemeriksaan</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="antri-tab" data-bs-toggle="tab" href="#antri" role="tab" aria-controls="antri" aria-selected="true">Dalam Antrian</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="selesai-tab" data-bs-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false">Selesai</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="antri" role="tabpanel" aria-labelledby="antri-tab">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>Nomor</th>
                                                        <th>Tanggal</th>
                                                        <th>Nama Pasien</th>
                                                        <th>Poli</th>
                                                        <th>Dokter</th>
                                                        <th>Keluhan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($pendaftaran) {
                                                        foreach ($pendaftaran as $key) { ?>
                                                            <tr>
                                                                <td class="text-bold-500"><?= $key->id_pendaftaran ?></td>
                                                                <td><?= $key->tgl_daftar ?></td>
                                                                <td><?= $key->nama ?></td>
                                                                <td><?= $key->jenis_poli ?></td>
                                                                <td><?= $key->nama_dokter ?></td>
                                                                <td><?= $key->keluhan ?></td>
                                                                <td><a href="<?= base_url('periksa/check-up/' . $key->id_pendaftaran) ?>" class="btn btn-success"><i class="fas fa-stethoscope"></i> Periksa</a></td>
                                                            </tr>
                                                        <?php }
                                                    } else { ?>
                                                        <tr>
                                                            <td colspan="7">Tidak ada pendaftaran</td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table2">
                                                <thead>
                                                    <tr>
                                                        <th>Nomor</th>
                                                        <th>Tanggal</th>
                                                        <th>Nama Pasien</th>
                                                        <th>Poli</th>
                                                        <th>Dokter</th>
                                                        <th>Keluhan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($selesai) {
                                                        foreach ($selesai as $key) { ?>
                                                            <tr>
                                                                <td class="text-bold-500"><?= $key->id_pendaftaran ?></td>
                                                                <td><?= $key->tgl_daftar ?></td>
                                                                <td><?= $key->nama ?></td>
                                                                <td><?= $key->jenis_poli ?></td>
                                                                <td><?= $key->nama_dokter ?></td>
                                                                <td><?= $key->keluhan ?></td>
                                                                <td><button class="btn btn-primary"><i class="fas fa-eye"></i> Detail</button></td>
                                                            </tr>
                                                        <?php }
                                                    } else { ?>
                                                        <tr>
                                                            <td colspan="6">Tidak ada pendaftaran</td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
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

    <!-- Include Choices JavaScript -->
    <script src="<?= base_url() ?>assets/vendors/choices.js/choices.min.js"></script>


    <script src="<?= base_url() ?>assets/vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            $('#poli').change(function() {
                var poli = $('#poli').val();
                $.ajax({
                    url: "<?= base_url() ?>dokter/data/" + poli,
                    method: "POST",
                    data: {
                        id_poli: poli
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data, textStatus, jqXHR) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value="' + data[i].id_dokter + '">' + data[i].nama_dokter + '</option>';
                        }
                        $('#id_dokter').html(html);
                        console.log(html);
                    }
                });
                return false;
            });
        });

        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let table2 = document.querySelector('#table2');
        let dataTable1 = new simpleDatatables.DataTable(table1);
        let dataTable2 = new simpleDatatables.DataTable(table2);
    </script>
    <?php include('assetsview/script.php'); ?>
    <script>

    </script>
</body>

</html>