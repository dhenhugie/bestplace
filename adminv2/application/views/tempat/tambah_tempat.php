<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <div class="card">
            <div class="card-header">
                <h3><a class="float-end" href="#"></a>Tambah Kategori</h3>
            </div>
            <div class="card-body">
                                    <?php echo validation_errors(); ?>
                                        <form class="form" method="post" action="<?= base_url('admin/tempat/simpan_tempat') ?>" enctype="multipart/form-data">
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
                                                            <?php foreach ($kategori as $k) { ?>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="checkbox">
                                                                            <input type="checkbox" class="form-check-input" id="checkbox2" name="kategori[]" value="<?= $k->id_kategori ?>">
                                                                            <label for="checkbox2"><?= $k->nama_kategori ?></label>
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