<?php

require 'componentes/header.php';

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $rol = isset($_SESSION['rol']) ? $_SESSION['rol'] : null; // Obtener el rol del usuario
} else {
    $rol = null; // No hay sesión activa, rol no definido
}

//  incluimos nuestro controlador de citas
include '../controlador/citas.php';
$data = $result['registros'];


?>
<div class="personal__container">
    <div class="personal__encabezado">
        <h2 class="personal__titulo">
            Citas registrados
        </h2>
        <?php
        if ($rol === 'Enfermero') { ?>
            <div class="personal__btn">
                <!-- solo los enfermeros pueden agregar citas -->

                <a class="personal__btn-content" href="turno.php">Nueva Cita</a>


            </div>
        <?php } ?>
    </div>
    <div class="personal__tabla-container">
        <table class="personal__tabla ">
            <thead>
                <tr>
                    <?php
                    if ($rol === 'Enfermero') { ?>
                        <th>Opción</th>
                    <?php } ?>
                    <th>Cédula Paciente</th>
                    <th>Nombre Paciente</th>
                    <th>Nombre medico</th>
                    <th>Fecha Cita</th>
                    <th>diagnostico</th>


                </tr>
            </thead>
            <tbody>
                <?php
                // Mostrar solo los registros correspondientes a la página actual
                foreach ($data as $reg):
                ?>

                    <tr>
                        <?php
                        if ($rol === 'Enfermero') { ?>
                            <td>

                                <a class="personal__btn-detalle" href="citaDetalleMostrar.php?codCita=<?php echo $reg['codCita']; ?>">Ver</a>

                                <a class="personal__btn-detalle" href="../controlador/citas.php?op=eliminar&codCita=<?php echo $reg['codCita']; ?>">Eliminar</a>

                            </td>
                        <?php } ?>
                        <td><?php echo $reg['cedulaPaciente']; ?></td>
                        <td><?php echo $reg['nombrePaciente']; ?></td>
                        <td><?php echo $reg['nombrePersonal']; ?></td>
                        <td><?php echo $reg['fechaCita']; ?></td>
                        <td><?php echo $reg['horaCita']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Botones de navegación -->