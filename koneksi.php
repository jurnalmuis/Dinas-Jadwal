<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = '172.20.0.2';
$databaseName = 'mobildinaspendidikan';
$databaseUsername = 'root';
$databasePassword = 'YuuCh4n';

$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
