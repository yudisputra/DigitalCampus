<?php $this->load->view('pinjam/base_kunci') ?>

<h1 align="center">Silahkan Scan QR Code KTM Anda</h1>
    <hr>
    <div style="text-align:center"> 
    <video id="preview"></video>
    </div>
    <script>
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview'),
                mirror : true,
                captureImage : true
            }
        );

        //data berupa link
        scanner.addListener('scan', function(content) {
            // alert('Do you want to open this page?: ' + content);
             var str = "";
             str += "http://localhost:8012/DigitalCampus/Peminjaman/mahasiswa";
             var ret = content.replace('http:/','');
             str += ret;
             window.open(str, "_blank");
             window.close();
        });

        // scanner.addListener('scan', function(image) {
        //     vardump(image);
        // });

        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("Please enable Camera!");
            }
        });
    </script>
 </body>

  <?php $this->load->view('pinjam/end_kunci') ?>