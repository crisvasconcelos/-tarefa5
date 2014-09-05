<?php

require_once '../header.php';
require_once '../../conexao.php';
include_once '../../model/classComida.php';
$dado_1 = new Comida($con);
$dado_1 = $dado_1->getAll();
?>

<div class="col-md-5">
    <form class="form-horizontal" action="../../controller/pedidos_inserir.php" method="POST">
        <fieldset>

            <legend>Novos Pedidos</legend>
            <input type="hidden" name="id" value="<?= $dados->id; ?>"/>

            <div class="form-group">
                <label class="col-sm-2 control-label">Mesa:</label>
                <div class="col-sm-10">                       
                    <input type="number" name="mesa" required="" value="<?= $dados->mesa; ?>" />
                </div>
            </div>

            <div class = "form-group">
                <label class = "col-sm-2 control-label">Quantidade:</label>
                <div class = "col-sm-10">
                    <input type = "number" name = "quantidade" required = "" value = "<?= $dados->quantidade; ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Comida:</label>
                <div class="col-sm-10">                       
                    <select name="comida">
                        <?php foreach ($dado_1 as $key => $row) : ?>
                            <option <?php if ($row->comida == $_GET['comida']) {
                            echo 'selected';
                        } ?> value="<?php echo $row->id; ?>"><?php echo $row->comida; ?></option>
<?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-success">Enviar</button>
                </div>
            </div>
        </fieldset>

