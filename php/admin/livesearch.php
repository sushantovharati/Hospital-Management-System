<?php
include '../db_connect.php';

if(isset($_GET['q'])){
    $q = $conn->real_escape_string($_GET['q']);
    
    $sql = "SELECT fname, lname FROM doctors_info WHERE fname LIKE '%$q%' OR lname LIKE '%$q%' LIMIT 10";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $fullName = $row["fname"] . " " . $row["lname"];
            echo '<p onclick="setDoctor(\''.$fullName.'\')">'.$fullName.'</p>';
        }
    } else {
        echo '<p style="color:red; padding:5px;">No Doctor Found</p>';
    }
}
?>
