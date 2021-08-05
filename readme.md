# Descripción
### Betking es una página de apuestas creada usando 
* Bootstrap 5: https://getbootstrap.com/docs/5.1/getting-started/introduction/

* Jquery 3.6.0: https://code.jquery.com/jquery-3.6.0.min.js

* PHP 8 y Apache (junto con las herramientas de desarrollo de XAMPP): https://www.apachefriends.org/es/index.html
#
# Configuración Inicial
### Para poder cargar la página en cualquier equipo es necesario entrar en la carpeta *app* y modificar el archivo *config.php*. Dentro de este archivo se deben modificar las variables **_NOMBRE_SERVIDOR_**, poniendo como valor el nombre de nuestro servidor (por defecto su valor es **_LOCALHOST_**), y la variable **_SERVIDOR_** donde el valor sera la ruta donde se encuentra alojado el proyecto (por defecto su valor es **_http://localhost/apuestas/_**)
#
# ![config](/raw/img/readme/config.png)
# Estructura de carpetas
### El proyecto esta organizado en carpetas para facilitar su modificación
* **_app:_** Contiene el archivo de *config.php* para las configuraciones globales del proyecto y el archivo *dependencias.php* para agregar o quitar las dependecias globales del proyecto.

* **_controller:_** Contiene los archivos de funcionalidad de Javascript de las diferentes vistas del proyecto.

* **_model:_** Contiene los archivos de funcionalidad de PHP de las diferentes vistas del proyecto.

* **_raw:_** Contiene los diferentes archivos de dependencias css, Javascript, fuentes, e imágenes, organizados por carpetas indicando el tipo de archivos que se encuentran dentro.

* **_view:_** Contiene las vistas de las diferentes partes de la página web.

* **_.htaccess:_** Este archivo contiene las reglas de expresiones regulares para poder usar URL amigables.

* **_index.php:_** Este archivo es el indice del proyecto, a través de él podemos acceder a todas las partes de la página web.
#
# Agregado de vistas
### Para agregar vistas es necesario crear la vista en la carpeta **_view_** y dentro de su carpeta correspondiente, luego debemos agregar un caso al **_index.php_** para poder mostrar la vista y que además funcione con las URL amigables.
#
## Ejemplo:
### Para cargar una vista llamada _'lucha'_ que esta en la carpeta deportes agregamos lo siguiente:
# ![ejemplo](/raw/img/readme/agregar_vista.png)