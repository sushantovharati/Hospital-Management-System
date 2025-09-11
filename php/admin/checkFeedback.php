<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Feedback | Health Care Hospital</title>
  <link rel="stylesheet" href="..\..\css/common/base.css">
    <link rel="stylesheet" href="..\..\css/common/nav.css">
    <link rel="stylesheet" href="..\..\css/common/footer.css">
  <link rel="stylesheet" href="..\..\css/admin/checkFeedback.css">
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
                    <li class="nav-item"><a href="adminDashboard.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="addPatient.php" class="nav-link">Patients</a></li>
                    <li class="nav-item"><a href="addDoctor.php" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="resources.php" class="nav-link">Resources</a></li>
                    <li class="nav-item"><a href="checkAppointment.php" class="nav-link">Appointments</a></li>
                    <li class="nav-item"><a href="billReport.php" class="nav-link">Billing Report</a></li>
                    <li class="nav-item"><a href="checkFeedback.php" class="nav-link">Check Feedback</a></li>
                    <li class="nav-item"><a href="../../index.php" class="nav-link">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
  <main class="main-section admin-feedback">
    <h1>Patient Feedback Management</h1>
    <p>Here you can review and manage patient feedbacks.</p>

    <div class="feedback-controls">
      <input type="text" placeholder="Search feedback...">
      <select>
        <option>All</option>
        <option>Pending</option>
        <option>Reviewed</option>
        <option>Important</option>
      </select>
    </div>

    <table class="feedback-table">
      <thead>
        <tr>
          <th>Patient Name</th>
          <th>Feedback</th>
          <th>Rating</th>
          <th>Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John Doe</td>
          <td>Very satisfied with the service!</td>
          <td>5.00</td>
          <td>2025-08-31</td>
          <td>Pending</td>
          <td>
            <button>Mark Reviewed</button>
            <button>Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </main>

</body>

</html>