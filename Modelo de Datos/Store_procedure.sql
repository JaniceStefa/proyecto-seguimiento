-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2018 a las 10:03:03
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_garras`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_DETALLEPEDIDO` (IN `_cod_producto` INT(3), IN `_talla` VARCHAR(20), IN `_cod_material` INT(3), IN `_cantidad` INT(3), IN `_fecha_requerida` DATETIME, IN `_dni_cliente` VARCHAR(8))  BEGIN 
CALL SP_A_TABLA_PEDIDO();
SET @cod = LAST_INSERT_ID();
INSERT INTO detallepedido (cod_pedido, cod_producto, talla, cod_material, cantidad, fecha_requerida, DNI_cliente)
VALUES (@cod,_cod_producto, _talla, _cod_material, _cantidad, _fecha_requerida, _dni_cliente);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_MATERIAL` (IN `_descripcion` VARCHAR(20), IN `_precio` DECIMAL(6,2))  INSERT INTO material(descripcion_mat, precio_mat, estado) values(_descripcion, _precio, 1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PEDIDO` ()  INSERT INTO pedido(fecha_emision, estado) values(CURRENT_TIME, 1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PERSONA` (IN `_DNI` VARCHAR(8), IN `_ap_paterno` VARCHAR(20), IN `_ap_materno` VARCHAR(20), IN `_nombre` VARCHAR(50), IN `_direccion` VARCHAR(100), IN `_email` VARCHAR(100), IN `_telefono` VARCHAR(9))  BEGIN
INSERT INTO
persona(DNI,ap_paterno,ap_materno,nombre,direccion, email, telefono, estado) 
VALUES (_DNI,_ap_paterno,_ap_materno,_nombre,_direccion,_email,_telefono,1);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PRESUPUESTO` (IN `_precio_total` DECIMAL(6,2), IN `_fecha_entrega` DATE, IN `_precio_parcial` DECIMAL(6,2), IN `_fecha_pago_parcial` DATE, IN `_cod_pedido` VARCHAR(10))  BEGIN
INSERT INTO presupuesto(precio_total,fecha_entrega,precio_parcial,fecha_pago_parcial,cod_pedido,estado) 
VALUES (_precio_total,_fecha_entrega,_precio_parcial,_fecha_pago_parcial,_cod_pedido,1);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PRODUCTO` (IN `_descripcion` VARCHAR(25), IN `_imagen` TEXT, IN `_precio` DECIMAL(6,2), IN `_categoria` VARCHAR(20))  INSERT INTO producto(descripcion_prod, imagen, precio_prod, categoria, estado)VALUES(_descripcion, _imagen, _precio, _categoria, 1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), IN `_contrasenia` VARCHAR(10), IN `_tipo_acceso` BIT(1))  BEGIN
INSERT INTO usuario(DNI,contrasenia,tipo_acceso) 
VALUES (_DNI,_contrasenia,_tipo_acceso);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_CONSULTA_PRECIO` (IN `_cod_producto` INT, IN `_cod_material` INT)  NO SQL
SELECT precio_mat, precio_prod from material inner join producto 
WHERE cod_material = _cod_material && cod_producto = _cod_producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_MATERIAL` (IN `_descripcion` VARCHAR(20), IN `_precio` DECIMAL(6,2))  UPDATE material
set descripcion_mat = _descripcion, precio_mat=_precio
WHERE cod_material=_cod_material$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PERSONA` (IN `_DNI` VARCHAR(8), IN `_ap_paterno` VARCHAR(20), IN `_ap_materno` VARCHAR(20), IN `_nombre` VARCHAR(50), IN `_direccion` VARCHAR(100), IN `_email` VARCHAR(100), IN `_telefono` VARCHAR(9))  BEGIN
UPDATE persona
SET DNI=_DNI,ap_paterno= _ap_paterno, ap_materno=_ap_materno, nombre=_nombre, direccion=_direccion, email=_email, telefono=_telefono
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), IN `_precio_total` DECIMAL(6,2), IN `_fecha_entrega` DATE, IN `_precio_parcial` DECIMAL(6,2), IN `_fecha_pago_parcial` DATE, IN `_cod_pedido` VARCHAR(10))  BEGIN
UPDATE presupuesto
set precio_total=_precio_total,fecha_entrega=_fecha_entrega,precio_parcial=_precio_parcial,fecha_pago_parcial=_fecha_pago_parcial
WHERE cod_presupuesto=_cod_presupuesto and cod_pedido=_cod_pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PRODUCTO` (IN `_cod_producto` INT(3), IN `_descripcion` VARCHAR(25), IN `_imagen` TEXT)  UPDATE producto
set descripcion = _descripcion, imagen=_imagen
WHERE cod_producto = _cod_producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), IN `_contrasenia` VARCHAR(10), IN `_tipo_acceso` BIT(1), IN `_cod_usuario` VARCHAR(10))  BEGIN
UPDATE presupuesto
set DNI=_DNI,contrasenia=_contrasenia,tipo_acceso=_tipo_acceso
WHERE cod_usuario=_cod_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_MATERIAL` (IN `_cod_material` INT)  UPDATE material
SET estado=0
WHERE cod_material=_cod_material$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PEDIDO` (IN `_cod_pedido` INT(3))  UPDATE pedido
SET estado=0
WHERE cod_pedido=_cod_pedido$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PERSONA` (IN `_DNI` VARCHAR(8))  BEGIN
UPDATE persona
SET estado=0
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10))  UPDATE presupuesto
SET estado=0
WHERE cod_presupuesto=_cod_presupuesto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PRODUCTO` (IN `_cod_producto` INT)  UPDATE producto
SET estado=0
WHERE cod_producto=_cod_producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_USUARIO` (IN `_DNI` VARCHAR(8))  BEGIN
UPDATE usuario
SET estado=0
WHERE cod_usuario=_cod_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_DETALLEPEDIDO` ()  SELECT cod_pedido, descripcion_prod, talla, descripcion_mat, cantidad, fecha_requerida, DNI_cliente
FROM detallepedido INNER JOIN producto, material
WHERE detallepedido.cod_producto = producto.cod_producto &&
detallepedido.cod_material = material.cod_material
ORDER BY fecha_requerida ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_MATERIAL` ()  SELECT cod_material, descripcion_mat, precio_mat FROM material WHERE estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PEDIDO` ()  SELECT * FROM pedido WHERE estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PERSONA` ()  BEGIN
SELECT *
FROM persona
WHERE estado=1
ORDER BY ap_paterno ASC;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PRESUPUESTO` ()  SELECT*FROM presupuesto WHERE estado =1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PRODUCTO` ()  SELECT * FROM producto WHERE estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_USUARIO` ()  BEGIN
SELECT*FROM usuario ORDER BY cod_usuario LIMIT 150;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_VALIDAR_LOGIN` (IN `_DNI` VARCHAR(8), IN `_contrasenia` VARCHAR(10))  BEGIN
SELECT*FROM usuario where DNI=_DNI and contrasenia=_contrasenia;
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
