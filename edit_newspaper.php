<?php
require("connection.php");

if (isset($_GET['id'])) {

       $id = $_GET['id'];

       $sql = "SELECT * FROM newspaper WHERE n_id = $id";

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
       <title>แก้ไขเนื้อข้อมูลข่าวสาร</title>

</head>

<body>
       <center>
              <form action="data.php" method="post">

                     <fieldset>
                            <legend>เนื้อหาข่าวสาร:</legend>

                            <lable>ประเภท :</lable><br>
                            <input type="text" name="edit_n_title" required value="<?php echo $result['n_title'] ?>"><br>
                            <br>
                            <br>

                            <lable>หัวข้อข่าว :</lable><br>
                            <input type="text" name="edit_n_name" required value="<?php echo $result['n_name'] ?>"><br>
                            <br>
                            <br>

                            <lable>เนื้อหาข่าว : </lable><br>
                            <textarea name="edit_n_content" rows="5" cols="30" required><?php echo $result['n_content'] ?></textarea><br>
                            <br>
                            <br>
                            <br>


                            <input type="hidden" name="edit_newspaper_id" value="<?php echo $result['n_id'] ?>">

                            <input type="submit" value="save">

                     </fieldset>
       </center>
       </form>

</body>

</html>