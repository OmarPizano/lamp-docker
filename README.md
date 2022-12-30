# lamp-docker

Este repositorio presenta una estructura básica para desplegar una aplicación web usando Apache, MySQL y PHP con Docker Compose.

### Uso

1. Clonar el repositorio.
2. Copiar la configuración en `dbconf`.
   - Copiar el script SQL de inicialización en `dbconf/dump/` (si aplica).
   - Copiar la config de MySQL en `dbconf/etc/` (si aplica).
3. Copiar la aplicación en `www/`.
4. Iniciar `docker compose up -d`.
5. Parar `docker compose down`.

### Directorios y archivos

**NOTA:** los directorios deben ser creados por el usuario, ya que si se ejecuta `docker compose up` sin tenerlos creados, docker los creará por si mismo, pero con los permisos de la imagen (`root`) y el usuario sin privilegios del host no podrá escribir en ellos.

- **dbconf**: contiene la configuración de la base de datos.
  - **dump**: mapeado al *entrypoint* para inicializar la base de datos cuando se crea el container.
  - **etc**: mapeado a `/etc/mysql/conf.d` en el container de MySQL.
- **www**: es el directorio donde pondremos nuestra app.
- `docker-compose.yml` contiene la config de MySQL y PHP-APACHE.
- `Dockerfile` contiene la configuración específica de la imagen de PHP-APACHE.
