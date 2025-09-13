<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor | Health Care Hospital</title>
    <link rel="stylesheet" href="..\..\css/common/base.css">
    <link rel="stylesheet" href="..\..\css/common/nav.css">
    <link rel="stylesheet" href="..\..\css/common/footer_h.css">
    <link rel="stylesheet" href="..\..\css/admin/add_doctor.css">
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
        <h2 class="montserrat-font">Add New Doctor</h2>
        <div class="add-doctor">
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
                <input type="text" name="email" placeholder="doctor@email.com">
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
                <label for="country">Country</label>
                <select name="country" id="country" required>
                    <option value="" disabled selected>Select Country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Maldives">Maldives</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                    <option value="South Korea">South Korea</option>
                </select>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" placeholder="Enter salary">
            </div>
        </div>

        <div class="buttons display-flex">
            <button class="save" id="save">Save</button>
        </div>

        <section class="doctor-list-section">
            <h2 class="montserrat-font">All Doctors</h2>
            <table class="doctor-table">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>Salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Asif</td>
                        <td>Sayed</td>
                        <td>0123456789</td>
                        <td>asif@example.com</td>
                        <td>1985-03-12</td>
                        <td>Male</td>
                        <td>Bangladesh</td>
                        <td>$2000</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Abdullah</td>
                        <td>Al Fahad</td>
                        <td>0987654321</td>
                        <td>abdullah@example.com</td>
                        <td>1980-07-21</td>
                        <td>Male</td>
                        <td>Bangladesh</td>
                        <td>$1800</td>
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