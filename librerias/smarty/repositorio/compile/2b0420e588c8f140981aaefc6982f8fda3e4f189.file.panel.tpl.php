<?php /* Smarty version Smarty-3.1.11, created on 2016-08-11 09:00:19
         compiled from "templates/plantillas/modulos/clientes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57486810857ab79e45f7f40-46654283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0420e588c8f140981aaefc6982f8fda3e4f189' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/panel.tpl',
      1 => 1470923648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57486810857ab79e45f7f40-46654283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57ab79e463f6f7_19502028',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab79e463f6f7_19502028')) {function content_57ab79e463f6f7_19502028($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de clientes</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-6">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtApp" class="col-lg-2">Apellido paterno</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtApp" name="txtApp">
						</div>
					</div>
					<div class="form-group">
						<label for="txtApm" class="col-lg-2">Apellido materno</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtApm" name="txtApm">
						</div>
					</div>
					<div class="form-group">
						<label for="txtNacimiento" class="col-lg-2">Fecha de nacimiento</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtNacimiento" name="txtNacimiento" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="txtEmail" class="col-lg-2">Correo electrónico</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtEmail" name="txtEmail" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="txtTelefono" class="col-lg-2">Teléfono</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtTelefono" name="txtTelefono" type="text">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>


<div class="modal fade" id="winPolizas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Polizas</h4>
			</div>
			<div class="modal-body">
				<div class="row" id="dvPolizas"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>