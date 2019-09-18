-- reiniciar auto-incrementable
--dbcc checkident('alcaldia.nocore.alcaldia',reseed,0)
--dbcc checkident('alcaldia.core.familia',reseed,0)

INSERT INTO alcaldia.nocore.alcalde
(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido)
VALUES('Daniel', 'Enrique', 'Soto', 'Villota');

INSERT INTO alcaldia.nocore.alcaldia
(id_alcalde, nombre)
VALUES(1, 'Cali');

INSERT INTO alcaldia.core.localidad
(id_alcaldia, nombre)
VALUES(1, 'Antonio Nariño'),
		(1, 'Simón Bolívar'),
		(1, 'Antonio Galán'),
		(1, 'Mártires'),
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
(nombre, Acrónimo)
VALUES('cédula de identidad', 'CI'),
		('cédula de ciudadanía', 'CC'),
		('tarjeta de identidad', 'TI'),
		('tarjeta pasaporte', 'TP'),
		('registro civil', 'RC'),
		('cédula de extranjería', 'CE'),
		('carné de identidad', 'CI'),
		('documento nacional de identidad', 'DNI'),
		('documento único de identidad', 'DUI'),
		('Clave única de registro de población', 'CURP');

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
VALUES(1, 'Secretaría General'),
		(1, 'Secretaría de Gobierno'),
		(1, 'Secretaría de Hacienda'),
		(1, 'Secretaría de Planeación y Obras Públicas'),
		(1, 'Secretaría de Educación'),
		(1, 'Secretaría de Salud'),
		(1, 'Secretaría de Deportes, Recreación y Cultura'),
		(1, 'Secretaría de Gestión Ambiental y Minera'),
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
		('Saranpion'),
		('Rinitis'),
		('Miopia');

INSERT INTO alcaldia.core.familia
(id_barrio, id_tipo_habitacion, nombre, direccion, telefono, ingreso)
VALUES(1, 1, 'Ruiz Cabal', 'Calle 3 # 1 - 2', '3700001', 1700000),
		(2, 2, 'Lopez Cuervo', 'Calle 2 # 2 - 2', '3700002', 1800000),
		(3, 3, 'Ramirez Romero', 'Calle 4 # 4 - 2', '3700003', 2000000),
		(4, 3, 'Velazques Cardona', 'Calle 6 # 8 - 2', '3700004', 1600000),
		(5, 2, 'Saenz Rodriguez', 'Calle 7 # 9 - 1', '3700005', 1900000);

INSERT INTO alcaldia.core.integrante
(id_tipo_identificacion, numero_identificacion, id_ciudad, id_familia, primer_nombre, segundo_nombre, primero_apellido, segundo_apelido, fecha_nacimiento, Email)
VALUES(2, 1986148196, 1, 1, 'William', '', 'Ruiz', '', '1990-08-22', ''),
		(2, 1950315405, 1, 1, 'Mary', '', 'Cabal', '', '1993-07-05', ''),
		(2, 1715536396, 1, 2, 'Patrick', '', 'Lopez', '', '1984-05-24', ''),
		(2, 1783610091, 1, 2, 'Donna', '', 'Cuervo', '', '1987-08-01', ''),
		(2, 1943936718, 1, 3, 'Kevin', '', 'Ramirez', 'Romero', '1989-07-05', ''),
		(2, 1838576104, 1, 4, 'Ronald', '', 'Velazques', '', '1985-03-21', ''),
		(2, 1617880469, 1, 4, 'Emily', '', 'Cardona', '', '1987-08-09', ''),
		(3, 1853965608, 1, 4, 'Steven', '', 'Velazques', 'Cardona', '2005-07-06', ''),
		(2, 1242342565, 1, 5, 'Alexis', '', 'Saenz', '', '1990-04-28', ''),
		(2, 1971219171, 1, 5, 'Maria', '', 'Rodriguez', '', '1994-08-22', ''),
		(5, 1725826304, 1, 5, 'Betty', '', 'Saenz', 'Rodriguez', '2007-09-16', '');








