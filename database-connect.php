<?php
$databaseName = 'DPWINSOR_cs008-lab8';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$dbUserName = "dpwinsor_writer"; 
$dbPassword = "c2R8GrgrNlYOssLc";

$pdo = new PDO($dsn, $dbUserName, $dbPassword);
?>
