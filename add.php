<?php
$n=$_POST['name'];
$a=$_POST['age'];
$d=$_POST['address'];
$u=$_POST['username'];
$g=$_POST['Eamil'];
$s=$_POST['password'];

$link=mysqli_connect('localhost','root','','sav2');
mysqli_query($link,"set character_set_server='utf8'");
$s9="insert into info2 (name,age,address,username,Email,password) values ('$n','$a','$d','$u','$g','$s')";
mysqli_query($link,$s9);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>موقعي الاول</title>
  </head>
  <body align="center" bgcolor="dimgray"> <br>
    <form  class="" action="p2.php" method="post" align="left">
    user:-
      <input  type="text" name="user" value="">
      password:-
      <input  type="password" name="password" value="">

      <input type="submit" name="login" value="تسجيل الدخول" >
      <a href="p3.php"><input type="button" name="logup" value="انشاء حساب"></a>

    </form>
    <br>
    <img width="100%" src="m.png" Height="350" alt="الصوره الرئيسيه" />
    <br><br><br>
    <a href="https://www.facebook.com/lkingvipl"><h1> magtabaalmusoe</h1></a>
<hr>
<a href="https://t.me/Xm0gx"><h1>tele:-@xm0gx</h1></a>
<hr>
<a href="https://maktoob.yahoo.com/?p=us"><h1> magtabaalmusoe@yahoo.com</h1></a>
<hr>
<br>
<img width="500" src="12.jpg" alt="صورة" />
<br>
<br>
<h2  align="right" textarea=white >  created by :-magtabaalmosoe</h2>
  </body>
</html>
