<?php

include_once '../../conexao.php';
include_once '../../model/classUsuario.php';

$usuario = ($_POST['usuario']);
$senha = ($_POST['senha']);

$cris = new Usuario($con);
//$cris = $con->prepare("SELECT * FROM usuario");
//$cris->execute();
//$dados = $cris->fetchAll(PDO::FETCH_OBJ);
$dados = $cris->getAll();

foreach ($dados as $key => $row) {
    if ($row->login == $usuario && $row->senha == md5($senha)) {
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['admin'] = $row->admin;


        header("Location: ../../index.php");
    } else {
        echo "<script>alert('VOCÊ ERROU A SENHA')</script>";
        echo "<script>window.location.replace('login.php')</script>";
    }
}
