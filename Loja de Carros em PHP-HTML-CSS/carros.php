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
        $descricao[0] = "<h1 class='h1'>Dodge SRT 0.00KM</h1> <br> <h5>Preço: 137,780,000R$</h5> ";
        $descricao[1] = "<h1 class='h1'>Renault 4x4 0.00KM</h1> <br> <h5>Preço: 50,000,000R$</h5>";
        $descricao[2] = "<h1 class='h1'>Jeep Avanger  0.00KM</h1> <br> <h5>Preço: 214,345,758R$</h5>";
        $descricao[3] = "<h1 class='h1'>DeLorean  65.74KM</h1> <br> <h5>Preço:  ∞R$</h5>";
        $descricao[4] = "<h1 class='h1'>GOl Quadrado  165.74KM</h1> <br> <h5>Preço:  25,000,000R$</h5>";
        $descricao[5] = "<h1 class='h1'>BMW-Z4  25.45KM</h1> <br> <h5>Preço:  257,373,000R$</h5>";
        $descricao[6] = "<h1 class='h1'>Fuscas 1987  20065.74KM</h1> <br> <h5>Preço:  15,000,000R$</h5>";
        $descricao[7] = "<h1 class='h1'>Trevisul 4x4  15.74KM</h1> <br> <h5>Preço:  57,347,000R$</h5>";
        $descricao[8] = "<h1 class='h1'>Opala  1065.74KM</h1> <br> <h5>Preço:  78,750,000R$</h5>";
        $descricao[9] = "<h1 class='h1'>Maverick  0.00KM</h1> <br> <h5>Preço:  47,734,000R$</h5>";
    
        $card = Array(); 
        
        $card[0] = "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>
        A começar pelo seu motor: um 6.2 V8 HEMI  produz nada menos do que 852 cv de potência e absurdos 106,4 kgfm de torque. São números bem mais impressionantes que os alcançados pelo Challenger Hellcat, considerado até então o carro de produção mais potente já produzido pela marca, com 717 cv de potência e  89 kgfm de torque. Ambos usam o mesmo V8, mas para equipar o Demon, o propulsor não foi apenas recalibrado.  </p> </div> </div>";
           
        $card[1] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>
        O Renault possui duas opções de motores: O tecnológico Turbo TCe 1.3 flex que entrega 170 cavalos de potência e o maior torque da categoria com 27,5 kgfm. Combinado com o câmbio automático CVT XTronic de 8 velocidades, o carro tem ainda mais desempenho, economia de combustível e prazer ao dirigir. </p> </div> </div>";
         
        $card[2] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>Jeep Avenger é um mini SUV elétrico
        No caso da primeira opção, o motor desenvolve 156cv de potência e 26,5kgfm de torque, com uma autonomia de até 550km. Já a segunda traz uma unidade 1.2 de três cilindros turbo, que gera 100cv, além de um câmbio manual de 6 velocidades. </p> </div> </div>";

        $card[3] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>A DeLorean Motor Company (DMC) original foi uma empresa automobilística estadunidense fundada pelo engenheiro John DeLorean em 1975.  Seu único modelo, o DeLorean, ficou mundialmente conhecido por ter sido usado na trilogia Back to the Future (br: De volta para o Futuro — pt: Regresso ao Futuro) de 1985, 1989 e 1990, com os atores Michael J. Fox e Christopher Lloyd.</p> </div> </div>";

        $card[4] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>O Volkswagen Gol Quadrado é um modelo de carro compacto fabricado pela Volkswagen do Brasil entre os anos de 1980 e 1994. Ele é chamado de quadrado devido ao seu design com linhas retas e cantos angulares. </p> </div> </div>";

        $card[5] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>O BMW Z4 é um carro esportivo conversível de dois lugares fabricado pela BMW. O modelo foi lançado em 2002 como substituto do BMW Z3 e atualmente está em sua terceira geração. O design do Z4 é caracterizado por uma aparência agressiva, linhas elegantes e uma capota retrátil que pode ser acionada eletronicamente para abrir ou fechar o teto.</p> </div> </div>";

        $card[6] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>O Fusca é um carro compacto da Volkswagen que foi produzido originalmente na Alemanha a partir da década de 1930. O design do Fusca é caracterizado por sua carroceria arredondada e curvilínea, com um motor a ar montado na traseira do veículo. </p> </div> </div>";

        $card[7] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'> A Trevisul tem a missão de engrandecer a marca Fiat na região. Com sede nas cidades de Tijucas e Brusque, a concessionária Fiat, tem como principal objetivo recuperar a participação da marca Fiat na região. </p> </div> </div>";

        $card[8] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>O Opala é um carro de grande porte produzido pela General Motors do Brasil de 1968 a 1992. Ele foi projetado para ser um carro executivo de luxo e, ao longo dos anos, passou por várias mudanças de design e atualizações mecânicas.</p> </div> </div>";

        $card[9] =  "<div class='card' style='width: 18rem;'> <div class='card-body'> <h6 class='card-subtitle mb-2 text-body-secondary'>Descrição</h6> <p class='card-text'>O Maverick foi um carro produzido pela Ford no Brasil entre os anos de 1973 e 1979. Ele foi lançado para competir com modelos como o Chevrolet Opala e o Dodge Dart. </p> </div> </div>";
    

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
<a href="index.php">
<input type="button" value="Confirmar" class="button">
</a>
</div>
<?php echo $card[$id]; ?>   
<?php include("footer.php"); ?>
</body>
</html>



<style>

    .img{
        width: 450px;
        height: 450px;
        margin-top: 8%;
        margin-left: 10px;
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
        margin-right: 35%;
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
    .card{
        margin-left: 70%;
        margin-top: -300px;
    }
    
</style>