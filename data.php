<?php

require("connection.php");

//add new data form to mysql
if (isset($_POST['fullname'])) {

    $fullname = $_POST['fullname'];

    $address = $_POST['address'];

    $salary = $_POST['salary'];

    $birthday = $_POST['birthday'];

    $sql = "INSERT INTO user ( id , fullname , address, salary, birthday)
        
        VALUES (null , '$fullname','$address','$salary','$birthday' )";

    if (mysqli_query($conn, $sql)) {

        echo "New record created successfully";
        echo "<br><a href='indax.php'>Bact To All Employees Page</a>";
    } else {

        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}


//แก้ไข้ข้อมูลผู้ใช้

if (isset($_POST['edit_form_id'])) {

    $id = $_POST['edit_form_id'];

    $user_name = $_POST['edit_user_name'];

    $user_lastname = $_POST['edit_user_lastname'];

    $user_phone = $_POST['edit_user_phone'];

    $user_address = $_POST['edit_user_address'];

    $username = $_POST['edit_username'];

    $password = $_POST['edit_password'];

    $user_type = $_POST['edit_user_type'];

    $sql = "UPDATE user SET 

        user_name='$user_name',
        user_lastname='$user_lastname',
        user_phone ='$user_phone',
        user_address='$user_address',
        username='$username',
        password='$password',
        user_type='$user_type' 
    WHERE user_id=$id";

    if (mysqli_query($conn, $sql)) {

        echo "อัพเดทข้อมูลสำเร็จ";

        echo "<br><a href='member-get.php'>กลับไปหน้าจัดการข้อมูลสมาชิก</a>";
    } else {
        echo "อัพเดทข้อมูลไม่สำเร็จ " . mysqli_error($conn);
    }
}


//ลบข้อมูลผู้ใช้
if (isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];

    // sql to delete a record
    $sql = "DELETE FROM user WHERE user_id= $id";

    if (mysqli_query($conn, $sql)) {

        echo "Record deleted successfully";

        echo "<br><a href='member-get.php'> กลับไปหน้าจัดการสมาชิก </a>";
    } else {

        echo "Error deleting record: " . mysqli_error($conn);
    }
}

//เพิ่มข้อมูลประเภทขยะ
if (isset($_POST['product'])) {

    $p_name = $_POST['p_name'];

    $p_price = $_POST['p_price'];

    $sql = "INSERT INTO product 

    ( 
        p_id , 
        p_name , 
        p_price
    )
        
        VALUES 
    
    (
        null , 
        '$p_name',
        '$p_price'
    )";

    if (mysqli_query($conn, $sql)) {

        echo "New record created successfully";
        echo "<br><a href='product-get.php'>Bact To All Employees Page</a>";
    } else {

        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}


//แก้ไข้ข้อproduct

if (isset($_POST['edit_product_id'])) {

    $id = $_POST['edit_product_id'];

    $p_name = $_POST['edit_p_name'];

    $p_price = $_POST['edit_p_price'];

    $sql = "UPDATE product SET 

        p_name='$p_name',

        p_price='$p_price'

    WHERE p_id=$id";

    if (mysqli_query($conn, $sql)) {

        echo "อัพเดทข้อมูลสำเร็จ";

        echo "<br><a href='product-get.php'>กลับไปหน้าจัดการข้อมูลประเภทขยะ</a>";
    } else {
        echo "อัพเดทข้อมูลไม่สำเร็จ " . mysqli_error($conn);
    }
}


//ลบข้อมูลproduct
if (isset($_GET['delete_product_id'])) {

    $id = $_GET['delete_product_id'];

    // sql to delete a record
    $sql = "DELETE FROM product WHERE p_id= $id";

    if (mysqli_query($conn, $sql)) {

        echo "Record deleted successfully";

        echo "<br><a href='product-get.php'> กลับไปหน้าจัดการประเภทขยะ </a>";
    } else {

        echo "ลบข้อมูลสำเร็จ: " . mysqli_error($conn);
    }
}


//เพิ่มข้อมูลข่าวสาร
if (isset($_POST['newspaper'])) {

    $n_title = $_POST['n_title'];

    $n_name = $_POST['n_name'];

    $n_content = $_POST['n_content'];

    $sql = "INSERT INTO newspaper 

    ( 
        n_id , 
        n_title , 
        n_name,
        n_content
    )
        
        VALUES 
    
    (
        null , 
        '$n_title',
        '$n_name',
        '$n_conent'
    )";

    if (mysqli_query($conn, $sql)) {

        echo "New record created successfully";
        echo "<br><a href='newspaper-get.php'>Bact To All Employees Page</a>";
    } else {

        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}


//แก้ไข้ข้อproduct

if (isset($_POST['edit_newspaper_id'])) {

    $id = $_POST['edit_newspaper_id'];

    $n_title = $_POST['edit_n_title'];

    $n_name= $_POST['edit_n_name'];

    $n_content = $_POST['edit_n_content'];

    $sql = "UPDATE newspaper SET 

        n_title='$n_title',

        n_name='$n_name',

        n_content='$n_content'

    WHERE n_id=$id";

    if (mysqli_query($conn, $sql)) {

        echo "อัพเดทข้อมูลสำเร็จ";

        echo "<br><a href='newspaper-get.php'>กลับไปหน้าจัดการข้อมูลข่าวสาร</a>";
    } else {
        echo "อัพเดทข้อมูลไม่สำเร็จ " . mysqli_error($conn);
    }
}


//ลบข้อมูลproduct
if (isset($_GET['delete_newspaper_id'])) {

    $id = $_GET['delete_newspaper_id'];

    // sql to delete a record
    $sql = "DELETE FROM newspaper WHERE n_id= $id";

    if (mysqli_query($conn, $sql)) {

        echo "Record deleted successfully";

        echo "<br><a href='newspaper-get.php'> กลับไปหน้าจัดการข้อมูลข่าวสาร </a>";
    } else {

        echo "ลบข้อมูลสำเร็จ: " . mysqli_error($conn);
    }
}
