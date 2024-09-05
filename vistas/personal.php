<?php
require 'componentes/header.php';

// Incluir el archivo controlador del personal y obtener los datos
include '../controlador/personal.php';

// Recibir los datos de la variable $result almacenada en la sesión
$data = $result['registros'];

?>
<div class="personal__container">
    <div class="personal__encabezado">
        <h2 class="personal__titulo">
            Registro de todo el personal de ClinicPRo
        </h2>
        <div class="personal__btn">
            <a class="" href="personalDetalle.php">Registrar nuevo personal</a>
        </div>
    </div>
    <div class="personal__tabla-container">
        <table class="personal__tabla">
            <thead>
                <tr>
                    <th>Opción</th>
                    <th>Cédula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Especialidad</th>
                    <th>Cargos</th>
                    <th>Departamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Mostrar todos los registros
                foreach ($data as $reg):
                ?>
                    <tr>
                        <td id="personal__tabla">
                            <a class="personal__btn-detalle" href="personalDetalleMostrar.php?codPersonal=<?php echo $reg['codPersonal']; ?>">Modificar</a>
                            <a class="personal__btn-detalle--cancel" href="../controlador/personal.php?op=verificarCitas&codPersonal=<?php echo $reg['codPersonal']; ?>">Eliminar</a>

                        </td>
                        <td><?php echo $reg['cedula']; ?></td>
                        <td><?php echo $reg['nombre1'] . ' ' . $reg['nombre2']; ?></td>
                        <td><?php echo $reg['apellido1'] . ' ' . $reg['apellido2']; ?></td>
                        <td><?php echo $reg['especialidad']; ?></td>
                        <td><?php echo $reg['cargo']; ?></td>
                        <td><?php echo $reg['departamento']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>