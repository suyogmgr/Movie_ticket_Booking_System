<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<?php if (isset($_SESSION['user_id'])): ?>
    <!-- Content for Logged-In Users -->
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <a href="dashboard.php">Go to Dashboard</a>
    <a href="logout.php">Logout</a>
<?php else: ?>
    <!-- Content for Logged-Out Users -->
    <h2>Welcome to Our Website!</h2>
    <p>Please <a href="login.php">Login</a> or <a href="register.php">Register</a> to access more features.</p>
<?php endif; ?>

</body>
</html>
