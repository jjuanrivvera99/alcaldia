CREATE PROCEDURE INSERTDATA
AS
BEGIN
    INSERT INTO alcaldia.nocore.alcalde
    (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido)
    VALUES('Daniel', 'Enrique', 'Soto', 'Villota');

    INSERT INTO alcaldia.nocore.alcaldia
    (id_alcalde, nombre)
    VALUES(1, 'Cali');

    INSERT INTO alcaldia.core.localidad
    (id_alcaldia, nombre)
    VALUES(1, 'Antonio Nariño'),
          (1, 'Simon Bolivar'),
          (1, 'Antonio Galan'),
          (1, 'Martires'),
          (1, 'Los Andes');

    INSERT INTO alcaldia.core.barrio
    (id_localidad, nombre, area, estrato)
    VALUES (1,'Alamos','Urbana',3),
           (1,'Capri','Urbana',4),
           (1,'Granada','Urbana',6),
           (1,'Mangos','Urbana',2),
           (1,'Villacolombia','Urbana',3);

    INSERT INTO alcaldia.core.ruta
    (descripcion)
    VALUES('Norte'),
          ('Oeste'),
          ('Oriente'),
          ('Oriente2'),
          ('Sur');

    INSERT INTO alcaldia.core.barrio_ruta
    (id_barrio, id_ruta)
    VALUES(1, 1),
          (2, 5),
          (3, 1),
          (4, 4),
          (5, 3);

    INSERT INTO alcaldia.core.pais
    (nombre)
    VALUES('Colombia'),
          ('Brazil'),
          ('Mexico'),
          ('Peru'),
          ('Venezuela');

    INSERT INTO alcaldia.core.ciudad
    (id_pais, nombre)
    VALUES(1, 'Cali'),
          (1, 'Bogota'),
          (2, 'Brasilia'),
          (3, 'Mexico DF'),
          (4, 'Lima'),
          (5, 'Caracas');

    INSERT INTO alcaldia.core.tipo_identificacion
    (nombre)
    VALUES('cedula de identidad'),
          ('cedula de ciudadania'),
          ('tarjeta de identidad'),
          ('tarjeta pasaporte'),
          ('registro civil'),
          ('cedula de extranjeria'),
          ('carne de identidad'),
          ('documento nacional de identidad'),
          ('documento unico de identidad'),
          ('Clave unica de registro de poblacion');

    INSERT INTO alcaldia.core.tipo_habitacion
    (nombre)
    VALUES('Propia'),
          ('Arriendo'),
          ('Familiar');

    INSERT INTO alcaldia.core.jornada
    (nombre)
    VALUES('Diurna'),
          ('Nocturna'),
          ('Vespertina'),
          ('Mixta');

    INSERT INTO alcaldia.nocore.dependencia
    (id_alcaldia, nombre)
    VALUES(1, 'Secretaria General'),
          (1, 'Secretaria de Gobierno'),
          (1, 'Secretaria de Hacienda'),
          (1, 'Secretaria de Planeacion y Obras Poblicas'),
          (1, 'Secretaria de Educacion'),
          (1, 'Secretaria de Salud'),
          (1, 'Secretaria de Deportes, Recreacion y Cultura'),
          (1, 'Secretaria de Gestion Ambiental y Minera'),
          (1, 'Oficina Asesora de Control Interno');

    INSERT INTO alcaldia.core.enfermedad
    (nombre)
    VALUES('Hepatitis A'),
          ('Hepatitis B'),
          ('Dengue'),
          ('Cancer'),
          ('Leucemia'),
          ('Laringitis'),
          ('Diabetis'),
          ('Sarampion'),
          ('Rinitis'),
          ('Miopia');

    INSERT INTO alcaldia.core.familia
    (id_barrio, id_tipo_habitacion, nombre, direccion, telefono, ingreso)
    VALUES(1, 1, 'Ruiz Cabal', 'Calle 3 # 1-2', '3700001', 1700000.00),
          (2, 2, 'Lopez Cuervo', 'Calle 2 # 2-2', '3700002', 1800000.00),
          (3, 3, 'Ramirez Romero', 'Calle 4 # 4-2', '3700003', 2000000.00),
          (4, 3, 'Velazques Cardona', 'Calle 6 # 8-2', '3700004', 1600000.00),
          (5, 2, 'Saenz Rodriguez', 'Calle 7 # 9-1', '3700005', 1900000);

    INSERT INTO alcaldia.core.integrante
    (id_tipo_identificacion, numero_identificacion, id_ciudad, id_familia, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, email)
    VALUES(2, 1986148196, 1, 1, 'William', '', 'Ruiz', '', '1990-08-22', ''),
          (2, 1950315405, 1, 2, 'Mary', '', 'Cabal', '', '1993-07-05', ''),
          (2, 1715536396, 1, 3, 'Patrick', '', 'Lopez', '', '1984-05-24', ''),
          (2, 1783610091, 1, 4, 'Donna', '', 'Cuervo', '', '1987-08-01', ''),
          (2, 1943936718, 1, 5, 'Kevin', '', 'Ramirez', 'Romero', '1989-07-05', ''),
          (2, 1838576104, 1, 5, 'Ronald', '', 'Velazques', '', '1985-03-21', ''),
          (2, 1617880469, 1, 4, 'Emily', '', 'Cardona', '', '1987-08-09', ''),
          (3, 1853965608, 1, 4, 'Steven', '', 'Velazques', 'Cardona', '2005-07-06', ''),
          (2, 1242342565, 1, 5, 'Alexis', '', 'Saenz', '', '1990-04-28', ''),
          (2, 1971219171, 1, 5, 'Maria', '', 'Rodriguez', '', '1994-08-22', ''),
          (5, 1725826304, 1, 5, 'Betty', '', 'Saenz', 'Rodriguez', '2007-09-16', '');


    INSERT INTO alcaldia.core.tipo_plantel
    (nombre)
    VALUES('Escuela'),
          ('Guarderia'),
          ('Empresa');

    INSERT INTO alcaldia.core.plantel
    (id_tipo_plantel, id_localidad, nombre)
    VALUES(3, 1, 'COMERCIALIZADORA ARTURO CALLE'),
          (3, 1, 'GRUPO SURA'),
          (3, 1, 'GRUPO NUTRESA'),
          (3, 1, 'GRUPO EXITO'),
          (3, 1, 'BANCOLOMBIA'),
          (3, 1, 'GRUPO AVAL'),
          (3, 1, 'ORGANIZACION ARDILA LULLE'),
          (3, 1, 'GRUPO ARGOS'),
          (3, 1, 'ALPINA'),
          (3, 1, 'GRUPO EPM'),
          (3, 1, 'ALQUERIA'),
          (3, 1, 'TERPEL'),
          (3, 1, 'AVIANCA'),
          (3, 1, 'DAVIVIENDA'),
          (3, 1, 'CEMENTOS ARGOS'),
          (3, 1, 'MARIO HERNANDEZ'),
          (3, 1, 'ECOPETROL'),
          (3, 1, 'GRUPO NUTRESA'),
          (3, 1, 'ISA'),
          (3, 1, 'CREPES & WAFFLES'),
          (3, 1, 'UNIVERSIDAD EAFIT'),
          (3, 1, 'VALOREM (G. E. SANTO DOMINGO)'),
          (3, 1, 'UNIV. DE LOS ANDES'),
          (3, 1, 'ANDI'),
          (3, 1, 'BAVARIA'),
          (3, 1, 'PUBLICACIONES SEMANA'),
          (3, 1, 'SEGUROS BOLIVAR'),
          (3, 1, 'COLOMBINA'),
          (3, 1, 'CAMARA DE COMERCIO DE BOGOTA'),
          (3, 1, 'CASA EDITORIAL EL TIEMPO'),
          (3, 2, 'GRUPO MANUELITA'),
          (3, 2, 'PROCAFECOL (JUAN VALDEZ)'),
          (3, 2, 'POSTOBON SA'),
          (3, 2, 'NESTLE'),
          (3, 2, 'BANCO DE BOGOTA'),
          (3, 3, 'UNIV. EXTERNADO DE COLOMBIA'),
          (3, 3, 'GRUPO AVIATUR'),
          (3, 3, 'DECAMERON HOTELS AND RESORTS'),
          (3, 3, 'UNIV. NACIONAL DE COLOMBIA'),
          (3, 3, 'BOLSA DE VALORES DE COLOMBIA'),
          (3, 3, 'CELSIA'),
          (3, 3, 'ANDRES CARNE DE RES'),
          (3, 3, 'INDUSTRIAS HACEB'),
          (3, 3, 'SCOTIABANK COLPATRIA'),
          (3, 3, 'PEDRO GOMEZ Y CIA'),
          (3, 3, 'CORONA INDUSTRIAL'),
          (3, 3, 'GRUPO CARVAJAL'),
          (3, 4, 'ALKOSTO-CORBETA'),
          (3, 4, 'CINE COLOMBIA'),
          (3, 4, 'FRISBY'),
          (3, 4, 'PONT. UNIV. JAVERIANA'),
          (3, 4, 'COLSUBSIDIO'),
          (3, 4, 'TELEFONICA MOVISTAR'),
          (3, 4, 'AMARILO'),
          (3, 4, 'DISCOVERY NETWORKS'),
          (3, 5, 'METRO DE MEDELLIN'),
          (3, 5, 'COMPENSAR'),
          (3, 5, 'PEPSICO'),
          (3, 5, 'GRUPO BIOS'),
          (3, 5, 'BBVA'),
          (3, 5, 'OLIMPICA'),
          (1, 1, 'COLEGIO BILINGUE DIANA OESE'),
          (1, 1, 'COL NUEVO CAMBRIDGE'),
          (1, 1, 'LIC CAMPO DAVID'),
          (1, 1, 'COL NUEVO COLOMBO AMERICANO'),
          (1, 1, 'INST ALBERTO MERANI'),
          (1, 2, 'COL SAN JORGE DE INGLATERRA'),
          (1, 2, 'COL SAN CARLOS'),
          (1, 2, 'COL LA QUINTA DEL PUENTE'),
          (1, 2, 'GIMNASIO COLOMBO BRITANICO - BILINGUE INTERNACIONAL'),
          (1, 2, 'COLEGIO PHILADELPHIA INTERNACIONAL'),
          (1, 2, 'CAMBRIDGE SCHOOL (GIMN BILING PLAZA SESAMO)'),
          (1, 3, 'LIC NAVARRA'),
          (1, 3, 'GIMN VERMONT'),
          (1, 3, 'COL ANGLO AMERICANO'),
          (1, 3, 'GIMN ALESSANDRO VOLTA'),
          (1, 3, 'COL LOS NOGALES'),
          (1, 3, 'NUEVO COLEGIO DEL PRADO'),
          (1, 3, 'COLEGIO LEONARDO DA VINCI'),
          (1, 3, 'COL SAN BONIFACIO DE LAS LANZAS'),
          (1, 4, 'GIMN LA MONTAÑA'),
          (1, 4, 'COL EL ROSARIO'),
          (1, 5, 'COL CAMPOALEGRE LTDA'),
          (1, 5, 'COL SANTA FRANCISCA ROMANA'),
          (1, 5, 'COLEGIO CORAZONISTA'),
          (1, 5, 'COL MONTESSORI BRITISH SCHOOL'),
          (2, 1, 'Allegro Preescolar Jardin Infantil'),
          (2, 1, 'Grimms Kindergarten'),
          (2, 2, 'Ayudando a Crecer Kindergarten'),
          (2, 2, 'Santa Barbara Preschool'),
          (2, 2, 'Jardin Infantil Pequeños Talentos'),
          (2, 2, 'Santa Barbara Preschool'),
          (2, 3, 'Gimnasio Campestre Los Laureles Preescolar'),
          (2, 3, 'Cumbres Preschool'),
          (2, 3, 'Saint Mary Nursery & Preschool'),
          (2, 3, 'Kids Town Nicols de Federman'),
          (2, 3, 'Hilos de Colores Jardin Infantil'),
          (2, 3, 'Colegio Jordin de Sajonia Preescolar'),
          (2, 4, 'Pataton Patatero Jardin Infantil y Taller Creativo'),
          (2, 4, 'Mi Edad Feliz Jardin Campestre'),
          (2, 4, 'Kinder Baloo Campestre'),
          (2, 5, 'International Garden'),
          (2, 5, 'Colegio Gimnasio Britanico Preescolar');

    INSERT INTO alcaldia.core.barrio
    (id_localidad, nombre, area, estrato)
    VALUES (1,'Sevilla','urbana',3),
           (1,'Policarpa','urbana',4),
           (1,'Ciudad Berna','urbana',6),
           (1,'Ciudad Jardin','urbana',2),
           (1,'Barrio Caracas','urbana',5),
           (1,'Restrepo','urbana',3),
           (1,'San Antonio','urbana',4),
           (2,'Fragua','urbana',4),
           (2,'Fraguita','urbana',3),
           (2,'Santander','urbana',2),
           (2,'Villa Mayor','urbana',5),
           (2,'San Jorge Central','urbana',3),
           (2,'Cinco de Noviembre','urbana',4),
           (2,'Santa Isabel','urbana',1),
           (2,'Eduardo Frey','urbana',2),
           (2,'La Castellana','urbana',5),
           (2,'La Patria','urbana',3),
           (3,'Los Andes','urbana',4),
           (3,'Rionegro','urbana',6),
           (3,'Urbanizacion San Martín','urbana',2),
           (3,'Villa Calasanz','urbana',5),
           (3,'Vizcaya','urbana',3),
           (3,'Bellavista','urbana',4),
           (3,'Chico Alto','urbana',4),
           (3,'Chico Reservado','urbana',3),
           (3,'El Nogal','urbana',2),
           (3,'El Refugio','urbana',5),
           (3,'La Cabrera','urbana',3),
           (3,'Los Rosales','urbana',4),
           (3,'Seminario','urbana',1),
           (3,'Toscana','urbana',2),
           (3,'Acacias','urbana',5),
           (4,'Antigua','urbana',3),
           (4,'Belmira','urbana',4),
           (4,'Bosque de Pinos','urbana',6),
           (4,'Caobos Salazar','urbana',2),
           (4,'Capri','urbana',5),
           (4,'Cedritos','urbana',3),
           (4,'El Contador','urbana',4),
           (4,'El Rincon de Las Margaritas','urbana',4),
           (5,'La Sonora','urbana',3),
           (5,'Las Margaritas','urbana',2),
           (5,'Lisboa','urbana',5),
           (5,'Los Cedros','urbana',3),
           (5,'Los Cedros Oriental','urbana',4),
           (5,'Montearroyo','urbana',1),
           (5,'Nueva Autopista','urbana',2),
           (5,'Nuevo Country','urbana',5),
           (5,'Sierras del Moral','urbana',3),
           (5,'Canaima','urbana',4),
           (5,'California','urbana',6);

END
