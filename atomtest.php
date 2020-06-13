<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
  $friends=array("zahraa<br>","idris","mosa<br>","saadie<br>","meena<br>","tiba<br>","noor<br>");
  echo $friends[0];
  echo $friends[1];
  echo $friends[5];
  echo count($friends);
  $friends[10]="<br>zoza";
  echo $friends[10];

    ?>
  </body>
</html>
