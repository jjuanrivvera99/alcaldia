USE [master]
GO

CREATE SERVER AUDIT [AuditoriaAlcaldia]
TO FILE 
(	
FILEPATH = N'C:\AuditoriaAlcaldia\'
)
WITH
(	QUEUE_DELAY = 1000
	,ON_FAILURE = CONTINUE
)
ALTER SERVER AUDIT [AuditoriaAlcaldia] WITH (STATE = ON)
GO

USE [MASTER]
GO
CREATE SERVER AUDIT SPECIFICATION [ServerAuditSpecification_15-09-2019]
FOR SERVER AUDIT [AuditoriaAlcaldia]
ADD (SUCCESSFUL_LOGIN_GROUP),
ADD (LOGOUT_GROUP)
WITH (STATE = ON)
GO

USE [alcaldia]
GO
CREATE DATABASE AUDIT SPECIFICATION [DatabaseAuditSpecification_15-09-2019]
FOR SERVER AUDIT [AuditoriaAlcaldia]
ADD (DELETE ON DATABASE::[alcaldia] BY [jefferson]),
ADD (INSERT ON DATABASE::[alcaldia] BY [jefferson]),
ADD (SELECT ON DATABASE::[alcaldia] BY [jefferson]),
ADD (UPDATE ON DATABASE::[alcaldia] BY [jefferson])
WITH (STATE = ON)
GO

