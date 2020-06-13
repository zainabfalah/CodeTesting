<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="form.php"  method="get">
      Name : <input type ="text" name="name" >
      <br>
      <br>
      Age :  <input type ="number" name="age" >
      <br>
      <br>

      <input type="number" name="num1">
      <br>
      <br>

      <input type="number" name="num2">
    <input type="submit">
    </form>
     your name is :  <?php
     echo $_GET["name"]
    ?>
    <br>
    <br>
    your age is :  <?php
      echo $_GET["age"]
     ?>
     <br>
     Answer= <?php
        echo $_GET["num1"]+ $_GET["num2"]
     ?>

  </body>
</html>
