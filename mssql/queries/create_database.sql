USE master;
GO

DROP DATABASE IF EXISTS alcaldia;
GO

CREATE DATABASE alcaldia;
GO

USE alcaldia;
GO

DROP SCHEMA IF EXISTS [core] 
GO

DROP SCHEMA IF EXISTS [nocore]
GO

CREATE SCHEMA [core]
GO

CREATE SCHEMA [nocore]
GO

USE alcaldia;
GO

CREATE TABLE core.empresa (
    id_empresa INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    CONSTRAINT empresa_pk PRIMARY KEY (id_empresa)
)

CREATE TABLE core.tipo_identificacion (
    id_tipo_identificacion INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT tipo_identificacion_pk PRIMARY KEY (id_tipo_identificacion)
)

CREATE TABLE core.ruta (
    id_ruta INT IDENTITY NOT NULL,
    descripcion VARCHAR(50) NOT NULL,
    CONSTRAINT ruta_PK PRIMARY KEY (id_ruta)
)

CREATE TABLE core.plantel_educativo (
    id_plantel_educativo INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    CONSTRAINT plantel_educativo_pk PRIMARY KEY (id_plantel_educativo)
)

CREATE TABLE nocore.alcalde (
    id_alcalde INT IDENTITY NOT NULL,
    primer_nombre VARCHAR(25) MASKED WITH (FUNCTION = 'partial(1,"XXXXXXX",0)') NOT NULL,
    segundo_nombre VARCHAR(25),
    primer_apellido VARCHAR(25) MASKED WITH (FUNCTION = 'partial(1,"XXXXXXX",0)') NOT NULL,
    segundo_apellido VARCHAR(25),
    CONSTRAINT alcalde_pk PRIMARY KEY (id_alcalde)
)

CREATE TABLE nocore.alcaldia (
    id_alcaldia INT IDENTITY NOT NULL,
    id_alcalde INT NOT NULL,
    nombre VARCHAR(50),
    CONSTRAINT alcaldia_pk PRIMARY KEY (id_alcaldia)
)

CREATE TABLE nocore.dependencia (
    id_depencia INT IDENTITY NOT NULL,
    id_alcaldia INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT dependencia_pk PRIMARY KEY (id_depencia)
)

CREATE TABLE nocore.tipo_infraestructura (
    id_tipo_infraestructura INT IDENTITY NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    CONSTRAINT tipo_infraestructura_pk PRIMARY KEY (id_tipo_infraestructura)
)

CREATE TABLE core.tipo_habitacion (
    id_tipo_habitacion INT IDENTITY NOT NULL,
    nombre VARCHAR(50),
    CONSTRAINT tipo_habitacion_PK PRIMARY KEY (id_tipo_habitacion)
)

CREATE TABLE nocore.area (
    id_area INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT area_pk PRIMARY KEY (id_area)
)

CREATE TABLE nocore.area_dependencia (
    id_area_dependencia INT IDENTITY NOT NULL,
    id_area INT NOT NULL,
    id_depencia INT NOT NULL,
    CONSTRAINT area_dependencia_pk PRIMARY KEY (id_area_dependencia)
)
CREATE  NONCLUSTERED INDEX fk_area_dependencia_area_idx
 ON nocore.area_dependencia
 ( id_area )

CREATE  NONCLUSTERED INDEX fk_area_dependencia_dependencia_idx
 ON nocore.area_dependencia
 ( id_depencia )


CREATE TABLE nocore.infraestructura (
    id_infraestructura INT IDENTITY NOT NULL,
    id_area_dependencia INT NOT NULL,
    id_tipo_infraestructura INT NOT NULL,
    nombre VARCHAR(50),
    especificaciones VARCHAR(500),
    codigo INT,
    CONSTRAINT infraestructura_pk PRIMARY KEY (id_infraestructura)
)

CREATE TABLE core.pais (
    id_pais INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT pais_pk PRIMARY KEY (id_pais)
)

CREATE TABLE core.modalidad (
    id_modalidad INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT modalidad_pk PRIMARY KEY (id_modalidad)
)

CREATE TABLE core.cargo (
    id_cargo INT IDENTITY NOT NULL,
    nombre VARCHAR(50),
    CONSTRAINT cargo_pk PRIMARY KEY (id_cargo)
)

CREATE TABLE core.jornada (
    id_jornada INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT jornada_pk PRIMARY KEY (id_jornada)
)

CREATE TABLE core.localidad (
    id_localidad INT IDENTITY NOT NULL,
    id_alcaldia INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT localidad_pk PRIMARY KEY (id_localidad)
)

