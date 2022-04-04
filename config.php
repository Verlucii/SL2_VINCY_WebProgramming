<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "bank1";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){

    }else{
        echo "Koneksi Gagal ".mysqli_connect_error()." .";
    }
?>