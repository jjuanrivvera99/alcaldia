/**
*
* Crear usuarios admin
*
*/
alter session set "_ORACLE_SCRIPT"=true;
DROP USER alcaldia CASCADE;
CREATE USER alcaldia IDENTIFIED BY LvJi7lXq8X8H2SuRx96B;
GRANT ALL PRIVILEGES TO alcaldia;

-- Daniel --

DROP USER daniel CASCADE;
CREATE USER daniel IDENTIFIED BY Pas$word1234;
GRANT ALL PRIVILEGES TO daniel;

-- Alejandro --

DROP USER alejandro CASCADE;
CREATE USER alejandro IDENTIFIED BY Pas$word1234;
GRANT ALL PRIVILEGES TO alejandro;


-- Andres --

DROP USER andres CASCADE;
CREATE USER andres IDENTIFIED BY Pas$word1234;
GRANT ALL PRIVILEGES TO andres;

-- Jefferson --

DROP USER jefferson CASCADE;
CREATE USER jefferson IDENTIFIED BY Pas$word1234;
GRANT ALL PRIVILEGES TO jefferson;