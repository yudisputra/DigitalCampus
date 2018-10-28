<?php 
    $session_data = $this->session->userdata('logged_in');
    $username = $session_data['username'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
    <title>Admin DICAM</title>
  
  <!--Tema dari Asset-->
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/theme/admin/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/theme/admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/theme/admin/vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/theme/admin/css/sb-admin.css') ?>" rel="stylesheet">
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">MENU</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          </a>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('admin/index') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Data Table Admin:</h6>
            <a class="dropdown-item" href="<?php echo site_url('admin/mahasiswa') ?>">Data Table Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/dosen') ?>">Data Table Dosen</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/ruang') ?>">Data Table Ruang</a>
             <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa_rest/index_get') ?>">Test Mahasiswa REST</a>
          </div>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Mahasiswa</div>
            <div class="card-body">
              <div class="table-responsive">
                 <div style='height:20px;'></div>  
    <div>
<?php echo $output; ?>
 
    </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/theme/admin/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/theme/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/theme/admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/theme/admin/vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/theme/admin/vendor/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/theme/admin/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/theme/admin/js/sb-admin.min.js') ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/theme/admin/js/demo/datatables-demo.js') ?>"></script>
    <script src="<?php echo base_url('assets/theme/admin/js/demo/chart-area-demo.js') ?>"></script>


    <!-- Data Grocerry CRUD -->
    <script src="<?php echo base_url('assets/grocery_crud/js/jquery-1.8.2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/grocery_crud/js/jquery_plugins/jquery.chosen.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/grocery_crud/js/jquery_plugins/config/jquery.chosen.config.js') ?>"></script>
    <script src="<?php echo base_url('/assets/grocery_crud/themes/flexigrid/js/jquery.form.js') ?>"></script>
    <script src="<?php echo base_url('assets/grocery_crud/themes/flexigrid/js/flexigrid-add.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/themes/demo/css/newtab.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/grocery_crud/css/jquery_plugins/chosen/chosen.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/grocery_crud/themes/flexigrid/css/flexigrid.css') ?>" type="text/css" />
  </body>

</html>
