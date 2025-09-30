<?php
session_start();
include '../db_connect.php';

$codeErr = $errorMsg = "";
$code = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["code"])) {
        $codeErr = "*Verification code is required";
    } else {
        $code = htmlspecialchars(trim($_POST["code"]));
    }

    if (empty($codeErr)) {
        if (isset($_SESSION['verification_code']) && $code == $_SESSION['verification_code']) {
            header("Location: reset_password.php");
            exit();
        } else {
            $errorMsg = "Invalid verification code!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Code | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/user/verify_code.css">
</head>

<body>
    <header> <?php include 'user_header.php'; ?> </header>

    <main class="main-section">
        <form class="form-content" method="post" action="">

            <div class="form-title">
                <h1 class="iceland-regular">Verify Code</h1>
                <p>Enter the verification code sent to your email</p>
            </div>

            <div class="form-group">
                <label for="code">Verification Code</label><br>
                <input type="text" name="code" id="code" placeholder="Enter code" value="<?php echo $code; ?>">
                <span class="error"><?php echo $codeErr; ?></span>
                <span class="error"><?php echo $errorMsg; ?></span>
            </div>

            <div>
                <input type="submit" class="form-btn" value="Verify Code">
            </div>
        </form>
    </main>

    <footer> <?php include 'user_footer.php'; ?> </footer>
    
</body>

</html>