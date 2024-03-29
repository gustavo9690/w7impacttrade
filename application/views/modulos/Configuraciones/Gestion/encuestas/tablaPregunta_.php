<?php
$num = 1;
$nameTipoPregunta = "tipoPregunta";
$nameTextoPregunta = 'textoPregunta';
$nameTextoOrden = 'txtOrden';
$estadoPregunta = 'estadoPregunta';
$select2 = "my_select2EditarPreguntas"; 
$nameCheckObligatorio = "chkObligatorio";
?>
 

<form id="formEditarPreguntas">
    <input class='d-none' type='text' name='idEncuesta' id="idEncuesta" value='<?=$encuesta['idEncuesta']?>'>

    <div class='form-row'>
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 mb-2 ">
            <h6><i class="fa fa-question-circle"></i> Encuesta: <b><?=$encuesta['nombre']?></b></h6>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 mb-2 text-right">
            <button  type="button" class="btn btn-clickToAgregar btn-secondary" title="Agregar Elemento"><i class="fa fa-plus"></i></button>
        </div>
        
    </div>
    <hr class="solid mb-2 mt-0">

    <div class="form-row mb-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class='table table-sm table-bordered text-nowrap'>
                    <thead class='thead-light'>
                        <tr>
                            <th class="text-center align-middle">
                                ACTUALIZAR
                            </th>
                            <th class="text-center align-middle">
                                <button hidden="hidden" class="btn btn-AgregarElemento btn-secondary" title="Agregar Elemento"><strong>AGREGAR FILA</strong> <i class="fa fa-plus"></i></button>
                                <div class="wr-10">OPCIONES</div>
                            </th>
                            <th class="text-center align-middle">
                                <div class="wr-10">TIPO PREGUNTA</div>
                            </th>
                            <th class="text-center align-middle">
                                <div class="wr-20">PREGUNTAS</div>
                            </th>
                            <th class="text-center align-middle">
                                <div class="wr-5">ORDEN</div>
                            </th>
                            <th class="text-center align-middle">
                                <div>ESTADO</div>
                            </th>
                            <th class="text-center align-middle">
                                <div class="wr-6">OBLIGATORIO</div>
                            </th>
                            <!-- 
                            <th class="text-center align-middle">
                                <div>RADIO</div>
                            </th> -->
    
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='trPadre d-none' data-select2="<?= $select2 ?>" data-classmodal="<?=$class?>">
                            <td></td>
                            <td class="text-left">
                                <button style="left: 45%;" class="border-0 btn btn-BorrarElemento btn-outline-secondary" title="Eliminar Elemento"><i class="fa fa-trash"></i></button>
                            </td> 
                            <td class="text-center" data-name='<?= $nameTipoPregunta ?>'>
                                <select class='form-control form-control-sm'>
                                    <option value=''>-- Seleccionar --</option>
                                    <?php foreach ($tiposPregunta as $idTipoPregunta => $tipos) { ?>
                                        <option value='<?= $tipos['idTipoPregunta'] ?>'><?= $tipos['nombre'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td class="text-center" data-name='<?= $nameTextoPregunta ?>'>
                                <input type="text" class="form-control form-control-sm" placeholder="Pregunta">
                            </td>
                            <td class="text-center" data-name='<?= $nameTextoOrden ?>'>
                                <input type="text" class="form-control form-control-sm" placeholder="Orden">
                            </td>
                   
                            <td class="text-center" data-name='<?= $estadoPregunta ?>'>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input uncheckableRadio" checked type="radio" value="true">
                                    <label class="form-check-label">Activar</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input uncheckableRadio" type="radio" value="false">
                                    <label class="form-check-label">Desactivar</label>
                                </div>
                            </td>
                            <td class="text-center" data-name='<?= $nameCheckObligatorio ?>'>
                                <div class="form-check form-check-inline" style="margin-right: 0;">
                                    <input class="form-check-input" type="checkbox" value="true">
                                </div>
                            </td>
  
                        </tr>

                        <?php
                        foreach ($data as $key => $row) { ?>
                            <tr class='trHijo table-secondary' data-fila="<?=$num?>">
                                <td class="text-center">
                                    <input name='id-<?= $num ?>' class="chk-ActualizarElemento" type="checkbox" value='<?= $row['idPregunta'] ?>'>
                                </td>
                                <td class="text-left" >
                                    <button style="left: 45%;" class="border-0 btn btn-BorrarElemento btn-outline-secondary" title="Eliminar Elemento" disabled><i class="fa fa-trash"></i></button>
                                    <?if($row['idTipoPregunta'] == 2 ||  $row['idTipoPregunta'] == 3 ):?>
                                        <button class="border-0 btn btn-EditarAlternativas btn-outline-secondary" title="Editar Alternativas" disabled><i class="fa fa-list"></i></button>
                                    <?endif?>
                                </td>
                                <td class="text-center">
                                    <select name='<?= $nameTipoPregunta ?>-<?= $num ?>' id='<?= $nameTipoPregunta ?>-<?= $num ?>' class='form-control form-control-sm <?= $select2 ?>' disabled>
                                        <option value=''>-- Seleccionar --</option>
                                        <?php
                                        foreach ($tiposPregunta as $tipoPregunta) {
                                            $stringSelected = ($tipoPregunta['idTipoPregunta'] == $row['idTipoPregunta']) ? 'selected' : ''; ?>
                                            <option value='<?= $tipoPregunta['idTipoPregunta'] ?>' <?= $stringSelected ?>><?= $tipoPregunta['nombre'] ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <input value="<?=$row['nombre']?>" name='<?= $nameTextoPregunta ?>-<?= $num ?>' id='<?= $nameTextoPregunta ?>-<?= $num ?>' type="text" class="form-control form-control-sm" placeholder="textotest" disabled>
                                </td>
                                <td class="text-center">
                                    <input value="<?=$row['orden']?>" name='<?= $nameTextoOrden ?>-<?= $num ?>' id='<?= $nameTextoOrden ?>-<?= $num ?>' type="text" class="form-control form-control-sm" placeholder="textotest" disabled>
                                </td>
                                <td class="text-center">
                                    <div id='<?= $estadoPregunta ?>-<?= $num ?>' class="form-check form-check-inline">
                                        <input name='<?= $estadoPregunta ?>-<?= $num ?>' class="form-check-input uncheckableRadio" type="radio" value="true" disabled <?=$row['estado'] == 1 ? "Checked":'' ?>>
                                        <label class="form-check-label">Activar</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name='<?= $estadoPregunta ?>-<?= $num ?>' class="form-check-input uncheckableRadio" type="radio" value="false" disabled <?=$row['estado'] != 1 ? "Checked":'' ?>>
                                        <label class="form-check-label">Desactivar</label>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div id='<?= $nameCheckObligatorio ?>-<?= $num ?>' class="form-check form-check-inline" style="margin-right: 0;">
                                        <input name='<?= $nameCheckObligatorio ?>-<?= $num ?>' class="form-check-input" type="checkbox" value="1" disabled <?=$row['obligatorio'] == 1 ? "Checked":'' ?> >
                                        <label class="form-check-label"></label>
                                    </div>
                                </td>


                            </tr>
                        <?php $num++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>

<script>
    $('.<?= $select2 ?>').select2({
        dropdownParent: $("div.modal-content-<?= $class ?>"),
        width: '100%'
    });
</script>