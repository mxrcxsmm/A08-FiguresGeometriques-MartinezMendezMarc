<?php
session_start();

require_once 'Clases/FiguraGeometrica.php';
require_once 'Clases/Triangulo.php';
require_once 'Clases/Rectangulo.php';
require_once 'Clases/Cuadrado.php';
require_once 'Clases/Circulo.php';

$figura = $_SESSION['figura'];
$lado1 = $_POST['lado1'];

if ($figura == 'Triangulo') {
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];
    $triangulo = new Triangulo($lado1, $lado2, $lado3);
    $area = round($triangulo->calcularArea(), 2);
    $perimetro = round($triangulo->calcularPerimetre(), 2);
    $descripcion = $triangulo->__toString();
} elseif ($figura == 'Rectangulo') {
    $lado2 = $_POST['lado2'];
    $rectangulo = new Rectangulo($lado1, $lado2);
    $area = round($rectangulo->calcularArea(), 2);
    $perimetro = round($rectangulo->calcularPerimetre(), 2);
    $descripcion = $rectangulo->__toString();
} elseif ($figura == 'Cuadrado') {
    $cuadrado = new Cuadrado($lado1);
    $area = round($cuadrado->calcularArea(), 2);
    $perimetro = round($cuadrado->calcularPerimetre(), 2);
    $descripcion = $cuadrado->__toString();
} elseif ($figura == 'Circulo') {
    $circulo = new Circulo($lado1);
    $area = round($circulo->calcularArea(), 2);
    $perimetro = round($circulo->calcularPerimetre(), 2);
    $descripcion = $circulo->__toString();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Resultados</title>
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Resultados de los cálculos</h1>
        <div>
            <p><?php echo $descripcion; ?></p>
            <p class="mt-2">Área: <?php echo $area; ?> cm<sup>2</sup></p>
            <p class="mt-2">Perímetro: <?php echo $perimetro; ?> cm</p>
        </div>
        <a href="index.php" class="btn btn-primary mt-3">Volver al formulario</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="scripts.js"></script>
</body>
</html>
