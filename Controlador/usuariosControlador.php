<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 17/10/14
 * Time: 05:23 PM
 */

class usuariosControlador extends Controlador{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_vista->renderizar('index');
    }
} 