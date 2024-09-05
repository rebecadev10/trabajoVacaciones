<?php
require 'componentes/header.php';
// Verificar si la sesión de usuario está activa
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $rol = isset($_SESSION['rol']) ? $_SESSION['rol'] : null; // Obtener el rol del usuario
} else {
    $rol = null; // No hay sesión activa, rol no definido
}
?>

<div class="mantenimientoContainer">
    <!-- Contenedor 1 -->
    <div class="contenedor">
        <h3 class="mantenimientoTitulo">Cargos en la Clínica</h3>
        <p>Los cargos representan la jerarquía del personal en la clínica, organizando a los empleados según sus responsabilidades. Esta estructura permite:</p>
        <ul>
            <li class="mantenimientoLista">Establecer una cadena de mando clara.</li>
            <li class="mantenimientoLista">Asignar roles y responsabilidades específicas.</li>
            <li class="mantenimientoLista">Optimizar la gestión del personal.</li>
        </ul>
        <button><a href="mantenimientoCargos.php">Agregar Cargos de la Clínica</a></button>
    </div>

    <!-- Contenedor 2 -->
    <div class="contenedor">
        <h3 class="mantenimientoTitulo">Departamentos en la Clínica</h3>
        <p>Todos los departamentos registrados en la clínica. Los departamentos agrupan a los equipos que manejan diferentes áreas de especialización:</p>
        <ul>
            <li class="mantenimientoLista">Facilitan la colaboración entre especialistas.</li>
            <li class="mantenimientoLista">Mejoran la eficiencia operativa.</li>
            <li class="mantenimientoLista">Permiten una mejor distribución de los recursos.</li>
        </ul>
        <button><a href="mantenimientoDepartamento.php">Agregar Departamento de la Clínica</a></button>
    </div>

    <!-- Contenedor 3 -->
    <div class="contenedor">
        <h3 class="mantenimientoTitulo">Diagnósticos Médicos</h3>
        <p>Todos los diagnósticos registrados por el personal médico. Los diagnósticos son cruciales para:</p>
        <ul>
            <li class="mantenimientoLista">Proporcionar un historial detallado de cada paciente.</li>
            <li class="mantenimientoLista">Identificar patrones en las condiciones de salud.</li>
            <li class="mantenimientoLista">Mejorar la atención al paciente mediante tratamientos adecuados.</li>
        </ul>
        <!-- solamente el medico crea los diagnostico -->
        <?php if ($rol === 'Medico') { ?>
            <button><a href="mantenimientoDiagnostico.php">Agregar Nuevo Diagnóstico</a></button>
        <?php
        } ?>
    </div>

    <!-- Contenedor 4 -->
    <div class="contenedor">
        <h3 class="mantenimientoTitulo">Especialidades del Personal Médico</h3>
        <p>Lista de todas las especialidades del personal médico en la clínica. Las especialidades ayudan a:</p>
        <ul>
            <li class="mantenimientoLista">Asignar el tratamiento adecuado según la especialización.</li>
            <li class="mantenimientoLista">Mejorar la atención médica con conocimientos específicos.</li>
            <li class="mantenimientoLista">Facilitar la derivación de casos entre especialistas.</li>
        </ul>

        <button><a href="mantenimientoEspecialidad.php">Agregar Especialidad</a></button>

    </div>
</div>