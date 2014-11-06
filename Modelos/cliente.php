<?php
/**
 * Created by PhpStorm.
 * User: Kathia
 * Date: 27/10/14
 * Time: 10:47 AM
 */
class cliente extends Modelo
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCliente(){
        $cliente = $this->_db->query("select * from cliente");
        return $cliente->fetchall();
    }
}