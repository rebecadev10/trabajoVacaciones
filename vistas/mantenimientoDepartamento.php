<?php
require 'componentes/header.php';
?>

<div class="personalDetalle__container">
    <div>
        <!-- Formulario de registro de departamento -->
        <form action="../controlador/clinica.php?op=guardarEditarDepartamento" method="post" class="personalDetalle__form">
            <p class="personalDetalle__title">Registro Departamento</p>
            <p class="personalDetalle__message">Formulario de registro para un nuevo departamento</p>

            <!-- Campo oculto para código del departamento (si es necesario para edición) -->
            <input type="hidden" name="codDepartamento">

            <!-- Nombre del departamento -->
            <div class="personalDetalle__flex">

                <label>
                    <span class="avisoDetalle--label">Nombre del Departamento</span>

                    <input class="personalDetalle__input" type="text" name="nombreDepartamento" placeholder="" required>
                </label>
            </div>



            <!-- Botones de acción -->
            <div class="personalDetalle__botones">
                <button class="personalDetalle__cancel"><a href="mantenimiento.php">Cancelar</a></button>
                <button type="submit" class="personalDetalle__submit">Guardar</button>
            </div>
        </form>
    </div>
</div>