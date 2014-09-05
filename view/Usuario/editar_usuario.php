<?php
require_once '../Login/permissao.php';
require_once '../header.php';
include '../../model/classUsuario.php';
include '../../conexao.php';

$usuario = new Usuario($con);
$dados = $usuario->find($_GET['id']);

?>
<div class="col-md-5">
    <form class="form-horizontal" action="../../controller/usuario_editar.php" method="POST">
        <fieldset>

            <legend>Usuário</legend>
            <input type="hidden" name="id" value="<?= $dados->id; ?>" />

            <div class="form-group">
                <label class="col-sm-2 control-label">Login:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="login" required="" value="<?= $dados->login; ?>" />
                </div>
            </div>

            <div class = "form-group">
                <label class = "col-sm-2 control-label">Senha:</label>
                <div class = "col-sm-10">
                    <input type = "password" name = "senha" value = "" />
                </div>
            </div>
            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-success">Enviar</button>
                </div>
            </div>
        </fieldset>
