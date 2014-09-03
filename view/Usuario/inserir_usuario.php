<?php
require_once '../header.php';
?>
<div class="col-md-5">
    <form class="form-horizontal" action="../../controller/usuario_inserir.php" method="POST">
        <fieldset>

            <legend>Usuário</legend>
            <input type="hidden" name="usuario" value="<?= $dados->id; ?>" />

            <div class="form-group">
                <label class="col-sm-2 control-label">Login:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="login" required="" value="<?= $dados->login; ?>" />
                </div>
            </div>

            <div class = "form-group">
                <label class = "col-sm-2 control-label">Senha:</label>
                <div class = "col-sm-10">
                    <input type = "password" name = "senha" required = "" value = "<?= $dados->senha; ?>" />
                </div>
            </div>

            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-success">Enviar</button>
                </div>
            </div>
        </fieldset>
