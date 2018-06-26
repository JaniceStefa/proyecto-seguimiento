<?php
	class C_Persona{

		private $modelo;
		public function Index()
		{
			require_once("../modelo/M_Persona.php");
			$this->modelo=new M_Persona();
			require_once("../index.php");

		}
		// Controlador Modelo Persona - Tablero Principal
		// Funcionalidad de Administrador
		public function Admi()
		{
			require_once("../modelo/M_Persona.php");
			$this->modelo=new M_Persona();
			require_once("../vista/Tablero_Admi.php");
		}
		// Controlador Modelo Persona - Tablero Lista de Clientes
		// Funcionalidad de Administrador
		public function AdmiCliente()
		{
			require_once("../modelo/M_Persona.php");
			$this->modelo=new M_Persona();
			require_once("../vista/VA_Clientes.php");
		}
		
		// Validar Usuario para Inicio de Sesión
		public function ValidarUsuario()
		{
			require_once("../modelo/m_usuario.php");
			$this->modelo=new M_Usuarios();
			$DNI=$_POST['user'];
			$pass=$_POST['pw'];
			$this->modelo->UsuarioLogin($DNI,$pass);
			header('Location: ../index.php');

		}
		// Controlador Modelo Persona 
		// Funcionalidad de Usuario
		public function AgregarCliente()
		{
			require_once("../modelo/M_Persona.php");
			$this->modelo=new M_Persona();
			
			$DNI=$_POST['DNI'];
			$ap_paterno= $_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$email=$_POST['email'];
			$telefono=$_POST['telefono'];
			$contrasenia=$_POST['contrasenia'];
			$estado=1;
			$this->modelo->Agregar_Cliente($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$contrasenia);	
			header('Location: ../index.php');
		}
		// Controlador Modelo Persona 
		// Funcionalidad de Administrador
		public function AgregarAdmi(){
			require_once("../modelo/M_Persona.php");
			$this->modelo=new M_Persona();
			
			$DNI=$_POST['DNI'];
			$ap_paterno= $_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$email=$_POST['email'];
			$telefono=$_POST['telefono'];
			$contrasenia=$_POST['contrasenia'];
			$estado=1;
			$this->modelo->Agregar_Admi($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$contrasenia);	
			header('Location: ../index.php');
		}
		// Verifica si Usuario es existente
		public function Verificar_Usuario(){
			require_once("../modelo/M_Persona.php");
			$this->modelo=new M_Persona();
			$DNI=$_POST['DNI'];
			$this->modelo->Verificar_Usuario($DNI);
		}

		public function Cambiar_Cuenta(){
			require_once("../modelo/M_Persona.php");
			require_once("../vista/V_actualizar_usuario.php");
			$this->modelo=new M_Persona();
			$DNI=$_POST['DNI'];
			$contrasenia=$_POST['contrasenia'];
			$cod_usuario=$_POST['cod_usuario'];
			$this->modelo-> Cambiar_Cuenta($DNI,$contrasenia,$cod_usuario);
			header('Location: ../controlador/index_persona.php');

		}
		public function Cambiar(){
			require_once("../modelo/M_Persona.php");
			$this->modelo=new M_Persona();
			
			$DNI=$_POST['DNI'];
			$ap_paterno= $_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$email=$_POST['email'];
			
			$telefono=$_POST['telefono'];
			$estado=$_POST['estado'];
			$this->modelo->Cambiar($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$estado);
			header('Location: ../controlador/index_persona.php');	    
		}
		
		// Funcionalidad de Administrador
		public function Eliminar(){
			require_once("../modelo/M_Persona.php");
			$this->modelo=new M_Persona();
			$DNI=$_POST['DNI'];
			$this->modelo->Eliminar($DNI);
			header('Location: ../controlador/index_persona.php');	
		}}
?>