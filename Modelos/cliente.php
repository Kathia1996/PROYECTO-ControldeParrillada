<?php
/**
 * Created by PhpStorm.
 * User: Kathia
 * Date: 27/10/14
 * Time: 10:47 AM
 */
class cliente extends ConsultasMYSQL
{
	private $table = "cliente";
		
	public function select()
    {
        $datos = $this->all($this->table);
        return $datos;
    }

    public function show($id)
    {
        $datos = $this->show($this->table,$id);
        echo '<pre>';
        var_dump($datos);
    }
    public function insert($datos)
    { 
        $obj= new ConsultasMYSQL();
        $columnas = $obj->leercampos('cliente'); 
        $obj->insertar('cliente',$columnas,$datos);
        //return $datos;
    }
    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function add($datos)
    {
        // TODO: Implement add() method.
    }


	/*
    public function __construct()
    {
        parent::__construct();
    }
    public function getCliente(){
        $cliente = $this->_db->query("select * from cliente");
        return $cliente->fetchall();
    }
    */
}