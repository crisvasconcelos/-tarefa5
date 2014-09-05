<?php
require_once '../header.php';
include '../../model/classPedido.php';
include '../../conexao.php';


$pedido = new Pedido($con);
$dado = $pedido->getAll();
?>
<table class="table">
    <thead>
        <tr>
            <th> # </th>
            <th> Mesa </th>
            <th> Quantidade</th> 
            <th> Comida</th>
            <?php if ($_SESSION['admin']): ?>
                <th> Editar </th>
                <th> Excluir</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dado as $key => $row) : ?>
            <tr>
                <td> <?= $row->id; ?> </td>
                <td> <?= $row->mesa; ?> </td>
                <td> <?= $row->quantidade; ?> </td>
                <td> <?= $row->nome; ?> </td>
                <?php if ($_SESSION['admin']): ?>
                    <td><a href="../../view/Pedidos/editar_pedidos.php?id=<?= $row->id; ?>" class="btn btn-info">Editar</a></td>
                    <td><a href="../../controller/pedidos_deletar.php?id=<?= $row->id; ?>" class="btn btn-danger" > Excluir</a></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="/view/Pedidos/inserir_pedidos.php" class="btn btn-success">Inserir</a>
