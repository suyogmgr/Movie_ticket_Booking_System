
<?php
require "admin_auth.php";
require "db.php";

if (!isset($_GET['id'])) {
    header("Location: manage_users.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $role = $_POST["role"];

    $update_sql = "UPDATE users SET user=?, email=?, phone=?, role=? WHERE id=?";
    $update_stmt = mysqli_prepare($conn, $update_sql);
    mysqli_stmt_bind_param($update_stmt, "ssssi", $username, $email, $phone, $role, $id);
    mysqli_stmt_execute($update_stmt);
    
    header("Location: manage_users.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST">
        <label>Username: <input type="text" name="username" value="<?= htmlspecialchars($user['user']); ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']); ?>" required></label><br>
        <label>Phone: <input type="text" name="phone" value="<?= htmlspecialchars($user['phone']); ?>" required></label><br>
        <label>Role: 
            <select name="role">
                <option value="user" <?= $user['role'] == 'user' ? 'selected' : ''; ?>>User</option>
                <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
            </select>
        </label><br>
        <button type="submit">Update</button>
    </form>
    <a href="manage_users.php">Back</a>
</body>
</html>
