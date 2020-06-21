<?php
$DB_HOST="localhost";
$DB_USERNAME="root";
$DB_PASSWORD="";
$DB_DATABASE="db_upload";
$DB_PORT='3306';
//buat koneksi
$kon = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD,  $DB_DATABASE, $DB_PORT);
//cek koneksi
if($kon->connect_error) {
    die('Koneksi Gagal :' .$kon->connect_error);
}
?>