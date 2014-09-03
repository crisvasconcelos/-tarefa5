<?php
include '../header.php';
include '../../model/classUsuario.php';
include '../../conexao.php';

$usuario = new Usuario($con);
$dados = $usuario->getAll();
?>
<table class="table">
    <thead>
        <tr>
            <th> # </th>
            <th> Login </th>
            <th> Usuário</th> 
            <th> Editar </th>
            <th> Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dados as $key => $row) : ?>
            <tr>
                <td> <?= $row->id; ?> </td>
                <td> <?= $row->login; ?> </td>
                <td> <?= $row->senha; ?> </td>
           
                <td><a href="../../view/Usuario/editar_usuario.php?id=<?= $row->id; ?>" class="btn btn-info">Editar</a></td>
                <td><a href="../../controller/usuario_deletar.php?id=<?= $row->id; ?>" class="btn btn-danger" > Excluir</a></td> 
            
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="/view/Usuario/inserir_usuario.php" class="btn btn-success">Inserir</a>
