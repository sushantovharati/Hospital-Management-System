<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'php/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Hospital</title>
    <link rel="stylesheet" href="css/common/base.css">
    <link rel="stylesheet" href="css/common/nav.css">
    <link rel="stylesheet" href="css/common/footer_h.css">
    <link rel="stylesheet" href="css/index_h.css">
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
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="php/user/findDoctors.php" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="php/user/departments.php" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="php/user/about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="php/user/contactUs.php" class="nav-link">Contact Us</a></li>

                    <?php
                    if (isset($_SESSION['user_id'])) {
                        echo '<li class="nav-item"><a href="php/user/logout.php" class="nav-link">Logout</a></li>';
                    } else {
                        echo '<li class="nav-item"><a href="php/user/loginForm.php" class="nav-link">Login</a></li>';
                    }
                    ?>

                </ul>

            </nav>
        </div>
    </header>

    <main class="main-section">
        <section class="banner">
            <div class="banner-content">
                <h1 class="banner-title montserrat-font">Welcome to <br>Health Care Hospital</h1>
                <p class="banner-description roboto-font ">
                    Health Care Hospital is committed to providing world-class healthcare services with a team of
                    experienced doctors and modern facilities. Our easy-to-use online system allows patients to book
                    appointments, view prescriptions and test reports, and manage health records efficiently.
                </p>
            </div>
            <img class="banner-image" src="image/banner/2.jpg" alt="Banner first image">
        </section>

        <section class="buttons display-flex">
            <button id="find-a-doctor" class="montserrat-font find-doctor">Find a Doctor</button>
            <button id="book-appointment-btn" class="montserrat-font book-an-appointment">Book an Appointment</button>
            <button id="test-reports" class="montserrat-font reports">Test Reports</button>
            <button id="have-a-query" class="montserrat-font query">Have a Query?</button>
        </section>

        <section class="doctors-section montserrat-font">
            <h2 class="doctor-list-title">Meet Our Specialist Doctors</h2>

            <div class="doctors-list">
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor1.png" alt="Dr. Asif Sayed">
                    <div class="doctor-info">
                        <h3>Dr. Asif Sayed</h3>
                        <p class="roboto-font">MBBS, FCPS (Medicine) <br>
                            Consultant, Internal Medicine</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>

                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor2.png" alt="Dr. Abdullah Al Fahad">
                    <div class="doctor-info">
                        <h3>Dr. Abdullah Al Fahad</h3>
                        <p class="roboto-font">MBBS, MS (Orthopedics) <br>
                            Specialist, Bone & Joint Surgery</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>

                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor3.png" alt="Dr. Taki Yashir">
                    <div class="doctor-info">
                        <h3>Dr. Taki Yashir</h3>
                        <p class="roboto-font">MBBS, MD (Cardiology) <br>
                            Cardiologist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>

                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor4.png" alt="Dr. Anupom Voumik">
                    <div class="doctor-info">
                        <h3>Dr. Anupom Voumik</h3>
                        <p class="roboto-font">MBBS, MS (ENT) <br>
                            ENT & Head-Neck Surgeon</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>

                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor21.png" alt="Dr. Abir Hossain">
                    <div class="doctor-info">
                        <h3>Dr. Abir Hossain</h3>
                        <p class="roboto-font">MBBS, MS (ENT) <br>
                            Ear, Nose & Throat Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>

                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor22.png" alt="Dr. Sabiha Yasmin">
                    <div class="doctor-info">
                        <h3>Dr. Sabiha Yasmin</h3>
                        <p class="roboto-font">MBBS, DCH <br>
                            Child & Neonatal Specialist</p>
                        <button id="book-appointment-btn" class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>

            </div>
            <button id="view-all-doctors" class="view-all-doctors montserrat-font">View All Doctors</button>
        </section>
    </main>

    <footer class="footer montserrat-font">
        <section class="footer-container display-flex">
            <div class="footer-section left">
                <h3>More Info</h3>
                <ul>
                    <li><a href="php/user/about.php">About Us</a></li>
                    <li><a href="php/user/service.php">Services</a></li>
                    <li><a href="php/user/career.php">Careers</a></li>
                    <li><a href="php/user/faq.php">FAQ</a></li>
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

    <script src="js/index.js"></script>
</body>

</html>