<?php
require_once '../Modelo/Principal.php';

$clinica = new Principal();
$codDepartamento = isset($_POST["codDepartamento"]) ? $_POST["codDepartamento"] : "";
$nombreDepartamento = isset($_POST["nombreDepartamento"]) ? $_POST["nombreDepartamento"] : "";
$codDiagnostico = isset($_POST["codDiagnostico"]) ? $_POST["codDiagnostico"] : "";
$nombreDiagnostico = isset($_POST["nombreDiagnostico"]) ? $_POST["nombreDiagnostico"] : "";
$codCargos = isset($_POST["codCargos"]) ? $_POST["codCargos"] : "";
$nombreCargos = isset($_POST["nombreCargos"]) ? $_POST["nombreCargos"] : "";
$codEspecialidad = isset($_POST["codEspecialidad"]) ? $_POST["codEspecialidad"] : "";
$nombreEspecialidad = isset($_POST["nombreEspecialidad"]) ? $_POST["nombreEspecialidad"] : "";
header('Content-Type: application/json'); // Asegúrate de establecer el encabezado correcto

switch ($_GET['op']) {
    case 'listarEspecialidad':

        echo json_encode($clinica->listarEspecialidades());
        break;
    case 'listarCargo':
        echo json_encode($clinica->listarCargos());
        break;
    case 'listarDepartamento':
        echo json_encode($clinica->listarDepartamentos());
        break;
    default:
        echo json_encode(['error' => 'Falta el parámetro "op"']);
        break;
    case 'guardarEditarDepartamento':
        // Insertar o actualizar datos según la presencia de codCita
        if (empty($codDepartamento)) {
            $success = $clinica->insertarDatosDepartamentos($codDepartamento, $nombreDepartamento);
        } else {
            $success = $cllinica->editarDatosDepartamentos($codDepartamento, $nombreDepartamento);
        }

        if ($success) {
            // Redirigir al usuario si la operación fue exitosa
            header("Location: ../vistas/mensaje.php?msg=success");
        } else {
            // Redirigir con un mensaje de error si la operación falló
            header("Location: ../vistas/mensaje.php?msg=errorRegistro");
        }
        break;
    case 'guardarEditarDiagnostico':
        // Insertar o actualizar datos según la presencia de codCita
        if (empty($codDepartamento)) {
            $success = $clinica->insertarDatosDiagnostico($codDiagnostico, $nombreDiagnostico);
        } else {
            $success = $cllinica->editarDatosDiagnostico($codCargos, $nombreDiagnostico);
        }

        if ($success) {
            // Redirigir al usuario si la operación fue exitosa
            header("Location: ../vistas/mensaje.php?msg=success");
        } else {
            // Redirigir con un mensaje de error si la operación falló
            header("Location: ../vistas/mensaje.php?msg=errorRegistro");
        }
        break;
    case 'guardarEditarCargos':
        // Insertar o actualizar datos según la presencia de codCita
        if (empty($codCargos)) {
            $success = $clinica->insertarDatosCargos($codCargos, $nombreCargos);
        } else {
            $success = $cllinica->editarDatosCargos($codCargos, $nombreCargos);
        }

        if ($success) {
            // Redirigir al usuario si la operación fue exitosa
            header("Location: ../vistas/mensaje.php?msg=success");
        } else {
            // Redirigir con un mensaje de error si la operación falló
            header("Location: ../vistas/mensaje.php?msg=errorRegistro");
        }
        break;
    case 'guardarEditarEspecialidad':
        // Insertar o actualizar datos según la presencia de codCita
        if (empty($codCargos)) {
            $success = $clinica->insertarDatosEspecialidad($codEspecialidad, $nombreEspecialidad);
        } else {
            $success = $cllinica->editarDatosEspecialidad($codEspecialidad, $nombreEspecialidad);
        }

        if ($success) {
            // Redirigir al usuario si la operación fue exitosa
            header("Location: ../vistas/mensaje.php?msg=success");
        } else {
            // Redirigir con un mensaje de error si la operación falló
            header("Location: ../vistas/mensaje.php?msg=errorRegistro");
        }
        break;
}
