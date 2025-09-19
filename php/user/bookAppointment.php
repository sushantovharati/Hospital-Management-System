<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer_h.css">
    <link rel="stylesheet" href="../../css/user/book_appointment.css">
</head>

<body class="bg-color">
    <?php

    $nameErr = $phoneErr = $emailErr = $doctorErr = $dateErr = "";
    $name = $phone = $email = $doctor = $date = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "*Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "*Only letters and spaces allowed";
            }
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "*Phone number is required";
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]{11}$/", $phone)) {
                $phoneErr = "*Phone must be 11 digits";
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

        if (empty($_POST["doctor"])) {
            $doctorErr = "*Please select a doctor";
        } else {
            $doctor = test_input($_POST["doctor"]);
        }

        if (empty($_POST["date"])) {
            $dateErr = "*Date is required";
        } else {
            $date = test_input($_POST["date"]);
            if (strtotime($date) < strtotime(date("Y-m-d"))) {
                $dateErr = "*Date cannot be in the past";
            }
        }

        if (!empty($_POST["message"])) {
            $message = test_input($_POST["message"]);
        }

        if (empty($nameErr) && empty($phoneErr) && empty($emailErr) && empty($doctorErr) && empty($dateErr)) {
            $name = $phone = $email = $doctor = $date = $message = "";
            echo "<script>alert('Appointment booked successfully!');</script>";
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
                    <img class="brand-logo" src="../../image/main.ico" alt="Health Care Hospital Logo">
                    <h3 class="brand-name">Health Care Hospital</h3>
                </div>
                <ul class="nav-links display-flex">
                    <li class="nav-item"><a href="../../index.php" class="nav-link">Home</a></li>
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
        <section class="text-section">
            <h2 class="section-title montserrat-font">Book an Appointment</h2>
            <p class="section-description roboto-font">
                Please fill out the form below to schedule your appointment with our specialist doctors.
            </p>
        </section>

        <section class="form-contain">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Your Name">
                    <span class="error"><?php echo $nameErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="phone">Phone No</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Your Phone Number">
                    <span class="error"><?php echo $phoneErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="you@email.com">
                <span class="error"><?php echo $emailErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="doctor">Select Doctor</label>
                    <select id="doctor" name="doctor">
                        <option value=""  disabled selected>Choose Doctor</option>
                        <option value="Dr. Asif Sayed">Dr. Asif Sayed (Medicine)</option>
                        <option value="Dr. Abdullah Al Fahad">Dr. Abdullah Al Fahad (Orthopedics)</option>
                        <option value="Dr. Taki Yashir">Dr. Taki Yashir (Cardiology)</option>
                        <option value="Dr. Anupom Voumik">Dr. Anupom Voumik (ENT)</option>
                        <option value="Dr. Abir Hossain">Dr. Abir Hossain (ENT)</option>
                        <option value="Dr. Sabiha Yasmin">Dr. Sabiha Yasmin (Child Specialist)</option>
                    </select>
                <span class="error"><?php echo $doctorErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="date">Preferred Date</label>
                    <input type="date" id="date" name="date" value="<?php echo $data; ?>">
                    <span class="error"><?php echo $dateErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="message">Additional Notes</label>
                    <textarea id="message" name="message" rows="4" placeholder=""></textarea>
                </div>

                <button type="submit" id="submit">Book Appointment</button>
            </form>
        </section>
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