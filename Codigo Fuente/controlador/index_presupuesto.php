<?php 
	session_start();
    require_once("../controlador/c_presupuesto.php");
    $controlador=new C_Presupuesto();
    
    if (isset($_SESSION['user']))
    {
        if($_SESSION['privilegio']== 1){
            $controlador->Admi();
        }
        else{
            if (isset($_POST['aceptar']))
            {
                $controlador->AgregarPresupuesto();
                echo '<script> window.location ="../vista/v_pedido_completo.php" </script>';
            }
            echo  '<script> window.location ="../vista/v_ficha_presupuesto.php" </script>';
        }
    }
?>