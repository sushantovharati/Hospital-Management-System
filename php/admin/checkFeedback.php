<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Feedback | Health Care Hospital</title>
  <link rel="stylesheet" href="../../css/common/base.css">
  <link rel="stylesheet" href="../../css/admin/checkFeedback.css">
</head>

<body>
  <header> <?php include 'admin_header.php'; ?> </header>

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

  <footer> <?php include 'admin_footer.php'; ?> </footer>
  
</body>

</html>