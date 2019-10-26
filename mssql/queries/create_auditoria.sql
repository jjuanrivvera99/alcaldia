USE [master]
GO

CREATE SERVER AUDIT [AuditoriaAlcaldia]
TO FILE 
(	
FILEPATH = N'/var/opt/mssql/data/audits'
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
ADD (DELETE ON DATABASE::[alcaldia] BY [usrcore]),
ADD (INSERT ON DATABASE::[alcaldia] BY [usrcore]),
ADD (SELECT ON DATABASE::[alcaldia] BY [usrcore]),
ADD (UPDATE ON DATABASE::[alcaldia] BY [usrcore]),
ADD (DELETE ON DATABASE::[alcaldia] BY [usrnocore]),
ADD (INSERT ON DATABASE::[alcaldia] BY [usrnocore]),
ADD (SELECT ON DATABASE::[alcaldia] BY [usrnocore]),
ADD (UPDATE ON DATABASE::[alcaldia] BY [usrnocore])
WITH (STATE = ON)
GO

