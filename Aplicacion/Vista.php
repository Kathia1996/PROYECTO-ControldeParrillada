<?php

class Vista
{
    private $_controlador;

    public function __construct(Request $request)
    {
        $this->_controlador = $request->getControlador();
    }

    public function renderizar($vista, $item = false)
    {
        $menu=array(
            array(
                'id'=>'inicio',
                'titulo'=>'Inicio',
                'enlace'=>BASE_URL
            ),
            array(
                'id'=>'hola',
                'titulo'=>'Hola',
                'enlace'=>BASE_URL.'hola'
            ),
            array(
                'id'=>'usuario',
                'titulo'=>'Usuario',
                'enlace'=>BASE_URL.'usuario'
            ),
            array(
                'id'=>'reportes',
                'titulo'=>'Reportes',
                'enlace'=>BASE_URL.'kathia'
            ),
        );

            $_layoutParams =array(
            'ruta_css' => BASE_URL . 'Vistas/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . 'Vistas/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_js' => BASE_URL . 'Vistas/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' =>$menu
        );


        $rutavista = ROOT . 'Vistas' . DS . $this->_controlador . DS . $vista . '.phtml';

        if (is_readable($rutavista)) {
            include_once ROOT.'Vistas'.DS . 'layout'.DS . DEFAULT_LAYOUT . DS . 'header.php';
            include_once $rutavista;
            include_once ROOT.'Vistas'.DS . 'layout'.DS . DEFAULT_LAYOUT . DS . 'pie.php';
        } 
        else {
            throw new Exception('Error de vista no encontrada');
        }
    }
} 