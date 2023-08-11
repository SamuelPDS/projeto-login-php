<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    $email= $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "SELECT * from  usuario where email = '$email' and senha = '$senha'";


//Conexão com o config.php utilizando a mesma variável utilizando a query acima
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1)
    {
         unset($_SESSION['email']);
         unset($_SESSION['senha']);
         header('Location: index.php');
    }

     else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
    header('Location: sistema.php');
    }
        }
    else{
        header('Location: index.php');
    }

?>