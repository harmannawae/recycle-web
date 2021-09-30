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

         <lable>ประเภทข่าว: </lable><br><input type="text" name="n_title"><br>

         <lable> หัวข้อข่าว : </lable><br><input type="text" name="n_name"><br>

         
         <lable> เนื้อหาข่าว : </lable><br><textarea type="text" name="n_content" rows="5" cols="30"></textarea><br>

           
           
           <input type="submit" name="newspaper_add" value="บันทึกข้อมูล">
    
      </fieldset>
    
    </form>

    </body>

</html>