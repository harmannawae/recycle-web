<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
       

        $query = "SELECT * FROM user WHERE username = '$username'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_lastname'] = $row['user_lastname'];
            $_SESSION['user_phone'] = $row['user_phone'];
            $_SESSION['user_address'] = $row['user_address'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['user_order'] = $row['user_order'];

            if ($_SESSION['user_type'] == 'admin') {
                header("Location: home.php");
            }

            if ($_SESSION['user_type'] == 'admin') {
                header("Location: home.php");
            }
        } else {
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
        }

    } else {
        header("Location: index.php");
    }


?>