<?php
    require_once "./app/config/dependencias.php";
    require_once "./app/controller/registro.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('./img2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1); /* Capa oscura sobre la imagen */
            z-index: -1;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.2); /* Fondo de la caja más transparente */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid rgba(0, 0, 0, 0.8);
        }

        h3 {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); /* Sombra para mejor visibilidad */
            font-weight: bold;
            font-size: 2rem;
            text-align: center;
        }

        label {
            color: #000; /* Color del texto del formulario */
            text-shadow: 2px 2px 4px rgba(255,255,255, 0.1); /* Sombra para mejor visibilidad */
            font-size: 1.5rem;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.6  ); /* Campos de texto semitransparentes */
            color: #000;
        }

        .btn-dark {
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
        }

        .btn-dark:hover {
            background-color: #0056b3;
        }

        .text-center {
            margin-top: 15px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Registro</h3>
                    </div>
                    <div class="card-body">
                        <form action="registro.php" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark">Registrarse</button>
                            </div>
                            <div class="text-center">
                                <a href="login.php" class="btn btn-secondary">Iniciar Sesión</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/registro.js"></script>
</body>
</html>
