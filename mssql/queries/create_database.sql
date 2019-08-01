USE master;
GO

DROP DATABASE IF EXISTS alcaldia;
GO

CREATE DATABASE alcaldia;
GO

USE alcaldia;
GO

CREATE TABLE empresa (
    id_empresa INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    CONSTRAINT empresa_pk PRIMARY KEY (id_empresa)
)

CREATE TABLE tipo_identificacion (
    id_tipo_identificacion INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT tipo_identificacion_pk PRIMARY KEY (id_tipo_identificacion)
)

CREATE TABLE ruta (
    id_ruta INT IDENTITY NOT NULL,
    descripcion VARCHAR(50) NOT NULL,
    CONSTRAINT ruta_PK PRIMARY KEY (id_ruta)
)

CREATE TABLE plantel_educativo (
    id_plantel_educativo INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    CONSTRAINT plantel_educativo_pk PRIMARY KEY (id_plantel_educativo)
)

CREATE TABLE alcalde (
    id_alcalde INT IDENTITY NOT NULL,
    primer_nombre VARCHAR(25) NOT NULL,
    segundo_nombre VARCHAR(25),
    primer_apellido VARCHAR(25) NOT NULL,
    segundo_apellido VARCHAR(25),
    CONSTRAINT alcalde_pk PRIMARY KEY (id_alcalde)
)

CREATE TABLE alcaldia (
    id_alcaldia INT IDENTITY NOT NULL,
    id_alcalde INT NOT NULL,
    nombre VARCHAR(50),
    CONSTRAINT alcaldia_pk PRIMARY KEY (id_alcaldia)
)

CREATE TABLE dependencia (
    id_depencia INT IDENTITY NOT NULL,
    id_alcaldia INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT dependencia_pk PRIMARY KEY (id_depencia)
)

CREATE TABLE tipo_infraestructura (
    id_tipo_infraestructura INT IDENTITY NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    CONSTRAINT tipo_infraestructura_pk PRIMARY KEY (id_tipo_infraestructura)
)

CREATE TABLE tipo_habitacion (
    id_tipo_habitacion INT IDENTITY NOT NULL,
    nombre VARCHAR(50),
    CONSTRAINT tipo_habitacion_PK PRIMARY KEY (id_tipo_habitacion)
)

CREATE TABLE area (
    id_area INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT area_pk PRIMARY KEY (id_area)
)

CREATE TABLE area_dependencia (
    id_area_dependencia INT IDENTITY NOT NULL,
    id_area INT NOT NULL,
    id_depencia INT NOT NULL,
    CONSTRAINT area_dependencia_pk PRIMARY KEY (id_area_dependencia)
)
CREATE  NONCLUSTERED INDEX fk_area_dependencia_area_idx
 ON area_dependencia
 ( id_area )

CREATE  NONCLUSTERED INDEX fk_area_dependencia_dependencia_idx
 ON area_dependencia
 ( id_depencia )


CREATE TABLE infraestructura (
    id_infraestructura INT IDENTITY NOT NULL,
    id_area_dependencia INT NOT NULL,
    id_tipo_infraestructura INT NOT NULL,
    nombre VARCHAR(50),
    especificaciones VARCHAR(500),
    codigo INT,
    CONSTRAINT infraestructura_pk PRIMARY KEY (id_infraestructura)
)

CREATE TABLE pais (
    id_pais INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT pais_pk PRIMARY KEY (id_pais)
)

CREATE TABLE modalidad (
    id_modalidad INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT modalidad_pk PRIMARY KEY (id_modalidad)
)

CREATE TABLE cargo (
    id_cargo INT IDENTITY NOT NULL,
    nombre VARCHAR(50),
    CONSTRAINT cargo_pk PRIMARY KEY (id_cargo)
)

CREATE TABLE jornada (
    id_jornada INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT jornada_pk PRIMARY KEY (id_jornada)
)

CREATE TABLE localidad (
    id_localidad INT IDENTITY NOT NULL,
    id_alcaldia INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT localidad_pk PRIMARY KEY (id_localidad)
)

CREATE TABLE barrio (
    id_barrio INT IDENTITY NOT NULL,
    id_localidad INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    area VARCHAR(100) NOT NULL,
    estrato INT,
    CONSTRAINT barrio_PK PRIMARY KEY (id_barrio)
)

