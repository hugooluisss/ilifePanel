<?php
global $objModulo;
switch($objModulo->getId()){
	case 'pagos':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from cliente");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("listaClientes", $datos);
	break;
	case 'listaPagos':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select a.*, concat(c.nombre, ' ', app, ' ', apm) as cliente, d.nombre as modulo from pago a join poliza b using(idPoliza) join cliente c using(idCliente) join modulo d using(idModulo)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'listaPolizasCliente':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from poliza where idCliente = ".$_POST['cliente']);
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cpagos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TPago($_POST['id']);
				
				$obj->poliza = new TPoliza($_POST['poliza']);
				$obj->setFecha($_POST['fecha']);
				$obj->setImporte($_POST['importe']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TPago($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>