# Sistema de Gestión de Clínicas ClinicPro

Este sistema permite la gestión de médicos, pacientes, citas médicas, y más, proporcionando funcionalidades para administrar registros y
controlar roles. A continuación, se detallan las características del sistema y las instrucciones de instalación.

## Estructura del Proyecto

### Carpetas

- **`config/`**

  - **Funciones.php:** Funciones para leer e insertar datos en los archivos JSON.

- **`modelo/`**

  - **Citas.php:** Modelo para manejar funciones relacionadas con citas médicas.
  - **Pacientes.php:** Modelo para manejar funciones relacionadas con pacientes.
  - **Personal.php:** Modelo para manejar funciones relacionadas con el personal médico.
  - **Principal.php:** Maneja la definición y gestión de datos como departamentos, cargos, especialidades y diagnósticos.
  - **Usuarios.php:** Maneja la creación de usuarios y la validación de inicio de sesión.

- **`controlador/`**

  - **citas.php:** Controlador para manejar la lógica de citas médicas.
  - **clinica.php:** Controlador para crear la instancia de `Principal`.
  - **logout.php:** Maneja el cierre de sesión.
  - **paciente.php:** Maneja el registro, actualización, y validación de pacientes.
  - **personal.php:** Maneja la gestión del personal médico.
  - **usuario.php:** Maneja el registro y actualización de usuarios, y la validación de sesión.

- **`data/`**

  - **`datos/`**
    - **especialidades.json:** Datos de especialidades.
    - **cargos.json:** Datos de cargos.
    - **departamentos.json:** Datos de departamentos.
    - **diagnosticos.json:** Datos de diagnósticos.
  - **citas/**
    - **citas.json:** Datos de citas médicas.
  - **personal/**
    - **personal.json:** Datos del personal médico.
  - **pacientes/**
    - **pacientes.json:** Datos de pacientes.
  - **usuarios/**
    - **usuarios.json:** Datos de usuarios.

- **`public/`**

  - **`css/`**

    - **`base/`**
      - **reset.css:** Resetea los estilos predeterminados del navegador.
      - **variables.css:** Define colores y fuentes globales.
    - **general/**
      - **styles.css:** Estilos generales para las vistas.

  - **`img/`**
    - **(Imágenes utilizadas en el proyecto)**

- **`vistas/`**

  - **(Archivos de vistas HTML/PHP)**

- **`componentes/`**

  - **header.php:** Contiene el encabezado común a todas las vistas.
  - **navbar.php:** Contiene la barra de navegación común a todas las vistas.

- **`index.php`**
  - Redirige al usuario a la vista de inicio de sesión.

## Instalación

1. **Descarga el Proyecto:**

   - Clona o descarga el repositorio del proyecto en tu entorno local.

2. **Configura XAMPP:**

   - Instala XAMPP (si no lo tienes ya instalado) desde [XAMPP](https://www.apachefriends.org/index.html).
   - Asegúrate de que Apache y MySQL están corriendo en el panel de control de XAMPP.

3. **Ubica el Proyecto:**

   - Copia la carpeta del proyecto en la carpeta `htdocs` dentro del directorio de instalación de XAMPP. La ruta debería ser algo similar a `C:\xampp\htdocs\`.

4. **Configuración del Proyecto:**

   - Accede a `C:\xampp\htdocs\` y abre el archivo de configuración `config/Funciones.php` para ajustar cualquier configuración necesaria (por ejemplo, rutas a los archivos JSON).

5. **Verifica la Versión de PHP:**

   - Asegúrate de que la versión de PHP instalada es la 8.2. Puedes verificarlo creando un archivo `phpinfo.php` en la carpeta `htdocs` con el siguiente contenido:
     ```php
     <?php
     phpinfo();
     ?>
     ```
   - Accede a `http://localhost/phpinfo.php` en tu navegador para verificar la versión de PHP.

6. **Accede al Proyecto:**

   - Abre tu navegador web y navega a `http://localhost/nombre_del_proyecto` para acceder al sistema.
   - Si es la primera vez que accedes, deberías ser redirigido a la vista de inicio de sesión.

7. **Prueba y Configura el Sistema:**
   - Inicia sesión con un usuario administrador para configurar el sistema y probar las funcionalidades disponibles.

## Uso

- **Administrador:** Puede gestionar médicos, pacientes, y usuarios, además de configurar el sistema.
- **Médico:** Puede agregar diagnósticos a las citas médicas.
- **Enfermero:** Puede agendar y modificar citas médicas.
