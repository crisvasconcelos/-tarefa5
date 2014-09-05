<?php 
include '../model/classPedido.php';
include '../conexao.php';

$pedido= new Pedido($con);
$pedido->update($_POST);

header("location:../view/Pedidos/listar_pedidos.php");
