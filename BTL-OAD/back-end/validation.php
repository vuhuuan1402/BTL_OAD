<?php

session_start();

$con = mysql_connect('localhost', 'root', '');

mysql_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name='$name' && password='$pass'";

$result = mysql_query($con, $s);

$num = mysql_num_rows($result);

if ($num == 1){
    $_SESSION['username'] = $name;
    header('location:home.php')
}
else {
    header('location:login.php')
}
?>