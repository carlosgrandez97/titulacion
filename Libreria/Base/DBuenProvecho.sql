USE Proyecto;

/* =======================================================================
Estructura de datos:  tbl_Persona
======================================================================= */

DROP TABLE IF EXISTS tbl_Persona;

CREATE TABLE tbl_Persona(
cPerCod				  VARCHAR(15)		NOT NULL PRIMARY KEY ,
cPerNombres         VARCHAR(200)	NOT NULL,
cPerApellidoPar     VARCHAR(200)	NOT NULL,
cPerApellidoMat     VARCHAR(200)	NOT NULL,
dPerNac             DATETIME  		NULL,
cPerDirecDomicilio  VARCHAR(100)	NULL,
cPerTelefono        VARCHAR(100)	NULL,
cPerCelular         VARCHAR(100)	NULL,
nPerPersoneria      INT       		NOT NULL,
cPerDOI             VARCHAR(10)		NULL,
cPerEmail           VARCHAR(50)		NOT NULL ,
cPerCreacion        TIMESTAMP		NOT NULL  DEFAULT CURRENT_TIMESTAMP,
bEstado				  INT				NOT NULL DEFAULT 0
);

INSERT INTO tbl_Persona
(cPerCod, cPerNombres, cPerApellidoPar, cPerApellidoMat, dPerNac, cPerDirecDomicilio, cPerTelefono, cPerCelular, nPerPersoneria, cPerDOI, cPerEmail)
VALUES
('10000', 'CARLOS MANUEL', 'GRANDEZ', 'CHOTA', '1997-06-25', 'Pje, Manuel Pacaya', '921878651', '921878651' , 1 , '70680860', 'carlosgrandez97@gmail.com')



SELECT * FROM  tbl_persona;
/* =======================================================================
Estructura de datos:  tbl_Empleado
======================================================================= */
DROP TABLE IF EXISTS tbl_Empleado;

CREATE TABLE tbl_Empleado (
cPerCod VARCHAR(15) PRIMARY KEY NOT NULL , 
idCargo INT 
);

INSERT INTO tbl_Empleado VALUES('10000', 2) ;

/* =======================================================================
Estructura de datos:  tbl_User
======================================================================= */
DROP TABLE IF EXISTS tbl_User;

