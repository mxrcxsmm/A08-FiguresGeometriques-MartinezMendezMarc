<?php

class Rectangulo extends FiguraGeometrica{
    public $lado2;

    // Constructor
    public function __construct($lado1, $lado2)
    {
        parent::__construct('Rectangulo', $lado1);
        $this->lado2 = $lado2;
    }

    // Getters y setters
    public function getLado2(){
        return $this->lado2;
    }

    public function setLado2($lado2){
        return $this->$lado2;
    }

    // Calcular perímetro rectangulo
    public function calcularPerimetre(){
        return 2 * ($this->lado1 + $this->lado2);
    }

    // Calcular área rectangulo
    public function calcularArea(){
        return $this ->lado1 * $this->lado2;
    }

    // Método mágico para mostrar la descripción de la figura
    public function __toString() {
        return "Figura: {$this->tipoFigura}, Base: {$this->lado1}, Altura: {$this->lado2}";
    }

    // Destructor
    public function __destruct() {
        
    }
}

?>