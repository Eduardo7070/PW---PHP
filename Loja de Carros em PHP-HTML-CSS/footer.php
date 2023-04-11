<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer - Sagar Developer</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Loja de<span>Automoveis</span></h3>

            <p class="footer-links">
                <a href="index.php">Home</a>
                |
                <a href="https://www.google.com/">Sair</a>
                
             
            </p>

            <p class="footer-company-name">Loja de Automoveis © 2023 <strong>Eduardo da Silva</strong> tem todos os direitos</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>São Paulo</span>
                    Av. Nordestina, 345</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+55 (11) 95178-8058</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:eeduardosilva010506@gmail.com">eeduardosilva010506@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Sobre</span>
                <strong>Loja de Automoveis</strong> Foi criada com o propsito de aprendizagem de funções no PHP
                Foram usadas as linguagens
                HTML, CSS e PHP.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/eduardosn7070/"><i class="fa fa-instagram"></i></a>
                <a href="https://github.com/Eduardo7070"><i class="fa fa-github"></i></a>
            
            </div>
        </div>
    </footer>

</body>

</html>
<style>
     @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');
* {
    padding: 0;
    margin: 0;
}

body {
    font-family: 'Poppins', sans-serif;
}

html {
    background-color: #eaf0f2;
}

header {
    text-align: center;
    padding-top: 100px;
    margin-bottom: 300px;
    font-size: 35px;
}

header h2 {
    color: #f0525f;
}

header span {
    color: #eaa03f;
}

/* The footer is fixed to the bottom of the page */

footer {
    position: fixed;
    bottom: 0;
}

@media (max-height:800px) {
    footer {
        position: static;
    }
    header {
        padding-top: 40px;
    }
}

.footer-distributed {
    background-color: 	#A9A9A9;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
}

.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
    width: 30%;
}

.footer-distributed h3 {
    color: black;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
}


.footer-distributed h3 span {
    color: white;
}

/* Footer links */

.footer-distributed .footer-links {
    color: black;
    margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: white;
}

.footer-distributed .footer-company-name {
    color: black;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
    width: 35%;
}

.footer-distributed .footer-center i {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: black;
    text-decoration: none;
    ;
}

/* Footer Right */

.footer-distributed .footer-right {
    width: 30%;
}

.footer-distributed .footer-company-about {
    line-height: 20px;
    color: black;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons {
    margin-top: 25px;
}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
    background-color: #3F71EA;
}

.footer-links a:hover {
    color: #3F71EA;
}

@media (max-width: 880px) {
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .footer-distributed .footer-center i {
        margin-left: 0;
    }
}       
        

        
</style>