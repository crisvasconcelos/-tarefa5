<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>RESTAURANTE </title>
        <!-- Icone -->
        <link rel="shortcut icon" href="logo.png" />
        <!-- Bootstrap.css -->
        <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../public/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- jQuery  -->
        <script src="../../public/js/jquery.min.js"></script>
        <!-- Bootstrap js -->
        <script src="../../public/js/bootstrap.min.js"></script>
    </head>
        <div class="well col-md-4 col-md-offset-4">
            <h1> Login </h1>
            <form method="POST" action="verificalogin.php">
                <div class="form-group">
                    <label>Usuário:</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuário">
                </div>
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                </div>
                <button type="submit" class="btn btn-info">Logar</button>
        </div>
    
</html>