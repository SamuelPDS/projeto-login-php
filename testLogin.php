<?php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    $email= $_POST['email'];
    $senha = $_POST['senha'];

    print_r(('Email: ' . $email));
    print_r('<br>');
    print_r(('Senha: ' . $senha));

    $sql = "SELECT * from  usuarios where email = $email and senha = $senha";


//Conexão com o config.php utilizando a mesma variável utilizando a query acima
    $result = $conexao->query($sql);

    print_r($sql);
    print_r('<br>');
    print_r($result);

} else {
    header('Location: index.php');
}

?>