<form id="formUpdate">
    <input class="d-none" type="text" name="idx" value="<?= $data[$this->model->tablas['infoPlaza']['id']] ?>">

    <div class='form-row'>
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-2'>
            <label for='nombre'>Nombre</label><br>
            <input id='nombre' name='nombre' type='text' class='form-control form-control-sm' placeholder='Nombre' value="<?= $data['nombre'] ?>">
        </div>
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-2'>
            <label for='sl_cuentas'>Cuenta</label><br>
            <select class="form-control" name="sl_cuentas" id="sl_cuentas">
                <?=htmlSelectOptionArray($cuentas,$data['idCuenta'])?>
            </select>
        </div>
    </div>
</form>
