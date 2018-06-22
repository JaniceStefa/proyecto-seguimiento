<?php
	class C_Producto{

		private $modelo;
		public function Index()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			require_once("../vista/catalogo_producto.html");
		}

		public function Admi()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			require_once("../vista/VA_Productos.php");

		}
		public function Catalogo_Producto()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			require_once("../vista/VA_CatalogoProductos.php");
		}
		public function Agregar(){
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();

			$Descripcion=$_POST['descripcion'];
			$nombre = $Descripcion;
			$tipo=$_FILES['imagen']['type'];
			$tamanio=$_FILES['imagen']['size'];
			$precio=$_POST['precio'];

			$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/proyecto-procesos/codigo Fuente/assets/imagenes/';
			move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre.".jpg");
			
			$this->modelo->Agregar($Descripcion,$nombre,$precio);
		}

		public function Cambiar(){
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();

			$Descripcion=$_POST['descripcion'];
			$nombre = $Descripcion;
			$tipo=$_FILES['imagen']['type'];
			$tamanio=$_FILES['imagen']['size'];
			$precio=$_POST['precio'];
			
			$this->modelo->Cambiar($Descripcion,$nombre,$precio);
		}


		public function Eliminar_Producto(){
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();

			$CodPresupuesto=$_POST['codpresupuesto'];
			$CodPedido=$_POST['codigopedido'];
			$Estado=$_POST['estado'];
			$this->modelo->Eliminar($CodPresupuesto,$CodPedido,$Estado);
		}

	}  

?>