<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount(__DIR__.'/simadina-613ff-firebase-adminsdk-pz7sp-76d6720596.json')
    ->withDatabaseUri('https://simadina-613ff-default-rtdb.firebaseio.com');

$database = $factory->createDatabase();
$reference = $database->getReference("pesan");
$snapshot = $reference->getSnapshot();
$value = $snapshot->getValue();

?>

