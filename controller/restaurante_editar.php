<?php

include '../model/classComida.php';
include '../conexao.php';

$comida = new Comida($con);

echo $comida->update($_POST);

header("location: ../../view/Restaurante/listar_restaurante.php");