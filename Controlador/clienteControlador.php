<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 17/10/14
 * Time: 05:23 PM
 */

class clienteControlador extends Controlador
{

    private $_cliente;

    public function __construct()
    {
        $this->_cliente = $this->loadModel('cliente');
        parent::__construct();
    }

    public function index()
    {
        $this->_vista->titulo = 'Portada de Cliente';
        $datos = $this->_cliente->select();
        $this->_vista->clientes = $datos;
        $this->_vista->renderizar('index', 'cliente');
    }

    public function show($id)
    {
        $datos = $this->_cliente->show($id);
        exit;
    }

    public function nuevo()
    {
        $this->_vista->titulo = 'Nuevo Cliente';
        $this->_vista->renderizar('nuevo', 'cliente');
    }

    public function save()
    {
        $this->_cliente = $this->loadModel('cliente');
        $this->_cliente->insert($_POST);
        //headrer para que vuelva al la vista anterior
        header('Location:' . BASE_URL . '/cliente');
        echo "<script>alert('Se Ingreso Corectamente')</script>";

    }


}
 