<?php 
session_start();

if (isset($_SESSION['username'])) {
    header('Location: profilo.php');
    exit(); 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);

    if (!empty($username)) {
        $_SESSION['username'] = $username;
        header('Location: profilo.php');    
        exit();
    } else {
        $errore = "Inserisci un nome valido.";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Login</h1>

    <?php if (isset($errore)) echo "<p class='error'>$errore</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Inserisci il tuo nome" required>
        <br>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
