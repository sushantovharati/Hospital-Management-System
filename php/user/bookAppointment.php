<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Health Care Hospital</title>
    <link rel="stylesheet" href="..\..\css/common/base.css">
    <link rel="stylesheet" href="..\..\css/common/nav.css">
    <link rel="stylesheet" href="..\..\css/common/footer.css">
    <link rel="stylesheet" href="..\..\css/bookAppointment.css">
</head>
<body class="bg-color">
    <header>
        <div class="navbar-container">
            <nav class="navbar montserrat-font display-flex">
                <div class="brand display-flex">
                    <img class="brand-logo" src="image/main.ico" alt="Health Care Hospital Logo">
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
        <h2 class="montserrat-font" style="text-align:center; margin-bottom:30px;">Book an Appointment</h2>
        <form action="bookAppointment.php" method="POST" class="appointment-form montserrat-font" style="max-width:600px; margin:0 auto;">
            <label for="patientName">Patient Name:</label>
            <input type="text" name="patientName" id="patientName" required>

            <label for="patientEmail">Email:</label>
            <input type="email" name="patientEmail" id="patientEmail" required>

            <label for="patientPhone">Phone:</label>
            <input type="text" name="patientPhone" id="patientPhone" required>

            <label for="doctor">Select Doctor:</label>
            <select name="doctor" id="doctor" required>
                <option value="">--Select--</option>
                <option value="Dr. Asif Sayed">Dr. Asif Sayed</option>
                <option value="Dr. Abdullah Al Fahad">Dr. Abdullah Al Fahad</option>
                <option value="Dr. Taki Yashir">Dr. Taki Yashir</option>
            </select>

            <label for="appointmentDate">Date:</label>
            <input type="date" name="appointmentDate" id="appointmentDate" required>

            <label for="appointmentTime">Time:</label>
            <input type="time" name="appointmentTime" id="appointmentTime" required>

            <button type="submit" class="montserrat-font" style="margin-top:15px; width:100%; padding:12px; background-color: rgba(13,59,102,1); color:#fff; border:none; border-radius:10px; cursor:pointer;">Book Appointment</button>
        </form>
    </main>

    <footer class="footer montserrat-font">
        <section class="footer-container display-flex">
            <div class="footer-section left">
                <h3>More Info</h3>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="careers.php">Careers</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>

            <div class="footer-section center">
                <h3>Find Us</h3>
                <img src="image/footer/map1.png" alt="Google Map">
                <p class="copyright">© 2025 Health Care Hospital. All Rights Reserved.</p>
            </div>

            <div class="footer-section right">
                <h3>Contact Info</h3>
                <p>+8801XXXXXXXXX</p>
                <p>healthcarehospital@clinic.com</p>
                <div class="social-links">
                    <a href=""><img src="image/footer/icon_fb.png" alt="facebook"></a>
                    <a href=""><img src="image/footer/icon_instagram.png" alt="instagram"></a>
                    <a href=""><img src="image/footer/icon_LN.png" alt="linkedin"></a>
                    <a href=""><img src="image/footer/icon_x.png" alt="x"></a>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
