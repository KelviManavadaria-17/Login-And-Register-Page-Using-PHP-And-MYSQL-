<?php
// configure using pdo to avoid sql injections
$DSN='mysql:host=localhost;dbname=login';
$ConnectingDB = new PDO($DSN,'root','');




?>