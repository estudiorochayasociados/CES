<?php namespace Clases;

class Contenidos
{
    //Atributos
    public $id;
    public $contenido;
    public $cod;
    private $con;

    //Metodos
    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;

    }
    public function add()
    {
        $sql   = "INSERT INTO `contenidos`(`contenido`, `cod`) VALUES ('{$this->contenido}','{$this->cod}')";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function edit()
    {
        $sql   = "UPDATE `contenidos` SET `contenido`='{$this->contenido}' WHERE `id`='{$this->id}'";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function delete()
    {
        $sql   = "DELETE FROM `contenidos` WHERE `id`  = '{$this->id}'";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function view()
    {
        $sql   = "SELECT * FROM contenidos WHERE id = '{$this->id}' ORDER BY id DESC";
        $notas = $this->con->sqlReturn($sql);
        $row   = mysqli_fetch_assoc($notas);
        return $row;
    }

    public function viewCod()
    {
        $sql   = "SELECT * FROM contenidos WHERE cod = '{$this->cod}' ORDER BY id DESC";
        $notas = $this->con->sqlReturn($sql);
        $row   = mysqli_fetch_assoc($notas);
        return $row;
    }

    public function list()
    {
        $sql   = "SELECT * FROM contenidos ";
        $conten = $this->con->sqlReturn($sql);
        if ($conten) {
            while ($row = mysqli_fetch_assoc($conten)) {
                $array[] = $row;
            }
            return $array ;
        }
     }

    function listWithOps($filter,$order,$limit) {
        $array = array();
        if (is_array($filter)) {
            $filterSql = "WHERE ";
            $filterSql .= implode(" AND ", $filter);
        } else {
            $filterSql = '';
        }

        if ($order != '') {
            $orderSql = $order;
        } else {
            $orderSql = "id DESC";
        }

        if ($limit != '') {
            $limitSql = "LIMIT " . $limit;
        } else {
            $limitSql = '';
        }

        $sql = "SELECT * FROM `contenidos`$filterSql  ORDER BY $orderSql $limitSql";

        $notas = $this->con->sqlReturn($sql);
        if ($notas) {
            while ($row = mysqli_fetch_assoc($notas)) {
                $array[] = $row;
            }
            return $array ;
        }
    }
}
