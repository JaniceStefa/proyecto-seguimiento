<?php 
class M_Consultas{
    private $precios;
    private $db;
    // Conexion con Base de Datos
    public function __construct()
    {
        require_once("conectar_bd.php");
        $this->db=Conectar::conexion();
        $this->precios=array();
    }
    // Consulta precio del Producto y Material
    public function ConsultaPrecio($Producto, $Material) 
    {  
        $sql = $this->db->query("CALL SP_CONSULTA_PRECIO($Producto, $Material)");
        while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
            $this->precios[]=$filas;
        }
        return $this->precios;
    } 
}
?>