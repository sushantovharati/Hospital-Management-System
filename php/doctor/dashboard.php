<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer.css">
    <link rel="stylesheet" href="../../css/doctor/dashboard.css">
</head>

<body class="bg-color">

    <header>
        <div class="navbar-container">
            <nav class="navbar montserrat-font display-flex">
                <div class="brand display-flex">
                    <img class="brand-logo" src="..\..\image/main.ico" alt="Health Care Hospital Logo">
                    <h3 class="brand-name">Health Care Hospital</h3>
                </div>
                <ul class="nav-links display-flex">
                    <li class="nav-item"><a href="dashboard.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="patient.php" class="nav-link">Patient</a></li>
                    <li class="nav-item"><a href="prescription.php" class="nav-link">Prescription</a></li>
                    <li class="nav-item"><a href="appointment.php" class="nav-link">Appointment</a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="../../index.php" class="nav-link">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="dashboard-main">
        <h2>Welcome Dr. John Doe</h2>
        <div class="cards-container">

            <div class="card">
                <h3>Total Patients Today</h3>
                <p>15</p>
            </div>

            <div class="card">
                <h3>Upcoming Appointments</h3>
                <p>5</p>
            </div>

            <div class="card">
                <h3>Recent Prescriptions</h3>
                <p>8</p>
            </div>

            <div class="card">
                <h3>Notifications</h3>
                <p>3 new messages</p>
            </div>

        </div>

        <section class="quick-links">
            <h3>Quick Actions</h3>
            <div class="links">
                <a href="add_prescription.php" class="btn">Add Prescription</a>
                <a href="patients.php" class="btn">View Patients</a>
                <a href="appointments.php" class="btn">View Schedule</a>
            </div>
        </section>
    </main>

    <footer class="footer montserrat-font">
        <section class="footer-container display-flex">
            <div class="footer-section left">
                <h3>More Info</h3>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">FAQ</a></li>
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