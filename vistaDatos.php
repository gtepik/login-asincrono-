<?php
    require_once "./app/config/dependencias.php";
    require_once "./app/controller/registro.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUITS</title>
    <!-- Enlace a la hoja de estilos CSS -->
    <link rel="stylesheet" href="<?= CSS . 'style.css' ?>">
    <!-- Enlace a los scripts JS -->
    <script src="<?= JS . 'app.js' ?>" defer></script>
    <!-- Enlace a Bootstrap CSS para diseño adicional -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <!-- Formulario que muestra los datos del usuario -->
                <form action="vista-datos.php" method="POST" class="p-4 border rounded shadow-sm bg-light">
                    <h2 class="text-center mb-4">Datos del Usuario</h2>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <p id="nombre"><?=$nombre?></p>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <p id="apellido"><?=$apellido?></p>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <p id="correo"><?=$correo?></p>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña:</label>
                        <p id="pass"><?=$pass?></p>
                    </div>
                    <a href="index.php" class="btn btn-primary btn-block">Regresar</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS y dependencias -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


