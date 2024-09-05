<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica vacaciones Felices</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- traemos todos nuestros estilos -->
    <link rel="stylesheet" href="../public/css/base/base.css">
    <link rel="stylesheet" href="../public/css/general/mensaje.css">
    <link rel="stylesheet" href="../public/css/general/personal.css">
    <link rel="stylesheet" href="../public/css/general/personalDetalle.css">
</head>

<body></body>
<div class="mensajeContainer">
    <h6 class="mensajeTitulo">
        <?php

        if (isset($_GET['msg'])) {
            switch ($_GET['msg']) {

                case 'ERROR':
                    echo "<p class='error'>Hubo un error al procesar la solicitud.</p>";
                    break;
            }
        }

        ?>

    </h6>
    <div class="mensajeContainer__btn">
        <button class="mensaje__btn"><a href="login.php" class="">Volver a Iniciar Sesion</a></button>
    </div>
</div>
</body>

</html>