CREATE TABLE core.barrio (
    id_barrio INT IDENTITY NOT NULL,
    id_localidad INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    area VARCHAR(100) NOT NULL,
    estrato INT,
    CONSTRAINT barrio_PK PRIMARY KEY (id_barrio)
)

CREATE TABLE core.barrio_ruta (
    id_barrio_ruta INT IDENTITY NOT NULL,
    id_barrio INT NOT NULL,
    id_ruta INT NOT NULL,
    CONSTRAINT barrio_ruta_PK PRIMARY KEY (id_barrio_ruta)
)
CREATE  NONCLUSTERED INDEX fk_transporte_barrio_idx
 ON core.barrio_ruta
 ( id_barrio )

CREATE  NONCLUSTERED INDEX fk_transporte_tipo_transporte_idx
 ON core.barrio_ruta
 ( id_ruta )


CREATE TABLE core.familia (
    id_familia INT IDENTITY NOT NULL,
    id_barrio INT NOT NULL,
    id_tipo_habitacion INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    direccion VARCHAR(150) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    ingreso DECIMAL(15,2) NOT NULL,
    CONSTRAINT familia_pk PRIMARY KEY (id_familia)
)

CREATE TABLE core.guarderia (
    id_guarderia INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    CONSTRAINT guarderia_pk PRIMARY KEY (id_guarderia)
)

CREATE TABLE nocore.estado_documento (
    id_estado_documento INT IDENTITY NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    CONSTRAINT estado_documento_pk PRIMARY KEY (id_estado_documento)
)

CREATE TABLE nocore.documento (
    id_documento INT IDENTITY NOT NULL,
    id_estado_documento INT NOT NULL,
    id_depencia INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(200),
    ruta VARCHAR(500) NOT NULL,
    CONSTRAINT documento_pk PRIMARY KEY (id_documento)
)
CREATE  NONCLUSTERED INDEX fk_documentos_dependencia_idx
 ON nocore.documento
 ( id_depencia )

CREATE  NONCLUSTERED INDEX fk_documentos_estado_documento_idx
 ON nocore.documento
 ( id_documento )


CREATE TABLE core.tipo_plantel (
    id_tipo_plantel INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT tipo_plantel_pk PRIMARY KEY (id_tipo_plantel)
)

CREATE TABLE core.plantel (
    id_plantel INT IDENTITY NOT NULL,
    id_tipo_plantel INT NOT NULL,
    id_localidad INT NOT NULL,
    nombre VARCHAR(500) NOT NULL,
    CONSTRAINT plantel_pk PRIMARY KEY (id_plantel)
)

CREATE TABLE nocore.empleado (
    id_empleado INT IDENTITY NOT NULL,
    id_area_dependencia INT NOT NULL,
    primer_nombre VARCHAR(25) MASKED WITH (FUNCTION = 'partial(2,"XXXXXXX",0)') NOT NULL,
    segundo_nombre VARCHAR(25),
    primer_apellido VARCHAR(25) MASKED WITH (FUNCTION = 'partial(1,"XXXXXXX",0)') NOT NULL,
    segundo_apellido VARCHAR(25),
    telefono VARCHAR(20) MASKED WITH (FUNCTION = 'default()') NOT NULL,
    direccion VARCHAR(150) MASKED WITH (FUNCTION = 'partial(2,"XXXXXXX",0)') NOT NULL,
    email VARCHAR(150) MASKED WITH (FUNCTION = 'email()') NOT NULL,
    CONSTRAINT empleado_pk PRIMARY KEY (id_empleado)
)

CREATE TABLE core.ciudad (
    id_ciudad INT IDENTITY NOT NULL,
    id_pais INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT ciudad_pk PRIMARY KEY (id_ciudad)
)

CREATE TABLE core.integrante (
    id_integrante INT IDENTITY NOT NULL,
    id_tipo_identificacion INT NOT NULL,
    numero_identificacion INT MASKED WITH (FUNCTION ='Random(1,4)') NOT NULL,
    id_ciudad INT NOT NULL,
    id_familia INT NOT NULL,
    primer_nombre VARCHAR(25) MASKED WITH (FUNCTION = 'partial(2,"XXXXXXX",0)') NOT NULL,
    segundo_nombre VARCHAR(25),
    primer_apellido VARCHAR(25) MASKED WITH (FUNCTION = 'partial(2,"XXXXXXX",0)') NOT NULL,
    segundo_apellido VARCHAR(25),
    fecha_nacimiento DATETIME NOT NULL,
    email varchar(100) MASKED WITH (FUNCTION = 'email()') NULL,
    CONSTRAINT Integrante_PK PRIMARY KEY (id_integrante)
)

