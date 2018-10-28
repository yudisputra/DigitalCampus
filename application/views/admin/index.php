<?php $this->load->view('admin/base_admin'); ?>

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

<?php $this->load->view('admin/end_admin'); ?>
