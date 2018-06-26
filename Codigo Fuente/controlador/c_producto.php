<?php
	class C_Producto{
		private $modelo;
		// Controlador Modelo Producto - Tablero Abastecimiento/Producto
		// Funcionalidad de Administrador
		public function Admi()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			require_once("../vista/VA_Productos.php");
		}
		// Controlador Modelo Producto - Listado/Catálogo Producto
		// Funcionalidad de Administrador
		public function Catalogo_Producto()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			require_once("../vista/VA_CatalogoProductos.php");
		}
		// Controlador Agregar Nuevo Producto segun categoria
		// Funcionalidad de Administrador
		public function Agregar()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();

			$Categoria=$_POST['categoria'];
			$Descripcion=$_POST['descripcion'];
			$nombre = $Descripcion;
			$tipo=$_FILES['imagen']['type'];
			$tamanio=$_FILES['imagen']['size'];
			$precio=$_POST['precio'];

			switch ($categoria)
			{
				case 'Conjunto': {
					$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/proyecto-seguimiento/Codigo Fuente/assets/imagenes/conjuntos_deportivos/';
				}break;
				case 'Buzos': {
					$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/proyecto-seguimiento/codigo Fuente/assets/imagenes/buzos/';
				}break;
				case 'Casacas': {
					$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/proyecto-seguimiento/codigo Fuente/assets/imagenes/casacas/';
				}break;
				case 'Polos': {
					$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/proyecto-seguimiento/codigo Fuente/assets/imagenes/polos/';
				}break;
				case 'Shorts': {
					$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/proyecto-seguimiento/codigo Fuente/assets/imagenes/shorts/';
				}break;
			}
			move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre.".jpg");

			$this->modelo->Agregar_Producto($Descripcion,$nombre,$precio,$Categoria);
		}
		// Controlador Actualizar los datos del producto
		// Funcionalidad de Administrador
		public function Cambiar(){
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();

			$Descripcion=$_POST['descripcion'];
			$nombre = $Descripcion;
			$tipo=$_FILES['imagen']['type'];
			$tamanio=$_FILES['imagen']['size'];
			$precio=$_POST['precio'];
			
			$this->modelo->Cambiar_Producto($Descripcion,$nombre,$precio);
		}
		// Controlador Eliminar Producto por el codigo
		// Funcionalidad de Administrador
		public function Eliminar_Producto(){
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			$CodProducto=$_POST['codproducto'];
			$this->modelo->Eliminar_Producto($CodProducto);
		}
	}  
?>