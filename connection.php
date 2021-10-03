<?php

require __DIR__.'/vendor/autoload.php';


use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('onlinevotingsystem-166e1-firebase-adminsdk-3gynj-1edd0cb904.json');
$factory = (new Factory)
->withDatabaseUri('https://onlinevotingsystem-166e1-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>