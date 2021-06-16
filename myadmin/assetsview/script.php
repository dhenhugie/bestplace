<script>
    $(document).ready(function() {
        var uri = "<?php echo $this->uri->segment(1) ?>";
        var uri2 = "<?php echo $this->uri->segment(2) ?>";
        console.log(uri)
        console.log(uri2)
        if (uri == "tempat") {
            $(document).prop("title", "Tempat");
            $("#tempat-nav").addClass("active").siblings().removeClass('active');
            $("#sub-data-pasien-nav").addClass("active");
        } else if (uri == "kategori") {
            $(document).prop("title", "Pasien");
            $("#kategori-nav").addClass("active").siblings().removeClass('active');
            $("#sub-tambah-kategori-nav").addClass("active");
        } else if (uri == "daftar") {
            $(document).prop("title", "Pendaftaran");
            $("#daftar-nav").addClass("active").siblings().removeClass('active');
        } else if (uri == "periksa" && (uri2 == null || uri2 == "")) {
            $(document).prop("title", "Pemeruksaan");
            $("#periksa-nav").addClass("active").siblings().removeClass('active');
        } else if (uri == "dokter" && (uri2 == null || uri2 == "")) {
            $(document).prop("title", "Dokter");
            $("#dokter-nav").addClass("active").siblings().removeClass('active');
            $("#sub-data-dokter-nav").addClass("active");
        } else if (uri == "dokter" && uri2 == "tambah-data") {
            $(document).prop("title", "Dokter");
            $("#dokter-nav").addClass("active").siblings().removeClass('active');
            $("#sub-tambah-dokter-nav").addClass("active");
        } else {
            $(document).prop("title", "Admin Best Place");
            $("#dashboard-nav").addClass("active").siblings().removeClass('active');
        }
    });
</script>