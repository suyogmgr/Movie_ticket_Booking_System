<?php

session_start();

require "db.php";

$username = $phone_no = $pass = $email = '';
$username_err = $phone_no_err = $pass_err = $email_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username";
    } else {
        $username = trim(filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS));

        if (strlen($username) < 3) {
            $username_err = "Username must be at least 3 characters long";
        }
    }

    //Email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Email";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Enter a valid email address";
    } else {
        $email = trim($_POST["email"]);
    }

    // Phone number
    if (empty(trim($_POST["number"]))) {
        $phone_no_err = "Phone number is required";
    } elseif (ctype_digit($_POST["number"]) && strlen($_POST["number"]) >= 10 && strlen($_POST["number"]) <= 15) {
        $phone_no = trim($_POST["number"]);
    } else {
        $phone_no_err = "Invalid phone number. It must be between 10 and 15 digits";
    }

    //Password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Password";
    } else {
        if (strlen($_POST["password"]) < 8) {
            $pass_err = "Password must be at least 8 characters";
        } else {
            $pass = trim($_POST["password"]);
        }
    }


    if(empty($username_err) && empty($email_err) && empty($password_err)){
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users(user, email, phone, password) 
        VALUES(?, ?, ?, ?)";

        try{
            $stmt = mysqli_prepare($conn, $sql);
            if(!$stmt){
                die("SQL error: ". mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $phone_no, $hash);
            mysqli_stmt_execute($stmt);

            header("Location: signin.php");
        }catch(mysqli_sql_exception $e){
            echo "Something went wrong: ". $e -> getMessage();
        }
        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="shortcut icon" href="../assets/user.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="whole">
            <div class="title"><span>SignUp Page</span></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="<?php echo !empty($username_err) ? htmlspecialchars($username_err) : 'Username'; ?>" required>
                </div>
                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="<?php echo !empty($email_err) ? htmlspecialchars($email_err) : 'Email'; ?>" required>
                </div>
                <div class="row">
                    <i class="fas fa-phone"></i>
                    <input type="number" name="number" placeholder="<?php echo !empty($phone_no_err) ? htmlspecialchars($phone_no_err) : 'Phone number'; ?>" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="<?php echo !empty($pass_err) ? htmlspecialchars($pass_err) : 'Password'; ?>" required>
                </div>

                <div class="row botton">
                    <input type="submit" value="SignUp">
                </div>
                <div class="signup_link">Have an Account? <a href="./signin.php">LogIn</a></div>
            </form>
        </div>
    </div>
</body>

</html>