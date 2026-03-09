<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classifica Formula 1</title>
</head>
<style>

body { padding: 2px;
       margin: 5px;
       background-image: url(Sfondo.jpg);
       background-size: cover;
       background-position: center;
       height: 1500px;
}
table { color: black;
        border: 1px solid black;
        margin: 10px;
        text-align: center;
        background-color: red;
}
th, td { border: 1px solid black;
}
p { text-align: center;
    font-size: 400%;
}


</style>
<body>
<p>Classifica Formula 1</p>
<form action="Esercitazione Classifica.php" method="POST">
<label>Ferrari</label><br>
<input type="number" name="Ferrari">
<button type="submit" name="operazione" value="somma">Invia</button><br>
<label>Porche</label><br>
<input type="number" name="Porche">
<button type="submit" name="operazione" value="sottrazione">Invia</button><br>
<label>Mclaren</label><br>
<input type="number" name="Mclaren">
<button type="submit" name="operazione" value="moltiplicazione">Invia</button><br>
<label>Bmw</label><br>
<input type="number" name="Bmw">
<button type="submit" name="operazione" value="divisione">Invia</button><br><br>

</form>


<?php

$a;
$b;
$c;
$d;

$a = $_POST["Ferrari"];
$b = $_POST["Porche"];
$c = $_POST["Mclaren"];
$d = $_POST["Bmw"];

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$somma = $a + $b + $c + $d;
$sottrazione = ($a + $b) - ($c + $d);
$moltiplicazione = ($a + $b + $c) * $d;
$divisione = ($a + $b + $c) / $d;

 echo "<table> 
       <tr>
         <th>1° Classificata</th>
         <td>$somma</td>
       </tr>
       <tr>
         <th>2° Classificata</th>
         <td>$sottrazione</td>
       </tr>
       <tr>
         <th>3° Classificata</th>
         <td>$moltiplicazione</td>
       </tr>
       <tr>
       <th>4° Classificata</th>
       <td>$divisione</td>
       </tr>"


?>
</body>
</html>