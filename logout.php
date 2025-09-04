<?php
session_start();
session_destroy(); // Elimino tutti i dati della sessione
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Logout effettuato</h1>
    <p>Hai abbandonato l'area riservata.</p>
    <a href="login.php">Torna al login</a>
</div>

</body>
</html>
