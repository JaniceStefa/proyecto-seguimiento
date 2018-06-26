<?php 
	class M_Presupuesto{
		private $db;
		private $presupuestos;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->presupuestos=array();
		}
		// Agregar Nuevo Presupuesto a Base de Datos
		public function Agregar_Presupuesto($precio_total,$fecha_entrega,$precio_parcial,$fecha_pago_parcial,$cod_pedido){
			$sql="CALL SP_A_TABLA_PRESUPUESTO('".$precio_total."','".$fecha_entrega."','".$precio_parcial."','".$fecha_pago_parcial."','".$cod_pedido."')";
			$this->db->query($sql);
		}
		//Modificar Datos del Presupuesto
		public function Cambiar_Presupuesto($cod_presupuesto,$precio_total,$fecha_entrega,$precio_parcial,$fecha_pago_parcial,$cod_pedido){
			$sql="CALL SP_C_TABLA_PRESUPUESTO('".$cod_presupuesto."',$precio_total,'".$fecha_entrega."',$precio_parcial,'".$fecha_pago_parcial."','".$cod_pedido."')";
			$this->db->query($sql);
		}
		//Mostrar listado de Presupuesto
		public function Mostrar_Presupuesto(){

			$sql=$this->db->query("CALL SP_M_TABLA_PRESUPUESTO");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->presupuestos[]=$filas;
			}
			return $this->presupuestos;
		}
		//Eliminar Presupuesto
		public function Eliminar_Presupuesto($cod_presupuesto,$cod_pedido,$estado){
			$sql="CALL SP_E_TABLA_PRESUPUESTO('".$cod_presupuesto."')";
			$this->db->query($sql);
		}

	}
?>