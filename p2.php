<?php
$n=$_POST['user'];
?>


<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>magtabaalmusoe</title>
  </head>
  <body dir="rtl" bgcolor="dimgray" >
      <img width="100%" Height="250" src="m.png" alt="الصوره الرئيسيه" />
  <h1 align="center">اهلا بك يا <?php echo "$n";  ?> </h1>
  <hr>
<form class="" action="page1.html" method="post">
  <input type="submit" name="name" value="الرجوع للصفحه الرئيسيه">

</form>
  </body>
</html>
