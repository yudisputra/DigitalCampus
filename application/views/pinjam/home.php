<?php $this->load->view('pinjam/base_kunci') ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Fitur Peminjaman Kunci dan Barang
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <a href="<?php echo base_url()?>Peminjaman/pinjam">
                    <img class="img-responsive" src="<?php echo site_url()?>assets/image/kelas2.jpg" alt="">
                </a>
                <h3>
                    <a href="<?php echo base_url()?>Peminjaman/pinjam">Pinjam Ruang</a>
                </h3>
                <p>Silahkan untuk mahasiswa yang akan meminjam kunci ruangan membuka aplikasi DICAM android dan membuka fitur pinjam.</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="<?php echo base_url()?>Peminjaman/datatabelpinjam">
                    <img class="img-responsive" src="<?php echo site_url()?>assets/image/kunci2.jpg" alt="">
                </a>
                <h3>
                    <a href="<?php echo base_url()?>Peminjaman/datatabelpinjam">Data Peminjaman</a>
                </h3>
                <p>Klik disini untuk melihat Data Ruang dan Mahasiswa yang meminjam.</p>
            </div>
        </div>
        <!-- /.row -->
        <hr>

    </div>
    <!-- /.container -->

    <?php $this->load->view('pinjam/end_kunci') ?>
