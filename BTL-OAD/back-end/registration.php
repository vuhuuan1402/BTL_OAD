<?php

session_start();

$con = mysql_connect('localhost', 'root', '');

mysql_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name='$name'";

$result = mysql_query($con, $s);

$num = mysql_num_rows($result);

if ($num == 1){
    echo" Usename Already Taken";
}
else {
    $reg = " insert into usertable(name, password) values('$name', '$pass')";
    mysql_query($con, $reg);
    echo" Registration Successful";
}
?>