CREATE TABLE core.integrante_empresa (
    id_integrante_empresa INT IDENTITY NOT NULL,
    id_empresa INT NOT NULL,
    id_cargo INT NOT NULL,
    id_integrante INT NOT NULL,
    fecha_inicio DATETIME NOT NULL,
    estado TINYINT,
    sueldo INT MASKED WITH (FUNCTION = 'default()') NOT NULL,
    CONSTRAINT integrante_empresa_pk PRIMARY KEY (id_integrante_empresa)
)
CREATE  NONCLUSTERED INDEX fk_adulto_empresa_idx
 ON core.integrante_empresa
 ( id_empresa )

CREATE  NONCLUSTERED INDEX fk_adulto_cargo_idx
 ON core.integrante_empresa
 ( id_cargo )

CREATE  NONCLUSTERED INDEX fk_adulto_integrante_idx
 ON core.integrante_empresa
 ( id_integrante )


CREATE TABLE core.escolaridad (
    id_escolaridad INT IDENTITY NOT NULL,
    id_jornada INT NOT NULL,
    id_plantel_educativo INT NOT NULL,
    id_modalidad INT NOT NULL,
    id_integrante INT NOT NULL,
    fecha DATETIME NOT NULL,
    CONSTRAINT escolaridad_pk PRIMARY KEY (id_escolaridad)
)
CREATE  NONCLUSTERED INDEX fk_joven_jornada_idx
 ON core.escolaridad
 ( id_jornada )

CREATE  NONCLUSTERED INDEX fk_joven_plantel_educativo_idx
 ON core.escolaridad
 ( id_plantel_educativo )

CREATE  NONCLUSTERED INDEX fk_joven_modalidad_idx
 ON core.escolaridad
 ( id_modalidad )

CREATE  NONCLUSTERED INDEX fk_joven_integrante_idx
 ON core.escolaridad
 ( id_integrante )


CREATE TABLE core.guarderia_integrante (
    id_guarderia_integrante INT IDENTITY NOT NULL,
    id_guarderia INT NOT NULL,
    id_integrante INT NOT NULL,
    fecha DATETIME,
    CONSTRAINT guarderia_integrante_pk PRIMARY KEY (id_guarderia_integrante)
)
CREATE  NONCLUSTERED INDEX fk_guarderia_integrantes_guarderias_idx
 ON core.guarderia_integrante
 ( id_guarderia )

CREATE  NONCLUSTERED INDEX fk_guarderia_integrantes_integrante_idx
 ON core.guarderia_integrante
 ( id_integrante )


CREATE TABLE core.enfermedad (
    id_enfermedad INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    estado TINYINT,
    CONSTRAINT enfermedad_pk PRIMARY KEY (id_enfermedad)
)

CREATE TABLE core.enfermedad_integrante (
    id_enfermedad_integrante INT IDENTITY NOT NULL,
    id_enfermedad INT NOT NULL,
    id_integrante INT NOT NULL,
    fecha DATETIME,
    CONSTRAINT enfermedad_integrante_pk PRIMARY KEY (id_enfermedad_integrante)
)
CREATE  NONCLUSTERED INDEX fk_enfermedad_integrante_enfermedad_idx
 ON core.enfermedad_integrante
 ( id_enfermedad )

CREATE  NONCLUSTERED INDEX fk_enfermedad_integrante_integrante_idx
 ON core.enfermedad_integrante
 ( id_integrante )


