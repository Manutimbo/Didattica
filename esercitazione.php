<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione PHP</title>
</head>
<style>
body { padding: 3px;
       margin: 6px;
       background-color: cadetblue;     
} 
table { color: black;
        background-color: violet;
        border: 1px solid black;
        margin: 15px;
        text-align: center;
}
th, td { border: 1px solid black;
         background-color: green;
}
p { font-size: 200%;
    background: linear-gradient(green);
    border-radius: 55%;
    padding: 70px;
    height: auto;
    margin: auto;
    width:55%;
    justify-content: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-align: center;
}
</style>
<body>
<p>Esercitazione sui diversi valori Php</p>
<form action ="esercitazione.php" method = "POST">
 <label>Juventus</label><br>
 <input type = "number" name ="Juventus"><br>
 <label>Napoli</label><br>
 <input type = "number" name ="Napoli"><br>
 <label>Inter</label><br>
 <input type = "number" name ="Inter"><br>
 <label>Milan</label><br>
 <input type = "number" name ="Milan"><br><br>
 <input type = "submit"><br>

</form>

<?php

$a ;
$b ;
$c ;
$d ;

$a = $_POST["Juventus"];
$b = $_POST["Napoli"];
$c = $_POST["Inter"];
$d = $_POST["Milan"];

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
          <th>Somma</th>
          <th>Sottrazione</th>
          <th>Moltiplicazione</th>
          <th>Divisione</th>
        </tr>
        <tr> 
          <td>$somma</td>
          <td>$sottrazione</td>
          <td>$moltiplicazione</td>
          <td>$divisione</td>
        </tr>
    </table>"

?>    
</body>
</html>