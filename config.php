<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pendaftaran_siswa";

    $db = mysqli_connect($host, $username, $password, $dbname);

    if( !$db ) {

        die("Gagal terhubung dengan database: " . mysqli_connect_error()); 

    }


?>