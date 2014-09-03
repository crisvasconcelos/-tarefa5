<?php
include '../model/classUsuario.php';
include '../conexao.php';

$usuario = new Usuario($con);
$usuario->delete($_GET['id']);

header("Location: ../view/Usuario/listar_usuario.php");
