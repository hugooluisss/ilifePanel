<?php
/**
* TPago
* Pago de una poliza
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TPago{
	private $idPago;
	public $idPoliza;
	private $fecha;
	private $monto;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TPago($id = ''){
		$this->setId($id);		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from pago where idPago = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idPago;
	}
	
	/**
	* Establece la fecha y hora en la que se hizo
	*
	* @autor Hugo
	* @access public
	* @param string $val Nombre
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFecha($val = ""){
		$this->fecha = $val == ''?date("Y-m-d H:i:s");
		return true;
	}
	
	/**
	* Retorna el momento en el que se hizo el pago
	*
	* @autor Hugo
	* @access public
	* @return date Texto
	*/
	
	public function getFecha(){
		return $this->fecha;
	}
	
	/**
	* Establece el importe a pagar
	*
	* @autor Hugo
	* @access public
	* @param float $val Importe a pagar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setImporte($val = 0){
		$this->importe = $val;
		return true;
	}
	
	/**
	* Retorna el importe
	*
	* @autor Hugo
	* @access public
	* @return float Importe
	*/
	
	public function getImporte(){
		return $this->importe;
	}
	
	/**
	* Guarda los datos en la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO modulo(nombre) VALUES('".$this->getNombre()."');");
			if (!$rs) return false;
				
			$this->idModulo = $db->Insert_ID();
		}		
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE modulo
			SET
				nombre = '".$this->getNombre()."',
				importe = ".$this->getImporte()."
			WHERE idModulo = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from modulo where idModulo = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>