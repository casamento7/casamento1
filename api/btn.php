<!-- <?php
    session_start();
   // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['nome']) == true))
    {
        unset($_SESSION['email'] );
        unset($_SESSION['nome']);
        header('Location: index.php');
    }
    $logado = $_SESSION['email'];




?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
 
    <style>

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100vw;
            height: 100vh;
           
        }
      
        div{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 5px ;
            margin: 10px;
            width: 500px;
            height: 250px;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .btn {
         background: #58af9b ;   
        border-radius: 15px;
        text-transform: uppercase;
        color: white;
        font-size: 50px;
        padding: 10px 50px;
        cursor: pointer;
        font-weight: bold;
        width: 10vw;
        height: 10vh;
        align-self: center;
        border: none;
        margin-top: 1rem;
    
    }
    @media(max-width: 100vw){
        #texto{
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    a{
        text-decoration: none;
        color: black;
    }
        
    
    
     </style>
    </head>
    <body>
        <section class="main">
            <div>
        
        <a href="ceri.php" id="texto" class="btn">Cerimônia</a>
            </div>
        
            <div>  
            <a href="recepicao.php" id="texto" class="btn">Recepção</a>
            </div>
    
            <div>
            
            <a href="aviso.php" id="texto" class="btn">Avisos</a>
            </div>
        
    </section>
       
</body>
</html>