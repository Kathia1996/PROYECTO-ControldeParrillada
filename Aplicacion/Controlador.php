<?php

abstract class Controlador
{
    protected $_vista;

    abstract public function index();

    public function __construct()
    {
        $this->_vista = new Vista(new Request());
    }


    protected function loadModel($modelo)
    {
        $ruta = ROOT . 'Modelos' . DS . $modelo . '.php';
        if (is_readable($ruta)) {
            require_once $ruta;
            $modelo = new $modelo;
            return $modelo;
        } else {
            throw new Exception('error de modelo');
        }
    }


    protected function getTexto($clave)
    {
        if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
            $_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES);
            return $_POST[$clave];
        }
        return '';
    }

    protected function getInt($clave)
    {
        if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
            $_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
            return $_POST[$clave];
        }
        return 0;
    }

    protected function redireccionar($ruta = false)
    {
        if ($ruta) {
            header('location:' . BASE_URL . $ruta);
            exit;
        } else {
            header('location:' . BASE_URL);
            exit;
        }
    }
}