<?php
// testReport.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Reports - Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer_h.css">
    <link rel="stylesheet" href="../../css/user/test_report.css">
</head>

<body class="bg-color">
 
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

    <main class="main-section montserrat-font">
        <section class="test-report-section">
            <h2 class="page-title">Your Test Reports</h2>
            <p class="page-description roboto-font">
                Here you can view and download your medical test reports. Please log in to see your personal reports.
            </p>

            <div class="report-list">
                <table class="report-table">
                    <thead>
                        <tr>
                            <th>Report ID</th>
                            <th>Patient Name</th>
                            <th>Test Name</th>
                            <th>Date</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example static data (later DB theke fetch korbe) -->
                        <tr>
                            <td>RPT001</td>
                            <td>John Doe</td>
                            <td>Blood Test</td>
                            <td>2025-09-10</td>
                            <td><a href="../../reports/blood_test.pdf" class="download-link">Download</a></td>
                        </tr>
                        <tr>
                            <td>RPT002</td>
                            <td>Jane Smith</td>
                            <td>X-Ray</td>
                            <td>2025-09-12</td>
                            <td><a href="../../reports/xray_report.pdf" class="download-link">Download</a></td>
                        </tr>
                        <tr>
                            <td>RPT003</td>
                            <td>Rahim Khan</td>
                            <td>ECG</td>
                            <td>2025-09-13</td>
                            <td><a href="../../reports/ecg_report.pdf" class="download-link">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
