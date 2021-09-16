<?php
require("connection.php");

if (isset($_GET['id'])) {

       $id = $_GET['id'];

       $sql = "SELECT * FROM user WHERE user_id = $id";

       $row = mysqli_query($conn, $sql);

       $result = mysqli_fetch_assoc($row);

       if (!$result) {

              echo "Error:" . $sql . "<br>" . mysqli_error($conn);
       }
}

?>

<!DOCTYPE html>
<html lang="th">

<head>
       <meta charset="UTF-8">
       <title>แก้ไขข้อมูลผู้ใช้</title>

</head>

<body>
       <center>
              <form action="data.php" method="post">

                     <fieldset>
                            <legend>ข้อมูลผู้ใช้:</legend>

                            <lable>ชื่อ :</lable><br>
                            <input type="text" name="edit_user_name" required value="<?php echo $result['user_name'] ?>"><br>
                            <br>
                            <br>

                            <lable>นามสกุล :</lable><br>
                            <input type="text" name="edit_user_lastname" required value="<?php echo $result['user_lastname'] ?>"><br>
                            <br>
                            <br>

                            <lable>เบอร์โทร :</lable><br>
                            <input type="text" name="edit_user_phone" required value="<?php echo $result['user_phone'] ?>"><br>
                            <br>
                            <br>

                            <lable>ที่อยู่ : </lable><br>
                            <textarea name="edit_user_address" rows="5" cols="30" required><?php echo $result['user_address'] ?></textarea><br>
                            <br>
                            <br>
                            <br>

                            <lable>รหัสพนักงาน :</lable><br>
                            <input type="text" name="edit_user_type" required value="<?php echo $result['user_type'] ?>"><br>
                            <br>
                            <br>

                            <lable>username :</lable><br>
                            <input type="text" name="edit_username" required value="<?php echo $result['username'] ?>"><br>
                            <br>
                            <br>

                            <lable>password :</lable><br>
                            <input type="text" name="edit_password" required value="<?php echo $result['password'] ?>"><br>
                            <br>
                            <br>



                            <input type="hidden" name="edit_form_id" value="<?php echo $result['user_id'] ?>">

                            <input type="submit" value="save">

                     </fieldset>
       </center>
       </form>

</body>

</html>