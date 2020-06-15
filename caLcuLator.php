<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
       <form action="caLcuLator.php" method="post">
         First Number: <input type="number" step=0.0001 name="num1"><br>
         Op : <input type="text" name="op"><br>
         Second Number: <input type="number" step=0.01 name="num2"><br>

        <input type="submit"><br>

        </form>
        <?php
           $num1=$_POST["num1"];
            $num2=$_POST["num2"];
             $op=$_POST["op"];

        switch ($op) {
          case '+':
            echo $num1+$num2;
            break;
          case '-':
            echo $num1-$num2;
            break;
          case '*':
            echo $num1*$num2;
            break;
          case '/':
            echo $num1/$num2;
            break;
          case '%':
            echo $num1%$num2;
            break;


          default:
            echo "Invalid operation";
            break;
        }

        ?>
  </body>
</html>
