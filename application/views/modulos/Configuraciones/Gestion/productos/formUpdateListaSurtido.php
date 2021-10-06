<?php
$num = 1;
$nameSelectEncuesta = 'elemento_lista';
$select2 = "my_select2AgregarLista"; 
$class = "modalUpdate";
?>
<style>
.tableFixHead          { overflow-y: auto; height: 100px; }
.tableFixHead thead th { position: sticky; top: 0; }

table  { border-collapse: collapse; width: 100%; }
th, td { padding: 8px 16px; }
th     { background:#eee; }
</style>
<form id="formUpdate">
    <input class="d-none" type="text" name="idlst" value="<?= $data[$this->model->tablas['surtido']['id']] ?>">

    <div class='form-row'>
        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-2'>
            <label for='grupoCanal'>Grupo Canal</label><br>
            <select id='grupoCanal' name='grupoCanal' class='form-control form-control-sm my_select2 grupoCanal_sl'>
                <option value=''>-- Seleccionar --</option>

                <?php if (!empty($data['idGrupoCanal'])) { ?>
                    <option value='<?= $data['idGrupoCanal'] ?>' selected><?= $data['grupoCanal'] ?></option>
                <?php } ?>
                <? if(!empty($gruposCanal)){ ?>
                <?php foreach ($gruposCanal as $index => $row) { 
                        if (!empty($data['idGrupoCanal'])) {
                            if($data['idGrupoCanal']==$row['idGrupoCanal']){
                                continue;
                            }
                        }  
                    ?>
                    <option value='<?= $row['idGrupoCanal'] ?>'><?= $row['nombre'] ?></option>
                <?php } ?>
                <? } ?>
            </select>
        </div>

        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-2'>
            <label for='canal'>Canal</label><br>
                <select id='canal' name='canal' class='form-control form-control-sm my_select2 canal_sl'>
                <option value=''>-- Seleccionar --</option>
                <?php if (!empty($data['idCanal'])) { ?>
                    <option value='<?= $data['idCanal'] ?>' selected><?= $data['canal'] ?></option>
                <?php } ?>
                <?php foreach ($canales as $idCanal => $canal) { ?>
                    <?php if ($data['idCanal'] != $canal['idCanal']) { ?>
                        <option value='<?= $canal['idCanal'] ?>'><?= $canal['nombre'] ?></option>
                    <?php } ?>
                <?php } ?>
                </select>
        </div>
        
    </div>
    <div class='form-row'>
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-2'>
        <label for='cliente'>Cliente</label><br>
            <div class="cliente_sl">
                <select id='cliente' name='cliente' class='form-control form-control-sm my_select2'>
                    <option value=''>-- Seleccionar --</option>
        
                <?php if (!empty($data['idCliente'])) { ?>
                    <option value='<?= $data['idCliente'] ?>' selected><?= $data['razonSocial'] ?></option>
                <?php } ?>
                <?php foreach ($clientes as $idCliente => $cliente) { ?>
                    <?php if ($data['idCliente'] != $cliente['idCliente']) { ?>
                        <option value='<?= $cliente['idCliente'] ?>'><?= $cliente['razonSocial'] ?></option>
                    <?php } ?>
                <?php } ?>
                </select>
            </div>

        </div>
    </div>

    <div class="form-row">
        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-2'>
            <label for='fechaInicio'>Fecha Inicio</label><br>
            <input id='fechaInicio' name='fechaInicio' type='text' class='form-control form-control-sm' placeholder='Fecha Inicio' value="<?= date_change_format($data['fecIni']) ?>">
        </div>
        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-2'>
            <label for='fechaFin'>Fecha Fin</label><br>
            <input id='fechaFin' name='fechaFin' type='text' class='form-control form-control-sm' placeholder='Fecha Fin' value="<?= date_change_format($data['fecFin']) ?>">
        </div>
    </div>
    <div class="form-row mb-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-wrapper-scroll-y my-custom-scrollbar ">
                <table class='table-Success table-sm table-bordered text-nowrap tableFixHead'>
                    <div>
                        <thead class='thead-dark'>
                            <tr>
                                <th class="text-center align-middle">
                                    ACTUALIZAR
                                </th>
                                <th class="text-center align-middle">
                                    <div class="wr-20">PRODUCTOS</div>
                                </th>
                                <div>
                                    <th class="text-center align-middle">
                                        <button  class="btn btn-AgregarElemento btn-primary" title="Agregar Elemento"><strong>AGREGAR FILA</strong> <i class="fa fa-plus"></i></button>
                                    </th>
                                </div>
                            </tr>
                        </thead>
                    </div>
                    <div>
                        
                            <tbody>
                                <tr class='trPadre d-none' data-select2="<?= $select2 ?>" data-classmodal="<?=$class?>">
                                    <td></td>

                                    <td class="text-center" data-name='<?= $nameSelectEncuesta ?>'>
                                        <select class='form-control form-control-sm'>
                                            <option value=''>-- Seleccionar --</option>
                                            <?php foreach ($elementos as $idElemento => $elemento) { ?>
                                                <option value='<?= $elemento[$this->model->tablas['elemento']['id']] ?>'><?= $elemento['nombre'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td class="text-left">
                                        <div style="padding-left: 45%;">
                                            <button  class="border-0 btn-BorrarElemento btn-outline-secondary" title="Eliminar Elemento"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </td> 
                                </tr>

                                <?php
                                foreach ($lista_elementos as $key => $row) { ?>
                                    <tr class='trHijo table-secondary' data-fila="<?=$num?>">
                                        <td class="text-center">
                                            <input name='id-<?= $num ?>' class="chk-ActualizarElemento" type="checkbox" value='<?= $row[$this->model->tablas['listaDet']['id']] ?>'>
                                        </td>
                                        <td class="text-center">
                                            <input value="<?=$row['nombre']?>"  type="text" class="form-control form-control-sm" placeholder="textotest" disabled readonly="readonly">
                                        </td>
                                        <td class="text-left" >
                                            <div style="padding-left: 45%;">
                                                <button  class="border-0   btn-BorrarElemento btn-outline-secondary" title="Eliminar Elemento" disabled><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>

                                    </tr>
                                <?php $num++;
                                } ?>
                            </tbody>
                    </div>
                </table>
            </div>
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
    $('.my_select2').select2({
        dropdownParent: $("div.modal-content-<?=$class?>"),
        width: '100%'
    });
    Productos.grupoCanal=<?=json_encode($grupoCanal_canales)?> 

    $(document).ready(function(){
        let idCanal =true;
        $('.grupoCanal_sl').change();
        if(idCanal){
            $('.canal_sl').val(<?=$data['idCanal']?>);
            $('.canal_sl').select2({
                dropdownParent: $("div.modal-content-<?=$class?>"),
                width: '100%'
            });
        }
    });
</script>