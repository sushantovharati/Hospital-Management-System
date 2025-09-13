<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Hospital/Contact Us</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer_h.css">
    <link rel="stylesheet" href="../../css/user/contact_us.css">
</head>

<body class="bg-color">

    <?php

    $nameErr = $phoneErr = $emailErr = $messageErr = "";
    $name = $phone = $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "*Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "*Only letters and white space allowed";
            }
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "*Phone number is required";
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]{11}$/", $phone)) {
                $phoneErr = "*Invalid phone number";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "*Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "*Invalid email format";
            }
        }

        if (empty($_POST["message"])) {
            $messageErr = "*Message is required";
        } else {
            $message = test_input($_POST["message"]);
            if (strlen($message) < 8) {
                $messageErr = "*Message is too short. Please explain about your query.";
            }
        }
        if (empty($nameErr) && empty($phoneErr) && empty($emailErr) && empty($messageErr)) {
            $name = $phone = $email = $message = "";
            echo "<script>alert('Form submitted successfully!');</script>";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
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
        <div class="text-section">
            <h1 class="section-title montserrat-font">We're Here to Help You</h1>
            <p class="section-description">Have questions or need assistance? Reach out to us anytime.</p>
        </div>

        <form class="form-contain" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label class="montserrat-font" for="name">Full Name</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Your Name">
                <span class="error"><?php echo $nameErr; ?></span>
            </div>

            <div class="form-group">
                <label class="montserrat-font" for="phone">Phone No</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Your Phone Number">
                <span class="error"><?php echo $phoneErr; ?></span>
            </div>

            <div class="form-group">
                <label class="montserrat-font" for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="you@email.com">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>

            <div class="form-group">
                <label class="montserrat-font" for="message">Message</label>
                <textarea id="message" name="message" rows="5" value="<?php echo $message; ?>" placeholder="Please explain about your query..."></textarea>
                <span class="error"><?php echo $messageErr; ?></span>
            </div>

            <input class="montserrat-font" id="submit" type="submit" name="submit" value="Submit">
        </form>
    </main>

    <footer class="footer montserrat-font">
        <section class="footer-container display-flex">
            <div class="footer-section left">
                <h3>More Info</h3>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="career.php">Careers</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </div>

            <div class="footer-section center">
                <h3>Find Us</h3>
                <img src="../../image/footer/map1.png" alt="Google Map">
                <p class="copyright">© 2025 Health Care Hospital. All Rights Reserved.</p>
            </div>

            <div class="footer-section right">
                <h3>Contact Info</h3>
                <p>+8801XXXXXXXXX</p>
                <p>healthcare.hospital@clinic.com</p>
                <div class="social-links">
                    <a href=""><img src="../../image/footer/icon_fb.png" alt="facebook"></a>
                    <a href=""><img src="../../image/footer/icon_instagram.png" alt="instagram"></a>
                    <a href=""><img src="../../image/footer/icon_LN.png" alt="linkedin"></a>
                    <a href=""><img src="../../image/footer/icon_x.png" alt="x"></a>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>