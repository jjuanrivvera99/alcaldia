# Proyecto formativo SENA: Alcaldia San Antonio

En este repositorio se encuentra la base de datos del proyecto formativo con todos los métodos de seguridad vistos en clase aplicados a Microfsoft SQL Server y la APIRestful que consume los recursos de la base de datos. Todo esto montado sobre una arquitectura orientada a microservicios con Docker.

## Estructura del proyecto

- mssql: archivos de SQL Server (queries, certificados, backups, auditorias, etc)
- core: [API con laravel 5.8](https://documenter.getpostman.com/view/6736340/SVtZtkbR)
- build: archivos necesarios para la construcción de la imagen de docker
- mongo: archivos de mongo.
- docker-compose.yml: Especificación de los servicios de docker

## Como correr el proyecto

Para correr este proyecto se necesita tener docker y docker-compose instalado:

### Configuración General 
- Detener la ejecución de:
    - Cualquier instancia de SQL Server
    - Cualquier servicio corriendo en los siguientes puertos
        - 80
        - 443
        - 1433
        - 27017
        - 8081

- Ejecutar los siguientes comandos:
    - git clone https://gitlab.com/jjuanrivvera99/alcaldia.git
    - cd alcaldia
    - GNU/Linux o MacOS: "./alcaldia". 
    - Windows (PowerShell): "./alcaldia.ps1"

### Configuración de base de datos
- Conectarse a SQL Server con las siguientes credenciales:
    - Host: localhost o docker ip
    - Usuario: SA
    - Contraseña: LvJi7lXq8X8H2SuRx96B

- Ejecutar los siguientes scripts en SQL Server
    - mssql/queries/create_only_database.sql
    - mssql/queries/create_users.sql
    - mssql/queries/insert_data.sql
    - mssql/queries/auditoria.sql
    - mssql/queries/view_enmascaramiento.sql
    - mssql/queries/certificate.sql

### Configuración de API
- Ejecutar los siguientes comandos:
    - docker exec -it laravel bash
    - php artisan migrate --seed
    - php artisan passport:install
    - /bin/permissions

# Comprobar funcionamiento [aquí](http://localhost)