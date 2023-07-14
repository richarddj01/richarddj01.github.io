<?php

class conexion {
    private $host = "67.217.58.45";
    private $username = "richarddj";
    private $password = "xD.Rdj01";
    private $database = "rdjp";
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function ejecutarConsulta($consulta) {
        $resultado = $this->conexion->query($consulta);
        return $resultado;
    }

    public function cerrarConexion() {
        $this->conexion->close();
    }
}
?>