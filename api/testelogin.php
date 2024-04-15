<?php
session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email1']) && !empty($_POST['nome1']))
    {
        include_once('config.php');
        $email1 = $_POST['email1'];
        $nome1 = $_POST['nome1'];

       // print_r('email: '. $email1 );
        //print_r('email: '. $nome1 );

        $sql = "SELECT * FROM usuarios WHERE email = '$email1' and nome = '$nome1'";
        $result = $conexao->query($sql);
        //print_r($sql);
       // print_r($result);
       if(mysqli_num_rows($result) <1){
       unset($_SESSION['email'] );
       unset($_SESSION['nome']);
        header('Location: index.php');
       }
       else{
        $_SESSION['email'] = $email1;
        $_SESSION['nome'] = $nome1;
        header('Location: btn.php');
       }

    }



    else{
        header('Location: index.php');
    }











?>