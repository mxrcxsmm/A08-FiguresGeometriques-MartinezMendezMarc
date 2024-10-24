<?php

class Cuadrado extends FiguraGeometrica{
    
    // Constructor
    public function __construct($lado1)
    {
        parent::__construct('Cuadrado', $lado1);
    }

    // Calcular perímetro cuadrado
    public function calcularPerimetre(){
        return 4 * $this->lado1;
    }

    // Calcular área cuadrado
    public function calcularArea(){
        return $this->lado1 * $this->lado1;
    }

    // Método mágico para mostrar la descripción de la figura
    public function __toString() {
        return "Figura: {$this->tipoFigura}, Lado: {$this->lado1}";
    }

    // Destructor
    public function __destruct() {
        
    }
}

?>