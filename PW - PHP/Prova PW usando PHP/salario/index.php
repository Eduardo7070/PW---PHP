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
            input[type="submit"]{
                padding: 5px 15px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
                background-color: dodgerblue;
                color: #fff;
                font-weight: bold;
            }
            .input{
                width: 30%;
                height: 80%;
                border-radius:60px;
                border-width: 5px;
            }
            body{
                background-color:#C0C0C0;
            }
        </style>

    <center>

    <form action="recupera-dados.php" method="post">
        <div>
            <input type="text" placeholder="digite o seu nome" name="nome"  class ="input" />
        </div>

        <div>
            <input type="number" placeholder="digite o seu salario" name="num" class ="input"  />
        </div>

        <div>
            <input type="number" placeholder="digite o total de vendas" name="vendas"  class ="input" />
        </div>
        <div>
            <input type="submit" value="Enviar" />
        </div>
        </form>
    </center>

</body>
</html>
