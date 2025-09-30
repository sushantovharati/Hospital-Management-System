<?php
session_start();
include '../db_connect.php';

$passwordErr = $confirmErr = "";
$password = $confirm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["password"])) {
        $passwordErr = "*Password is required";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 6) {
            $passwordErr = "*Password must be at least 6 characters";
        }
    }

    if (empty($_POST["confirm"])) {
        $confirmErr = "*Confirm password is required";
    } else {
        $confirm = $_POST["confirm"];
        if ($password !== $confirm) {
            $confirmErr = "*Passwords do not match";
        }
    }

    if (empty($passwordErr) && empty($confirmErr)) {
        $email = $_SESSION['reset_email'];
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET password=? WHERE email=?");
        $stmt->bind_param("ss", $hashed, $email);
        if ($stmt->execute()) {
            header("Location: login.php?msg=Password reset successfully");
            exit;
        } else {
            echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/user/reset_password.css">
</head>

<body class="bg-color">

    <header> <?php include 'user_header.php'; ?> </header>

    <main class="main-section">
        <form class="form-content" method="post" action="">
            <div class="form-title">
                <h1 class="iceland-regular">Reset Password</h1>
                <p>Enter your new password</p>
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" name="password" id="password" placeholder="Enter new password" value="<?php echo $password; ?>">
                <span class="error"><?php echo $passwordErr; ?></span>
            </div>

            <div class="form-group">
                <label for="confirm">Confirm Password</label>
                <input type="password" name="confirm" id="confirm" placeholder="Confirm new password" value="<?php echo $confirm; ?>">
                <span class="error"><?php echo $confirmErr; ?></span>
            </div>

            <div>
                <input type="submit" class="form-btn" value="Reset Password">
            </div>

        </form>
    </main>

    <footer> <?php include 'user_footer.php'; ?> </footer>
    
</body>

</html>