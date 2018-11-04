<?php $this->load->view('admin/base_admin_datatable'); ?>

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
              <br>
              <h5>Mengirim Data Ruang</h5>
              <?php echo form_open('Admin/create') ?>
              <?php echo validation_errors(); ?>
              <input type="text" placeholder="username" id="noruang" name="noruang"/>
              <input type="text" placeholder="username" id="namaruang" name="namaruang"/>
              <input type="text" placeholder="password" id="lokasiruang" name="lokasiruang"/>
              <button>Simpan</button>
              </form>
            </div>
          </div>
        </div>

<?php $this->load->view('admin/end_admin'); ?>
