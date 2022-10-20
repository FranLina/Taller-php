<?php

class Coche{

    public $matricula;
    public $marca;
    public $modelo;
    public $color;
    public $revisado;

    function set_matricula($matricula)
    {
        $this->matricula = $matricula;
    }

    function get_matricula()
    {
        return $this->matricula;
    }

    function set_marca($marca)
    {
        $this->marca = $marca;
    }

    function get_marca()
    {
        return $this->marca;
    }

    function set_modelo($modelo)
    {
        $this->modelo = $modelo;
    }

    function get_modelo()
    {
        return $this->modelo;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }

    function set_revisado($revisado)
    {
        $this->revisado = $revisado;
    }

    function get_revisado()
    {
        return $this->revisado;
    }
}
?>