<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 17/10/14
 * Time: 05:23 PM
 */

class usuarioControlador extends Controlador{

    private $_usuario;

    public function __construct()
    {
        parent::__construct();
        $this->_usuario = $this->loadModel('usuario');
    }

    public function index()
    {
        $this->_vista->usuarios = $this->_usuario->listar();
        $this->_vista->titulo = 'Portada de Usuario';
        $this->_vista->renderizar('index','usuario');
    }

    public function nuevo()
    {
        $this->_vista->titulo = 'Nuevo Usuario';
        //$this->_view->prueba = $this->getint('guardar');
        if($this->getInt('guardar') == 1){
            $this->_vista->datos = $_POST;

            if(!$this->getTexto('nombres')){
                $this->_vista->_error = 'Debe introducir nombre';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }

            if(!$this->getTexto('apellidos')){
                $this->_vista->_error = 'Debe introducir apellidos';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }
            if(!$this->getTexto('direccion')){
                $this->_vista->_error = 'Debe introducir dirección';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }

            if(!$this->getTexto('correo')){
                $this->_vista->_error = 'Debe introducir correo';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }

            if(!$this->getTexto('telefono')){
                $this->_vista->_error = 'Debe introducir telefono';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }

            if(!$this->getTexto('dni')){
                $this->_vista->_error = 'Debe introducir dni';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }

            if(!$this->getTexto('fecha_nacimiento')){
                $this->_vista->_error = 'Debe introducir fecha nacimiento';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }
            /*
            if(!$this->getTexto('iddistrito')){
                $this->_vista->_error = 'Debe introducir iddistrito';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }

            if(!$this->getTexto('idlogin')){
                $this->_vista->_error = 'Debe introducir idlogin';
                $this->_vista -> renderizar('nuevo', 'usuario');
                exit;
            }
            */

            $this->_usuario->insertar(
                $this->getTexto('nombres'),
                $this->getTexto('apellidos'),
                $this->getTexto('direccion'),
                $this->getTexto('correo'),
                $this->getTexto('telefono'),
                $this->getTexto('dni'),
                $this->getTexto('fecha_nacimiento'),
                '1',
                '1'
                );
            $this->redireccionar('usuario');
        }
        $this->_vista->renderizar('nuevo', 'usuario');
    }

    
    public function eliminar($id){

    }
} 