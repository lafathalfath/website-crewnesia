<?php

$server = "localhost";
$user = "u234789093_pendaftaran";
$password = "Crewnesia123";
$nama_database = "pendaftaran";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
