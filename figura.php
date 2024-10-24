<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['figura'] = $_POST['figura'];
    $figura = $_POST['figura'];
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Introducir lados</title>
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Introduce los lados para la figura seleccionada:</h1>
        
        <!-- Caja tipo box para mostrar la figura -->
        <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><?= $figura; ?></h2>
            </div>
        </div>
        
        <form id="formulario" action="calculos.php"  method="POST">
            <?php if ($figura == 'Triangulo') { ?>
                <div class="mb-3">
                    <label for="lado1" class="form-label">Lado 1 (Base):</label>
                    <input type="number" name="lado1" id="lado1Triangulo" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="lado2" class="form-label">Lado 2:</label>
                    <input type="number" name="lado2" id="lado2Triangulo" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="lado3" class="form-label">Lado 3 (Altura):</label>
                    <input type="number" name="lado3" id="lado3Triangulo" class="form-control" >
                </div>
            <?php } elseif ($figura == 'Rectangulo') { ?>
                <div class="mb-3">
                    <label for="lado1" class="form-label">Base:</label>
                    <input type="number" name="lado1" id="lado1Rectangulo" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="lado2" class="form-label">Altura:</label>
                    <input type="number" name="lado2" id="lado2Rectangulo" class="form-control" >
                </div>
            <?php } elseif ($figura == 'Cuadrado') { ?>
                <div class="mb-3">
                    <label for="lado1" class="form-label">Lado:</label>
                    <input type="number" name="lado1" id="lado1Cuadrado" class="form-control" >
                </div>
            <?php } elseif ($figura == 'Circulo') { ?>
                <div class="mb-3">
                    <label for="radio" class="form-label">Radio:</label>
                    <input type="number" name="lado1" id="lado1Circulo" class="form-control" >
                </div>
            <?php } ?>
            <div id="mensaje-error" class="text-danger"></div>
            <button onclick="sweetAlert()" type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
    <script src="validacion.js"></script>
</body>
</html>
