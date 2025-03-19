<?php 

session_start();
if(isset($_SESSION['role']) === "admin"){
    header("location: ./sign in/signin.php");
    exit;
}
?>