# Proyecto formativo SENA: Alcaldia San Antonio

En este repositorio se encuentra la base de datos del proyecto formativo con todos los métodos de seguridad vistos en clase aplicados a Microfsoft SQL Server y la APIRestful que consume los recursos de la base de datos. Todo esto montado sobre una arquitectura orientada a microservicios con Docker.

## Estructura del proyecto

- mssql: archivos de SQL Server (queries, certificados, backups, auditorias, etc)
- core: [API con laravel 5.8](https://web.postman.co/collections/6736340-cc6df75b-9200-4562-8be7-1431d520e40e?version=latest&workspace=df61dc68-b666-40b3-82c7-64fee04162c3)
- build: archivos necesarios para la construcción de la imagen de docker
- mongo: archivos de mongo.
- docker-compose.yml: Especificación de los servicios de docker

## Como correr el proyecto

Para correr este proyecto se necesita tener docker y docker-compose:

### Configuración General 
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