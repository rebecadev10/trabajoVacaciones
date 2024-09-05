<?php
require 'componentes/header.php';
?>

<div class="personalDetalle__container">
    <div>
        <!-- Formulario de registro de departamento -->
        <form action="../controlador/clinica.php?op=guardarEditarCargos" method="post" class="personalDetalle__form">
            <p class="personalDetalle__title">Registro Cargo</p>
            <p class="personalDetalle__message">Formulario de registro para un nuevo cargo</p>

            <!-- Campo oculto para código del departamento (si es necesario para edición) -->
            <input type="hidden" name="codCargos">

            <!-- Nombre del departamento -->
            <div class="personalDetalle__flex">

                <label>
                    <span class="avisoDetalle--label">Nombre del Cargo</span>

                    <input class="personalDetalle__input" type="text" name="nombreCargos" placeholder="" required>
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