CREATE TABLE barrio_ruta (
    id_barrio_ruta INT IDENTITY NOT NULL,
    id_barrio INT NOT NULL,
    id_ruta INT NOT NULL,
    CONSTRAINT barrio_ruta_PK PRIMARY KEY (id_barrio_ruta)
)
CREATE  NONCLUSTERED INDEX fk_transporte_barrio_idx
 ON barrio_ruta
 ( id_barrio )

CREATE  NONCLUSTERED INDEX fk_transporte_tipo_transporte_idx
 ON barrio_ruta
 ( id_ruta )


CREATE TABLE familia (
    id_familia INT IDENTITY NOT NULL,
    id_barrio INT NOT NULL,
    id_tipo_habitacion INT NOT NULL,
    nombre VARCHAR(5) NOT NULL,
    direccion VARCHAR(150) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    ingreso DECIMAL(15,2) NOT NULL,
    CONSTRAINT familia_pk PRIMARY KEY (id_familia)
)

CREATE TABLE guarderia (
    id_guarderia INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    CONSTRAINT guarderia_pk PRIMARY KEY (id_guarderia)
)

CREATE TABLE estado_documento (
    id_estado_documento INT IDENTITY NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    CONSTRAINT estado_documento_pk PRIMARY KEY (id_estado_documento)
)

CREATE TABLE documento (
    id_documento INT IDENTITY NOT NULL,
    id_estado_documento INT NOT NULL,
    id_depencia INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(200),
    ruta VARCHAR(500) NOT NULL,
    CONSTRAINT documento_pk PRIMARY KEY (id_documento)
)
CREATE  NONCLUSTERED INDEX fk_documentos_dependencia_idx
 ON documento
 ( id_depencia )

CREATE  NONCLUSTERED INDEX fk_documentos_estado_documento_idx
 ON documento
 ( id_documento )


CREATE TABLE tipo_plantel (
    id_tipo_plantel INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT tipo_plantel_pk PRIMARY KEY (id_tipo_plantel)
)

CREATE TABLE plantel (
    id_plantel INT IDENTITY NOT NULL,
    id_tipo_plantel INT NOT NULL,
    id_localidad INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT plantel_pk PRIMARY KEY (id_plantel)
)

CREATE TABLE empleado (
    id_empleado INT IDENTITY NOT NULL,
    id_area_dependencia INT NOT NULL,
    primernombre VARCHAR(25) NOT NULL,
    segundonombre VARCHAR(25),
    primerapellido VARCHAR(25) NOT NULL,
    segundoapellido VARCHAR(25),
    Telefono VARCHAR(20) NOT NULL,
    Direccion VARCHAR(150) NOT NULL,
    Email VARCHAR(150) NOT NULL,
    CONSTRAINT empleado_pk PRIMARY KEY (id_empleado)
)

CREATE TABLE ciudad (
    id_ciudad INT IDENTITY NOT NULL,
    id_pais INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT ciudad_pk PRIMARY KEY (id_ciudad)
)

CREATE TABLE integrante (
    id_integrante INT IDENTITY NOT NULL,
    id_tipo_identificacion INT NOT NULL,
    id_ciudad INT NOT NULL,
    id_familia INT NOT NULL,
    Identificacion INT NOT NULL,
    primer_nombre VARCHAR(25) NOT NULL,
    segundo_nombre VARCHAR(25),
    primero_apellido VARCHAR(25) NOT NULL,
    segundo_apelido VARCHAR(25),
    fecha_nacimiento DATETIME NOT NULL,
    CONSTRAINT Integrante_PK PRIMARY KEY (id_integrante)
)

CREATE TABLE integrante_empresa (
    id_integrante_empresa INT IDENTITY NOT NULL,
    id_empresa INT NOT NULL,
    id_cargo INT NOT NULL,
    id_integrante INT NOT NULL,
    fecha_inicio DATETIME NOT NULL,
    estado TINYINT,
    sueldo INT,
    CONSTRAINT integrante_empresa_pk PRIMARY KEY (id_integrante_empresa)
)
CREATE  NONCLUSTERED INDEX fk_adulto_empresa_idx
 ON integrante_empresa
 ( id_empresa )

