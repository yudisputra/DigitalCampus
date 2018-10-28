<?php $this->load->view('admin/base_admin');?>

 <div id="content-wrapper">
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Upload Foto</div>
           <div class="card-body">

	<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open_multipart('Admin/do_upload_mhs'); ?>

			<legend>Upload Foto Mahasiswa</legend>
			<?php echo validation_errors(); ?>
			<br>
			<div class="form-group">
			<label for="">NIM Mahasiswa</label>
			<input type="text" class="form-control" id="nim" name="nim">
			<br>
			<div class="form-group">
				<label for="">Foto Mahasiswa (Nama File Harus NIM)</label>
				<br>
				<input type="file" name="foto" size="20"/>
			</div>
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
	</div>	 
	</div>
        </div>

<?php $this->load->view('admin/end_admin');?>
