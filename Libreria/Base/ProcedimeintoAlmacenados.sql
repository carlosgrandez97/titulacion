USE PROYECTO;


-- SP_ PARA CONTROL DE INICIO DE SESION DE CADA USUARIO --------------------------

DELIMITER $$
DROP PROCEDURE IF EXISTS spt_IniciarSesion; 
CREATE OR REPLACE PROCEDURE spt_IniciarSesion(
    IN cUsuario  NVARCHAR(10),
    IN cPassword VARCHAR(10)
)
BEGIN
   
   DECLARE Cantidad_cUser NVARCHAR(10);
   
   -- 1. Validad la cantidad de datos con el mismo usuario y contraseña y lo guarda en 
   --    una variable. Cantidad_cUser
	SELECT 
				IFNULL(count(*), 0) as Cantidad 
				INTO Cantidad_cUser
	FROM tbl_user u
   INNER JOIN tbl_persona p ON u.cPerCod = u.cPerCod
   WHERE 
		u.cUser = cUsuario
		AND u.cPerPass = cPassword
   	AND   p.bEstado = 0;
   	
   -- 2 . Si el usuario existe, entonces se crea su registro de sesiones
   IF Cantidad_cUser = 1 THEN 
	   INSERT INTO tbl_ingresosesiones (cPerCod)  
		VALUES (UPPER(cUsuario));
   END IF;
   
   -- 3. Devuelve la cantidad de la variable Cantidad_cUser
   SELECT Cantidad_cUser;   	
   
END$$
DELIMITER ;

-- CALL spt_IniciarSesion('cama', '123');


-- SP_ REGISTRO DE CLIENTE --------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS spt_ins_RegistroCliente; 
CREATE OR REPLACE PROCEDURE spt_ins_RegistroCliente(
IN cPerCod				  VARCHAR(15) ,
IN cPerNombres         VARCHAR(200),
IN cPerApellidoPar     VARCHAR(200),
IN cPerApellidoMat     VARCHAR(200),
IN dPerNac             DATETIME,
IN cPerDirecDomicilio  VARCHAR(100),
IN cPerTelefono        VARCHAR(100),
IN cPerCelular         VARCHAR(100),
IN nPerPersoneria      INT,
IN cPerDOI             VARCHAR(10),
IN cPerEmail           VARCHAR(50), 
-- USUARIO
IN cUser				     NVARCHAR(10),
IN cPerPass				  VARCHAR(10), 
IN cFoto					  NVARCHAR(50), 
IN cPerfil				  VARCHAR(50)	
)
BEGIN
	DECLARE nExistePrimeraPersona INT;
	DECLARE cCorrelativo VARCHAR(100);

	SELECT 
			IFNULL(COUNT(cPerCod), 0 )bitExistencia 
			INTO nExistePrimeraPersona
	FROM tbl_Persona;
	
	IF nExistePrimeraPersona = 0 THEN 
		SELECT 
				CAST(IFNULL(MAX(cPerCod), '9999') AS UNSIGNED ) +  1  cPersCod 
				INTO cCorrelativo
		FROM  tbl_Persona T;
	ELSE
		SELECT 	
				CAST(MAX(cPerCod) AS UNSIGNED ) +  1  NuevoCodigo 
				INTO cCorrelativo
		FROM  tbl_Persona T;	
	END IF
	
	INSERT INTO tbl_Persona
	(cPerCod, cPerNombres, cPerApellidoPar, cPerApellidoMat, dPerNac, cPerDirecDomicilio, cPerTelefono, cPerCelular, nPerPersoneria, cPerDOI, cPerEmail)
	VALUES 
	(cCorrelativo, cPerNombres,cPerApellidoPar, cPerApellidoMat, dPerNac, cPerDirecDomicilio, cPerTelefono, cPerCelular, nPerPersoneria, cPerDOI, cPerEmail);
	
	
	INSERT INTO tbl_user 
	(cPerCod, cUser, cPerPass, cFoto, cPerfil)
	VALUES
	(cCorrelativo, cUser, cPerPass, cFoto, cPerfil);
	
	INSERT INTO tbl_Cliente (cPerCod)
	VALUES(cPerCod);
	
	DECLARE Persona_val INT; 
	DECLARE User_val INT;
	DECLARE Cliente_val INT;  
	
	SELECT COUNT(*) AS Val_Persona INTO Persona_val	FROM tbl_persona 	WHERE cPerCod = cCorrelativo;
   SELECT COUNT(*) AS Val_user 	 INTO User_val		FROM tbl_user 		WHERE cPerCod = cCorrelativo;
   SELECT COUNT(*) AS Val_cliente INTO Cliente_val	FROM tbl_Cliente 	WHERE cPerCod = cCorrelativo;
   
   IF Persona_val = 1 AND User_val = 1 AND Cliente_val = 1 THEN 
   	SELECT 'OK' AS MENSAJE;
   ELSE 
   	SELECT 'Error' AS MENSAJE;
   END IF
	

END$$
DELIMITER ;