CREATE  NONCLUSTERED INDEX fk_adulto_cargo_idx
 ON integrante_empresa
 ( id_cargo )

CREATE  NONCLUSTERED INDEX fk_adulto_integrante_idx
 ON integrante_empresa
 ( id_integrante )


CREATE TABLE escolaridad (
    id_escolaridad INT IDENTITY NOT NULL,
    id_jornada INT NOT NULL,
    id_plantel_educativo INT NOT NULL,
    id_modalidad INT NOT NULL,
    id_integrante INT NOT NULL,
    fecha DATETIME NOT NULL,
    CONSTRAINT escolaridad_pk PRIMARY KEY (id_escolaridad)
)
CREATE  NONCLUSTERED INDEX fk_joven_jornada_idx
 ON escolaridad
 ( id_jornada )

CREATE  NONCLUSTERED INDEX fk_joven_plantel_educativo_idx
 ON escolaridad
 ( id_plantel_educativo )

CREATE  NONCLUSTERED INDEX fk_joven_modalidad_idx
 ON escolaridad
 ( id_modalidad )

CREATE  NONCLUSTERED INDEX fk_joven_integrante_idx
 ON escolaridad
 ( id_integrante )


CREATE TABLE guarderia_integrante (
    id_guarderia_integrante INT IDENTITY NOT NULL,
    id_guarderia INT NOT NULL,
    id_integrante INT NOT NULL,
    fecha DATETIME,
    CONSTRAINT guarderia_integrante_pk PRIMARY KEY (id_guarderia_integrante)
)
CREATE  NONCLUSTERED INDEX fk_guarderia_integrantes_guarderias_idx
 ON guarderia_integrante
 ( id_guarderia )

CREATE  NONCLUSTERED INDEX fk_guarderia_integrantes_integrante_idx
 ON guarderia_integrante
 ( id_integrante )


CREATE TABLE enfermedad (
    id_enfermedad INT IDENTITY NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    estado TINYINT,
    CONSTRAINT enfermedad_pk PRIMARY KEY (id_enfermedad)
)

CREATE TABLE enfermedad_integrante (
    id_enfermedad_integrante INT IDENTITY NOT NULL,
    id_enfermedad INT NOT NULL,
    id_integrante INT NOT NULL,
    fecha DATETIME,
    CONSTRAINT enfermedad_integrante_pk PRIMARY KEY (id_enfermedad_integrante)
)
CREATE  NONCLUSTERED INDEX fk_enfermedad_integrante_enfermedad_idx
 ON enfermedad_integrante
 ( id_enfermedad )

CREATE  NONCLUSTERED INDEX fk_enfermedad_integrante_integrante_idx
 ON enfermedad_integrante
 ( id_integrante )


