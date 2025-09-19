<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer_h.css">
    <link rel="stylesheet" href="../../css/doctor/prescription.css">
</head>

<?php

$patient_nameErr = $ageErr = $next_visitErr = "";
$patient_name = $age = $next_visit = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["patient_name"])) {
        $patient_nameErr = "*Patient name is required";
    } else {
        $patient_name = test_input($_POST["patient_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $patient_name)) {
            $patient_nameErr = "*Only letters and white space allowed";
        }
    }

    if (empty($_POST["age"])) {
        $ageErr = "*Patient age is required";
    } else {
        $age = test_input($_POST["age"]);
        if (!preg_match("/^[0-9]+$/", $age)) {
            $ageErr = "*Invalid age number";
        } elseif ($age <= 0 || $age > 150) {
            $ageErr = "*Invalid age number";
        }
    }

    if (empty($_POST["next_visit"])) {
        $next_visitErr = "*Next visit date is required";
    } else {
        $next_visit = $_POST["next_visit"];
        $tomorrow = date('Y-m-d', strtotime('+1 day'));
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $next_visit)) {
            $next_visitErr = "*Invalid date format";
        } elseif ($next_visit < $tomorrow) {
            $next_visitErr = "*Next visit must be tomorrow or later";
        } else {
            $next_visit = test_input($next_visit);
            $next_visit = date("d/m/Y", strtotime($next_visit));
            $tomorrow = date("d/m/Y", strtotime('+1 day'));
        }
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
                    <li class="nav-item"><a href="prescription.php" class="nav-link active">Prescription</a></li>
                    <li class="nav-item"><a href="appointment.php" class="nav-link">Appointment</a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="../../index.php" class="nav-link">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-section">
        <h2>Write Prescription</h2>
        <form class="form-contain" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-group">
                <label for="patient_name">Patient Name</label>
                <input type="text" id="patient_name" name="patient_name" value="<?php echo $patient_name; ?>" placeholder="Enter patient name">
                <span class="error"><?php echo $patient_nameErr; ?></span>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="Enter age" value="<?php echo $age; ?>">
                <span class="error"><?php echo $ageErr; ?></span>
            </div>

            <div class="form-group">
                <label for="diagnosis">Diagnosis</label>
                <textarea id="diagnosis" name="diagnosis" placeholder="Write diagnosis here..."></textarea>
            </div>

            <div class="form-group">
                <label for="medicines">Medicines</label>
                <textarea id="medicines" name="medicines" placeholder="Write medicines with dosage..."></textarea>
            </div>

            <div class="form-group">
                <label for="advice">Advice</label>
                <textarea id="advice" name="advice" placeholder="Add lifestyle or diet advice..."></textarea>
            </div>

            <div class="form-group">
                <label for="next_visit">Next Visit Date</label>
                <input type="date" id="next_visit" name="next_visit">
                <span class="error"><?php echo $next_visitErr; ?></span>
            </div>

            <input type="submit" name="submit" value="Save">
        </form>
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