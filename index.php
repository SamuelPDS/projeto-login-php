<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Login</title>
</head>
<body>
    <a href="login.php">voltar</a>
    <div class="container"> 
        <h1>Login</h1> 
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email"> <br>
            <input type="password" name="senha" placeholder="Digite sua senha">
            <input class="btn" type="submit" name="submit" value="Enviar">
    </form>
    </div>
</body>
</html>