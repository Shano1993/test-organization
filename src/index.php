<?php

use stefa\PhpPdoSingleton\Database;

require './vendor/autoload.php';

$database = new Database('localhost', 'newDatabase', 'root', '');
$database->getPDO()->query("
    SELECT * user WHERE id=1
");
