BACKUP DATABASE alcaldia
TO DISK = '/var/opt/mssql/data/Backups/alcaldia.bak'
WITH ENCRYPTION (ALGORITHM = AES_256, SERVER CERTIFICATE = SQLalcaldia);