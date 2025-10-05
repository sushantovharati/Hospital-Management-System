<?php include '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient | Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/admin/add_patient.css">
</head>

<body class="bg-color">
    <div class="form-validation-php">
        <?php

        $fnameErr = $lnameErr = $phoneErr = $emailErr = $dobErr = $genderErr = $addressErr = $diseaseErr = $departmentErr = $doctorErr = $admissionErr = $roomErr = "";

        $fname = $lname = $phone = $email = $dob = $gender = $address = $disease = $department = $doctor = $admission = $room = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["fname"])) {
                $fnameErr = "*First name is required";
            } else {
                $fname = test_input($_POST["fname"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                    $fnameErr = "*Only letters and white space allowed";
                }
            }

            if (empty($_POST["lname"])) {
                $lnameErr = "*Last name is required";
            } else {
                $lname = test_input($_POST["lname"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
                    $lnameErr = "*Only letters and white space allowed";
                }
            }

            if (empty($_POST["phone"])) {
                $phoneErr = "*Phone number is required";
            } else {
                $phone = test_input($_POST["phone"]);
                if (!preg_match("/^[0-9]{11}$/", $phone)) {
                    $phoneErr = "*Invalid phone number";
                }
            }

            if (!empty($_POST["email"])) {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "*Invalid email format";
                }
            }

            if (empty($_POST["dob"])) {
                $dobErr = "*Date of Birth is required";
            } else {
                $dob = test_input($_POST["dob"]);
                if (strtotime($dob) > strtotime(date("Y-m-d"))) {
                    $dobErr = "*Date of Birth cannot be in the future";
                }
            }


            if (empty($_POST["gender"])) {
                $genderErr = "*Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }

            if (empty($_POST["address"])) {
                $addressErr = "*Address is required";
            } else {
                $address = test_input($_POST["address"]);
            }

            if (empty($_POST["disease"])) {
                $diseaseErr = "*Disease is required";
            } else {
                $disease = test_input($_POST["disease"]);
                if (!preg_match("/^[a-zA-Z0-9 .,-]*$/", $disease)) {
                    $diseaseErr = "*Invalid characters in disease";
                }
            }

            if (empty($_POST["department_id"])) {
                $departmentErr = "*Please select a department";
            } else {
                $department_id = test_input($_POST["department_id"]);
            }

            if (empty($_POST["doctor"])) {
                $doctorErr = "*Assigned doctor is required";
            } else {
                $doctor = test_input($_POST["doctor"]);
                if (!preg_match("/^[a-zA-Z .' -]*$/", $doctor)) {
                    $doctorErr = "*Only letters and white space allowed";
                }
            }

            if (empty($_POST["admission"])) {
                $admissionErr = "*Admission date is required";
            } else {
                $admission = $_POST["admission"];
                if (strtotime($admission) < strtotime(date("Y-m-d"))) {
                    $admissionErr = "*Admission date cannot be in the past";
                }
            }

            if (empty($_POST["room"])) {
                $roomErr = "*Room number is required";
            } else {
                $room = test_input($_POST["room"]);
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($fnameErr) && empty($lnameErr) && empty($phoneErr) && empty($emailErr) && empty($dobErr) && empty($genderErr) && empty($addressErr) && empty($diseaseErr) && empty($doctorErr) && empty($admissionErr) && empty($roomErr) && empty($departmentErr)) {

                $stmt = $conn->prepare("INSERT INTO patient (fname, lname, phone, email, dob, gender, address, disease, department_id, doctor, admission, room) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $stmt->bind_param("ssssssssisss", $fname, $lname, $phone, $email, $dob, $gender, $address, $disease, $department_id, $doctor, $admission, $room);

                if ($stmt->execute()) {
                    $fname = $lname = $phone = $email = $dob = $gender = $address = $disease = $doctor = $admission = $room = $department_id = "";
                } else {
                    echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
                }
            }
        }

        ?>
    </div>

    <header> <?php include 'admin_header.php'; ?> </header>

    <main class="main-section">
        <h2 class="montserrat-font section-title">Admit New Patient</h2>
        <form class="form-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>" placeholder="Enter first name">
                <span class="error"><?php echo $fnameErr; ?></span>
            </div>

            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>" placeholder="Enter last name">
                <span class="error"><?php echo $lnameErr; ?></span>
            </div>

            <div class="form-group">
                <label for="phone">Phone No</label>
                <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" placeholder="Enter phone number">
                <span class="error"><?php echo $phoneErr; ?></span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo $email; ?>" placeholder="patient@email.com">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" value="<?php echo $dob; ?>">
                <span class="error"><?php echo $dobErr; ?></span>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="" disabled <?php if ($gender == "") {
                                                    echo "selected";
                                                } ?>>Select your gender</option>
                    <option value="male" <?php if ($gender == "male") {
                                                echo "selected";
                                            } ?>>Male</option>
                    <option value="female" <?php if ($gender == "female") {
                                                echo "selected";
                                            } ?>>Female</option>
                    <option value="other" <?php if ($gender == "other") {
                                                echo "selected";
                                            } ?>>Other</option>
                </select>
                <span class="error"><?php echo $genderErr; ?></span>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="Example: house no, road no, thana, district" value="<?php echo $address; ?>">
                <span class="error"><?php echo $addressErr; ?></span>
            </div>


            <div class="form-group">
                <label for="disease">Disease</label>
                <input type="text" name="disease" placeholder="Enter disease/problem" value="<?php echo $disease; ?>">
                <span class="error"><?php echo $diseaseErr; ?></span>
            </div>

            <div class="form-group">
                <label for="department">Select Department</label>
                <select name="department_id" id="department_id">
                    <option value="" disabled selected>Select Department</option>
                    <?php
                    $query = "SELECT department_id, department_name FROM departments_info ORDER BY department_name ASC";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['department_id'] . '">' . $row['department_name'] . '</option>';
                    }
                    ?>
                </select>
                <span class="error"><?php echo $departmentErr; ?></span>
            </div>

            <div class="form-group">
                <label for="doctor">Assigned Doctor</label>
                <input type="text" id="doctor" name="doctor" placeholder="Doctor name"
                    value="<?php echo $doctor; ?>" onkeyup="showResult(this.value)" autocomplete="off">
                <div id="livesearch"></div>
                <span class="error"><?php echo $doctorErr; ?></span>
            </div>


            <div class="form-group">
                <label for="admission">Date of Admit</label>
                <input type="date" name="admission"
                    value="<?php echo !empty($admission) ? $admission : date('Y-m-d'); ?>">
                <span class="error"><?php echo $admissionErr; ?></span>
            </div>

            <div class="form-group">
                <label for="room">Room No</label>
                <input type="text" id="room" name="room" placeholder="Enter room no" value="<?php echo $room; ?>">
                <span class="error"><?php echo $roomErr; ?></span>
            </div>

            <input type="submit" class="save button" id="save" value="Save" name="submit">

        </form>

        <section class="patient-list-section">
            <h2 class="montserrat-font section-title">All Patients</h2>

            <?php
            if (isset($_GET['update_msg'])) {
                echo '<h4 style="color: green;">' . $_GET['update_msg'] . '</h4>';
            }
            if (isset($_GET['delete_msg'])) {
                echo '<h4 style="color: red;">' . $_GET['delete_msg'] . '</h4>';
            }
            ?>

            <table class="patient-table">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>DoB</th>
                        <th>Gender</th>
                        <th>Disease</th>
                        <th>Doctor</th>
                        <th>Date of Admit</th>
                        <th>Room</th>
                        <th>Bed</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * FROM patient ORDER BY id DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $serial = 1;
                        while ($row = $result->fetch_assoc()) {
                            $fullName = $row['fname'] . ' ' . $row['lname'];
                            echo "<tr>
                            <td>{$serial}</td>
                            <td>{$fullName}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['dob']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['disease']}</td>
                            <td>{$row['doctor']}</td>
                            <td>{$row['admission']}</td>
                            <td>{$row['room']}</td>
                            <td>{$row['bed']}</td>
                            <td>
                                <a href='update_patient.php?id={$row['id']}' class='edit-btn'>Update</a>
                                <a href='delete_patient.php?id={$row['id']}' class='delete-btn'>Delete</a>
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

    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("livesearch").innerHTML = "";
                document.getElementById("livesearch").style.display = "none";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("livesearch").innerHTML = this.responseText;
                    document.getElementById("livesearch").style.display = "block";
                }
            }
            xmlhttp.open("GET", "livesearch.php?q=" + str, true);
            xmlhttp.send();
        }

        function setDoctor(name) {
            document.getElementById("doctor").value = name;
            document.getElementById("livesearch").style.display = "none";
        }
    </script>

</body>

</html>