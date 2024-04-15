<?php
if(isset($_POST['submit']))
{
   // print_r($_POST['nome']);
   // print_r($_POST['email']);

   include_once('config.php');
   $nome = $_POST['nome'];
   $email = $_POST['email'];

   $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email) VALUES ('$nome','$email')");
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem Vindo!</h2>
                <p class="description description-primary"></p>
                <p class="description description-primary"></p>
                <button id="signin" class="btn btn-primary">entre</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">insira seus dados</h2>
             
                <p class="description description-second">use seu email para se registrar:</p>
                <form class="form" action= "index.php" method="POST">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome" name="nome">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="email">
                    </label>
                    

                    
                    
                    <input class="btn btn-second" type="submit" name="submit"> </input>     
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, amigo!</h2>
                <p class="description description-primary">Insira seus dados!</p>
                <p class="description description-primary"></p>
                <button id="signup" class="btn btn-primary">Entre</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Faça login, caro amigo!</h2>
               
                <p class="description description-second">use sua conta de email:</p>
                <form class="form" action= "testelogin.php" method="POST">
                
                    <label class="label-input" for="">
                    <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome" name="nome1">
                    </label>
                
                    <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="email1">
                    </label>
                
                    <input class="btn btn-second" type="submit" name="submit"></input>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>