<?php
require_once '../header.php';
include '../../model/classComida.php';
include '../../conexao.php';


$comida = new Comida($con);
$dado = $comida->getAll();
?>
<table class="table">
    <thead>
        <tr>
            <th> # </th>
            <th> comida </th>
            <th> preços</th> 
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
                <td> <?= $row->comida; ?> </td>
                <td> <?= $row->precos; ?> </td>
                <?php if ($_SESSION['admin']): ?>
                    <td><a href="../../view/Restaurante/editar_restaurante.php?id=<?= $row->id; ?>" class="btn btn-info">Editar</a></td>
                    <td><a href="../../controller/restaurante_deletar.php?id=<?= $row->id; ?>" class="btn btn-danger" > Excluir</a></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php if ($_SESSION['admin']): ?>
<a href="/view/Restaurante/inserir_restaurante.php" class="btn btn-success">Inserir</a>
<?php endif;?>