<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Profilo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>
        Benvenuto <?php echo htmlspecialchars($_SESSION["username"]); ?>!
    </h1>

    <p>Questa è la tua area riservata.</p>

    <a href="logout.php">Esci</a>
</div>

</body>
</html>
