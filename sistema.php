<?php 
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        header('Location: index.php');
    }
$logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
   <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, deepskyblue, rgb(0, 0, 0) );    
    color: #fff;
}

.p{ 
    text-align: center;
    font-size: 2rem;
}

   </style>

    <title>Sistema</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      <a href="sair.php" type="button" class="btn btn-danger">Sair</a>
    </form>
  </div>
</nav>

<div class="p">
    <?php 
        echo "Bem vindo!, $logado"
    ?>
</div>

</body>
</html>