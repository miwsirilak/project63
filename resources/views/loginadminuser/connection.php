<?php 

    $conn = mysqli_connect("127.0.0.1", "root", "", "loginadminuser");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?>