<?php 
	class M_Producto{
		private $db;
		private $productos;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->productos=array();
		}
		// Agregar Nuevo Producto 
		public function Agregar_Producto($descripcion,$imagen,$precio,$categoria){
			$sql="CALL SP_A_TABLA_PRODUCTO('".$descripcion."','".$imagen ."','".$precio."','".$categoria."')";
			$this->db->query($sql);
		}
		// Actualizar datos del Producto
		public function Cambiar_Producto($descripcion,$imagen,$precio){
			$sql="CALL SP_C_TABLA_PRODUCTO('".$descripcion."','".$imagen ."','".$precio."')";
			$this->db->query($sql);
		}
		// Mostrar listado de Productos
		public function Mostrar_Producto(){

			$sql=$this->db->query("CALL SP_M_TABLA_PRODUCTO");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->productos[]=$filas;
			}
			return $this->productos;
		}
		//Eliminar Producto
		public function Eliminar_Producto($cod_producto){
			$sql="CALL SP_E_TABLA_PRODUCTO('".$cod_producto."')";
			$this->db->query($sql);
		}

	}
?>