CREATE TABLE tbl_User(
cPerCod					VARCHAR(10)		PRIMARY KEY  NOT NULL,
cUser						NVARCHAR(100)	NOT NULL,
cPerPass					VARCHAR(50)		NOT NULL ,
cFoto						NVARCHAR(50)	NULL  ,
cPerfil					VARCHAR(50)		NULL  ,
dUltimaActualizacion	TIMESTAMP		NOT NULL  DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tbl_User (cPerCod,cUser, cPerPass )
VALUES('10000', 'CAMA', '123') ;

/*=======================================================================*/
--Estructura de datos:  tbl_IngresoSesiones
/*=======================================================================*/
DROP TABLE IF EXISTS tbl_IngresoSesiones;

CREATE TABLE  tbl_IngresoSesiones (
cPerCod		VARCHAR(10)	    NOT NULL,
dFecha		TIMESTAMP		NOT NULL  DEFAULT CURRENT_TIMESTAMP, 
bEstado		BIT		        NOT NULL DEFAULT 0 
);

/*=======================================================================*/
--Estructura de datos:  tbl_Cliente
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_Cliente', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Cliente END 
GO */

DROP TABLE IF EXISTS tbl_Cliente;

CREATE TABLE tbl_Cliente (
cPerCod VARCHAR(25) NOT NULL  NOT NULL PRIMARY KEY 
);

/*=======================================================================*/
--Estructura de datos:  tbl_Proveedor
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_Proveedor', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Proveedor END 
GO */
DROP TABLE IF EXISTS tbl_Proveedor;

CREATE TABLE tbl_Proveedor (
cPerCod VARCHAR(25) NOT NULL
);


/*=======================================================================*/
--Estructura de datos:  tbl_Venta
/*=======================================================================*/
--IF OBJECT_ID('dbo.tbl_Movimientos', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Movimientos END 
--GO
DROP TABLE IF EXISTS tbl_Movimientos;

CREATE TABLE tbl_Movimientos(
idMov			INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
cMov			VARCHAR(21),
cDescripcion	VARCHAR(100),
bEstado			BIT DEFAULT 0 
);

--INSERT INTO tbl_Movimientos (cMov, cDescripcion)
--VALUES ('20230223000750643ADMN', 'Venta de prueba') 

/*=======================================================================*/
--Estructura de datos:  tbl_Venta
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_Venta', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Venta END 
GO */

DROP TABLE IF EXISTS tbl_Venta;

CREATE TABLE tbl_Venta(
idVenta		INT			NOT NULL,
dFecha		DATETIME	NOT NULL,
cUser		VARCHAR(10) NOT NULL,
idCliente	VARCHAR(15) NOT NULL,
nTotal		MONEY		NOT NULL, 
nNro		VARCHAR(10) NOT NULL
);

--INSERT INTO tbl_Venta (idVenta, dFecha,	cUser,	idCliente,	nTotal,	nNro)
--VALUES (1, GETDATE(), 'CARLOS', '3123123321', 560.32, 'BOLETA-01')

/*=======================================================================*/
--Estructura de datos:  tbl_DetalleVenta
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_DetalleVenta', 'U')IS NOT NULL BEGIN DROP TABLE tbl_DetalleVenta END 
GO */
DROP TABLE IF EXISTS tbl_DetalleVenta;

CREATE TABLE tbl_DetalleVenta(
idVenta		INT NOT NULL,
idProducto	INT,
nCantidad	INT,
nPrecio		MONEY,
nDescuento	MONEY, 
nImporte	MONEY
);

--INSERT INTO tbl_DetalleVenta VALUES
--(1, 3,2, 2.3, 0, 2.3),
--(1, 4,2, 2.3, 0, 2.3)

--select * FROM tbl_Movimientos M 
--INNER JOIN tbl_Venta C ON M.idMov = C.idVenta
--INNER JOIN tbl_DetalleVenta D ON C.idVenta = D.idVenta



/*=======================================================================*/
--Estructura de datos:  tbl_Persona
/*=======================================================================*/







/*=======================================================================*/
--Estructura de datos:  tbl_Producto
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_Producto', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Producto END 
GO */
DROP TABLE IF EXISTS tbl_Producto;

CREATE TABLE tbl_Producto (
idProducto		INT 		NOT NULL PRIMARY KEY AUTO_INCREMENT,
cNombres		VARCHAR(25)	NOT NULL,
cDescripcion	VARCHAR(25)	NOT NULL,
nPrecio			DECIMAL(10, 3)	    NOT NULL,
dFechaRegistro	DATE	    NULl  DEFAULT CURRENT_TIMESTAMP, 
idCatProducto	INT			NOT NULl, 
bEstado			BIT			NOT NULL DEFAULT 0
);

INSERT INTO tbl_Producto (cNombres, cDescripcion, nPrecio, idCatProducto)
VALUES ('Infuciones', 'Infuciones', 2.5, 100), 
('Cafe', 'Cafe', 2.5, 100), 
('Cocoa', 'Cocoa', 2.5, 11001), 
('Leche', 'Leche', 2.5, 100),
('Chapo de capirona', 'Chapo de capirona', 2.5, 100),
('Avena', 'Avena', 2.5, 100), 
('Quinua', 'Quinua', 2.5, 100),
('Chaufa C/ Pollo', 'Chaufa C/ Pollo', 7.5, 101),
('Chaufa C/ Chorizo', 'Chaufa C/ Chorizo', 7.5, 101),
('Chaufa C/ Huevo', 'Chaufa C/ Huevo', 7.5, 101),
('Chaufa C/ Tortilla', 'Chaufa C/ Tortilla', 7.5, 101),
('Chaufa C/ Chuleta', 'Chaufa C/ Chuleta', 7.5, 101),
('Tacacho arrecho', 'Tacacho arrecho', 7.5, 101),
('Juanes', 'Juanes', 7.5, 101),
('Surtido', 'Surtido', 3.5, 102),
('Papaya', 'Papaya', 3.5, 102),
('Naranja', 'Naranja', 3.5, 102),
('Especial', 'Especial', 3.5, 102),
('Camu camu', 'Camu camu', 3.5, 102),
('Chicha morada', 'Chicha morada', 3.5, 102),
('Maracuya', 'Maracuya', 3.5, 102),
('Pan C/ Tortilla', 'Pan C/ Tortilla', 4.5, 103),
('Pan C/ Huevo', 'Pan C/ Huevo', 4.5, 103),
('Pan C/ Pollo', 'Pan C/ Pollo', 4.5, 103),
('Pan C/ Palta', 'Pan C/ Palta', 4.5, 103),
('Pan C/ Queso', 'Pan C/ Queso', 4.5, 103),
('Pan C/ Jamonada', 'Pan C/ Jamonada', 4.5, 103),
('Pan integral', 'Pan integral', 4.5, 103),
('Galletas', 'Pan integral', 1.5, 104),
('Kekitos', 'Kekitos', 1.5, 104),
('Palitos de anis', 'Palitos de anis', 1.5, 104),
('Rosquitas', 'Rosquitas', 1.5, 104),
('Chocolates', 'Chocolates', 1.5, 104),
('Chifles', 'Chifles', 1.5, 104),
('Tostadas', 'Tostadas', 1.5, 104);

--SELECT *  FROM tbl_Producto
/*=======================================================================*/
--Estructura de datos:  tbl_UnidadMedida
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_UnidadMedida', 'U')IS NOT NULL BEGIN DROP TABLE tbl_UnidadMedida END 
GO */
DROP TABLE IF EXISTS tbl_UnidadMedida;

CREATE TABLE tbl_UnidadMedida (
uni_id		        INT 		NOT NULL PRIMARY KEY AUTO_INCREMENT,
uni_descripcion	    VARCHAR(25)	NOT NULL,
uni_simbolo		    VARCHAR(25)	NOT NULL,
uni_dFechaRegistro	DATETIME	NOT NULL NOT NULL DEFAULT CURRENT_TIMESTAMP, 
uni_estado			BIT			NOT NULL DEFAULT 0
);

INSERT INTO tbl_UnidadMedida (uni_descripcion, uni_simbolo)
VALUES ('kilogramo', 'Kg' ),
('Cantidad', 'Und' ),
('Litro', 'L' );

SELECT * FROM tbl_UnidadMedida;
/*=======================================================================*/
--Estructura de datos:  tbl_CategoriaProducto
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_CategoriaGeneral', 'U')IS NOT NULL BEGIN DROP TABLE tbl_CategoriaGeneral END 
GO */
DROP TABLE IF EXISTS tbl_CategoriaGeneral;

CREATE TABLE tbl_CategoriaGeneral (
cat_id	            INT                 NOT NULL PRIMARY KEY AUTO_INCREMENT,
cat_nombres		    VARCHAR(25)			NOT NULL,
cat_descripcion	    VARCHAR(25)			NOT NULL,
cat_dFechaRegistro	DATETIME			NOT NULL NOT NULL DEFAULT CURRENT_TIMESTAMP,
cat_estado			BIT					NOT NULL DEFAULT 0
);

INSERT INTO tbl_CategoriaGeneral (cat_nombres, cat_descripcion)
VALUES ('BEBIDAS','BEBIDAS'), 
('PLATOS','PLATOS'), 
('REFRESCOS Y JUGOS','REFRESCOS Y JUGOS'),
('SANDWICHES','SANDWICHES'), 
('SNACKS','SNACKS'),
('SAL','SAL');


SELECT * FROM tbl_CategoriaGeneral;
/*=======================================================================*/
--Estructura de datos:  tbl_CategoriaProducto
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_Mesa', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Mesa END 
GO */
DROP TABLE IF EXISTS tbl_Mesa;

CREATE TABLE tbl_Mesa (
cMesaNro		CHAR(3)			NOT NULL  PRIMARY KEY ,
cDescripcion	NVARCHAR(50)	NOT NULL,
bEstado			BIT				NOT NULL DEFAULT 0
);

INSERT INTO tbl_Mesa  (cMesaNro,cDescripcion )VALUES
('001', 'Mesa #1')

--SELECT * FROM tbl_Mesa

/*=======================================================================*/
--Estructura de datos:  tbl_Notificacion
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_Notificacion', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Notificacion END 
GO */
DROP TABLE IF EXISTS tbl_Notificacion;

CREATE TABLE tbl_Notificacion (
nNroNot			INT			NOT NULL PRIMARY KEY IDENTITY(1,1),
cValor			VARCHAR(50)	NOT NULL,
cDescripcion	VARCHAR(50)	NOT NULL,
bEstado			BIT			NOT NULL DEFAULT 0
);

INSERT INTO tbl_Notificacion (cValor, cDescripcion) VALUES
('bg-primary', 'Se ha realizado la operacion exitosamente!')

--select * from tbl_Notificacion

/*=======================================================================*/
--Estructura de datos:  tbl_Notificacion
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_Ingrediente', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Ingrediente END 
GO */



INSERT INTO tbl_Ingrediente  (ing_descripcion, ing_precio_compra,ing_tpo_unidad )VALUES 
('Sal Yodada', 0.7, 10);

SELECT * FROM tbl_Ingrediente;
/*=======================================================================*/
--Estructura de datos:  tbl_Configuracion
/*=======================================================================*/
/* IF OBJECT_ID('dbo.tbl_Configuracion', 'U')IS NOT NULL BEGIN DROP TABLE tbl_Configuracion END 
GO */
DROP TABLE IF EXISTS tbl_Configuracion;

CREATE TABLE tbl_Configuracion(
config_id               INT 		    NOT NULL PRIMARY KEY AUTO_INCREMENT,
config_nombre           VARCHAR(190),
config_valor	        VARCHAR(100)	NOT NULL, 
config_variable         VARCHAR(50) ,    
config_FechaCambio	    DATETIME		NOT NULL DEFAULT CURRENT_TIMESTAMP,
config_UserCambio       INT		         DEFAULT 1
);

INSERT INTO tbl_Configuracion (config_nombre,config_valor,config_variable) VALUES
('Nombre proyecto', 'Buen Provecho', 'inputNombreProyecto') , 
('Descripción corta', 'Pagina de titulo' , 'inputNombreCorto') ,
('Dirección de Proyecto (URL)', 'http://localhost/proyecto','inputDireccionProyecto'), 
('Dirección del sitio (URL)', 'http://localhost/proyecto','inputDireccionSitio'),
('Puerto local(Desarrollo)', '80','inputPuertoLocal'),
('Dirección de correo electrónico de administración', 'carlosgrandez97@gmail.com','inputCorreoAdm'),
('Perfil por defecto para los nuevos usuarios', 1,'inputPerfilUsser')
;

SELECT * FROM tbl_Configuracion;
/*=======================================================================*/
--Estructura de datos:  tbl_Mesa
/*=======================================================================*/

DROP TABLE IF EXISTS tbl_Mesa;

CREATE TABLE tbl_Mesa(
mesa_id               INT 		    NOT NULL PRIMARY KEY AUTO_INCREMENT,
mesa_nombre           VARCHAR(190),  
config_Creacion	    DATETIME	 NOT NULL DEFAULT CURRENT_TIMESTAMP,
config_estado       INT	NULL DEFAULT 0
);


INSERT INTO tbl_Mesa (mesa_nombre )  VALUES ('MESA N° #1') ;

/*=======================================================================*/
--Estructura de datos:  tbl_Lugar | zona | lugar
/*=======================================================================*/

DROP TABLE IF EXISTS tbl_Lugar;

CREATE TABLE tbl_Lugar(
lugar_id               INT 		    NOT NULL PRIMARY KEY AUTO_INCREMENT,
lugar_nombre           VARCHAR(190),  
lugar_Creacion	    DATETIME	 NOT NULL DEFAULT CURRENT_TIMESTAMP,
lugar_estado       INT	NULL DEFAULT 0
);


INSERT INTO tbl_Lugar (lugar_nombre )  VALUES ('PISO 1') ;

SELECT * FROM tbl_Lugar;

/*=======================================================================*/
--Estructura de datos:  tbl_Perfil
/*=======================================================================*/

DROP TABLE IF EXISTS tbl_Perfil;

CREATE TABLE tbl_Perfil(
perfil_id           INT 	NOT NULL PRIMARY KEY AUTO_INCREMENT,
perfil_decripcion   VARCHAR(190),  
perfil_Creacion	    DATETIME	 NOT NULL DEFAULT CURRENT_TIMESTAMP,
perfil_estado       INT	NULL DEFAULT 0
);


INSERT INTO tbl_Perfil (perfil_decripcion )  VALUES 
('Cliente'), 
('Empleado'),
('Almacen'),
('Administrador');

SELECT * FROM tbl_Perfil;


/*=======================================================================*/
--Estructura de datos:  tbl_tmp_cab_vent
/*=======================================================================*/
DROP TABLE IF EXISTS tbl_tmp_cab_vent;

CREATE TABLE tbl_tmp_cab_vent(
tmp_cab_vent_id           	INT 			NOT NULL PRIMARY KEY AUTO_INCREMENT,
tmp_cab_vent_id_cli   		VARCHAR(190),  
tmp_cab_vent_Creacion	    DATETIME	 	NOT NULL DEFAULT CURRENT_TIMESTAMP,
tmp_cab_vent_estado       	INT				NULL DEFAULT 0
);


/*=======================================================================*/
--Estructura de datos:  tbl_tmp_det_vent
/*=======================================================================*/
DROP TABLE IF EXISTS tbl_tmp_det_vent;

CREATE TABLE tbl_tmp_det_vent(
tmp_cab_vent_id           	INT 			NOT NULL PRIMARY KEY AUTO_INCREMENT,
tmp_cab_vent_id_cli   		VARCHAR(190),  
tmp_cab_vent_Creacion	    DATETIME	 	NOT NULL DEFAULT CURRENT_TIMESTAMP,
tmp_cab_vent_estado       	INT				NULL DEFAULT 0
);
