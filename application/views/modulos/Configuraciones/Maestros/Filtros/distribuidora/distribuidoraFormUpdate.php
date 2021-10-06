<form id="formUpdate">

    <input class="d-none" type="text" name="idDistribuidora" value="<?= $distribuidora['cod_distribuidora'] ?>">

    <div class='form-row'>

        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-2'>
            <label for='nombre'>Nombre</label><br>
            <input id='nombre' name='nombre' type='text' class='form-control form-control-sm' placeholder='Nombre' value="<?= $distribuidora['distribuidora'] ?>" patron="requerido">
        </div>

        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-2'>
            <label for='correoDistribuidora'>Correo Distribuidora:</label><br>
            <input id='correoDistribuidora' name='correoDistribuidora' type='text' class='form-control form-control-sm' value="<?= $distribuidora['correoDistribuidora'] ?>" placeholder='Correo Distribuidora'>
        </div>

    </div>
    
</form>

<script>
    $('.my_select2').select2({
        dropdownParent: $("div.modal-content"),
        width: '100%'
    });
</script>