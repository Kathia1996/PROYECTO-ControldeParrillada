<?php

/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 24/10/14
 * Time: 09:44 AM
 */
class ConsultasMYSQL extends conexion
{
    protected function all($tabla)
    {
        $db = new conexion();
        $cadena = null;
        /*foreach ($campos as $campo) {
            $cadena .= $campo . ',';
        }*/
        $consultaSQL = "SELECT * FROM $tabla ";
        $sql = $db->prepare($consultaSQL);
        $result = $sql->execute();
        $db->cerrar();
        if ($result) {
            return $sql->fetchAll();
        } else {
        }
    }

    protected function show($tabla, $id)
    {
        $consultaSQL = "SELECT * FROM $tabla ";
        $sql = $this->db->prepare($consultaSQL);
        $result = $sql->execute();
        $this->db->cerrar();
        var_dump($result);
        exit;
        /*
        if ($result)
        {
            return $sql->fetchAll();
        } else {
        }
        */
    }

    protected function insertar($tabla, $campos, $datos)
    {
        $db = new conexion();
        $consultaSQL = "INSERT INTO " . $tabla;
        //$col = "";
        //print_r($datos);
        $tam = count($datos);
        foreach ($campos as $key => $value)
        {
            if ($key == 0)
            {
                //$camp= $camp.$campos[$key];
                $reg = $reg . $datos[$campos[$key]];
            }
            else
            {
                if ($key == $tam)
                {
                    $camp = $camp . $campos[$key];
                    $reg = $reg . "'" . $datos[$campos[$key]] . "'";
                }
                else
                {
                    $camp = $camp . $campos[$key] . ",";
                    $reg = $reg . "'" . $datos[$campos[$key]] . "',";
                }
            }
        }
        $consultaSQL = $consultaSQL . "(" . $camp . ") values (" . $reg . ")";
        $sql = $db->prepare($consultaSQL);
        $result = $sql->execute();
        $db->cerrar();
    }

    public function leercampos($table)
    {
        $db = new conexion();
        $consultaSQL = "SHOW COLUMNS FROM appa." . $table;
        $sql = $db->prepare($consultaSQL);
        $sql->execute();
        $db->cerrar();
        $datos = $sql->fetchAll();
        $fiel = array();
        foreach ($datos as $key => $value)
        {
            $fiel[$key] = $value['Field'];
        }
        return $fiel;
    }
} 