USE [alcaldia]  
GO
DROP LOGIN TestUser;
GO
EXEC sp_dropuser 'TestUser';
GO
CREATE USER TestUser WITHOUT LOGIN;  
GRANT SELECT ON core.integrante TO TestUser;  

USE [alcaldia]  
GO
EXECUTE AS USER = 'TestUser';  
SELECT * FROM core.integrante;  
REVERT; 