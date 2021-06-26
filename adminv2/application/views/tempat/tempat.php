<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <div class="card">
            <div class="card-header">
                <h3><a class="float-end" href="<?php echo base_url() ?>admin/tempat/tambah_tempat"><button class="btn btn-primary float-end" type="button">Tambah
                            Kategori</button></a>Data Tempat</h3>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    
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
                    <?php foreach ($tempat as $t) { ?>
                        <tr>
                            <td><?php echo $t->nama;?></td>
                            <td><?php echo $t->alamat;?></td>
                            <td><?= mb_strimwidth(strip_tags($t->deskripsi), 0, 50, "..."); ?></td>
                            <td><?php $data = $this->model->kategori_pertempat($t->id_tempat)->result();
                                                $num = 0;
                                                foreach ($data as $kat) { ?>
                                                    <a href="<?= base_url('kategori/' . $kat->id_kategori) ?>"><?php echo $num > 0 ? ", " : "" ?><b><?= $kat->nama_kategori ?></b></a>
                                                <?php $num++;
                                                } ?></td>
                            <td><a class="card-link" href="#"><button class="btn btn-primary" type="button"><i class="fa fa-edit"></i></button></a>
                            <a class="card-link" href="<?php echo base_url().'admin/tempat/hapus_tempat/'.$t->id_tempat?>" onclick="return confirm('Yakin menghapus data?')"><button class="btn btn-primary" type="button"><i class="fa fa-trash"></i></button></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>