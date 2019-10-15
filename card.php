<!doctype html>
<html>
    <head>
        <link href="card/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Open+Sans" rel="stylesheet">
    </head>
    <body>
        <div class="page" id="one">
            <div id="header">COOKIES INC</div>
            <img src="card/photo.jpg" id="photo" />
            <img src="card/logo.png" id="logo" />
            <img src="card/qr.png" id="qr" />
            <div id="title">Chief Cookie Eater</div>
            <div id="name"><?php echo $NAME;?></div>
            <div id="id">ID#: <?php echo $ID;?></div>
            <div id="security-level">Security Level 5</div>
            <div id="expires">Expires: 08/2019</div>
        </div>
        <div class="page" id="two">
            <img src="card/logo.png" id="logo2" />
            <div id="addrz">
                <div>Cookies Inc</div>
                <div>123 Seasame Street</div>
                <div>Houston, Texas</div>
                <div>(999) 999-9999</div>
                <div>github.com/energized-id</div>
                <div>more text</div>

            </div>
            <img src="https://barcode.tec-it.com/barcode.ashx?data=1948293&code=Code39&multiplebarcodes=false&translate-esc=false&unit=Fit&dpi=96&imagetype=Png&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0" id="barcode" />
        </div>
    </body>
</html>