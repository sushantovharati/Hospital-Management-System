<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Hospital/Login</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer.css">
     <link rel="stylesheet" href="../../css/user/login.css">

</head>

<body class="bg-color">
    <?php
    $usernameErr = $passwordErr = "";
    $username = $password = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "*Username is required";
        }

        if (empty($_POST["password"])) {
            $passwordErr = "*Phone number is required";
        }
    }

    ?>
    <header>
        <div class="navbar-container">
            <nav class="navbar montserrat-font display-flex">
                <div class="brand display-flex">
                    <img class="brand-logo" src="..\..\image/main.ico" alt="Health Care Hospital Logo">
                    <h3 class="brand-name">Health Care Hospital</h3>
                </div>
                <ul class="nav-links display-flex">
                    <li class="nav-item"><a href="..\..\index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="findDoctors.php" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="departments.php" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contactUs.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="loginForm.php" class="nav-link">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

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
                <a class="forgot-password" href="">Forgot Password?</a>
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

    <footer class="footer montserrat-font">
        <section class="footer-container display-flex">
            <div class="footer-section left">
                <h3>More Info</h3>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="careers.php">Careers</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </div>

            <div class="footer-section center">
                <h3>Find Us</h3>
                <img src="..\..\image/footer/map1.png" alt="Google Map">
                <p class="copyright">© 2025 Health Care Hospital. All Rights Reserved.</p>
            </div>

            <div class="footer-section right">
                <h3>Contact Info</h3>
                <p>+8801XXXXXXXXX</p>
                <p>healthcarehospital@clinic.com</p>
                <div class="social-links">
                    <a href=""><img src="..\..\image/footer/icon_fb.png" alt="facebook"></a>
                    <a href=""><img src="..\..\image/footer/icon_instagram.png" alt="instagram"></a>
                    <a href=""><img src="..\..\image/footer/icon_LN.png" alt="linkedin"></a>
                    <a href=""><img src="..\..\image/footer/icon_x.png" alt="x"></a>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>