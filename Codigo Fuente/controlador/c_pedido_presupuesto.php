<?php
    class C_Pedido_Presupuesto{

        private $modelo;
        private $db;
        public function GenerarPresupuesto() {
            require_once("../modelo/m_consultas.php");
            $this->model = new M_Consultas();
            
            $Producto = $_POST['producto'];
            $Talla = $_POST['tallas'];
            $Material = $_POST['material'];
            $cantidad=$_POST['cantidad'];
            $fecha = $_POST['fecharequerida'];

            /*echo $Producto; echo  "  ";
            echo $Talla; echo  "  ";
            echo $Material; echo  "  ";
            echo $cantidad; echo  "  ";
            echo $fecha; echo  "  ";*/
            
            //---------- Calcular fecha de Entrega -------------

            $cant_dia = 50;                          // cantidad de productos fabricados en un dia 
            $dias_elab = round($cantidad/$cant_dia); // dias en produccion
            $dias_min= 3 ;                           // dias para conseguir material y otros
            $dias_prod = $dias_elab + $dias_min;
            //echo $dias_prod; echo  "  ";
          
            $fecha_entrega = strtotime ( '+'.$dias_prod.' day' , strtotime ( $fecha ) ) ;
            $fecha_entrega = date( 'd/m/Y' , $fecha_entrega ); // cambiar formato a d/m/Y
            //echo $fecha_entrega; echo  "  ";

            //---------- Calcular fecha de pago Parcial -------------

            $dia_pago = round($dias_prod/3);
            //echo $dias_prod; echo  "  ";
          
            $fecha_pago_1 = strtotime ( '+'.$dia_pago.' day' , strtotime ( $fecha ) ) ;
            $fecha_pago_1 = date( 'd/m/Y' , $fecha_pago_1 ); // cambiar formato a d/m/Y
            //echo $fecha_pago_1; echo  "  ";

            //----------- Calcular Costos -----------------

            // calculo de costos directos
            
            foreach ($this->model->ConsultaPrecio($Producto, $Material) as $registro) {
                $precio_material = $registro['precio_mat'];
                $precio_producto = $registro['precio_prod'];
                
            }
            //echo $precio_material; echo " ";
            //echo $precio_producto; echo " ";
            $otros = 0.50;          // costos distintos a tela 
            $costo_mano_diario = 10;    // costos de mano de obra  180
            switch ($Talla) {
                case 'S': $precio_talla = 2; break;
                case 'M': $precio_talla = 5; break;
                case 'L': $precio_talla = 7; break;
                case 'XL': $precio_talla = 10; break;
            }
           
            $cost_material = $precio_material + $precio_talla + $otros;
            $cost_mano = $dias_prod * $costo_mano_diario;
            $costo_directo = $cost_material + $cost_mano + $precio_producto;
            
             //calculo de costos indirectos
            $costo_indirecto = round(0.05*$costo_directo,2);

            //costo unitario 
            $costo_unitario = $costo_directo + $costo_indirecto;

            //costo total 
            $costo_total = round($costo_unitario * $cantidad,2);

            //costo parcial 
            $costo_parcial = round(0.25 * $costo_total,2);

            /*echo "material: ";echo $precio_material;
            echo " dias: ";echo $dias_prod;
            echo " fecha ..: ";echo $nuevafecha;
            echo " indirectos: "; echo $costo_indirecto;
            echo " producto: "; echo $precio_producto;
            echo " talla: "; echo $precio_talla;
            echo " mano obra: "; echo $cost_mano;
            echo " costo material: "; echo $cost_material;
            echo " costo directo: "; echo $costo_directo;
            echo " costo unitario: "; echo $costo_unitario;
            echo " costo total: ";echo $costo_total;
            echo " costo parcial: ";echo $costo_parcial;*/
            
            require_once("../vista/v_ficha_presupuesto.php");
        }
        public function Presupuesto()
        {
            $sql=$this->db->query("CALL SP_M_TABLA_PRESUPUESTO");
            while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
                $this->presupuestos[]=$filas;
            }

            return $this->presupuestos;
        }
    }  

?>