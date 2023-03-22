<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <style>
                
                body{
                    background-color:#C0C0C0;
                }

        </style>
    
    <center>
    <?php
                $nome = $_POST['nome'];
                $salario = $_POST['num'];
                $vendas = $_POST['vendas'];
                
                $salario = $salario + (($vendas  * 15 ) /100);

                echo "<h1> O seu salario é de: R$" . $salario ;
                    
            
     ?>
    </center>

</body>
</html>
