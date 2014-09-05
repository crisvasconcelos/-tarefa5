<?php
include '../model/classPedido.php';
include '../conexao.php';

$pedido = new Pedido($con);
$pedido->delete($_GET['id']);

header("Location: ../view/Pedidos/listar_pedidos.php");
