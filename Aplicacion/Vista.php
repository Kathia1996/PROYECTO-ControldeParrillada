<?php

class Vista
{
    private $_controlador;
    private $_js;
    private $_css;

    public function __construct(Request $request)
    {
        $this->_controlador = $request->getControlador();
    }

    public function renderizar($vista, $item = false)
    {
        $menu = array(
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'enlace' => BASE_URL
            ),
            array(
                'id' => 'cliente',
                'titulo' => 'Cliente',
                'enlace' => BASE_URL . 'cliente'
            ),
            array(
                'id' => 'usuario',
                'titulo' => 'Usuario',
                'enlace' => BASE_URL . 'usuario'
            ),
            array(
                'id' => 'reportes',
                'titulo' => 'Reportes',
                'enlace' => BASE_URL . 'kathia'
            ),
        );

        

        $rutavista = ROOT . 'Vistas' . DS . $this->_controlador . DS . $vista . '.phtml';

        $js = array();
        $css = array();
        if (count($this->_js)) {
            $js = $this->_js;
        }
        if (count($this->_css)) {
            $css = $this->_css;
        }

        $_layoutParams = array(
            'ruta_css' => BASE_URL . 'Vistas/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . 'Vistas/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_js' => BASE_URL . 'Vistas/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $menu,
            'js' => $js,
            'css' => $css            
        );

        if (is_readable($rutavista)) {
            include_once ROOT . 'Vistas' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            include_once $rutavista;
            include_once ROOT . 'Vistas' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'pie.php';
        } else {
            throw new Exception('Error de vista no encontrada');
        }
    }

    public function setJs(array $js)
    {
        if (is_array($js) && count($js)) {
            for ($i = 0; $i < count($js); $i++) {
                $this->_js[] = BASE_URL . 'vista/' . $this->_controlador . "/js/" . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }
    }

    public function setCss(array $css)
    {
        if (is_array($css) && count($css)) {
            for ($i = 0; $i < count($css); $i++) {
                $this->_css[] = BASE_URL . 'vista/' . $this->_controlador . "/css/" . $css[$i] . '.css';
            }
        } else {
            throw new Exception('Error de css');
        }
    }
} 