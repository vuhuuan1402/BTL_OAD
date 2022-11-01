<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>

<html>
<head>
    <title> Home Page </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="logout.php"> Logout</a>
        <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
    </div>
</body>
</html>