<?php

require '../vendor/autoload.php';

use HelloWorld\SayHello;
use \app\wcs\Hello;

$Hello = new SayHello();
$TheHello = new Hello();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer</title>
</head>
<body>
<p><?= $Hello->world() ?></p>
<p><?= Hello::talk() ?></p>
</body>
</html>
