<?php 
$DB_HOST     = "localhost";
$DB_USER     = "id1060855_sepakat";
$DB_PASSWD   = "sepakat";
$DB_DATABASE = "id1060855_sepakat_db";
try {
	$koneksi = new PDO("mysql:host={$DB_HOST};dbname={$DB_DATABASE};charset=utf8", $DB_USER, $DB_PASSWD);
	$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}
