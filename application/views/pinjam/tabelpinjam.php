<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fitur Peminjaman Kunci dan Barang</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>/assets/theme/pinjam/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
     <link href="<?php echo base_url()?>/assets/theme/pinjam/css/2-col-portfolio.css" rel="stylesheet">
     <script type="text/javascript" src="<?php echo base_url()?>assets/qrcode/instascan/instascan.min.js" ></script>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/DataTables/datatables.css">

     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

     <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">DIGITAL CAMPUS POLINEMA</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()?>Home/index">Home</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
            </ul>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<!-- <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table> -->
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data peminjaman ruangan</h2>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th>No</th>
                    <th>No Ruangan</th>
                    <th>NIM</th>
                    <th>Waktu Pinjam</th>
                    <th>Waktu Kembali</th>
                    <th>Status</th>
               <th style="width:125px;">Action
                  </p></th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no = 1;
                        foreach($pinjam as $key){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $key->noruang;?></td>
                            <td><?php echo $key->nim;?></td>
                            <td><?php echo $key->waktupinjam;?></td>
                            <td><?php echo $key->waktukembali;?></td>
                            <td><?php echo $key->status;?></td>
                            <td style="text-align: center;">
                            </td>
                        </tr>
                    <?php }?>

              </tbody>
            </table>
        </div>
    </div>
</div>
 <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>assets/DataTables/datatables.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
     <script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

<?php $this->load->view('pinjam/end_kunci'); ?>