ALTER TABLE core.integrante_empresa ADD CONSTRAINT fk_adulto_empresa
FOREIGN KEY (id_empresa)
REFERENCES core.empresa (id_empresa)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.Integrante ADD CONSTRAINT fk_integrante_tipo_identificacion
FOREIGN KEY (id_tipo_identificacion)
REFERENCES core.tipo_identificacion (id_tipo_identificacion)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.barrio_ruta ADD CONSTRAINT fk_transporte_tipo_transporte
FOREIGN KEY (id_ruta)
REFERENCES core.ruta (id_ruta)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.escolaridad ADD CONSTRAINT fk_joven_plantel_educativo
FOREIGN KEY (id_plantel_educativo)
REFERENCES core.plantel_educativo (id_plantel_educativo)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.alcaldia ADD CONSTRAINT fk_alcaldia_alcalde
FOREIGN KEY (id_alcalde)
REFERENCES nocore.alcalde (id_alcalde)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.dependencia ADD CONSTRAINT fk_dependencia_alcaldia
FOREIGN KEY (id_alcaldia)
REFERENCES nocore.alcaldia (id_alcaldia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.localidad ADD CONSTRAINT fk_localidad_alcaldia
FOREIGN KEY (id_alcaldia)
REFERENCES nocore.alcaldia (id_alcaldia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.area_dependencia ADD CONSTRAINT fk_area_dependencia_dependencia
FOREIGN KEY (id_depencia)
REFERENCES nocore.dependencia (id_depencia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.documento ADD CONSTRAINT fk_documentos_dependencia
FOREIGN KEY (id_depencia)
REFERENCES nocore.dependencia (id_depencia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.infraestructura ADD CONSTRAINT fk_infraestructura_tipo_infraestructura
FOREIGN KEY (id_tipo_infraestructura)
REFERENCES nocore.tipo_infraestructura (id_tipo_infraestructura)
ON DELETE NO ACTION
ON UPDATE NO action

ALTER TABLE core.familia ADD CONSTRAINT fk_familia_tipo_habitacion
FOREIGN KEY (id_tipo_habitacion)
REFERENCES core.tipo_habitacion (id_tipo_habitacion)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.area_dependencia ADD CONSTRAINT fk_area_dependencia_area
FOREIGN KEY (id_area)
REFERENCES nocore.area (id_area)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.empleado ADD CONSTRAINT fk_empleado_area_dependencia
FOREIGN KEY (id_area_dependencia)
REFERENCES nocore.area_dependencia (id_area_dependencia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.infraestructura ADD CONSTRAINT fk_infraestructura_area_dependencia
FOREIGN KEY (id_area_dependencia)
REFERENCES nocore.area_dependencia (id_area_dependencia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.ciudad ADD CONSTRAINT fk_ciudad_pais
FOREIGN KEY (id_pais)
REFERENCES core.pais (id_pais)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.escolaridad ADD CONSTRAINT fk_joven_modalidad
FOREIGN KEY (id_modalidad)
REFERENCES core.modalidad (id_modalidad)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.integrante_empresa ADD CONSTRAINT fk_adulto_cargo
FOREIGN KEY (id_cargo)
REFERENCES core.cargo (id_cargo)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.escolaridad ADD CONSTRAINT fk_joven_jornada
FOREIGN KEY (id_jornada)
REFERENCES core.jornada (id_jornada)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.plantel ADD CONSTRAINT fk_plantel_localidad
FOREIGN KEY (id_localidad)
REFERENCES core.localidad (id_localidad)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.barrio ADD CONSTRAINT fk_barrio_localidad
FOREIGN KEY (id_localidad)
REFERENCES core.localidad (id_localidad)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.familia ADD CONSTRAINT fk_familia_barrio
FOREIGN KEY (id_barrio)
REFERENCES core.barrio (id_barrio)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.barrio_ruta ADD CONSTRAINT fk_transporte_barrio
FOREIGN KEY (id_barrio)
REFERENCES core.barrio (id_barrio)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.integrante ADD CONSTRAINT fk_integrante_familia
FOREIGN KEY (id_familia)
REFERENCES core.familia (id_familia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.guarderia_integrante ADD CONSTRAINT fk_guarderia_integrantes_guarderias
FOREIGN KEY (id_guarderia)
REFERENCES core.guarderia (id_guarderia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE nocore.documento ADD CONSTRAINT fk_documentos_estado_documento
FOREIGN KEY (id_estado_documento)
REFERENCES nocore.estado_documento (id_estado_documento)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.plantel ADD CONSTRAINT fk_plantel_tipo_plantel
FOREIGN KEY (id_tipo_plantel)
REFERENCES core.tipo_plantel (id_tipo_plantel)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.integrante ADD CONSTRAINT fk_integrante_ciudad
FOREIGN KEY (id_ciudad)
REFERENCES core.ciudad (id_ciudad)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.enfermedad_integrante ADD CONSTRAINT fk_enfermedad_integrante_integrante
FOREIGN KEY (id_integrante)
REFERENCES core.Integrante (id_integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.guarderia_integrante ADD CONSTRAINT fk_guarderia_integrantes_integrante
FOREIGN KEY (id_integrante)
REFERENCES core.integrante (id_integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.escolaridad ADD CONSTRAINT fk_joven_integrante
FOREIGN KEY (id_integrante)
REFERENCES core.integrante (id_integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.integrante_empresa ADD CONSTRAINT fk_adulto_integrante
FOREIGN KEY (id_integrante)
REFERENCES core.integrante (id_integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE core.enfermedad_integrante ADD CONSTRAINT fk_enfermedad_integrante_enfermedad
FOREIGN KEY (id_enfermedad)
REFERENCES core.enfermedad (id_enfermedad)
ON DELETE NO ACTION
ON UPDATE NO ACTION
