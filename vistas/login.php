<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Vacaciones Felices</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/base/base.css">
    <link rel="stylesheet" href="../public/css/general/mensaje.css">
    <link rel="stylesheet" href="../public/css/general/personal.css">
    <link rel="stylesheet" href="../public/css/general/personalDetalle.css">
</head>

<body>
    <div class="personal__grid">
        <div class="personalContenedorImg">
            <img class="personalImagen" src="../public/img/1.jpg" alt="">
        </div>
        <div class="personalContenedorForm">
            <div class="personalDetalle__container">
                <form action="../controlador/usuarios.php?op=login" method="post" class="personalDetalle__form">
                    <h2 class="personalDetalle__title">Iniciar Sesión</h2>
                    <label for="nombreUsuario">
                        <input class="personalDetalle__input" type="text" id="nombreUsuario" name="nombreUsuario" required>
                        <span>Nombre de Usuario:</span>
                    </label>
                    <label for="clave">
                        <input class="personalDetalle__input" type="password" id="clave" name="clave" required>
                        <span>Clave:</span>
                    </label>
                    <label>
                        <button type="submit" class="personalDetalle__submit">Iniciar Sesión</button>
                    </label>
                </form>
            </div>
        </div>
    </div>
</body>

</html>