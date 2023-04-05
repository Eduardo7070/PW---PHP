<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Carro</title>
    <link rel="icon" type="image/x-icon" href="imagens/CarroDesenho1.png">
    
</head>
<body>
<?php include("navBar.php"); ?>

    <?php

        $id = $_GET['id'];
       
        $carro = Array();
        
        $carro[0] = "<img src='imagens/dodge.jpg'  class ='img' alt='Card 1'>";
        $carro[1] = "<img src='imagens/Renault.jpg'  class ='img' alt='Card 2'>";
        $carro[2] = "<img src='imagens/Avenger.jpg'  class ='img' alt='Card 3'>";
        $carro[3] = "<img src='imagens/Delorean.jpg'  class ='img' alt='Card 4'>";
        $carro[4] = "<img src='imagens/gol quadrado.jpg'  class ='img' alt='Card 5'>";
        $carro[5] = "<img src='imagens/BMW.jpg'  class ='img' alt='Card 6'>";
        $carro[6] = "<img src='imagens/fusca.jpg'  class ='img' alt='Card 7'>";
        $carro[7] = "<img src='imagens/Trevisul.jpg'  class ='img' alt='Card 8'>";
        $carro[8] = "<img src='imagens/opala.jpg'  class ='img' alt='Card 9'>";
        $carro[9] = "<img src='imagens/Maverick.jpg'  class ='img' alt='Card 10'>";

        $descricao = Array();
        $descricao[0] = "<h1 class='h1'>Dodge SRT 0.00KM</h1> <br> <h5>Preço: 137,780,000R$</h5>";
        $descricao[1] = "<h1 class='h1'>Renault 4x4 0.00KM</h1> <br> <h5>Preço: 50,000,000R$</h5>";
        $descricao[2] = "<h1 class='h1'>Jeep Avanger  0.00KM</h1> <br> <h5>Preço: 214,345,758R$</h5>";
        $descricao[3] = "<h1 class='h1'>DeLorean  65.74KM</h1> <br> <h5>Preço:  ∞R$</h5>";
        $descricao[4] = "<h1 class='h1'>GOl Quadrado  165.74KM</h1> <br> <h5>Preço:  25,000,000R$</h5>";
        $descricao[5] = "<h1 class='h1'>BMW-Z4  25.45KM</h1> <br> <h5>Preço:  257,373,000R$</h5>";
        $descricao[6] = "<h1 class='h1'>Fuscas 1987  20065.74KM</h1> <br> <h5>Preço:  15,000,000R$</h5>";
        $descricao[7] = "<h1 class='h1'>Trevisul 4x4  15.74KM</h1> <br> <h5>Preço:  57,347,000R$</h5>";
        $descricao[8] = "<h1 class='h1'>Opala  1065.74KM</h1> <br> <h5>Preço:  78,750,000R$</h5>";
        $descricao[9] = "<h1 class='h1'>Maverick  0.00KM</h1> <br> <h5>Preço:  47,734,000R$</h5>";
    
    
      
    ?>
    
   
     <?php echo $carro[$id]; ?> 
     <div class="div">
     <?php echo $descricao[$id]; ?> 

    <input type="text" placeholder="Digite Seu Nome" class="text">
    <br>
    
    

<h7 class="h7">Nascimento</h7>
    <br>
    <input type= "date"  class="date"> 
    <br>
    <br>
    
    <input type="number" placeholder="Digite o numero do cartão" class="number">
    <br>
    <br>
    <select class="Select" aria-placeholder="Escolha a Cor do Carro">
  <option value="option1">Cor do carro</option>
  <option value="option2">Azul</option>
  <option value="option3">Preto</option>
  <option value="option3">Vermelho</option>
  <option value="option3">Branco</option>
</select>
<br>
<br>

<input type="button" value="Confirmar" class="button">

</div>
    
</body>
</html>


<style>

    .img{
        width: 450px;
        height: 450px;
        margin-top: 8%;
        margin-left: 12%;
        border-radius: 30px;
        
    }
    .h1{
        font-weight: bold;
        margin-left: 50%;
        margin-top: -500px;
    }
    select{
        width: 300px;
        border-radius: 50px;
        margin-left: 50%;
    }
    .text{
        width: 350px;
        border-radius: 50px;
        margin-left: 50%;
        margin-top: 10px;
    }
    h5{
        margin-left: 50%;
        margin-top: -25px;
    }
    .date{
       border-radius: 50px;
       margin-left: 50%;
    }
    .h7{
        margin-left: 50%;
    }
    .number{
        margin-left: 50%;
        border-radius: 50px;
        width: 350px;
    }
    .div{
        margin-top: 100px;
    }
    .button{
        margin-left: 50%;
        width: 100px;
        font-size: small;
        background-color: black;
        color: white;
        border-radius: 50px;
    }
</style>