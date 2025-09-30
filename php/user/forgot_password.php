<?php
include '../db_connect.php';

$email = $emailErr = $info = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please enter a valid email.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            $emailErr = "No account found with that email.";
        } else {
            // generate 6-digit code
            $code = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $expires_at = date('Y-m-d H:i:s', time() + 15 * 60); // 15 minutes

            // store code
            $stmt_ins = $conn->prepare("INSERT INTO password_resets (email, code, expires_at) VALUES (?, ?, ?)");
            $stmt_ins->bind_param("sss", $email, $code, $expires_at);
            $stmt_ins->execute();
            $stmt_ins->close();

            // send code by email (demo). Replace with PHPMailer in production.
            $subject = "Your password reset code";
            $message = "Your password reset code is: $code\nThis code will expire in 15 minutes.";
            $headers = "From: no-reply@yourdomain.com\r\n";
            // mail($email, $subject, $message, $headers); // uncomment after configuring mail

            // For now show a generic info to avoid leaking existence
            $info = "If this email exists in our system, a verification code has been sent. Check your email.";
            // redirect user to verify_code page, passing email (URL-encoded)
            header("Location: verify_code.php?email=" . urlencode($email));
            exit;
        }
        $stmt->close();
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/user/forgot_password.css">
</head>

<body class="bg-color">
    <header> <?php include 'user_header.php'; ?> </header>

    <main class="main-section">
        <form class="form-content" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-title">
                <h1 class="iceland-regular">Forgot Password</h1>
            </div>
            <div class="form-desc">
                <p>Reset your account in 3 simple steps</p>
            </div>

            <div class="form-group">
                <label for="email">Enter your registered Email</label> <br>
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <span class="error"><?php echo $emailErr ?? ''; ?></span>
            </div>

            <div>
                <input type="submit" class="form-btn" name="send_code" value="Send Verification Code">
            </div>

        </form>
    </main>


    <footer> <?php include 'user_footer.php'; ?> </footer>
</body>

</html>