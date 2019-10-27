USE MASTER;
GO
-- create master key
CREATE MASTER KEY ENCRYPTION BY PASSWORD = 'A125277935*#2019@';
GO

CREATE CERTIFICATE SQLalcaldia
    WITH SUBJECT = 'SQLalcaldia Backup Certificate';
GO

BACKUP MASTER KEY
    TO FILE = '/var/opt/mssql/data/certificates/SQLalcaldia.key'
    ENCRYPTION BY PASSWORD = 'A125277935*#2019@';
GO

BACKUP CERTIFICATE SQLalcaldia
    TO FILE = '/var/opt/mssql/data/certificates/CERSQLalcaldia.cer'
    WITH PRIVATE KEY
    (
        FILE = '/var/opt/mssql/data/certificates/SQLalcaldiaBackup.key', ENCRYPTION BY PASSWORD = 'A125277935*#2019@'
    );
GO