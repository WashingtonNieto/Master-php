<?php

namespace MisClases;

class Categoria{
    public $nombre;
    public $descripcion;
    
    public function __construct() {
        $this->nombre = "Accion";
        $this->descripcion = "Categoria enfocada a las reviesw de juegos de accion";
    }
}