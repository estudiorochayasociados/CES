<?php

namespace Clases;

class Galerias
{

	//Atributos
	public $id;
	public $cod;
	public $titulo;
	public $desarrollo;
	public $categoria;
	public $keywords;
	public $description;
	public $fecha;
	public $usuario;
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
		$sql   = "INSERT INTO `galerias`(`cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`, `usuario`) VALUES ('{$this->cod}', '{$this->titulo}', '{$this->desarrollo}', '{$this->categoria}', '{$this->keywords}', '{$this->description}', '{$this->fecha}', '{$this->usuario}')";
		$query = $this->con->sql($sql);
		return $query;
	}

	public function edit()
	{
		$sql   = "UPDATE `galerias` SET cod = '{$this->cod}', titulo = '{$this->titulo}', desarrollo = '{$this->desarrollo}', categoria = '{$this->categoria}', keywords = '{$this->keywords}', description = '{$this->description}', fecha = '{$this->fecha}', usuario = '{$this->usuario}' WHERE `cod`='{$this->cod}'";
		$query = $this->con->sql($sql);
		return $query;
	}

	public function delete()
	{
		$sql   = "DELETE FROM `galerias` WHERE `cod`  = '{$this->cod}'";
		$query = $this->con->sql($sql);
		return $query;
	}

	public function view()
	{
		$sql   = "SELECT * FROM `galerias` WHERE cod = '{$this->cod}' ORDER BY id DESC";
		$notas = $this->con->sqlReturn($sql);
		$row   = mysqli_fetch_assoc($notas);
		return $row;
	}

    public function view_perfil()
    {
        $sql   = "SELECT * FROM `galerias` WHERE usuario = '{$this->usuario}' ORDER BY id DESC";
        $notas = $this->con->sqlReturn($sql);
        $row   = mysqli_fetch_assoc($notas);
        return $row;
    }

	public function list($filter){
		$array = array();
		if (is_array($filter)) {
			$filterSql = "WHERE ";
			$filterSql .= implode(" AND ", $filter);
		} else {
			$filterSql = '';
		}

		$sql   = "SELECT * FROM `galerias` $filterSql  ORDER BY id DESC";
		$notas = $this->con->sqlReturn($sql);

		if ($notas) {
			while ($row = mysqli_fetch_assoc($notas)) {
				$array[] = $row;
			}
			return $array;
		}
	}

    function listWithOps_Perfil($order,$limit) {
        $array = array();

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

        $sql = "SELECT * FROM `galerias` where `usuario`='{$this->usuario}' ORDER BY $orderSql $limitSql";
        $notas = $this->con->sqlReturn($sql);
        if ($notas) {
            while ($row = mysqli_fetch_assoc($notas)) {
                $array[] = $row;
            }
            return $array ;
        }
    }
}
