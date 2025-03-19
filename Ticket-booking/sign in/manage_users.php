<?php
    require "admin_auth.php";
    require "db.php";

    $sql = "SELECT id, user, email, phone, role FROM users";
    $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage_users</title>
</head>
<body>
    <h1>User Management</h1>
    <h2>Users:<?php echo mysqli_num_rows($result); ?></h2>
    <a href="admin_dashboard.php">Back to Dashboard</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo htmlspecialchars($row['user']);?></td>
            <td><?php echo htmlspecialchars($row['email']);?></td>
            <td><?php echo htmlspecialchars($row['phone']);?></td>
            <td><?php echo htmlspecialchars($row['role']);?></td>
            <td>
                <a href="edit_user.php? id=<?php echo $row['id']?>">Edit</a>
                <a href="delete_user.php? id=<?php echo $row['id']?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>