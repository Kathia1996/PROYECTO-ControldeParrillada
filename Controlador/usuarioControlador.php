<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 17/10/14
 * Time: 05:23 PM
 */

class usuarioControlador extends Controlador{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $usuario = $this->loadModel('usuario');
        $this->_vista->clientes = $usuario->listar();
        $this->_vista->titulo = 'Portada de Usuario';
        $this->_vista->renderizar('index','usuario');
    }
} 