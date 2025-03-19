<?php
session_start();

require "db.php";

$login_input = $pass = '';
$login_input_err = $pass_err = '';


if (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Email or Phone
    if (empty(trim($_POST['login_input']))) {
        $login_input_err = "Email or Phone";
    } else {
        $login_input = trim(filter_input(INPUT_POST, 'login_input', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    }

    //Password
    if (empty(trim($_POST['password']))) {
        $pass_err = 'Password';
    } else {
        if (strlen(trim($_POST['password'])) < 8) {

            $pass_err = 'Password must have 8 characters';
        } else {

            $pass = trim($_POST['password']);
        }
    }


    if(empty($login_input_err) && empty($pass_err)){
        $sql = 'SELECT * FROM users WHERE phone = ? or email = ?';
        $stmt = mysqli_prepare($conn, $sql);

        if(!$stmt){
            die("Mysqli error: ". mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "ss", $login_input, $login_input);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);

            if(password_verify($pass, $row['password'])){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['user'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['reg_date'] = $row['red_date'];
                $_SESSION['role'] = $row['role'];
                
                if($_SESSION['role'] === 'admin'){
                    header("location: ./admin_dashboard.php");
                }else{
                    header("location: ../index.php");
                }
                exit;
            }else{
                echo "<script> alert('Incorrect Password')</script>";
            }
        }else{
            echo "<script> alert('Account Not Found')</script>";
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
    <title>LogIn Page</title>
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="shortcut icon" href="../assets/user.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="whole">
            <div class="title"><span>LogIn Page</span></div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="login_input" placeholder="<?php echo !empty($login_input_err) ? htmlspecialchars($login_input_err) : 'Email or Phone'; ?>" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="<?php echo !empty($pass_err) ? htmlspecialchars($pass_err) : 'Password'; ?>">
                </div>
                <div class="row botton">
                    <input type="submit" value="LogIn">
                </div>
                <div class="signup_link">Not a Member? <a href="./signup.php">SignUp Now</a></div>
            </form>
        </div>
    </div>
</body>

</html>