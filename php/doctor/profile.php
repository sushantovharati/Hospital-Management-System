<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Profile | Health Care Hospital</title>
  <link rel="stylesheet" href="../../css/common/base.css">
  <link rel="stylesheet" href="../../css/common/nav.css">
  <link rel="stylesheet" href="../../css/common/footer_h.css">
  <link rel="stylesheet" href="../../css/doctor/profile.css">
</head>

<body>
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

  <section class="main-section profile-section">
    <div class="profile-header">
      <img src="doctor.jpg" alt="Doctor Image" class="profile-img">
      <h2 class="doctor-name">Dr. John Smith</h2>
    </div>
    <section class="doctor-profile-section">
      <h2 class="montserrat-font">Doctor Profile</h2>
      <div class="doctor-profile">
        <div class="profile-row">
          <span class="profile-label">Doctor Name:</span>
          <span class="profile-value" id="profile-name">Asif Sayed</span>
        </div>
        <div class="profile-row">
          <span class="profile-label">Appointment Time:</span>
          <span class="profile-value" id="profile-appointment">9:00 AM - 5:00 PM</span>
        </div>
        <div class="profile-row">
          <span class="profile-label">Absent in Current Month:</span>
          <span class="profile-value" id="profile-absent">2 days</span>
        </div>
        <div class="profile-row">
          <span class="profile-label">Salary:</span>
          <span class="profile-value" id="profile-salary">$2000</span>
        </div>
        <div class="profile-row">
          <span class="profile-label">Contact:</span>
          <span class="profile-value" id="profile-contact">asif@example.com | 0123456789</span>
        </div>
      </div>
    </section>
  </section>
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