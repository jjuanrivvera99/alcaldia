/**
*
* Crear usuarios admin
*
*/

-- Daniel --
DROP LOGIN daniel;
GO

EXEC sp_dropuser 'daniel';
GO

CREATE LOGIN daniel WITH PASSWORD = 'Pas$word1234';
GO

CREATE USER [daniel] FOR LOGIN [daniel];
GO

GRANT CONNECT TO daniel;

ALTER authorization ON DATABASE::alcaldia TO daniel;
GO

EXEC sp_addsrvrolemember 'daniel', 'sysadmin';

GRANT CONTROL SERVER TO [daniel];

-- Alejandro --

DROP LOGIN alejandro;
GO

EXEC sp_dropuser 'alejandro';
GO

CREATE LOGIN alejandro WITH PASSWORD = 'Pas$word1234';
GO

CREATE USER [alejandro] FOR LOGIN [alejandro];
GO

GRANT CONNECT TO alejandro;

ALTER authorization ON DATABASE::alcaldia TO alejandro;
GO

EXEC sp_addsrvrolemember 'alejandro', 'sysadmin';

GRANT CONTROL SERVER TO [alejandro];


-- Andres --

DROP LOGIN andres;
GO

EXEC sp_dropuser 'andres';
GO

CREATE LOGIN andres WITH PASSWORD = 'Pas$word1234';
GO

CREATE USER [andres] FOR LOGIN [andres];
GO

GRANT CONNECT TO andres;

ALTER authorization ON DATABASE::alcaldia TO andres;
GO

EXEC sp_addsrvrolemember 'andres', 'sysadmin';

GRANT CONTROL SERVER TO [andres];

-- Jefferson --

DROP LOGIN jefferson;
GO

EXEC sp_dropuser 'jefferson';
GO

CREATE LOGIN jefferson WITH PASSWORD = 'Pas$word1234';
GO

CREATE USER [jefferson] FOR LOGIN [jefferson];
GO

GRANT CONNECT TO jefferson;

ALTER authorization ON DATABASE::alcaldia TO jefferson;
GO

EXEC sp_addsrvrolemember 'jefferson', 'sysadmin';

GRANT CONTROL SERVER TO [jefferson];
GO

-- CREACIÓN DE USUARIO usrcore
CREATE LOGIN [usrcore] WITH PASSWORD = 'Pas$word1234'
GO

CREATE USER [usrcore] FOR LOGIN [usrcore]
GO

GRANT CONNECT TO usrcore;
GO

-- PERMITIR AL USUARIO usrcore SOLO ACCEDER AL ESQUEMA core
ALTER authorization ON SCHEMA ::core TO usrcore
GO

-- CREACIÓN DE USUARIO usrnocore
CREATE LOGIN [usrnocore] WITH PASSWORD = 'Pas$word1234'
GO

CREATE USER [usrnocore] FOR LOGIN [usrnocore]
GO

GRANT CONNECT TO usrnocore;
GO

-- PERMITIR AL USUARIO usrnocore SOLO ACCEDER AL ESQUEMA usrnocore
ALTER authorization ON SCHEMA ::nocore TO usrnocore