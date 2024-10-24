<?php

class FiguraGeometrica {
    public $tipoFigura;
    public $lado1;

    // Constructor
    public function __construct($tipoFigura, $lado1)
    {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    // Getters y setters
    public function getTipoFigura(){
        return $this->tipoFigura;
    }

    public function getLado1(){
        return $this->lado1;
    }

    public function setTipoFigura($tipoFigura){
        return $this->$tipoFigura;
    }

    public function setLado1($lado1){
        return $this->$lado1;
    }

    // Destructor
    public function __destruct()
    {
        
    }
}
?>