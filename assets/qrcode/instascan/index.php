<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <script type="text/javascript" src="<?php echo base_url()?>assets/qrcode/instascan/instascan.min.js" ></script>
  </head>
  <body>
    <video id="preview"></video>
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
            alert('Do you want to open this page?: ' + content);
            window.open(content, "_blank");
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
</html>
</html>