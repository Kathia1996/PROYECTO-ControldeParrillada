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

    public function listar(){
        $cliente = $this->_db->query("select * from cliente");
        return $cliente->fetchall();
    }
}