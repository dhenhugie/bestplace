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
                    <div class="row match-height">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Masukan Data Pemeriksaan Pasien</h4>
                                </div>
                                <div class="card-content">
                                    <form class="form form-horizontal" method="post" action="<?= base_url('periksa/simpan-data') ?>">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Pasien</label>
                                                    </div>
                                                    <div class="col-md-9 form-group">
                                                        <input class="form-control" type="hidden" name="id_pasien" id="id_pasien" value="<?= $pendaftaran->id_pasien ?>" readonly required>
                                                        <input class="form-control" type="hidden" name="id_daftar" id="id_daftar" value="<?= $pendaftaran->id_pendaftaran ?>" readonly required>
                                                        <input class="form-control" type="text" name="pasien" id="pasien" value="<?= $pasien->nama ?>" readonly>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Pemeriksaan</label>
                                                    </div>
                                                    <div class="col-md-9 form-group">
                                                        <textarea rows="2" type="text" id="pemeriksaan" class="form-control" name="pemeriksaan" placeholder="Masukan pemeriksaan"></textarea>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Diagnosa</label>
                                                    </div>
                                                    <div class="col-md-9 form-group">
                                                        <textarea rows="2" type="text" id="diagnosa" class="form-control" name="diagnosa" placeholder="Masukan hasil diagnosa"></textarea>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Resep</label>
                                                    </div>
                                                    <div class="col-md-7 form-group">
                                                        <select class="choices form-select" name="resep" id="resep">
                                                            <?php foreach ($resep as $key) { ?>
                                                                <option value="<?= $key->id_resep ?>"><?= $key->nama_obat ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1" style="padding-left: 0;">
                                                        <a role="button" class="btn btn-lg btn-success" id="add-resep">
                                                            <i class="fas fa-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6" id="input-resep">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Masukan Resep</h4>
                                </div>
                                <div class="card-content">
                                    <form class="form form-horizontal" method="post" action="<?= base_url('resep/simpan-data') ?>">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Nama Obat</label>
                                                    </div>
                                                    <div class="col-md-9 form-group">
                                                        <input class="form-control" type="hidden" name="id" id="id" value="<?= $pendaftaran->id_pasien ?>" readonly required>
                                                        <input class="form-control" type="hidden" name="id_daftar" id="id_daftar" value="<?= $pendaftaran->id_pendaftaran ?>" readonly required>
                                                        <input class="form-control" type="text" name="namaobat" id="namaobat" placeholder="Masukan Nama Obat" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Jenis Obat</label>
                                                    </div>
                                                    <div class="col-md-9 form-group">
                                                        <input class="form-control" type="text" name="jenisobat" id="jenisobat" placeholder="Masukan Jenis Obat" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-9 form-group">
                                                        <textarea rows="5" type="text" id="keterangan" class="form-control" name="keterangan" placeholder="Masukan Keterangan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" id="footer-resep">
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Batal</button>
                                            </div>
                                        </div>
                                    </form>
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
                                                    <th>Keluhan</th>
                                                    <th>Pemeriksaan</th>
                                                    <th>Diagnosa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($riwayat as $key) { ?>
                                                    <tr>
                                                        <td class="text-bold-500"><?= $key->tgl_periksa ?></td>
                                                        <td><?= $key->keluhan ?></td>
                                                        <td><?= $key->pemeriksaan ?></td>
                                                        <td><?= $key->diagnosa ?></td>
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

    <!-- Include Choices JavaScript -->
    <script src="<?= base_url() ?>assets/vendors/choices.js/choices.min.js"></script>


    <script src="<?= base_url() ?>assets/vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            $('#resep').change(function() {
                var resep = $('#resep').val();
                $.ajax({
                    url: "<?= base_url() ?>resep/view-data",
                    method: "POST",
                    data: {
                        id_resep: resep
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data, textStatus, jqXHR) {
                        if (data) {
                            $('#input-resep').show();
                            // $('#namaobat').html(data['nama_obat']);
                            $('#namaobat').val(data['nama_obat']);
                            $('#jenisobat').val(data['jenis_obat']);
                            $('#keterangan').val(data['keterangan']);
                        }
                    }
                });
                return false;
            });

            $('#input-resep').hide();
            $('#footer-resep').hide();
            $('#add-resep').click(function() {
                $('#input-resep').show();
                $('#footer-resep').show();
            });
        });

        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let table2 = document.querySelector('#table2');
        let dataTable1 = new simpleDatatables.DataTable(table1);
        let dataTable2 = new simpleDatatables.DataTable(table2);
    </script>
    <?php include('assetsview/script.php'); ?>
</body>

</html>