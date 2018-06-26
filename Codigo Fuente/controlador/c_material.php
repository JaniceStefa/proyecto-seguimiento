<?php
	class C_Material{
		private $modelo;
		// Controlador Modelo Material - Tablero Materiales 
		// Funcionalidad de Administrador
		public function Admi()
		{
			require_once("../modelo/m_material.php");
			$this->modelo=new M_Material();
			require_once("../vista/VA_Materiales.php");

		}
		// Controlador Modelo Material - Catalogo de Materiales 
		// Funcionalidad de Administrador
		public function Catalogo_Material()
		{
			require_once("../modelo/m_material.php");
			$this->modelo=new M_Material();
			require_once("../vista/VA_CatalogoMateriales.php");
		}
		// Funcionalidad de Administrador
		// Controlador Agregar Material
		public function Agregar(){
			require_once("../modelo/m_material.php");
			$this->modelo=new M_Material();

			$Descripcion=$_POST['descripcion'];
			$Precio = $_POST['precio'];
			$this->modelo->Agregar_Material($Descripcion,$Precio);
		}	  
	}
?>