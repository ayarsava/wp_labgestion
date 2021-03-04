# wp_gpba_laboratorio
Laboratorio de Gestión GBA

Crear entorno en producción
---------------

* Acceder a directorio publico
* `wget http://wordpress.org/latest.tar.gz`
* `$tar xfz latest.tar.gz`
* `mv wordpress/* ./`
* `rmdir ./wordpress/`
* `rm -f latest.tar.gz`
* Instalar wordpress
* `git clone https://github.com/ayarsava/wp_labgestion.git`


Setup general
---------------

* Activar plugin `gba_labgestion` incluido en el repositorio
* Instalar  y activar plugins `Meta Box`, `Simple Custom Post Order`, `Custom Post Type Permalinks` incluido en librería de plugins publica de WP
* Activar theme `GBA | Laboratorio de Gestión` incluido en el repositorio


Contenido
---------------

### Modo simple (importador)

Usted podrá realizar una importación del perfil inicial del proyecto, lo cual creará las categorias, articulos, items de menú, etc. Este es un modo práctico de inicializar el proyecto, aunque requerirá de eliminar aquellos items de prueba de funcionamiento que se generen automáticamente. 
Se adjunta el archiv recreolaboratorioengestin.WordPress.2021-03-04.xml con el contenido actualizado al día 4 de marzo de 2021.

### Modo manual

* Setear enlace permanente en modo Nombre entrada desde `/wp-admin/options-permalink.php`
* Crear recursos desde las diferentes secciones, asociarle categorias, etiquetas y demás campos.

Edición de contenido
---------------

* Wordpress ofrece el editor de contenido Gutemberg, lo cual provee todas las herramientas necesarias para presentar contenido interactivo.
* Podrá encontrar información complementaria para la creación de contenido en bloques en:
- https://wordpress.com/support/wordpress-editor/blocks/group-block/ 

