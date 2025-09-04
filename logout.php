<?php
session_start();
session_destroy();  

if (isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOUT</title>
</head>
<body>
    
</body>
</html>