<?php
	class C_Presupuesto{

		private $modelo;
		private $modelo1;

		public function Admi(){
			require_once("../modelo/m_presupuesto.php");
			$this->modelo=new M_Presupuesto();
			require_once("../vista/VA_Presupuestos.php");
		}

		public function AgregarPresupuesto(){
			require_once("../modelo/m_pedido.php");
			$this->modelo=new M_pedido();

			require_once("../modelo/m_presupuesto.php");
			$this->modelo1=new M_Presupuesto();
			
			//codigo pedido
			$this->modelo->Mostrar_Cod();
			
			$this->modelo1->Agregar_Presupuesto($costo_total,$FechaEntrega,$costo_parcial,$fecha_pago_1,$CodPedido);

			header('Location: index_Presupuesto.php');
			header_remove('Location');
		}

		public function Cambiar(){
			require_once("../modelo/m_presupuesto.php");
			$this->modelo=new M_Presupuesto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			$FechaEntrega=$_POST['fechaentrega'];
			$FechaPagoParcial=$_POST['fechapagoparcial'];
			$PrecioTotal=$_POST['preciototal'];
			$PrecioParcial=$PrecioTotal*0.4;
			$CodPedido=$_POST['codigopedido'];
			$this->modelo->Cambiar($CodPresupuesto,$PrecioTotal,$FechaEntrega,$PrecioParcial,$FechaPagoParcial,$CodPedido);
		}


		public function Eliminar(){
			require_once("../modelo/m_presupuesto.php");
			$this->modelo=new M_Presupuesto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			//$CodPedido=$_POST['codigopedido'];
			//$Estado=$_POST['estado'];
			$this->modelo->Eliminar($CodPresupuesto);
		}

		public function MostrarFicha(){
			require_once("../modelo/m_presupuesto.php");
			$this->modelo=new M_Presupuesto();
			require_once("../vista/V_FichaPresupuesto.php");
		}
		public function MostrarAdmi(){
			require_once("../modelo/m_presupuesto.php");
			$this->modelo=new M_Presupuesto();
			require_once("../vista/VA_Presupuestos.php");
		}


	}  

?>