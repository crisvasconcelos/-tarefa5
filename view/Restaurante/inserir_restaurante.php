<?php
require_once '../header.php';

?>

<div class="col-md-5">
    <form class="form-horizontal" action="../../controller/restaurante_inserir.php" method="POST">
        <fieldset>

            <legend>Comidas e Preços</legend>
            <input type="hidden" name="id" value="<?=$dados->id;?>"/>

            <div class="form-group">
                <label class="col-sm-2 control-label">Comida:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="comida" required="" value="<?=$dados->comida;?>" />
                </div>
            </div>

            <div class = "form-group">
                <label class = "col-sm-2 control-label">Preços:</label>
                <div class = "col-sm-10">
                    <input type = "text" name = "precos" required = "" value = "<?=$dados->precos;?>" />
                </div>
            </div>

            <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-success">Enviar</button>
                </div>
            </div>
        </fieldset>

