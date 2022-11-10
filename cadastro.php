<?php

    if(isset($_POST['acao']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['niver'];
        $cpf = $_POST['cpf'];
        $ddd = $_POST['ddd'];
        $celular = $_POST['telefone'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, email, senha, data_nasc, cpf, ddd, celular) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$data_nasc', '$cpf', '$ddd', '$celular')");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>
        <header>

            <nav>

                <a class="logo" href="index.html">EDNALDO CARS</a>

                <div class="mobile-menu">

                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>

                </div>

                <ul class="nav-list">

                    <li><a href="index.html">HOME</a></li>
                    <li><a href="cars.html">CARROS</a></li>
                    <li><a href="cadastro.html">CADASTRO</a></li>
                    <li><a href="login.html">LOGIN</a></li>

                </ul>

            </nav>

        </header>

        <form action="cadastro.php" method="POST">
            <h3>CADASTRO</h3>
            <input type="text" name="nome" placeholder="Nome" />
            <input type="text" name="sobrenome" placeholder="Sobrenome" />
            <input type="email" name="email" placeholder="E-mail" />
            <input type="password" name="senha" placeholder="Senha" />
            <input type="date" name="niver" placeholder="Data de Nascimento" />
            <input type="number" name="cpf" placeholder="CPF" />
            <input type="tel" name="ddd" placeholder="DDD" />
            <input type="tel" name="telefone" placeholder="Celular" />
            <input type="submit" name="acao" placeholder="Cadastrar" />
        </form>

        <main></main>

        <script src="mobile-navbar.js"></script>
        
    </body>
</html>