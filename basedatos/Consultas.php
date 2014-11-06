<?php

/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 24/10/14
 * Time: 09:44 AM
 */
interface Consultas
{

    public function listar();

    public function editar($id);

    public function eliminar($id);

    public function nuevo($datos);

} 