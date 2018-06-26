<?php  
    session_start();
    require_once("../controlador/c_producto.php");
    $controlador=new C_Producto();

    //Funcionalidades del Administrador
    $controlador->Admi();
    // Si el Boton Agregar es seleccionado
    if(isset($_POST['agregar']))
    {
    	$controlador->Agregar(); // Agregar nuevo producto
    }
    // Si el Boton Catalago es seleccionado
    if(isset($_POST['catalogo']))
    	$controlador->Catalogo_Producto(); // Mostrar Catalogo de productos
?>