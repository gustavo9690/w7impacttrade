<div class="row mt-4">
    <div class="col-lg-3 d-flex justify-content-center align-items-center">
        <h4 class="card-title mb-3">
            <i class="<?= $icon ?>"></i>
            <?= $title ?>
        </h4>
    </div>
    <div class="col-lg-9 d-flex">
        <div class="card w-100 mb-3 p-0">
            <div class="card-body p-0">
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#contentFotografico">Cartera</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block">
    <a href="javascript:;" class="customizer-close"><i class="fal fa-times"></i></a>
    <a href="javascript:;" class="customizer-toggle box-shadow-3 bg-trade-visual-grad-left text-white">
        <i class="fal fa-cog fa-lg fa-spin"></i>
    </a>
    <div class="customizer-content p-2 ps-container ps-theme-dark" data-ps-id="aca1f25c-4ed9-a04b-d154-95a5d6494748">
        <form id="formFiltroFotografico">
            <div class="card-header" style="margin-bottom: 14px;">
                <h4>CONFIGURACIÓN</h4>
            </div>
            <div>
                <input type="hidden" id="idTipoFormato" name="tipoFormato" value="2">
            </div>
            <div class="customizer-content-button">
                <button class="btn btn-outline-trade-visual border-0 btn-consultar" data-url="filtrar" id="btn-consultar" title="Consultar">
                    <i class="fa fa-search"></i>
                </button>
                <button class="btn btn-outline-trade-visual border-0 btn-pdf" title="Generar PDF Auditorias">
                    <i class="fa fa-file-pdf"></i>
                </button>
                <button class="btn btn-outline-trade-visual border-0 btn-auditar" title="Auditar Visitas">
                    <i class="fa fa-check-square"></i>
                </button>
            </div>
            <hr>
            <div class="customizer-content-filter">
                <h5 class="mt-1 mb-1 text-bold-500"><i class="fal fa-table"></i> Filtros</h5>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="mb-2 mr-sm-2 position-relative form-group">
                            <div class="field">
                                <div class="ui my_calendar">
                                    <div class="ui input left icon" style="width:100%">
                                        <i class="calendar icon"></i>
                                        <input type="text" name="txt-fechas" id="txt-fechas" placeholder="Date" value="<?= date("d/m/Y") . ' - ' . date("d/m/Y") ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 mr-sm-2 position-relative form-group filtros_asistencia custom_tooltip">
                            <span class="tooltiptext">Tipo Usuario</span>
                            <select name="sl_tipoUsuario" id="sl_tipoUsuario" class="ui my_select2Full form-control">
                                <?= htmlSelectOptionArray2(['query' => $tiposUsuario, 'id' => 'idTipoUsuario', 'value' => 'nombre', 'title' => '-- Tipo Usuario --']); ?>
                            </select>
                        </div>
                        <div class="mb-2 mr-sm-2 position-relative form-group filtros_asistencia custom_tooltip">
                            <span class="tooltiptext">Grupo Canal</span>
                            <?= getFiltros(['grupoCanal' => ['label' => false, 'name' => 'grupo_filtro', 'id' => 'grupo_filtro', 'data' => true, 'select2' => 'ui my_select2Full', 'html' => '']]) ?>
                        </div>
                        <div class="mb-2 mr-sm-2 position-relative form-group filtros_asistencia custom_tooltip">
                            <span class="tooltiptext">Canal</span>
                            <?= getFiltros(['canal' => ['label' => 'Canal', 'name' => 'canal_filtro', 'id' => 'canal_filtro', 'data' => false, 'select2' => 'ui my_select2Full', 'html' => '']]) ?>
                        </div>
                        <div class="mb-2 mr-sm-2 position-relative form-group filtros_asistencia custom_tooltip">
                            <span class="tooltiptext">Zona</span>
                            <?= getFiltros(['zona' => ['label' => 'Zona', 'name' => 'zona_filtro', 'id' => 'zona_filtro', 'data' => true, 'select2' => 'ui my_select2Full', 'html' => '']]); ?>
                        </div>
                        <div class="mb-2 mr-sm-2 position-relative form-group filtros_asistencia custom_tooltip">
                            <span class="tooltiptext">Distribuidora</span>
                            <?= getFiltros(['distribuidora' => ['label' => 'Distribuidora', 'name' => 'distribuidora_filtro', 'id' => 'distribuidora_filtro', 'data' => true, 'select2' => 'ui my_select2Full', 'html' => '']]); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </form>
    </div>
</div>

<div class="main-card mb-3 card ">
    <div class="card-body p-0">
        <div class="tab-content" id="content-auditoria-fotografico">
            <div class="tab-pane fade show active" id="contentFotografico" role="tabpanel">
                <?= getMensajeGestion('noResultados') ?>
            </div>
            <div class="tab-pane fade " id="contentPvm" role="tabpanel">
                <?= getMensajeGestion('noResultados') ?>
            </div>
        </div>
    </div>
</div>