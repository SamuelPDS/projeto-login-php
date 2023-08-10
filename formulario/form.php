<?php
if(isset($_POST['submit'])){

/*   # print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('Gênero: ' . $_POST['genero']);
    print_r('<br>');
    
    print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    print_r('<br>');
    
    print_r('Cidade: ' . $_POST['cidade']);
    print_r('<br>');
    
    print_r('Estado: ' . $_POST['estado']);
    print_r('<br>');

    print_r('Endereco: ' . $_POST['endereco']);
    print_r('<br>');
  */
 
  include_once('config.php');
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $telefone =$_POST['telefone'];
  $genero = $_POST['genero'];
  $data_nascimento = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];

    $query = mysqli_query($conexao, "INSERT INTO usuario(nome, email, senha, telefone, sexo, data_nascimento, cidade, estado, endereco) 
    VALUES ('$nome', '$email', $senha, '$telefone', '$genero', '$data_nascimento', '$cidade', '$estado', '$endereco')");

}
?>
 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Forms</title>
</head>

<body>
<a href="../login/login.php">voltar</a>
    <div class="container">
        <form action="form.php" method="POST">
            <fieldset>
               <legend><strong>Formulário de Clientes</strong></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label class="labelInput" for="nome">Nome Completo</label>
            </div> <br>

            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label class="labelInput" for="email">Email</label>
            </div> <br>

            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label class="labelInput" for="senha">Senha</label>
            </div> <br>

            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label class="labelInput" for="telefone">Telefone</label>
            </div>

            <p>Gênero:</p>

            <div class="inputBox">
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
            </div>

            <div class="inputBox">
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
            </div>

            <div class="inputBox">
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
            </div>
            <br><br>

            <div class="inputBox">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" value="data_nascimento" required>
            </div>
            <br> <br>

            <div class="inputBox">
                <input type="text" id="cidade" name="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br>
            
            <div class="inputBox">
                <input type="text" id="estado" name="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br>

            <div class="inputBox">
                <input type="text" id="endereco" name="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br>

            <input type="submit" name="submit" id="submit"></input>
        </fieldset>
        </form>


    </div>
</body>

</html>