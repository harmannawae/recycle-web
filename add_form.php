<!DOCTPE html>
<html lang="th">
<head>
   <title>Bootstrap Example</title>
   <meta charset="UTF-8">

</head>

   <body>

   <form action="data.php" method="post">
      <fieldset>

         <legend>Personal information:</legend>

         <lable>ชื่อ: </lable><br><input type="text" name="user_name"><br>

         <lable> นามสกุล : </lable><br><input type="text" name="user_lastname"><br>
         
         <lable> เบอร์โทร : </lable><br><input type="text" name="user_phone"><br>

         <lable> ที่อยู่ : </lable><br><textarea type="text" name="user_address" rows="5" cols="30"></textarea><br>

        <lable> username : </lable><br><input type="text" name="username"><br><br>

        <lable> password : </lable><br><input type="text" name="password"><br><br>

        <lable> user_type : </lable><br><input type="text" name="user_type"><br><br>

        <lable> user_order : </lable><br><input type="text" name="user_order"><br><br>
           
           
           <input type="submit" value="บันทึกข้อมูล">
    
      </fieldset>
    
    </form>

    </body>

</html>