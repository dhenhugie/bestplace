<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="<?= base_url() ?>assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item active " id="dashboard-nav">
                    <a href="<?= base_url() ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item " id="tempat-nav">
                    <a href="<?= base_url('tempat') ?>" class='sidebar-link'>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Tempat</span>
                    </a>
                </li>
                <li class="sidebar-item " id="kategori-nav">
                    <a href="<?= base_url('kategori') ?>" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>kategori</span>
                    </a>
                </li>
                <li class="sidebar-item " id="tiket-nav">
                    <a href="<?= base_url('tiket') ?>" class='sidebar-link'>
                        <i class="bi bi-credit-card-2-front"></i>
                        <span>Pemesanan Tiket</span>
                    </a>
                </li>


            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>