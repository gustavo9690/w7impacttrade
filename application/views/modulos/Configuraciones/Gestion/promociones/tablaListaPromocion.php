                <div class="card-datatable">
                    <table class="table table-striped table-bordered nowrap w-100 text-nowrap">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">#</th>
                                <th class="text-center">OPCIONES</th>
                                <th class="text-center">COD CLIENTE</th>
                                <th class="text-center">CLIENTE</th>
                                <th class="text-center">CANAL</th>
                                <th class="text-center">CADENA</th>
                                <th class="text-center">BANNER</th>
                                <th class="text-center">PROYECTO</th>
                                <th class="text-center">FECHA INICIO</th>
                                <th class="text-center">FECHA FECHA FIN</th>
                                <th class="text-center">FECHA MODIFICACIÓN</th>
                                <th class="text-center">ESTADO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $value) {
                                $badge = $value['estado'] == 1 ? 'badge-success' : 'badge-danger';
                                $mensajeEstado = $value['estado'] == 1 ? 'Activo' : 'Inactivo';
                                $iconoBotonEstado = $value['estado'] == 1 ? 'fa fa-toggle-on fa-lg' : 'fa fa-toggle-off fa-lg';
                            ?>
                                <tr data-id="<?= $value[$this->model->tablas['lista']['id']] ?>" data-estado="<?= $value['estado'] ?>">
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div>
                                            <button class="btn btn-Editar btn-outline-secondary border-0" title="Editar"><i class="fas fa-edit fa-lg"></i></button>
                                            <button class="btn btn-CambiarEstado btn-outline-secondary border-0" title="Activar/Desactivar"><i class="<?= $iconoBotonEstado ?>"></i></button>
                                        </div>
                                    </td>
                                    <td><?= !empty($value['codCliente']) ? $value['codCliente'] : '-' ?></td>
                                    <td><?= !empty($value['razonSocial']) ? $value['razonSocial'] : "-" ?></td>
                                    <td><?= !empty($value['canal']) ? $value['canal'] : '-' ?></td>
                                    <td><?= !empty($value['cadena']) ? $value['cadena'] : '-' ?></td>
                                    <td><?= !empty($value['banner']) ? $value['banner'] : '-' ?></td>
                                    <td><?= !empty($value['proyecto']) ? $value['proyecto'] : '-' ?></td>
                                    <td data-order="<?= strtotime($value['fecIni']) ?>"><?= !empty($value['fecIni']) ? date_change_format($value['fecIni'])  : '-' ?></td>
                                    <td data-order="<?= strtotime($value['fecFin']) ?>"><?= !empty($value['fecFin']) ? date_change_format($value['fecFin'])  : '-' ?></td>
                                    <td data-order="<?= strtotime($value['fechaModificacion']) ?>"><?= !empty($value['fechaModificacion']) ? date_change_format($value['fechaModificacion']) : '-' ?></td>
                                    <td data-order="<?= $mensajeEstado ?>" class="style-icons">
                                        <span class="badge <?= $badge ?>"><?= $mensajeEstado ?></span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>