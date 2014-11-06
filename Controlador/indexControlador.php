<?php
class indexControlador extends Controlador
{

    public function __construct()
    {
        parent::__construct();
    }

    //metodo para llamar al controller index
    public function index()
    {
        $cliente = $this->loadModel('cliente');
        $this->_vista->clientes = $cliente->getCliente();
        $this->_vista->titulo = 'Portada de index';
        $this->_vista->renderizar('index','inicio');
    }

} 