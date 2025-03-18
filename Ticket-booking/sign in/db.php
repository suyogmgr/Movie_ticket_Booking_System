<?php
    $host = 'sql101.infinityfree.com';
    $user = 'if0_38546730';
    $pass = 'mpYN9DiSdtViI0';
    $db_name = 'if0_38546730_movies';
    $conn = '';

    $conn = mysqli_connect($host, $user, $pass, $db_name);


    if(!$conn){
        echo "Somethning went wrong:". mysqli_connect_error();
    }
?>