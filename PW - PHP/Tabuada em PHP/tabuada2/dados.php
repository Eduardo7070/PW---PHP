<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Resultado</title>
</head>
<body>
  <div class = "tabela">
<?php
$numero = $_POST['numero1'];
echo "</br>" . "<h1 class = 'h1'>" . "RESULTADO DA TABUADA DO: </h1>" . "<h1>" . $numero .  "</h1>";

echo "<div class= sla>";
echo "<table>";
echo "<tr>";


for($i=0;$i<=10;$i++){
    
    echo "<td>" . $numero ."</td>" . "<td>" . "*" . "</td>" . "<td>" .  $i . "</td>" . "<td>" . "=" . "</td>" . "<td>" . ($numero * $i). "</td>" . "</br>" ;


    echo "</tr>";
}
echo "</table>" ;


?>


</body>
</html>