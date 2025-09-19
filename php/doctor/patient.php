<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patient | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer_h.css">
    <link rel="stylesheet" href="../../css/doctor/patient.css">
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

    <main class="main-section">
        <div class="title">
            <h2 class="montserrat-font">Add New Patient</h2>
        </div>
        <div class="add-patient">
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" placeholder="Enter first name">
            </div>

            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" placeholder="Enter last name">
            </div>

            <div class="form-group">
                <label for="phone">Phone No</label>
                <input type="text" name="phone" placeholder="Enter phone no">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="patient@email.com">
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Enter address">
            </div>

            <div class="form-group">
                <label for="disease">Disease</label>
                <input type="text" name="disease" placeholder="Enter disease/problem">
            </div>

            <div class="form-group">
                <label for="doctor">Assigned Doctor</label>
                <input type="text" name="doctor" placeholder="Doctor name">
            </div>

            <div class="form-group">
                <label for="admission">Admission Date</label>
                <input type="date" name="admission">
            </div>

            <div class="form-group">
                <label for="room">Room No</label>
                <input type="text" name="room" placeholder="Enter room no">
            </div>

            <div class="form-group">
                <label for="bed">Bed No</label>
                <input type="text" name="bed" placeholder="Enter bed no">
            </div>
        </div>

        <div class="buttons display-flex">
            <button class="save" id="save">Save</button>
        </div>

        <section class="patient-list-section">
            <h2 class="montserrat-font">All Patients</h2>
            <table class="patient-table">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Disease</th>
                        <th>Doctor</th>
                        <th>Admission Date</th>
                        <th>Room</th>
                        <th>Bed</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rahim</td>
                        <td>Hossain</td>
                        <td>01712345678</td>
                        <td>rahim@example.com</td>
                        <td>1992-06-12</td>
                        <td>Male</td>
                        <td>Dhaka</td>
                        <td>Fever</td>
                        <td>Dr. Asif</td>
                        <td>2025-09-10</td>
                        <td>101</td>
                        <td>5</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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