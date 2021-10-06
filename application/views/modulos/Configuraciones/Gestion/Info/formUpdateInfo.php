<form id="formUpdate">
    <input class="d-none" type="text" name="idx" value="<?= $data[$this->model->tablas['elemento']['id']] ?>">

    <div class='form-row'>
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-2'>
            <label for='nombre'>Nombre</label><br>
            <input id='nombre' name='nombre' type='text' class='form-control form-control-sm' placeholder='Nombre' value="<?= $data['nombre'] ?>">
        </div>
    </div>
    <div class='form-row'>
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-2'>
            <label for='cuenta'>Cuenta</label><br>
            <select id='cuenta' name='cuenta' class='form-control form-control-sm my_select2'>
                <option value=''>-- Seleccionar --</option>
    
            <?php if (!empty($data['idCuenta'])) { ?>
                <option value='<?= $data['idCuenta'] ?>' selected><?= $data['cuenta'] ?></option>
            <?php } ?>
            <?php foreach ($cuentas as $idCuenta => $cuenta) { ?>
                <?php if ($data['idCuenta'] != $cuenta['idCuenta']) { ?>
                    <option value='<?= $cuenta['idCuenta'] ?>'><?= $cuenta['nombre'] ?></option>
                <?php } ?>
            <?php } ?>
            </select>
        </div>
    </div>
    
</form>
<script>
    $('#fechaInicio').daterangepicker(singleDatePickerModal);
    $('#fechaFin').daterangepicker($.extend({
        "autoUpdateInput": false,
    }, singleDatePickerModal));
    $('#fechaInicio').on('apply.daterangepicker', function(ev, picker) {
        $('#fechaFin').val('');
    });
    $('#fechaFin').on('apply.daterangepicker', function(ev, picker) {
        $.fechaLimite(picker, "#fechaFin", "#fechaInicio");
    });
</script>
