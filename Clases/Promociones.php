<?php
namespace Clases;

class Promociones
{
//Atributos
    public $id;
    public $cod;
    public $titulo;
    public $descripcion;
    public $usuario;
    public $inicio;
    public $fin;
    public $keywords;
    public $detalle;
    public $categoria;
    public $subcategoria;
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
        $sql   = "INSERT INTO `promociones`(`cod`, `titulo`, `descripcion`, `usuario`,`inicio`, `fin`, `keywords`, `detalle`,`categoria`,`subcategoria`) VALUES ('{$this->cod}', '{$this->titulo}', '{$this->descripcion}', '{$this->usuario}', '{$this->inicio}', '{$this->fin}', '{$this->keywords}', '{$this->detalle}', '{$this->categoria}', '{$this->subcategoria}')";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function edit()
    {
        $sql   = "UPDATE `promociones` SET cod = '{$this->cod}', titulo = '{$this->titulo}', descripcion = '{$this->descripcion}', usuario = '{$this->usuario}', inicio = '{$this->inicio}', fin = '{$this->fin}', keywords = '{$this->keywords}', detalle = '{$this->detalle}', categoria = '{$this->categoria}', subcategoria = '{$this->subcategoria}' WHERE `cod`='{$this->cod}'";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function delete()
    {
        $sql   = "DELETE FROM `promociones` WHERE `cod`  = '{$this->cod}'";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function view()
    {
        $sql   = "SELECT * FROM `promociones` WHERE cod = '{$this->cod}' ORDER BY cod DESC";
        $notas = $this->con->sqlReturn($sql);
        $row   = mysqli_fetch_assoc($notas);
        return $row;
    }

    public function list() {
        $array = array();
        $sql = "SELECT * FROM `promociones`";
        $notas = $this->con->sqlReturn($sql);

        if ($notas) {
            while ($row = mysqli_fetch_assoc($notas)) {
                $array[] = $row;
            }
            return $array ;
        }
    }
}