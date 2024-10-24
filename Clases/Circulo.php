<?php

class Circulo extends FiguraGeometrica{
    // Constructor
    public function __construct($lado1)
    {
        parent::__construct('Circulo', $lado1);
    }

    // Calcular perímetro circulo
    public function calcularPerimetre(){
        return 2 * pi() * $this->lado1;
    }

    // Calcular área circulo
    public function calcularArea() {
        return pi() * ($this->lado1 ** 2); // lado1 es el radio del círculo
    }

    // Método mágico para mostrar la descripción de la figura
    public function __toString() {
        return "Figura: {$this->tipoFigura}, Radio: {$this->lado1}";
    }

    // Destructor
    public function __destruct() {
        // Código del destructor (opcional)
    }
}

?>