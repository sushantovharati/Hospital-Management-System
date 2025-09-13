<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Hospital/Register</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer_h.css">
    <link rel="stylesheet" href="../../css/user/register_form.css">
</head>

<body class="bg-color">
    <?php

    $fnameErr = $lnameErr = $phoneErr = $emailErr = $dobErr = $genderErr = $addressErr = "";

    $fname = $lname = $phone = $email = $dob = $gender = $address = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameErr = "*First name is required";
        } else {
            $fname = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $fnameErr = "*Only letters and white space allowed";
            }
        }

        if (empty($_POST["lname"])) {
            $lnameErr = "*Last name is required";
        } else {
            $lname = test_input($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
                $lnameErr = "*Only letters and white space allowed";
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

        if (empty($_POST["gender"])) {
            $genderErr = "*Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "*Address is required";
        } else {
            $address = test_input($_POST["comment"]);
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
    <h2>Fill Out the Form Below to Register</h2>
    <form class="form-contain" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" value="<?php echo $fname;?>" placeholder="Enter your first name">
            <span class="error"><?php echo $fnameErr;?></span>
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" value="<?php echo $lname;?>" placeholder="Enter your last name">
            <span class="error"><?php echo $lnameErr;?></span>
        </div>

        <div class="form-group">
            <label for="phone">Phone No</label>
            <input type="text" name="phone" id="phone" value="<?php echo $phone;?>" placeholder="Enter your phone number">
            <span class="error"><?php echo $phoneErr;?></span>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder="you@email.com">
            <span class="error"><?php echo $emailErr;?></span>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" value="<?php echo $dob;?>">
            <span class="error"><?php echo $dobErr;?></span>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="" disabled <?php if($gender==""){echo "selected";}?>>Select your gender</option>
                <option value="male" <?php if($gender=="male"){echo "selected";}?>>Male</option>
                <option value="female" <?php if($gender=="female"){echo "selected";}?>>Female</option>
                <option value="other" <?php if($gender=="other"){echo "selected";}?>>Other</option>
            </select>
            <span class="error"><?php echo $genderErr;?></span>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" placeholder="House no, Road no, Thana, District"><?php echo $address;?></textarea>
            <span class="error"><?php echo $addressErr;?></span>
        </div>

        <input type="submit" value="Submit" name="submit">
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