<?php

require_once '../Config/Funciones.php';

class Paciente
{
    private $file = '../data/pacientes.json'; // Ruta al archivo JSON
    private $citas = '../data/citas.json';
    public function __construct() {}

    public function listar()
    {
        return  Funciones::leerArchivoJson($this->file);
    }

    public function insertarDatos($cedula, $nombre1, $nombre2, $apellido1, $apellido2, $fechaNac, $sexo, $correo, $telefono)
    {
        $data = Funciones::leerArchivoJson($this->file);

        // Verificar si la cédula ya existe en el archivo
        foreach ($data as $registro) {
            if ($registro['cedula'] == $cedula) {
                return false; // La cédula ya existe
            }
        }
        // Determinar el siguiente codPersonal
        $ultimoId = 0;
        foreach ($data as $registro) {
            if (isset($registro['codPaciente']) && $registro['codPaciente'] > $ultimoId) {
                $ultimoId = $registro['codPaciente'];
            }
        }
        $nuevoCodPaciente = $ultimoId + 1;
        $nuevoRegistro =
            [
                "codPaciente" => $nuevoCodPaciente,
                "cedula" => $cedula,
                "nombre1" => $nombre1,
                "nombre2" => $nombre2,
                "apellido1" => $apellido1,
                "apellido2" => $apellido2,
                "fechaNac" => $fechaNac,
                "sexo" => $sexo,
                "correo" => $correo,
                "telefono" => $telefono

            ];
        $data[] = $nuevoRegistro;
        Funciones::escribirArchivoJson($this->file, $data);
        return true;
    }
    public function editarDatos($codPaciente, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $fechaNac, $sexo, $correo, $telefono)
    {
        // Leer el archivo JSON
        $data = Funciones::leerArchivoJson($this->file);

        // Recorrer los registros para encontrar el que coincide con codPersonal
        foreach ($data as &$registro) {
            if ($registro['codPaciente'] == $codPaciente) {
                // Actualizar los datos del registro encontrado
                $registro['cedula'] = $cedula;
                $registro['nombre1'] = $nombre1;
                $registro['nombre2'] = $nombre2;
                $registro['apellido1'] = $apellido1;
                $registro['apellido2'] = $apellido2;
                $registro['fechaNac'] = $fechaNac;
                $registro['sexo'] = $sexo;
                $registro['correo'] = $correo;
                $registro['telefono'] = $telefono;

                break;
            }
        }

        // Guardar los datos actualizados en el archivo JSON
        Funciones::escribirArchivoJson($this->file, $data);
        return true;
    }


    public function mostrar($codPaciente)
    {
        $data = Funciones::leerArchivoJson($this->file);

        foreach ($data as $registro) {
            if ($registro['codPaciente'] == $codPaciente) {
                return $registro;
            }
        }

        return null; // No se encontró el registro
    }



    public function listarPacientes()
    {
        $data = $this->listar();
        $resultados = [];

        foreach ($data as $registro) {
            $resultados[] = [
                'codPaciente' => $registro['codPaciente'],
                'datosPaciente' => 'V-' . $registro['cedula'] . ' ' . $registro['nombre1'] . ' ' . $registro['apellido1']
            ];
        }

        return $resultados;
    }
    public function verificarCitas($codPaciente)
    {
        $citas = Funciones::leerArchivoJson($this->citas);
        foreach ($citas as $cita) {
            if ($cita['codPaciente'] == $codPaciente) {
                return true; // El personal tiene citas asignadas
            }
        }
        return false; // El personal no tiene citas asignadas
    }

    public function eliminar($codPaciente)
    {
        $data = Funciones::leerArchivoJson($this->file);
        $data = array_filter($data, fn($registro) => $registro['codPaciente'] != $codPaciente);
        Funciones::escribirArchivoJson($this->file, $data);
        return true;
    }
}
