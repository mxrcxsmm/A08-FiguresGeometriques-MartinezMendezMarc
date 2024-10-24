<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Figuras Geométricas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Selecciona una figura geométrica</h1>
        <form action="figura.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="figure-icon" onclick="selectFigure('Triangulo')">
                        <img src="iconos/triangulo.png" alt="Triángulo" class="img-fluid">
                        <p>Triángulo</p>
                    </div>
                </div>
                <div class="col">
                    <div class="figure-icon" onclick="selectFigure('Cuadrado')">
                        <img src="iconos/cuadrado.png" alt="Cuadrado" class="img-fluid">
                        <p>Cuadrado</p>
                    </div>
                </div>
                <div class="col">
                    <div class="figure-icon" onclick="selectFigure('Rectangulo')">
                        <img src="iconos/rectangulo.png" alt="Rectángulo" class="img-fluid">
                        <p>Rectángulo</p>
                    </div>
                </div>
                <div class="col">
                    <div class="figure-icon" onclick="selectFigure('Circulo')">
                        <img src="iconos/circulo.png" alt="Círculo" class="img-fluid">
                        <p>Círculo</p>
                    </div>
                </div>
            </div>
            <input type="hidden" name="figura" id="tipoFigura">
        </form>
    </div>
    

    <script>
        function selectFigure(figura) {
            const input = document.getElementById('tipoFigura');
            input.value = figura;
            const form = document.querySelector("form");
            form.submit();
        }
    </script>
</body>
</html>
