<?php
$databaseName = 'DPWINSOR_cs2480_lab_2';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$dbUserName = "dpwinsor_writer"; 
$dbPassword = "tU<&q&6Hmk8QGb7>p<r!";

$pdo = new PDO($dsn, $dbUserName, $dbPassword);
?>
