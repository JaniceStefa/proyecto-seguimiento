<?php

class M_Pedido{
    private $pedido;
    private $db;
    // Conexion con Base de Datos
    public function __construct()
    {
        require_once("conectar_bd.php");
        $this->db=Conectar::conexion();
        $this->pedidos=array();
    }
    // Agrega Pedido y Detalle Pedido a Base de Datos
    public function Registrar_Pedido($codProducto, $talla, $codMaterial, $cantidad, $fecha_requerida){
        
        $dni_cliente = $_SESSION['user'];
        $sql="CALL SP_A_TABLA_DETALLEPEDIDO('".$codProducto."','".$talla."','" .$codMaterial. "','".$cantidad. "','" .$fecha_requerida. "','".$dni_cliente."')";
        $this->db->query($sql);     
    }
    // Mostrar listado de Pedidos
    public function Mostrar_Pedido() {
        $sql=$this->db->query("CALL SP_M_TABLA_DETALLEPEDIDO()");
        while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
            $this->pedidos[]=$filas;
        }
        return $this->pedidos;
    }
    //Eliminar pedido
    public function Eliminar_Pedido($codigo_pedido){
        $sql="CALL SP_E_TABLA_PEDIDO('".$codigo_pedido."')";
        $this->db->query($sql);
    }
}
?>