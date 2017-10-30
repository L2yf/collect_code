<?php
//header('content-Type: image/png');

require_once './vendor/autoload.php';
    $qr = new Endroid\QrCode\QrCode();

    $qr->setText('http://www.ba222du.com2222测试/');
    $qr->setSize('200');
    $qr->setPadding('10');
    $file_name = '1.jpg';
    $qr->save($file_name);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>QR code</title>
    </head>
    <body>
         <img src="./1.jpg" alt="QR code">
    </body>
</html>
