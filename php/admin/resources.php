<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\..\css/common/base.css">
    <link rel="stylesheet" href="..\..\css/common/nav.css">
    <link rel="stylesheet" href="..\..\css/common/footer_h.css">
    <link rel="stylesheet" href="..\..\css/admin/resource_h.css">
</head>

<body class="bg-color">

    <?php

    $beds = [
        ["type" => "General", "total" => 50, "available" => 20],
        ["type" => "ICU", "total" => 10, "available" => 2],
        ["type" => "VIP", "total" => 5, "available" => 1]
    ];

    $rooms = [
        ["room_no" => "101", "type" => "Single", "status" => "Available"],
        ["room_no" => "102", "type" => "Single", "status" => "Occupied"],
        ["room_no" => "201", "type" => "Double", "status" => "Available"],
        ["room_no" => "202", "type" => "Double", "status" => "Occupied"]
    ];

    $resources = [
        ["name" => "Ventilator", "total" => 10, "available" => 4],
        ["name" => "ECG Machine", "total" => 5, "available" => 2],
        ["name" => "X-Ray Machine", "total" => 3, "available" => 1]
    ];
    ?>
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
        <h1>Hospital Resources</h1>
        <br>
        <h2>Beds Availability</h2>
        <table>
            <tr>
                <th>Type</th>
                <th>Total</th>
                <th>Available</th>
            </tr>
            <?php foreach ($beds as $bed): ?>
                <tr>
                    <td><?php echo $bed['type']; ?></td>
                    <td><?php echo $bed['total']; ?></td>
                    <td><?php echo $bed['available']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>Rooms Status</h2>
        <table>
            <tr>
                <th>Room No</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
            <?php foreach ($rooms as $room): ?>
                <tr>
                    <td><?php echo $room['room_no']; ?></td>
                    <td><?php echo $room['type']; ?></td>
                    <td><?php echo $room['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>Equipment / Resources</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Total</th>
                <th>Available</th>
            </tr>
            <?php foreach ($resources as $res): ?>
                <tr>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['total']; ?></td>
                    <td><?php echo $res['available']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
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