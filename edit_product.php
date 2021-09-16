<?php
require("connection.php");

if (isset($_GET['id'])) {

       $id = $_GET['id'];

       $sql = "SELECT * FROM product WHERE p_id = $id";

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
       <title>แก้ไขข้อมูลประเภทขยะ</title>

</head>

<body>
       <center>
              <form action="data.php" method="post">

                     <fieldset>
                            <legend>ข้อมูลประเภท:</legend>

                            <lable>ประเภท :</lable><br>
                            <input type="text" name="edit_p_name" required value="<?php echo $result['p_name'] ?>"><br>
                            <br>
                            <br>

                            <lable>ราคา ต่อ กก. :</lable><br>
                            <input type="text" name="edit_p_price" required value="<?php echo $result['p_price'] ?>"><br>
                            <br>
                            <br>

                            <input type="hidden" name="edit_product_id" value="<?php echo $result['p_id'] ?>">

                            <input type="submit" value="save">

                     </fieldset>
       </center>
       </form>

</body>

</html>