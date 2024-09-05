<?php
class Funciones
{
    public static function leerArchivoJson($filename)
    {
        if (!file_exists($filename)) {
            return [];
        }
        $json = file_get_contents($filename);
        return json_decode($json, true);
    }

    public static function escribirArchivoJson($filename, $data)
    {
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($filename, $json);
    }
    public static function eliminarArchivoJson($filename, $data)
    {
        $json = json_encode($data, JSON_PRETTY_PRINT);
        if (file_put_contents($filename, $json) !== false) {
            return true;  // Operación exitosa
        } else {
            return false; // Error al escribir en el archivo
        }
    }
}
