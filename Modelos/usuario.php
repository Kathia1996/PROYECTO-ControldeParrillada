<?php
/**
 * Created by PhpStorm.
 * User: Kathia
 * Date: 6/11/14
 * Time: 14:18
 */
class usuario extends Modelo{

   public function __construct()
    {
        parent::__construct();
    }

    public function listar()
    {
        $usuario = $this->_db->query("select * from usuario");
        return $usuario->fetchall();
    }


    public function insertar($nombres, $apellidos, $direccion, $correo, $telefono, $dni, $fecha_nacimiento, $iddistrito, $idlogin)
    {
        $this->_db->prepare("INSERT INTO usuario VALUES (null,  :nombres, :apellidos, :direccion, :correo, :telefono, :dni, :fecha_nacimiento, :iddistrito, :idlogin)")
            ->execute(
                array(
                    ':nombres' => $nombres,
                    ':apellidos' =>$apellidos,
                    ':direccion' => $direccion,
                    ':correo' => $correo,
                    ':telefono' => $telefono,
                    ':dni' => $dni,
                    ':fecha_nacimiento' => $fecha_nacimiento,
                    ':iddistrito' => $iddistrito,
                    ':idlogin' => $idlogin
                )
            );

    }


    public function eliminar($id)
    {
        $id = (int) $id;
        $this->_db->query("delete from usuario where id = $id");
    }


}