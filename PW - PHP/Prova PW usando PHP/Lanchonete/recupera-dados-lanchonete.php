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
            background-color:#FFDEAD;
        }

    </style>
    
    <center>

    <?php
            $codigo = $_POST['codigo'];
            $quantidade = $_POST['quantidade'];
            $total = 0;            
    
            switch($codigo){
                case 1:
                    $total = 4.00 * $quantidade;
                    echo "<h1>O total da sua compra é de: $" . $total;
                    break;
                case 2:
                    $total = 4.50 * $quantidade;
                    echo "<h1>O total da sua compra é de: $" . $total;
                    break;
                case 3:
                    $total = 5 * $quantidade;
                    echo "<h1>O total da sua compra é de: $" . $total;
                    break;
                case 4:
                     $total = 2.00 * $quantidade;
                     echo "<h1>O total da sua compra é de: $" . $total;
                     break;
                 case 5:
                      $total = 1.50 * $quantidade;
                     echo "<h1> O total da sua compra é de: $" . $total;
                      break;

                default:
                echo "Inválido";
            }      
          
     ?>
       </center>
</body>
</html>