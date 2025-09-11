<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer.css">
    <link rel="stylesheet" href="../../css/admin/admin_dashboard.css">

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
                    <li class="nav-item"><a href="adminDashboard.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="addPatient.php" class="nav-link">Patients</a></li>
                    <li class="nav-item"><a href="addDoctor.php" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="resources.php" class="nav-link">Resources</a></li>
                    <li class="nav-item"><a href="checkFeedback.php" class="nav-link">Check Feedback</a></li>
                    <li class="nav-item"><a href="../../index.php" class="nav-link">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-section">
        <section class="welcome-section">
            <h1 class="welcome-title montserrat-font">
                Welcome back, Sushanto Vharati
            </h1>
            <p class="welcome-description roboto-font">
                Here's what's happening at your hospital today!
            </p>
        </section>

        <section class="grid-list">
            <div class="total-patients grid-card">
                <h3 class="montserrat-font">Total Patients</h3> <br>
                <label class="roboto-font" for="patients">1000</label>
            </div>
            <div class="active-doctor grid-card">
                <h3 class="montserrat-font">Active Doctors</h3> <br>
                <label class="roboto-font" for="doctors">56</label>
            </div>
            <div class="todays-appointment grid-card">
                <h3 class="montserrat-font">Today's Appointments</h3> <br>
                <label class="roboto-font" for="appointment">120</label> <br>
                <label for="pending">25/120 pending</label>
            </div>
            <div class="monthly-revenue grid-card">
                <h3 class="montserrat-font">This Month's Revenue</h3> <br>
                <label class="roboto-font" for="revenue">500000</label>
            </div>
        </section>

        <section class="department-occupancy">
            <h1>Department Occupancy</h1>
            <table>
                <thead>
                    <th>Department Name</th>
                    <th>Available</th>
                    <th>Need</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Orthopedics</td>
                        <td>15</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td>Cardiology</td>
                        <td>10</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Dental</td>
                        <td>11</td>
                        <td>15</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="appointment-list">
            <h1>Today's Appointment</h1>
            <table>
                <thead>
                    <th>Doctor Name</th>
                    <th>Patient Name</th>
                    <th>Time</th>
                    <th>Room No</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Dr. Asif Sayed</td>
                        <td>Tanvir Rahman</td>
                        <td>12.15pm</td>
                        <td>1104</td>
                    </tr>
                    <tr>
                        <td>Dr. Anupom Voumik</td>
                        <td>Jubayer Shek</td>
                        <td>1.10pm</td>
                        <td>1106</td>
                    </tr>
                    <tr>
                        <td>Dr. Abdullah Al Fahad</td>
                        <td>Jakir Hassan</td>
                        <td>2.15pm</td>
                        <td>1105</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="quick-access">
            <h1>Quick Access</h1>
            <div class="quick-buttons">
                <button class="add-doc">Add Patient</button>
                <button class="add-doc">Add Doctor</button>
                <button class="add-doc">View Resources</button>
                <button class="add-doc">Check Feedback</button>
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