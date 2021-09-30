<?php 

    $conn = mysqli_connect("localhost", "root", "", "db_recycleapp");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($mysqli_error));
    }

?>