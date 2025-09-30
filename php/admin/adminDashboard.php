<?php
session_start();
include '../db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != "admin") {
    header("Location: ../user/loginForm.php");
    exit();
}

$admin_name = $_SESSION['fname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/admin/admin_dashboard.css">
</head>

<body class="bg-color">

    <div class="db-query">
        <?php
        $totalPatient = $totalDoctor = $appointment = $revenue = "";

        // get-total-patient
        $sql = "SELECT COUNT(*) as total FROM patient";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            $totalPatient = $row['total'];
        } else {
            $totalPatient = "No Patient Available";
        }

        // get-total-doctor
        $sql = "SELECT COUNT(*) as total FROM doctors_info";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            $totalDoctor = $row['total'];
        } else {
            $totalDoctor = "No Doctor Available";
        }

        // get-pending-appointment
        $appointment = 120;

        //get-revenue
        $revenue = 500000;
        ?>

    </div>

    <header> <?php include 'admin_header.php'; ?> </header>

    <main class="main-section">
        <section class="welcome-section">
            <h1 class="welcome-title montserrat-font"> Welcome back, <?php echo htmlspecialchars($admin_name); ?> </h1>
            <p class="welcome-description roboto-font"> Here's what's happening at your hospital today! </p>
        </section>

        <section class="grid-list">

            <div class="total-patients grid-card">
                <h3 class="montserrat-font">Total Patients</h3> <br>
                <label class="roboto-font" for="patients"><?php echo $totalPatient ?></label>
            </div>

            <div class="active-doctor grid-card">
                <h3 class="montserrat-font">Active Doctors</h3> <br>
                <label class="roboto-font" for="doctors"><?php echo $totalDoctor ?></label>
            </div>

            <div class="todays-appointment grid-card">
                <h3 class="montserrat-font">Today's Appointments</h3> <br>
                <label class="roboto-font" for="appointment"><?php echo $appointment ?></label> <br>
                <label for="pending">25/<?php echo $appointment ?> pending</label>
            </div>
            <div class="monthly-revenue grid-card">
                <h3 class="montserrat-font">This Month's Revenue</h3> <br>
                <label class="roboto-font" for="revenue"><?php echo $revenue ?> TK.</label>
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
                <button id="add-patient-btn" class="btn">Add Patient</button>
                <button id="add-doctor-btn" class="btn">Add Doctor</button>
                <button id="view-resources-btn" class="btn">View Resources</button>
                <button id="check-feedback-btn" class="btn">Check Feedback</button>
            </div>
        </section>
    </main>

    <footer> <?php include 'admin_footer.php'; ?> </footer>

    <script src="../../js/admin/admin_dashboard.js"></script>

</body>

</html>