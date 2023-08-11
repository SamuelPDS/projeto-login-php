<?php
 
    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'form_login';
  
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if($conexao->connect_errno){
//        echo "Erro";
//    } else {
//        echo "Conexão efetuada com sucesso";
//    }
   
?>
