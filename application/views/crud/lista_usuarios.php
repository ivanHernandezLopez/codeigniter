<html>
	<head>
		<style>
			.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#ffffff; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }
			.add{ background:-moz-linear-gradient(center top , #006699 5%, #00557F 100%) repeat scroll 0 0 #006699;padding:10px;font-size: 14px; color:white; }
			.link{ text-decoration:none;}
		</style>
	</head>
	<body>	
		<a href="<?php echo base_url(); ?>users/add" class="link">
			<input type="button" value="Agregar" class="add">
		</a><br/><br/>
		<div class="datagrid">
			
			<table>
				<thead>
					<tr>
						<th colspan="2" style="text-align:center;">Datos del usuario</th>
						<th colspan="2" style="text-align:center;">Acciones</th>
					</tr>
					<tr>
						<th style="text-align:center;">Nombre completo</th>
						<th style="text-align:center;">Correo</th>
						<th style="text-align:center;">Editar</th>
						<th style="text-align:center;">Eliminar</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<td colspan="4">
							<div id="paging">
								<ul>
									<li>
										<a href="#"><span>Previous</span></a>
									</li>
									<li>
										<a href="#" class="active"><span>1</span></a>
									</li>
									<li>
										<a href="#"><span>2</span></a>
									</li>
									<li>
										<a href="#"><span>3</span></a>
									</li>
									<li>
										<a href="#"><span>4</span></a>
									</li>
									<li>
										<a href="#"><span>5</span></a>
									</li>
									<li>
										<a href="#"><span>Next</span></a>
									</li>
								</ul>
							</div>	
						<td>
					</tr>
				</tfoot>
				<tbody>
					<?php foreach($usuarios as $usuario): ?>
					<tr>
						<td><?php echo $usuario->name; ?></td>
						<td><?php echo $usuario->email; ?></td>
						<td style="text-align:center;">
							<a href="<?php echo base_url(); ?>usuarios/editar/<?php echo $usuario->id_user; ?>" >
								<img src="<?php echo base_url(); ?>assets/editar.jpg" style="width:20px;">
							</a>
						</td>
						<td style="text-align:center;">
							<a href="<?php echo base_url(); ?>usuarios/eliminar/<?php echo $usuario->id_user; ?>">
								<img src="<?php echo base_url(); ?>assets/eliminar.jpg" style="width:20px;">
							</a>
						</td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>

		
	</body>
</html>