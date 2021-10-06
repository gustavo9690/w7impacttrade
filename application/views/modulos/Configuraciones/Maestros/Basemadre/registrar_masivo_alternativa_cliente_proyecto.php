<div class="row themeWhite">
	<div class="col-md-12">
		<div class="mb-3 card">
			<div class="card-body">
				<form id="frm-registrarModulacionMasiva">

					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<a href="<?=base_url()?>configuraciones/maestros/basemadre/generar_formato_carga_masiva_alternativa_cliente_proyecto" class="btn-outline-primary border-0" target="_blank" style="padding:10px;margin-left:10px;border-radius: 13px;outline: blue;">  Descargar Formato</a>
						</div>


						<div class="col-md-4 col-sm-4 col-xs-4" >
							<input id="archivo" type="file" name="archivo" accept=".csv" style="margin-left:10px;">
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4" >
							<button type="button" data-toggle="collapse" class="btn-outline-primary border-0" style="padding:10px;margin-left:10px;border-radius: 13px;outline: blue;" onclick="Basemadre.cargaMasivaAlternativaClienteProyecto();">Cargar Data</button>
						</div>

						
					</div>

					

					<div class="tab-content">
						<div class="table-responsive"><!-- style="width: 100%;"-->
							<div id="cargas_detalles" style="margin-top:40px;text-align:center;">

								<? if( !empty($data_carga) ){
										if(count($data_carga)>0){?>
											<table class="table table-striped table-bordered nowrap table-sm">
												<thead>
													<tr>
														<th>IDCARGA</th>
														<th>FECHA CARGA</th>
														<th>HORA CARGA</th>
														<th>HORA FIN</th>
														<th>TOTAL FILAS EXCEL</th>
														<th>TOTAL FILAS CARGADAS</th>
														<th>TOTAL FILAS PROCESADOS</th>
														<th>TOTAL FILAS NO PROCESADOS</th>
														<th>ERRORES</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?foreach($data_carga as $row){?>
														<tr>
															<td><?=$row['idCarga']?></td>
															<td><?=$row['fecRegistro']?></td>
															<td><?=$row['horaRegistro']?></td>
															<td id="horaFin_<?=$row['idCarga']?>"><?=$row['horaFin']?></td>
															<td><?=$row['totalRegistros']?></td>
															<td id="clientes_<?=$row['idCarga']?>"><?=$row['totalRegistros']?></td>
															<td id="procesados_<?=$row['idCarga']?>"><?=$row['total_procesados']?></td>
															<td id="noprocesados_<?=$row['idCarga']?>"><?=$row['noProcesados']?></td>
															<td id="errores_<?=$row['idCarga']?>">-</td>
															<td class="text-center">
																<?
																	$porcentaje = 0;
																	if( !empty($row['totalRegistros']) )
																		$porcentaje = round(($row['total_procesados'])/($row['totalRegistros'])*100,0);
																?>
																<label id="estado_<?=$row['idCarga']?>"><?=($row['estado']==1)?'Registrando data en Base de datos.': $porcentaje."%" ;?></label>
																<br>
																<meter id="barraprogreso_<?=$row['idCarga']?>" min="0" max="100" low="0" high="0" optimum="100" value="<?=$porcentaje?>" style="font-size:20px;">
															</td>
														</tr>
													<? } ?>
												</tbody>
											</table>
										<? } else { ?>
											<div>
												<h4 style="border: 1px solid; background: #f2f2f2; padding: 20px; width: 50%; margin: auto; text-transform: uppercase; }">Aun no ha realizado ninguna carga. </h4>
											</div>
										<? } 
									} 
									else{ ?>
									<div>
										<h4 style="border: 1px solid; background: #f2f2f2; padding: 20px; width: 50%; margin: auto; text-transform: uppercase; }">Aun no ha realizado ninguna carga. </h4>
									</div>
								<? } ?>
							</div><!--style="overflow: auto;"-->
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	$('.select2').select2({
		dropdownParent: $("div.modal-content"),
		width: '80%'
	});

});


function validar_estado_carga() {
		$.ajax({
			type: "POST",
			dataType: 'JSON',
			url: site_url+'configuraciones/maestros/basemadre/estado_carga_alternativa_cliente_proyecto/',
			
			success: function(data) {
				var len = data.data.length;
				
				for(var i=0; i<len; i++){
					$('#procesados_'+data.data[i].idCarga).html(data.data[i].total_procesados);
					$('#clientes_'+data.data[i].idCarga).html(data.data[i].totalRegistros);
					$('#horaFin_'+data.data[i].idCarga).html(data.data[i].horaFin);
					
					
					$('#noprocesados_'+data.data[i].idCarga).html(data.data[i].noProcesados);
					if(data.data[i].error>0){
						$('#errores_'+data.data[i].idCarga).html('<a href="<?=base_url()?>configuraciones/maestros/basemadre/generar_formato_errores_alternativo_cliente_proyecto/'+data.data[i].idCarga+'" class="btn-outline-primary border-0" target="_blank"> DESCARGAR ERRORES</a>');
					}
					var html="";
					var total=0;
					if(data.data[i].totalClientes!=data.data[i].total){
						if(data.data[i].totalClientes>0){
						total = Math.round((data.data[i].totalClientes)/(data.data[i].total )*100);
						}
						$('#estado_'+data.data[i].idCarga).html("Cargando Archivo <br>"+String(total)+"% ");
						$('#barraprogreso_'+data.data[i].idCarga).attr('value',total);
					} else{
						if(data.data[i].totalClientes>0){
						total = Math.round((data.data[i].total_procesados)/(data.data[i].totalClientes )*100);
						}
						if(total>=100){
							$('#estado_'+data.data[i].idCarga).html("Completado");
						}else{
							if(data.data[i].generado=="1"){
								$('#estado_'+data.data[i].idCarga).html("Generando visitas<br>"+String(total)+"% ");
							}else{
								$('#estado_'+data.data[i].idCarga).html("Guardando programacion<br>"+String(total)+"% ");
							}
						}
						$('#barraprogreso_'+data.data[i].idCarga).attr('value',total);
					}
				}
			}
		});
	}
setInterval(validar_estado_carga, 10000);
</script>

