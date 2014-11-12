<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 17/10/14
 * Time: 05:23 PM
 */

class usuarioControlador extends Controlador
{

    private $_usuario;

    public function __construct()
    {
        $this->_usuario = $this->loadModel('usuario');
        parent::__construct();
    }

    public function index()
    {
        $this->_vista->titulo = 'Portada de Usuario';
        $datos = $this->_usuario->select();
        $this->_vista->usuarios = $datos;
        $this->_vista->renderizar('index','usuario');
    }

    public function nuevo()
    {
    }

    public function eliminar($id)
    {
    }
} 