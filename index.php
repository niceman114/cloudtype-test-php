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
    <p><?= getenv('MY_ID') ?></p>
    <p><?= getenv('MY_PASS') ?></p>
    <p><?= $currentDateTime ?></p>
  </body>
</html>
