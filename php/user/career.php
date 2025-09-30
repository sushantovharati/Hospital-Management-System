<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Health Care Hospital</title>
    <link rel="stylesheet" href="../../css/common/base.css">
    <link rel="stylesheet" href="../../css/common/nav.css">
    <link rel="stylesheet" href="../../css/common/footer_h.css">
    <link rel="stylesheet" href="../../css/user/career.css">
</head>

<body class="bg-color">
    <?php
    $nameErr = $emailErr = $phoneErr = $positionErr = "";
    $name = $email = $phone = $position = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "*Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "*Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "*Phone is required";
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]{11}$/", $phone)) {
                $phoneErr = "Invalid phone number";
            }
        }

        if (empty($_POST["position"])) {
            $positionErr = "*Position is required";
        } else {
            $position = test_input($_POST["position"]);
        }

        if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($positionErr)) {
            echo "<script>alert('Your application has been submitted successfully!');</script>";
            $name = $email = $phone = $position = $message = "";
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
    ?>
    <header> <?php include 'user_header.php'; ?> </header>

    <main class="main-section">
        <section class="text-section">
            <h1 class="section-title montserrat-font">Join Our Team</h1>
            <p class="section-description roboto-font">Explore career opportunities and submit your application online.</p>
        </section>

        <section class="form-contain">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Your Name">
                    <span class="error"><?php echo $nameErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Your Email">
                    <span class="error"><?php echo $emailErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Your Phone Number">
                    <span class="error"><?php echo $phoneErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="position">Position Applying For</label>
                    <select id="position" name="position">
                        <option value="">--Select Position--</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Receptionist">Receptionist</option>
                        <option value="Lab Technician">Lab Technician</option>
                        <option value="Administrative Staff">Administrative Staff</option>
                    </select>
                    <span class="error"><?php echo $positionErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="message">Additional Information <small class="small-text">(Optional)</small></label>
                    <textarea id="message" name="message" rows="4" placeholder="Add any relevant information..."><?php echo $message; ?></textarea>
                </div>

                <input type="submit" id="submit" value="Submit Application">
            </form>
        </section>
    </main>

    <footer> <?php include 'user_footer.php'; ?> </footer>

</body>

</html>