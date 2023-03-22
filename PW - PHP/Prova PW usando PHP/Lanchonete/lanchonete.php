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
    .box_form{
                background-color: rgba(0, 0, 0, 0.5);
                width: 30%;
                border-radius: 15px;
                padding: 20px;
            }
            #num{
                padding: 5px;
                border-radius: 5px;
                border: none;
                outline: none;
                width: 50%;
                margin-bottom: 20px;
            }
            form{
                padding: 1em;
            }
            .input{
                width: 50%;
                height: 50%;
                border-radius:60px;
                border-width: 5px;
            }
            body{
                background-color:#FFDEAD;
            }
        </style>

    <center>

    <img src="image/Tabela.png" class="img-fluid">

    <div class="box_form">
        <form action="recupera-dados-lanchonete.php" method="post">
            <div>
                <input type="number" placeholder="digite o codigo" name="codigo" class ="input"  />
            </div>

            <div>
                <input type="number" placeholder="digite a quantidade" name="quantidade" class="input" />
            </div>

                <input type="submit" value="Enviar" />
            </div>
            </form>
    </div>
    </center>

</body>
</html>
