<?php
    require_once 'conexion.php';

    class DAO extends conexion{
        private $cn;
    
        public function __construct() {
            $this->cn = new conexion();
        }
    
        public function formularioContacto_Insertar($nombre, $correo,$mensaje) {
            $consulta = "CALL FORMULARIO_CONTACTO_INSERT('$nombre', '$correo','$mensaje')";
            $resultado = $this->cn->ejecutarConsulta($consulta);
    
            if ($resultado === TRUE) {
                return "Datos guardados exitosamente.";
            } else {
                return "Error al guardar los datos: " . $this->cn->conexion->error;
            }
        }
    
        public function __destruct() {
            $this->cn->cerrarConexion();
        }
    }
?>