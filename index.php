<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Welcome to My Page PHP</h1>

 <hr>

<?php 

echo "Ciao, sono un file PHP!";
  
$name = "Fabio";

$eta = 35;

echo "<br>";  
echo "<br>";  
echo "Il mio nome è " . $name .  " e ho " . $eta . " anni." ;

$eta = 35

?>

<hr>

<?php
echo "Questo è un altro blocco di codice PHP con le istruzioni condizionali";

$numero = 20;

if($numero > 10) {
    echo "<br>Il numero è maggiore di 10";
} else {
    echo "<br>Il numero è minore o uguale a 10";
}

?>

<hr>

<?php

echo "Questo è un altro blocco di codice PHP con array";    

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<h3>var_dump()</h3>";
echo "<pre>";
var_dump($numbers);
echo "</pre>";

echo "<h3>print_r()</h3>";
echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "<h3>var_export()</h3>";
echo "<pre>";
var_export($numbers);
echo "</pre>";

?>
    
</body>
</html>