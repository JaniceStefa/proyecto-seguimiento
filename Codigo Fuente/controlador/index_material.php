<?php  
    session_start();
    require_once("../controlador/c_material.php");
    $controlador=new C_Material();
    $controlador->Admi();
    if(isset($_POST['agregar']))
    {
    	$controlador->Agregar();
    }
    if(isset($_POST['catalogo']))
    	 $controlador->Catalogo_Material();
?>