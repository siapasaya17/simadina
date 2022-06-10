<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount(__DIR__.'/trychat-32c87-firebase-adminsdk-16x79-465b21f0e9.json')
    ->withDatabaseUri('https://trychat-32c87-default-rtdb.firebaseio.com');

$database = $factory->createDatabase();
$reference = $database->getReference("Pesan");
$snapshot = $reference->getSnapshot();
$value = $snapshot->getValue();

?>

