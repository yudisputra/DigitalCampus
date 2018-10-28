<?php $this->load->view('pinjam/base_kunci') ?>    

    <h1 align="center">Form Peminjangan Ruangan</h1>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <?php foreach ($mahasiswa as $key) 
            {
                $foto       = $key->foto;
                $nim        = $key->nim;
                $nama       = $key->nama;
            } ?>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <br>
            <br>
            <img style="max-height: 600px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 400px;" src="<?php echo base_url()?>assets/image/mahasiswa/<?php echo $foto?>" class="img-responsive center" width="100%"> 
            <br>
            <br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_open('Peminjaman/inputpeminjaman'); ?>
                <div class="form-group">
                <br>
                <br>
                <h4>NIM    :  <input type="text" class="form-control" name="nim" value="<?php echo $nim?>" readonly></h4>
                <br>
                <h4>Nama    : <?php echo $nama?></h4>
                <br>
                <h4>Meminjam Ruangan :</h4>
                <select class="form-control" id="ruang" name="ruang">
                <?php foreach ($ruang as $key) 
                { ?>
                <option value="<?php echo $key->namaruang; ?>" name="<?php echo $key->namaruang; ?>"><?php echo $key->namaruang; ?></option>
                <?php } ?>
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
               <?php echo form_close(); ?>
            </div>
            </div>
        </div>

 <?php $this->load->view('pinjam/end_kunci') ?>