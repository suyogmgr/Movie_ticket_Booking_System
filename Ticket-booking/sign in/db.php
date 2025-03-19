<?php
    $host = 'localhost';
    $user = 'rana';
    $pass = '';
    $db_name = 'movie';
    $conn = '';

    $conn = mysqli_connect($host, $user, $pass, $db_name);


    if(!$conn){
        echo "Somethning went wrong:". mysqli_connect_error();
    }
?>
