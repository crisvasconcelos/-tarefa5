<?php include 'Login/restrito.php';?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Restaurante </title>
        <!-- Icone -->
        <link rel="shortcut icon" href="caveira.gif" />
        <!-- Bootstrap.css -->
        <link href="/public/css/bootstrap.min.css" rel="stylesheet">
        <link href="/public/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
            <header>       
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <a class="navbar-brand" href="/index.php">Inicio</a> 
                        <a class="navbar-brand" href="/view/Restaurante/listar_restaurante.php">Cardapio</a>
                        <?php if ($_SESSION['admin']): ?>
                        <a  class="navbar-brand" href="/view/Usuario/listar_usuario.php">Usuário</a>
                        <?php endif; ?>
                        <a class="navbar-brand" href="/view/Pedidos/listar_pedidos.php"> Pedidos</a>
                        <a  class="navbar-brand" href="/view/Login/logout.php">Sair</a>
                    </div>
                </nav>
            </header>
