<?php 

session_start();

// SE LìUTENTE è LOGGATO, LO REDIRIGO AL PROFILO
if (isset($_SESSION['username'])) {
    header('Location: profilo.php');
    exit(); 
}

//SIMULAZIONE LOGIN
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
    header('Location: profilo.php');    
    exit();
} else {
    echo $errore = "Effettua il login per accedere al profilo.";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

<?php if (isset($errore)) echo "<p style='color:red;'>$errore</p>"; ?>
    
    <form method="POST">

    Inserisci il tuo nome: <input type="text" name="username" required>
    <button type="submit">Login</button>

    </form>

</body>
</html>