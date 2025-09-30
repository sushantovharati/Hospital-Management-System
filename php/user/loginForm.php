<?php
session_start();
include '../db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Hospital/Login</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/user/login.css">

</head>

<body class="bg-color">
    <div class="login-validation">
        <?php
        $username = $password = "";
        $usernameErr = $passwordErr = $loginErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
                $usernameErr = "*Email or phone is required";
            } else {
                $username = trim($_POST["username"]);
            }

            if (empty($_POST["password"])) {
                $passwordErr = "*Password is required";
            } else {
                $password = $_POST["password"];
            }

            if (empty($usernameErr) && empty($passwordErr)) {
                $sql = " SELECT id, password, fname, 'user' as role FROM user WHERE email=? OR phone=? UNION SELECT id, password, fname, 'admin' as role FROM admin WHERE email=? OR phone=? UNION SELECT id, password, fname, 'doctor' as role FROM doctor WHERE email=? OR phone=? LIMIT 1 ";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $username, $username, $username, $username, $username, $username);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($row = $result->fetch_assoc()) {
                    if ($password === $row['password']) {
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['fname'] = $row['fname'];
                        $_SESSION['role'] = $row['role'];

                        if ($row['role'] == "user") {
                            header("Location: ../../index.php");
                        } elseif ($row['role'] == "admin") {
                            header("Location: ../admin/adminDashboard.php");
                        } else {
                            header("Location: ../doctor/doctorDashboard.php");
                        }
                        exit();
                    } else {
                        $loginErr = "Incorrect password";
                    }
                } else {
                    $loginErr = "User not found";
                }
                $stmt->close();
            }
        }

        ?>
    </div>

    <header> <?php include 'user_header.php'; ?> </header>

    <main class="main-section">
        <form class="form-content" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-title">
                <h1 class="iceland-regular">Login</h1>
                <p>Welcome onboard with us!</p>
            </div>

            <div class="form-group">
                <label for="username">Email or Phone No</label> <br>
                <input type="text" name="username" id="user" value="<?php echo $username; ?>" placeholder="Enter your email or phone no">
                <span class="error"><?php echo $usernameErr; ?></span>
            </div>

            <div class="form-group">
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password" value="<?php echo $password; ?>" placeholder="Enter your password">
                <span class="error"><?php echo $passwordErr; ?></span>
            </div>

            <div>
                <a class="forgot-password" href="forgot_password.php">Forgot Password?</a>
            </div>

            <div>
                <button class="form-btn">Login</button>
            </div>

            <div class="form-register">
                <label for="">Don't have account?</label>
                <a href="registerForm.php">Register</a>
                <label for="">Here</label>
            </div>

        </form>
    </main>

    <footer> <?php include 'user_footer.php'; ?> </footer>

</body>

</html>