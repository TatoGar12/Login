# Documentación del Sistema de Inicio de Sesión
## Introducción
Este documento proporciona una descripción detallada del sistema de inicio de sesión desarrollado utilizando HTML, CSS, PHP y MySQL. El sistema permite a los usuarios registrarse e iniciar sesión en una aplicación web mediante un formulario de inicio de sesión y un formulario de registro.

## Tecnologías Utilizadas
HTML (HyperText Markup Language): Se utiliza para definir la estructura y los elementos de la página web.
CSS (Cascading Style Sheets): Se utiliza para diseñar y estilizar la interfaz de usuario.
PHP (Hypertext Preprocessor): Se utiliza como intermediario entre la aplicación web y la base de datos para manejar la autenticación de usuarios y el registro.
MySQL: Se utiliza como sistema de gestión de bases de datos relacional para almacenar y administrar la información de los usuarios.
Estructura del Proyecto

## El proyecto sigue una estructura de directorios estándar:
|- index.php         Página principal con formulario de inicio de sesión
|- Cal.php           Script PHP para manejar la base de datos del login
|- StyleIndex.css    Hoja de estilo CSS para estilizar la interfaz de usuario

|- Registrar.php    Página secundaria con formulario de inicio de registro
|- RegBD.php        Script PHP para manejar la base de datos del registro
|- StyleReg.css     Hoja de estilo CSS para estilizar la interfaz de usuario

## Estructura de la Base de Datos
Se utiliza una base de datos MySQL con una tabla para almacenar la información de los usuarios registrados. La estructura de la tabla usuarios es la siguiente:

### sql

CREATE TABLE IF NOT EXISTS usuarios (
    gmail varchar(25) primary key,
    Contraseña varchar(12),
    nombre VARCHAR(12) NOT NULL
);

## Flujo de Trabajo

### Inicio de Sesión:
El usuario ingresa su nombre de correo y contraseña en el formulario de inicio de sesión.
Se envían los datos al script Cal.php mediante el método POST.
El script Cal.php se conecta a la base de datos y verifica las credenciales del usuario comparándolas con los registros en la tabla usuarios.
Si las credenciales son válidas, se inicia la sesión y se redirige al usuario a la página de inicio.
Si las credenciales son inválidas, se muestra un mensaje de error al usuario.

### Registro de Usuario:
El usuario completa el formulario de registro con su nombre de usuario, correo electrónico y contraseña.
Se envían los datos al script RegBD.php mediante el método POST.
El script RegBD.php se conecta a la base de datos y verifica si el nombre de usuario y el correo electrónico proporcionados ya están en uso.
Se utiliza una consulta SQL para insertar los datos del nuevo usuario en la tabla usuarios si no hay conflictos de duplicación.
Se muestra un mensaje de éxito si el registro es exitoso.
Se muestra un mensaje de error si hay algún problema durante el registro.
Consideraciones de Seguridad

Con la integración de HTML, CSS, PHP y MySQL, el sistema de inicio de sesión y registro ofrece una forma segura y eficiente para que los usuarios autentiquen y registren en una aplicación web.

# integrantes: 
Facundo Garcia
Facundo Bueno
Fran Lorenzo
Andres Legaria
Tiago Donato
Luis Friaza
