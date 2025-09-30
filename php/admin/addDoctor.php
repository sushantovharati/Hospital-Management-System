<?php
include '../db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/admin/add_doctor.css">
</head>

<body class="bg-color">

    <header> <?php include 'admin_header.php'; ?> </header>

    <main class="main-section">
        <h2 class="montserrat-font section-title">Add New Doctor</h2>

        <form action="" class="form-container">
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
                <label for="doj">Date of Joining</label>
                <input type="date" name="doj" id="doj">
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
                <label for="degree">Degree(s)</label>
                <input type="text" name="degree" id="degree" placeholder="Example: MBBS, FCPS, MD" required>
            </div>

            <div class="form-group">
                <label for="specialist">Specialist</label>
                <input type="text" name="specialist" id="specialist" placeholder="Example: Cardiologist, Orthopedic Surgeon">
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" placeholder="Enter salary">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Set a password for doctor">
            </div>

            <input type="submit" class="save" id="save" value="Save">

        </form>

        <?php
        if (isset($_GET['update_msg'])) {
            echo '<h4 style="color: green;">' . $_GET['update_msg'] . '</h4>';
        }
        if (isset($_GET['delete_msg'])) {
            echo '<h4 style="color: red;">' . $_GET['delete_msg'] . '</h4>';
        }
        ?>

        <section class="doctor-list-section">
            <h2 class="montserrat-font section-title">All Doctors</h2>
            <table class="doctor-table">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>DOJ</th>
                        <th>Degree</th>
                        <th>Specialist</th>
                        <th>Salary</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * FROM doctors_info ORDER BY id ASC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $serial = 1;
                        while ($row = $result->fetch_assoc()) {
                            $fullName = $row['fname'] . ' ' . $row['lname'];
                            echo "<tr>
                            <td>{$serial}</td>
                            <td>{$fullName}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['doj']}</td>
                            <td>{$row['degree']}</td>
                            <td>{$row['specialist']}</td>
                            <td>{$row['salary']}</td>
                            <td>{$row['password']}</td>
                            <td>
                                <a href='update_doctor.php?id={$row['id']}' class='edit-btn'>Update</a>
                                <a href='delete_doctor.php?id={$row['id']}' class='edit-btn'>Delete</a>
                            </td>
                        </tr>";
                            $serial++;
                        }
                    } else {
                        echo "<tr><td colspan='14' style='text-align:center;'>No patients found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer> <?php include 'admin_footer.php'; ?> </footer>
</body>

</html>