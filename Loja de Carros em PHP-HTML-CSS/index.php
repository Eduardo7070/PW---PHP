<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Loja de Carro</title>
	<link rel="icon" type="image/x-icon" href="imagens/CarroDesenho1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


    

</head>
<body>

<?php include("navBar.php"); ?>


<div class="container " >
		<div class="card" style="margin-top: 10px;">
			<img src="imagens/dodge.jpg"  class ="img" alt="Card 1">
			<div class="card-content">
				<h2 class="card-title">Dodge</h2>
        <a href="carros.php?id=0" class="a"> <p class="card-description">Mais informações</p> </a>   
			</div>
		</div>

		<div class="card" style="margin-top: 10px;">
			<img src="imagens/Renault.jpg"  class ="img" alt="Card 2">
			<div class="card-content">
				<h2 class="card-title">Renault</h2>
				<a href="carros.php?id=1" class="a"> <p class="card-description">Mais informações</p> </a>   
			</div>
		</div>

		<div class="card" style="margin-top: 10px;">
			<img src="imagens/Avenger.jpg" alt="Card 3">
			<div class="card-content">
				<h2 class="card-title">Avenger</h2>
        <a href="carros.php?id=2" class="a"> <p class="card-description">Mais informações</p> </a>   
			</div>
		</div>

		<div class="card" style="margin-top: 10px;">
			<img src="imagens/Delorean.jpg" alt="Card 4">
			<div class="card-content">
				<h2 class="card-title">DeLorean</h2>
        <a href="carros.php?id=3" class="a"> <p class="card-description">Mais informações</p> </a>   
			</div>
		</div>

		<div class="card" style="margin-top: 10px;">
			<img src="imagens/gol quadrado.jpg" alt="Card 5">
			<div class="card-content">
				<h2 class="card-title">GOL Quadrado</h2>
				<a href="carros.php?id=4" class="a"> <p class="card-description">Mais informações</p> </a>   
			</div>
      </div>

		
      <div class="card" style="margin-top: 100px;">
			<img src="imagens/BMW.jpg" alt="Card 6">
			<div class="card-content">
				<h2 class="card-title">BMW-Z4</h2>
				<a href="carros.php?id=5" class="a"> <p class="card-description">Mais informações</p> </a>   
			</div>
      </div>

      <div class="card" style="margin-top: 100px;">
			<img src="imagens/fusca.jpg" alt="Card 7">
			<div class="card-content">
				<h2 class="card-title">Fusca</h2>
				<a href="carros.php?id=6" class="a"> <p class="card-description">Mais informações</p> </a>     
			</div>
      </div>

      <div class="card" style="margin-top: 100px;">
			<img src="imagens/Trevisul.jpg" alt="Card 8">
			<div class="card-content">
				<h2 class="card-title">Trevisul</h2>
        <a href="carros.php?id=7" class="a"> <p class="card-description">Mais informações</p> </a>     
			</div>
      </div>

      <div class="card" style="margin-top: 100px;">
			<img src="imagens/opala.jpg" alt="Card 9">
			<div class="card-content">
				<h2 class="card-title">Opala</h2>
				<a href="carros.php?id=8"class="a"> <p class="card-description">Mais informações</p> </a>      
			</div>
      </div>

      <div class="card" style="margin-top: 100px;">
			<img src="imagens/Maverick.jpg" alt="Card 10">
			<div class="card-content">
				<h2 class="card-title">Maverick</h2>
				<a href="carros.php?id=9" class="a"> <p class="card-description">Mais informações</p> </a>   
			</div>
      </div>
</div>
    
<?php include("footer.php"); ?>
</body>
</html>
<style>
  body{
    
    overflow-x: hidden;
  }
  .container {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.card {
			width: 18%;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
			border-radius: 5px;
			overflow: hidden;
		}

		.card img {
			width: 100%;
			height: auto;
			object-fit: cover;
			object-position: center;
		}

		.card-content {
			padding: 0px;
			text-align: center;
		}

		.card-title {
			font-size: 20px;
			margin-bottom: 10px;
		}

		.card-description {
			font-size: 14px;
		}
		.a{
			text-decoration: none;
			color: #696969;
		}
		.a:hover{
			font-size: 10vh;
			background-color: black;
			text-decoration: none;
    		color: black;
    		text-transform: none;
		}
		
    
</style>