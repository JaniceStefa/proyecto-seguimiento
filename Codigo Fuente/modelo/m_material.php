<?php 
	class M_Material{
		private $db;
		private $materiales;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->materiales=array();
		}
		
		// Agregar Material a Base de Datos
		public function Agregar_Material($descripcion,$precio){
			$sql="CALL SP_A_TABLA_MATERIAL('".$descripcion."','".$precio."')";
			$this->db->query($sql);
		}

		// Actualizar informacion de Material
		public function Cambiar_Material($descripcion,$precio){
			$sql="CALL SP_C_TABLA_MATERIAL('".$descripcion."','".$precio."')";
			$this->db->query($sql);
		}

		// Mostrar listado de materiales
		public function Mostrar_Material(){
			$sql=$this->db->query("CALL SP_M_TABLA_MATERIAL()");
        while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
            $this->materiales[]=$materiales;
        }
        return $this->materiales;
		}

		// Eliminar Material
		public function Eliminar_Material($codigo_material){
			$sql="CALL SP_E_TABLA_MATERIAL('".$codigo_material."')";
        $this->db->query($sql);
		}
		

	}
?>