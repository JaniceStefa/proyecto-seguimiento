<?php
    session_start();
    require_once("../controlador/c_persona.php");
    require_once("../controlador/c_pedido.php");
    $controlador=new C_Pedido();
    
    if (isset($_SESSION['user']))
    {
        if($_SESSION['privilegio']== 1)
        {
            $controlador->Admi();
        }
        else
        {
            if (isset($_POST['aceptar']))
            {
                $controlador->AgregarPedido();
                require_once("../controlador/c_pedido_presupuesto.php");
                $controlador1 = new C_Pedido_Presupuesto();
                $controlador1->GenerarPresupuesto(); 
                    
                    /*if (isset($_SESSION['user']))
                    {
                        echo '<script> window.location ="../vista/V_ficha_presupuesto.php" </script>';
                    }else{
                        echo '<script> window.location ="../vista/V_login.php" </script>';
                                }*/

            }
            else { require_once("../vista/V_ficha_pedido.php");}
        }
    }   
?>