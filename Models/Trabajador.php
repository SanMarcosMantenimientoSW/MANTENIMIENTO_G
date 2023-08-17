<?php
include_once 'Conexion.php';
class Trabajador
{
    private $acceso;

    var $objetos;
    public function __construct()
    {
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function read_all_trabajadores()
    {
        $sql = "SELECT * 
                FROM trabajador
                WHERE estado='A'";
        $query = $this->acceso->prepare($sql);
        $query->execute();
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }
    function crear($user, $nombres, $apellidos, $dni, $email, $telefono)
    {
        $sql = "INSERT INTO trabajador(user,nombres,apellidos,dni,email,telefono)
                VALUES(:user,:nombres,:apellidos,:dni,:email,:telefono)";
        $query = $this->acceso->prepare($sql);
        $variables = array(
            ':user' => $user,
            ':nombres' => $nombres,
            ':apellidos' => $apellidos,
            ':dni' => $dni,
            ':email' => $email,
            ':telefono' => $telefono,
        );
        $query->execute($variables);
    }
    function obtener_trabajador($id)
    {
        $sql = "SELECT * 
                FROM trabajador
                WHERE trabajador.id=:id AND estado='A'";
        $query = $this->acceso->prepare($sql);
        $variables = array(
            ':id' => $id,
        );
        $query->execute($variables);
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }
    function eliminar_trabajador($id_trabajador)
    {
        $sql = "UPDATE trabajador SET estado=:estado WHERE id=:id_trabajador";
        $query = $this->acceso->prepare($sql);
        $variables = array(
            ':id_trabajador' => $id_trabajador,
            ':estado'=>'I'
        );
        $query->execute($variables);
    }
    function llenar_usuarios()
    {
        $sql = "SELECT * 
                FROM trabajador";
        $query = $this->acceso->prepare($sql);
        $query->execute();
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }
    function llenar_usuarios_mod()
    {
        $sql = "SELECT * 
                FROM trabajador";
        $query = $this->acceso->prepare($sql);
        $query->execute();
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }
}
