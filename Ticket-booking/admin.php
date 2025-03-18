<?php 

session_start();
    if(!isset($_SESSION['user_id'])){
        $_SESSION['error'] = 'You must be logged in for this page';
        header('location: ./sign in/signup.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aliquam cumque rerum non eaque est, placeat, labore amet aut similique porro. Vero, iusto quaerat. Porro unde sit nam ea dolor!</p>
</body>
</html>