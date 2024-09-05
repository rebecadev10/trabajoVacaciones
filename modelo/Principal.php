<?php
require_once '../Config/Funciones.php';

class Principal
{

    private $rutaEspecialidades = '../data/datos/especialidades.json';
    private $rutaCargos = '../data/datos/cargos.json';
    private $rutaDepartamentos = '../data/datos/departamentos.json';
    private $rutaDiagnostico = '../data/datos/diagnosticos.json';

    public function __construct() {}


    public function listarEspecialidades()
    {
        return Funciones::leerArchivoJson($this->rutaEspecialidades);
    }

    public function listarCargos()
    {
        return Funciones::leerArchivoJson($this->rutaCargos);
    }

    public function listarDepartamentos()
    {
        return Funciones::leerArchivoJson($this->rutaDepartamentos);
    }
    public function insertarDatosDepartamentos($codDepartamento, $nombreDepartamento)
    {
        // Leer datos actuales de departamentos
        $departamentos = Funciones::leerArchivoJson($this->rutaDepartamentos);

        // Convertir el nombre del nuevo departamento a minúsculas para comparación
        $nombreDepartamentoLower = strtolower($nombreDepartamento);

        // Verificar si el nombre del departamento ya está registrado
        foreach ($departamentos as $departamento) {
            if (strtolower($departamento['nombre']) === $nombreDepartamentoLower) {
                // El nombre del departamento ya existe
                return false;
            }
        }

        // Si $codDepartamento es 0 o vacío, asignar el siguiente ID disponible
        if ($codDepartamento == 0 || empty($codDepartamento)) {
            // Obtener el mayor ID existente y sumarle 1
            $maxCodDepartamento = empty($departamentos) ? 0 : max(array_column($departamentos, 'id'));
            $codDepartamento = $maxCodDepartamento + 1;
        }

        // Insertar nuevo departamento
        $departamentos[] = [
            'id' => (int)$codDepartamento,
            'nombre' => $nombreDepartamento,
        ];

        // Guardar los datos actualizados
        Funciones::escribirArchivoJson($this->rutaDepartamentos, $departamentos);
        return true;
    }
    public function insertarDatosDiagnostico($codDiagnostico, $nombreDiagnostico)
    {
        // Leer datos actuales de diagnósticos
        $diagnosticos = Funciones::leerArchivoJson($this->rutaDiagnostico);

        // Convertir el nombre del nuevo diagnóstico a minúsculas para comparación
        $nombreDiagnosticoLower = strtolower($nombreDiagnostico);

        // Verificar si el nombre del diagnóstico ya está registrado
        foreach ($diagnosticos as $diagnostico) {
            if (strtolower($diagnostico['descripcion']) === $nombreDiagnosticoLower) {
                // El nombre del diagnóstico ya existe
                return false;
            }
        }

        // Si $codDiagnostico es 0 o vacío, asignar el siguiente ID disponible
        if ($codDiagnostico == 0 || empty($codDiagnostico)) {
            // Obtener el mayor ID existente y sumarle 1
            $maxCodDiagnostico = empty($diagnosticos) ? 0 : max(array_column($diagnosticos, 'id'));
            $codDiagnostico = $maxCodDiagnostico + 1;
        }

        // Insertar nuevo diagnóstico
        $diagnosticos[] = [
            'id' => (int)$codDiagnostico,
            'descripcion' => $nombreDiagnostico,
        ];

        // Guardar los datos actualizados
        Funciones::escribirArchivoJson($this->rutaDiagnostico, $diagnosticos);
        return true;
    }
    public function insertarDatosCargos($codCargos, $nombreCargo)
    {
        // Leer datos actuales de cargos
        $cargos = Funciones::leerArchivoJson($this->rutaCargos);

        // Convertir el nombre del nuevo cargo a minúsculas para comparación
        $nombreCargoLower = strtolower($nombreCargo);

        // Verificar si el nombre del cargo ya está registrado
        foreach ($cargos as $cargo) {
            if (strtolower($cargo['nombre']) === $nombreCargoLower) {
                // El nombre del cargo ya existe
                return false;
            }
        }

        // Si $codCargos es 0 o vacío, asignar el siguiente ID disponible
        if ($codCargos == 0 || empty($codCargos)) {
            // Obtener el mayor ID existente y sumarle 1
            $maxCodCargos = empty($cargos) ? 0 : max(array_column($cargos, 'id'));
            $codCargos = $maxCodCargos + 1;
        }

        // Insertar nuevo cargo
        $cargos[] = [
            'id' => (int)$codCargos,
            'nombre' => $nombreCargo,
        ];

        // Guardar los datos actualizados
        Funciones::escribirArchivoJson($this->rutaCargos, $cargos);
        return true;
    }
    public function insertarDatosEspecialidad($codEspecialidad, $nombreEspecialidad)
    {
        // Leer datos actuales de especialidades
        $especialidades = Funciones::leerArchivoJson($this->rutaEspecialidades);

        // Convertir el nombre de la nueva especialidad a minúsculas para comparación
        $nombreEspecialidadLower = strtolower($nombreEspecialidad);

        // Verificar si el nombre de la especialidad ya está registrado
        foreach ($especialidades as $especialidad) {
            if (strtolower($especialidad['nombre']) === $nombreEspecialidadLower) {
                // El nombre de la especialidad ya existe
                return false;
            }
        }

        // Si $codEspecialidad es 0 o vacío, asignar el siguiente ID disponible
        if ($codEspecialidad == 0 || empty($codEspecialidad)) {
            // Obtener el mayor ID existente y sumarle 1
            $maxCodEspecialidad = empty($especialidades) ? 0 : max(array_column($especialidades, 'id'));
            $codEspecialidad = $maxCodEspecialidad + 1;
        }

        // Insertar nueva especialidad
        $especialidades[] = [
            'id' => (int)$codEspecialidad,
            'nombre' => $nombreEspecialidad,
        ];

        // Guardar los datos actualizados
        Funciones::escribirArchivoJson($this->rutaEspecialidades, $especialidades);
        return true;
    }
}
