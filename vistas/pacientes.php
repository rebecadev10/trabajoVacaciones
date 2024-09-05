<?php
require 'componentes/header.php';


// Incluir el archivo controlador del paciente y obtener los datos
include '../controlador/paciente.php';
// obtenemos los datos
$data = $result['registros'];
?>
<div class="personal__container">
    <div class="personal__encabezado">
        <h2 class="personal__titulo">
            Pacientes registrados
        </h2>

        <div class="personal__btn">
            <a class="personal__btn-content" href="pacienteDetalle.php">Registrar paciente</a>
        </div>
    </div>
    <div class="personal__tabla-container">
        <table class="personal__tabla ">
            <thead>
                <tr>
                    <th>Opción</th>
                    <th>Cédula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Telefonos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Mostrar solo los registros correspondientes a la página actual
                foreach ($data as $reg):
                ?>
                    <tr>
                        <td><a class="personal__btn-detalle" href="pacienteDetalleMostrar.php?codPaciente=<?php echo $reg['codPaciente']; ?>">Ver</a>
                            <a class="personal__btn-detalle--cancel" href="../controlador/paciente.php?op=verificarCitas&codPaciente=<?php echo $reg['codPaciente']; ?>">Eliminar</a>
                        </td>
                        <td><?php echo $reg['cedula']; ?></td>
                        <td><?php echo $reg['nombre1'] . ' ' . $reg['nombre2']; ?></td>
                        <td><?php echo $reg['apellido1'] . ' ' . $reg['apellido2']; ?></td>
                        <td><?php echo $reg['correo']; ?></td>
                        <td><?php echo $reg['telefono']; ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>