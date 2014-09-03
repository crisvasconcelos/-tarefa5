<?php
include '../model/classComida.php';
include '../conexao.php';

$comida= new Comida($con);
$comida->insert($_POST);

header("location:../view/Restaurante/listar_restaurante.php");


