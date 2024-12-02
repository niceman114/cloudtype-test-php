<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$currentDateTime = Carbon::now()->toDateTimeString();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
    <p>MY_ID: <?= getenv('MY_ID') ?></p>
    <p>MY_PASS: <?= getenv('MY_PASS') ?></p>
    <p>readOnly: <?= getenv('readOnly') ?></p>
    <p><?= $currentDateTime ?></p>
  </body>
</html>
