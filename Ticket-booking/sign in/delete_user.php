<?php
require "admin_auth.php";
require "db.php";

if (!isset($_GET['id'])) {
    header("Location: manage_users.php");
    exit;
}

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

header("Location: manage_users.php");
exit;
?>
