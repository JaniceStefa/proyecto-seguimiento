<?php
	class M_Persona{
		private $db;
		private $personas;
		// Conexion con Base de Datos
		public function __construct()
		{
			require_once("conectar_bd.php");
			$this->db=conectar::conexion();
			$this->personas=array();
		}
		//0 es un cliente
		//1 es administrador
		// Agregar nueva Persona y Usuario del tipo Cliente a Base de Datos
		public function Agregar_Cliente($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$contrasenia){
			$sql="CALL SP_A_TABLA_PERSONA('".$DNI."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$direccion."','".$email."','".$telefono."',1)";
			$sql1="CALL SP_A_TABLA_USUARIO('".$DNI."','".$contrasenia."',0,1)";

			$this->db->query($sql);
			$this->db->query($sql1);
			$this->db=null;
		}
		// Agregar nueva Persona y Usuario del tipo Administrador a Base de Datos
		public function Agregar_Admi($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$contrasenia){
			$sql="CALL SP_A_TABLA_PERSONA('".$DNI."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$direccion."','".$email."','".$telefono."')";
			//administrador
			$sql1="CALL SP_A_TABLA_USUARIO('".$DNI."','".$contrasenia."',1)";
					
			$this->db->query($sql);
			$this->db->query($sql1);
			$this->db=null;
		}
		// Actualizar datos de Persona
		public function Cambiar($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$estado){
			
			$sql="CALL SP_C_TABLA_PERSONA('".$DNI."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$direccion."','".$email."','".$telefono."',$estado)";
			$this->db->query($sql);
			
		}

		//Actualizar datos de Usuario 
		public function Cambiar_Cuenta($DNI,$contrasenia,$cod_usuario){
			$sql="CALL SP_C_TABLA_USUARIO('".$DNI."','".$contrasenia."',0,1,'".$cod_usuario."')";
			$this->db->query($sql);
			//_DNI,_contrasenia,_tipo_acceso,_estado

		}
		// Mostrar listado de personas registradas (clientes - administradores)
		public function Mostrar_Persona(){
			$sql=$this->db->query("CALL SP_M_TABLA_PERSONA");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->personas[]=$filas;
				}
				return $this->personas;
		}
		// Mostrar listado de clientes
		public function Mostrar_Cliente(){
			$sql=$this->db->query("CALL SP_M_CLIENTES");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->personas[]=$filas;
				}
				return $this->personas;
		}
		// Mostrar listado de administradores
		public function Mostrar_Admi(){
			$sql=$this->db->query("CALL SP_M_ADMINISTRADORES");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->personas[]=$filas;
				}
				return $this->personas;
		}
		// Verifica que DNI de usuario este registrado en base de datos
		public function Verificar_Usuario($DNI){
			$sql="CALL SP_M_COD_USUARIO('".$DNI."')";
			$this->db->query($sql);
			return $this->$sql;
		}
		public function Eliminar($DNI,$estado){
		$sql="CALL SP_E_TABLA_PERSONA ('".$DNI."',$estado)";
		$this->db->query($sql);           }
	}
?>