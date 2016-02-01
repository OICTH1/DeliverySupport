注文情報のバーコードをカメラで撮影してください
<br>
<input type="file" id='select_image' value="" accept="image/*;capture=camera">
<br>
<button type="button" name="button">読み込み</button>
<br>
<canvas id="qr-canvas" width="480" height="600"></canvas>
<?php
    echo Asset::js(array(
        '/qr/grid.js',
         '/qr/version.js',
         '/qr/detector.js',
         '/qr/formatinf.js',
         '/qr/errorlevel.js',
         '/qr/bitmat.js',
         '/qr/datablock.js',
         '/qr/bmparser.js',
         '/qr/datamask.js',
         '/qr/rsdecoder.js',
         '/qr/gf256poly.js',
         '/qr/gf256.js',
         '/qr/decoder.js',
         '/qr/QRCode.js',
         '/qr/findpat.js',
         '/qr/alignpat.js',
         '/qr/databr.js',
         '/client/add.js'
    ));
 ?>
 <script type="text/javascript">
        $('#select_image').change(renderImage);
        qrcode.callback = function(result) {
            if(isFinite(0+result)){
                alert(result);
            } else {
                alert('間違ったQRコードです。');
            }
        }
        $('button').click(function(){
            qrcode.decode();
        });
 </script>
 <script type="text/javascript">

 </script>
