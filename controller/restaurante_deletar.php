<?php
include '../model/classComida.php';
include '../conexao.php';

$comida = new Comida($con);
$comida->delete($_GET['id']);

header("Location: ../view/Restaurante/listar_restaurante.php");
