<?php
/**
 * Created by PhpStorm.
 * User: Kathia
 * Date: 6/11/14
 * Time: 14:18
 */
class usuario extends ConsultasMYSQL
{
    private $table = "usuario";

    public function select()
    {
        $datos = $this->all($this->table);
        return $datos;
    }

    public function insertar()
    {

    }

    public function eliminar($id)
    {

    }
}