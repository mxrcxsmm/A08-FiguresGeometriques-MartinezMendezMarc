<?php

class Triangulo extends FiguraGeometrica {
    public $lado2;
    public $lado3;

    // Constructor
    public function __construct($lado1, $lado2, $lado3) {
        parent::__construct('Triángulo', $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    // Getters
    public function getLado2() {
        return $this->lado2;
    }

    public function getLado3() {
        return $this->lado3;
    }

    // Setters
    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

    // Calcular perímetro triangulo
    public function calcularPerimetre() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    // Calcular área triangulo
    public function calcularArea() {
        
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2; // Semiperímetro
        $area = sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3)); // Fórmula de Herón
        return $area;
    }

    // Método mágico __toString() para retornar la descripción de la figura
    public function __toString() {
        return "Triángulo con lados: Lado 1 = $this->lado1, Lado 2 = $this->lado2, Lado 3 = $this->lado3. ";
    }

    // Destructor
    public function __destruct() {
        
    }
}
?>