ALTER TABLE integrante_empresa ADD CONSTRAINT fk_adulto_empresa
FOREIGN KEY (id_empresa)
REFERENCES empresa (id_empresa)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE Integrante ADD CONSTRAINT fk_integrante_tipo_identificacion
FOREIGN KEY (id_tipo_identificacion)
REFERENCES tipo_identificacion (id_tipo_identificacion)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE barrio_ruta ADD CONSTRAINT fk_transporte_tipo_transporte
FOREIGN KEY (id_ruta)
REFERENCES ruta (id_ruta)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE escolaridad ADD CONSTRAINT fk_joven_plantel_educativo
FOREIGN KEY (id_plantel_educativo)
REFERENCES plantel_educativo (id_plantel_educativo)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE alcaldia ADD CONSTRAINT fk_alcaldia_alcalde
FOREIGN KEY (id_alcalde)
REFERENCES alcalde (id_alcalde)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE dependencia ADD CONSTRAINT fk_dependencia_alcaldia
FOREIGN KEY (id_alcaldia)
REFERENCES alcaldia (id_alcaldia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE localidad ADD CONSTRAINT fk_localidad_alcaldia
FOREIGN KEY (id_alcaldia)
REFERENCES alcaldia (id_alcaldia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE area_dependencia ADD CONSTRAINT fk_area_dependencia_dependencia
FOREIGN KEY (id_depencia)
REFERENCES dependencia (id_depencia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE documento ADD CONSTRAINT fk_documentos_dependencia
FOREIGN KEY (id_depencia)
REFERENCES dependencia (id_depencia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE infraestructura ADD CONSTRAINT fk_infraestructura_tipo_infraestructura
FOREIGN KEY (id_tipo_infraestructura)
REFERENCES tipo_infraestructura (id_tipo_infraestructura)
ON DELETE NO ACTION
ON UPDATE NO action

ALTER TABLE familia ADD CONSTRAINT fk_familia_tipo_habitacion
FOREIGN KEY (id_tipo_habitacion)
REFERENCES tipo_habitacion (id_tipo_habitacion)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE area_dependencia ADD CONSTRAINT fk_area_dependencia_area
FOREIGN KEY (id_area)
REFERENCES area (id_area)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE empleado ADD CONSTRAINT fk_empleado_area_dependencia
FOREIGN KEY (id_area_dependencia)
REFERENCES area_dependencia (id_area_dependencia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE infraestructura ADD CONSTRAINT fk_infraestructura_area_dependencia
FOREIGN KEY (id_area_dependencia)
REFERENCES area_dependencia (id_area_dependencia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE ciudad ADD CONSTRAINT fk_ciudad_pais
FOREIGN KEY (id_pais)
REFERENCES pais (id_pais)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE escolaridad ADD CONSTRAINT fk_joven_modalidad
FOREIGN KEY (id_modalidad)
REFERENCES modalidad (id_modalidad)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE integrante_empresa ADD CONSTRAINT fk_adulto_cargo
FOREIGN KEY (id_cargo)
REFERENCES cargo (id_cargo)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE escolaridad ADD CONSTRAINT fk_joven_jornada
FOREIGN KEY (id_jornada)
REFERENCES jornada (id_jornada)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE plantel ADD CONSTRAINT fk_plantel_localidad
FOREIGN KEY (id_localidad)
REFERENCES localidad (id_localidad)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE barrio ADD CONSTRAINT fk_barrio_localidad
FOREIGN KEY (id_localidad)
REFERENCES localidad (id_localidad)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE familia ADD CONSTRAINT fk_familia_barrio
FOREIGN KEY (id_barrio)
REFERENCES barrio (id_barrio)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE barrio_ruta ADD CONSTRAINT fk_transporte_barrio
FOREIGN KEY (id_barrio)
REFERENCES barrio (id_barrio)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE integrante ADD CONSTRAINT fk_integrante_familia
FOREIGN KEY (id_familia)
REFERENCES familia (id_familia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE guarderia_integrante ADD CONSTRAINT fk_guarderia_integrantes_guarderias
FOREIGN KEY (id_guarderia)
REFERENCES guarderia (id_guarderia)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE documento ADD CONSTRAINT fk_documentos_estado_documento
FOREIGN KEY (id_estado_documento)
REFERENCES estado_documento (id_estado_documento)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE plantel ADD CONSTRAINT fk_plantel_tipo_plantel
FOREIGN KEY (id_tipo_plantel)
REFERENCES tipo_plantel (id_tipo_plantel)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE integrante ADD CONSTRAINT fk_integrante_ciudad
FOREIGN KEY (id_ciudad)
REFERENCES ciudad (id_ciudad)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE enfermedad_integrante ADD CONSTRAINT fk_enfermedad_integrante_integrante
FOREIGN KEY (id_integrante)
REFERENCES Integrante (id_integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE guarderia_integrante ADD CONSTRAINT fk_guarderia_integrantes_integrante
FOREIGN KEY (id_integrante)
REFERENCES integrante (id_integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE escolaridad ADD CONSTRAINT fk_joven_integrante
FOREIGN KEY (id_integrante)
REFERENCES integrante (id_integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE integrante_empresa ADD CONSTRAINT fk_adulto_integrante
FOREIGN KEY (id_integrante)
REFERENCES integrante (id_integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION

ALTER TABLE enfermedad_integrante ADD CONSTRAINT fk_enfermedad_integrante_enfermedad
FOREIGN KEY (id_enfermedad)
REFERENCES enfermedad (id_enfermedad)
ON DELETE NO ACTION
ON UPDATE NO ACTION
