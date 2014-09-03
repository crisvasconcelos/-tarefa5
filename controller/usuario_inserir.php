<?php
include '../model/classUsuario.php';
include '../conexao.php';

$usuario= new Usuario($con);
$usuario->insert($_POST);

header("location: ../../view/Usuario/listar_usuario.php");
