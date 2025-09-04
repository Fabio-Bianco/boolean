<?php
session_start();

// Se NON loggato, vai al login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>PROFILO</title>
</head>
<body>

<h1>
    Benvenuto <?php echo htmlspecialchars($_SESSION["username"]); ?>!
</h1>

<p>Questa è la tua area riservata.</p>

<a href="logout.php">Esci</a>

</body>
</html>
