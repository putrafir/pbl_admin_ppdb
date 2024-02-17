<?php
$hostname = 'localhost:8889';
$username = 'root';
$password = 'root';
$database_name = 'pendaftar';

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "koneksi database rusak";
    die('error!');
}
