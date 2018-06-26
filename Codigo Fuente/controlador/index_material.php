<?php  
    session_start();
    require_once("../controlador/c_material.php");
    $controlador=new C_Material();
    //Funcionalidades del Administrador
    $controlador->Admi();
    // Si el Boton Agregar es seleccionado
    if(isset($_POST['agregar']))
    {
    	$controlador->Agregar(); // Agregar nuevo material
    }
    // Si el Boton Catalago es seleccionado
    if(isset($_POST['catalogo']))
    	 $controlador->Catalogo_Material(); // Mostrar Catalogo de materiales
?>