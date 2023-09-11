<?php 

require '../config/conexion.php';

if (isset($_POST['obActivo'])) {
	$codigo = $_POST['codigo'];
	$query = "
				SELECT 
distinct X.CODIGO_ACTIVO activo,
X.DESCRIPCION ,  
(SELECT  MA.NOMBRE FROM   MARCA MA WHERE MA.MARCA=X.MARCA AND MA.ESTADO='A' AND MA.TIPO_MARCA=1) AS MARCA,
X.MODELO,
X.NRO_SERIE,
X.NRO_ORDEN, 
X.VALOR_COMPRA, 
X.FECHA_COMPRA, 
X.FEC_FIN_VIDA,  
(SELECT PE.APELLIDO_PATERNO||' '||PE.APELLIDO_MATERNO||' '||PE.NOMBRES FROM SIG_PERSONAL PE WHERE PE.EMPLEADO=X.EMPLEADO_FINAL)  EMPLEADO_FINAL,

'' ESTADO_ACTUAL,
  
DECODE(ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0),NULL,0,ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0))        as ANIO_USO , 
                 
(SELECT C.NOMBRE_PROV FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) PROVEEDOR,
(SELECT C.EMAIL FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) EMAIL,
(SELECT C.TELEFONOS FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) TELEFONOS, ':' COMILLAS 

       FROM  SIG_PATRIMONIO X
       
       
       
     /*   WHERE NOT  EXISTS (

SELECT * FROM INVJ WHERE CODIG_PATRI = X.CODIGO_ACTIVO )*/
 
                        
        WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22  AND X.CODIGO_ACTIVO = '$codigo')
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08  AND X.CODIGO_ACTIVO = '$codigo')
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22  AND X.CODIGO_ACTIVO = '$codigo')
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22  AND X.CODIGO_ACTIVO = '$codigo')
			";


	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data=$stmt->fetch();

	echo json_encode($data);	
}



if (isset($_POST['getAllxQuatity'])) {
	
	$query = "SELECT distinct DESCRIPCION, count(*) AS CANTIDAD from sig_patrimonio  where descripcion = 'ACUMULADOR DE ENERGIA - EQUIPO DE UPS' group by descripcion  order by descripcion asc";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}




if (isset($_POST['getComPor'])) {
	$query = "SELECT DESCRIPCION, COUNT(*) AS CANTIDAD  from sig_patrimonio where descripcion = 'COMPUTADORA PERSONAL PORTATIL' 
and estaDo_actual = 'S' GROUP BY DESCRIPCION";

	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}
if (isset($_POST['getAllinOne'])) {
	$query = "SELECT  (
			(select COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'MONITOR CON PROCESADOR INTEGRADO 23.8 in 3.00 Ghz RAM 8 GB ALMACENAMIENTO 512 GB' AND estaDo_actual = 'S')
			+
			(select COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'MONITOR CON PROCESADOR INTEGRADO TACTIL 23 in 3.9 Ghz RAM 16 GB ALMACENAMIENTO 1 TB' AND estaDo_actual = 'S')
			) AS CANTIDAD_ALL_IN_ONE FROM DUAL";

	$stmt = $conn->prepare($query);
	$stmt->execute();

	$data = $stmt->fetch();
	echo json_encode($data);
}

if (isset($_POST['getCPU2'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'UNIDAD CENTRAL DE PROCESO - CPU' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}

if (isset($_POST['getMoniColor'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'MONITOR A COLOR' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}

if (isset($_POST['getMonLed'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'MONITOR LED' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);

}

if (isset($_POST['getMoniLed215'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'MONITOR LED 21.5 in' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);	
	$stmt->execute();
	$data = $stmt->fetch();
	echo json_encode($data);
}

if (isset($_POST['getMoniLed24'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'MONITOR LED 24 in' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();

	$data = $stmt->fetch();
	echo json_encode($data);
}


if (isset($_POST['getImpCodBar'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'IMPRESORA DE CODIGO DE BARRAS' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}

if (isset($_POST['getImtar'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'IMPRESORA DE TARJETAS' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}





if (isset($_POST['getImpPlotter'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'IMPRESORA PARA PLANOS - PLOTTERS' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}


if (isset($_POST['getScanner1'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'CAPTURADOR DE IMAGEN - SCANNER' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}







if (isset($_POST['getTelefono'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'TELEFONO' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}

if (isset($_POST['getCelular'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'TELEFONO CELULAR' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}

if (isset($_POST['verTotTelefono'])) {
	$query = "SELECT X.CODIGO_ACTIVO, X.MODELO, X.NRO_SERIE,X.FECHA_COMPRA, t.NOMBRE, X.VALOR_COMPRA, X.NRO_ORDEN
			FROM SIG_PATRIMONIO X 
			INNER JOIN MARCA t
			ON x.marca = t.marca 
			WHERE X.ESTADO_ACTUAL = 'S' AND X.DESCRIPCION = 'TELEFONO'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();

	echo json_encode($data);
}

if (isset($_POST['verTotCelular'])) {
	$query = "SELECT X.CODIGO_ACTIVO, X.MODELO, X.NRO_SERIE,X.FECHA_COMPRA, t.NOMBRE, X.VALOR_COMPRA, X.NRO_ORDEN
			FROM SIG_PATRIMONIO X 
			INNER JOIN MARCA t
			ON x.marca = t.marca 
			WHERE X.ESTADO_ACTUAL = 'S' AND X.DESCRIPCION = 'TELEFONO CELULAR'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();

	echo json_encode($data);
}

if (isset($_POST['verTelefonoCelular'])) {
	$query = "SELECT X.CODIGO_ACTIVO, X.MODELO, X.NRO_SERIE,X.FECHA_COMPRA, t.NOMBRE, X.VALOR_COMPRA, X.NRO_ORDEN
				FROM SIG_PATRIMONIO X 
				INNER JOIN MARCA t
				ON x.marca = t.marca 
				WHERE X.ESTADO_ACTUAL = 'S' AND ((X.DESCRIPCION = 'TELEFONO') OR (X.DESCRIPCION = 'TELEFONO CELULAR'))";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();

	echo json_encode($data);
}

if (isset($_POST['getups1'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'ACUMULADOR DE ENERGIA - EQUIPO DE UPS' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}

if (isset($_POST['getups2'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'ACUMULADOR DE ENERGIA - EQUIPO DE UPS 2 KVA' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);
}

if (isset($_POST['getTotUPS1'])) {
	$query = "SELECT DISTINCT  x.descripcion, X.CODIGO_ACTIVO, X.MODELO, X.NRO_SERIE,X.FECHA_COMPRA, X.MARCA, X.VALOR_COMPRA, X.NRO_ORDEN, x.estado_actual
        FROM SIG_PATRIMONIO X  
        WHERE X.ESTADO_ACTUAL = 'S' AND X.DESCRIPCION = 'ACUMULADOR DE ENERGIA - EQUIPO DE UPS 2 KVA'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();

	echo json_encode($data);

}

if (isset($_POST['getTotUPS2'])) {
	$query = "SELECT ROW_NUMBER() OVER (ORDER BY X.DESCRIPCION) AS ITEM,  x.descripcion, X.CODIGO_ACTIVO, X.MODELO, X.NRO_SERIE,X.FECHA_COMPRA, X.MARCA, X.VALOR_COMPRA, X.NRO_ORDEN, x.estado_actual
        FROM SIG_PATRIMONIO X  
        WHERE X.ESTADO_ACTUAL = 'S' AND X.DESCRIPCION = 'ACUMULADOR DE ENERGIA - EQUIPO DE UPS 2 KVA'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();

	echo json_encode($data);
}

if (isset($_POST['getRefrendador'])) {
	$query = "SELECT descripcion, COUNT(*)AS CANTIDAD from sig_patrimonio where descripcion = 'REFRENDADOR' AND estaDo_actual = 'S' group by descripcion";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);

}


if(isset($_POST['ob_nro_orden'])){
	$anio = $_POST['anio'];
	$nro = $_POST['nro'];
	$tipo_orden = $_POST['tipo_orden'];

	$query = "SELECT ANO_EJE,SEC_EJEC, NRO_ORDEN, ANO_CUADRO, PROVEEDOR,MES_CALEND,FECHA_ORDEN, DOCUM_REFERENCIA, CONCEPTO, TOTAL_FACT_SOLES , MODAL_COMPRA, EXP_SIAF, EXP_SIGA
			  FROM SIG_ORDEN_ADQUISICION where NRO_ORDEN = $nro AND (ANO_EJE = '$anio' AND TIPO_BIEN = '$tipo_orden')";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();

	echo json_encode($data);
}

if (isset($_POST['obTodo'])) {
	$query = "
				SELECT 
distinct X.CODIGO_ACTIVO activo,
X.DESCRIPCION ,  
(SELECT  MA.NOMBRE FROM   MARCA MA WHERE MA.MARCA=X.MARCA AND MA.ESTADO='A' AND MA.TIPO_MARCA=1) AS MARCA,
X.MODELO,
X.NRO_SERIE,
X.NRO_ORDEN, 
X.VALOR_COMPRA, 
X.FECHA_COMPRA, 
X.FEC_FIN_VIDA,  
(SELECT PE.APELLIDO_PATERNO||' '||PE.APELLIDO_MATERNO||' '||PE.NOMBRES FROM SIG_PERSONAL PE WHERE PE.EMPLEADO=X.EMPLEADO_FINAL)  EMPLEADO_FINAL,

'' ESTADO_ACTUAL,
  
DECODE(ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0),NULL,0,ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0))        as ANIO_USO , 
                 
(SELECT C.NOMBRE_PROV FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) PROVEEDOR,
(SELECT C.EMAIL FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) EMAIL,
(SELECT C.TELEFONOS FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) TELEFONOS 

       FROM  SIG_PATRIMONIO X
       
       
       
     /*   WHERE NOT  EXISTS (

SELECT * FROM INVJ WHERE CODIG_PATRI = X.CODIGO_ACTIVO )*/
 
                        
       WHERE  ((GRUPO_BIEN = 46 AND CLASE_BIEN = 22  )
       OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08  )
       OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22  )
       OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22 ))
      --- and not exists (select 'x' from invj j where TRIM(j.codig_patri)=TRIM(x.codigo_activo))

            ";
     $stmt = $conn->prepare($query);
     $stmt->execute();
     $data = $stmt->fetchAll();

     echo json_encode($data);
}

if (isset($_POST['relacionar'])) {
	$query = "
				SELECT DISTINCT X.CODIGO_ACTIVO, X.DESCRIPCION
                            FROM  SIG_PATRIMONIO X
                            WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22 )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08 )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22 )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22 )
                           ORDER BY X.DESCRIPCION
            ";
     $stmt = $conn->prepare($query);
     $stmt->execute();
     $data = $stmt->fetchAll();
}

if (isset($_POST['notificaciones'])) {
	$query = "
			      SELECT DESCRIPCION,COLOR ,ICON , CANTIDAD , TOTAL from (

select 'NUEVOS' DESCRIPCION, 'success' COLOR ,'fas fa-thumbs-up' ICON ,count(*) AS CANTIDAD , total from (select  codigo_activo , resta, total from (
SELECT distinct x.codigo_activo 
 , DECODE(ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0),NULL,0,ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0))   as resta   

, ( SELECT COUNT(DISTINCT(S.CODIGO_ACTIVO)) FROM SIG_PATRIMONIO S WHERE 
                                  (GRUPO_BIEN = 46 AND CLASE_BIEN = 22    )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08   )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22   )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22  ))  TOTAL 
                             
                                   
                            FROM  SIG_PATRIMONIO X
                            WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22    )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08   )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22   )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22  )                        
                           
                           )   where resta <=3
                           
                       ) group by total
                       
                       
 union all
 select 'POR VENCER' DESCRIPCION,'warning' COLOR,'fas fa-exclamation-triangle' ICON, count(*) AS CANTIDAD , total from (select codigo_activo,resta, total from (
SELECT DISTINCT
 codigo_activo, DECODE(ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0),NULL,0,ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0))   as resta   

, ( SELECT COUNT(DISTINCT(S.CODIGO_ACTIVO)) FROM SIG_PATRIMONIO S WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22    )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08   )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22   )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22  ))  TOTAL
                             
                                   
                            FROM  SIG_PATRIMONIO X
                            WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22    )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08   )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22   )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22  )                        
                           
                           )   where resta >=4 AND resta <=5
                           
                       ) group by total
                       
                       
UNION ALL
 

 
 select 'DAR DE BAJA' DESCRIPCION, 'danger' COLOR,'fas fa-thumbs-down' ICON ,count(*) AS CANTIDAD , total from (select CODIGO_ACTIVO, resta, total from (
SELECT DISTINCT CODIGO_ACTIVO,
  DECODE(ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0),NULL,0,ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0))   as resta   

, ( SELECT COUNT(DISTINCT(S.CODIGO_ACTIVO)) FROM SIG_PATRIMONIO S WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22   )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08   )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22   )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22  ))  TOTAL
                             
                                   
                            FROM  SIG_PATRIMONIO X
                            WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22    )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08   )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22   )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22  )                        
                           
                           )   where resta >5
                           
                       ) group by total
                   ) group BY DESCRIPCION,COLOR,ICON, CANTIDAD, TOTAL

			";

	$stmt= $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();
	echo json_encode($data);
}

if (isset($_POST['mostrarNow'])) {
	$query = "
			  SELECT CODIGO_ACTIVO, DESCRIPCION, FECHA_COMPRA, resta from (
			      SELECT DISTINCT X.CODIGO_ACTIVO,X.DESCRIPCION, X.FECHA_COMPRA,
			      DECODE(ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0),NULL,0,ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0))   as resta   
			      FROM  SIG_PATRIMONIO X
			      WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22 AND ESTADO_ACTUAL = 'S'   )
			      OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08 AND ESTADO_ACTUAL = 'S'  )
			      OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22 AND ESTADO_ACTUAL = 'S'  )
			      OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22 AND ESTADO_ACTUAL = 'S' )                     
			   )   where resta = 5
			";
	$stmt= $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();
	echo json_encode($data);
}


if(isset($_POST['obAll'])){
	$query = "
		SELECT 'CANTIDAD TOTAL DISTINGUIDOS POR EL CODIGO PATRIMONIAL' DESCRIPCION,  count(*) CANTIDAD
		FROM (SELECT DISTINCT X.CODIGO_ACTIVO  
		FROM SIG_PATRIMONIO X
		WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22)
         OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08 )
         OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22)
         OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22  )
         GROUP BY  X.CODIGO_ACTIVO
        )

	";

	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetch();

	echo json_encode($data);


}

if (isset($_POST['obMayor5'])) {
	$query = "
		SELECT descripcion ,   count(*) cantidad  FROM (

select * from (
SELECT DISTINCT X.CODIGO_ACTIVO,X.DESCRIPCION,    ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0)   as resta         
                            FROM  SIG_PATRIMONIO X
                            WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22 AND ESTADO_ACTUAL = 'S'   )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08 AND ESTADO_ACTUAL = 'S'  )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22 AND ESTADO_ACTUAL = 'S'  )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22 AND ESTADO_ACTUAL = 'S' )
                           ORDER BY X.DESCRIPCION
                           
                           
                           )   where resta >5 ) group by descripcion  

	";

	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();

	echo json_encode($data);
}
if (isset($_POST['obProtocoloInternet'])) {
	$query = " SELECT * FROM IP_PROTOCOL";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();
	echo json_encode($data);
}

if (isset($_POST['SavCambios'])) {
	$protocolo 		= trim($_POST['ip']);
	$activo 	= $_POST['activo'];
	$usuario 	= $_POST['usuario'];
	$area 		= $_POST['area'];
	$host 		= $_POST['host'];
	$query 		= "UPDATE IP_PROTOCOL SET 
										  TIPO_ACTIVO = '$activo',
										  HOST = '$host',
										  USUARIO = '$usuario',
										  AREA = '$area'
										  WHERE IP = '$protocolo'";
	
	//echo $query; exit;
	$busqueda=$conn->prepare($query);
	if($busqueda->execute()){
	 	$data = "OK";
	}else{
	 	$data = $conn->errorInfo();
	}

	echo json_encode($data);
}

if (isset($_POST['savNuevoIp'])) {
	$protocolo 	= trim($_POST['ip']);
	$activo 	= $_POST['activo'];
	$usuario 	= $_POST['usuario'];
	$area 		= $_POST['area'];
	$host 		= $_POST['host'];

	$consulta = "SELECT count(*) CANTIDAD from IP_PROTOCOL where ip = '$protocolo'";
    $cons = $conn->prepare($consulta);
    $cons->execute();
    $res=$cons->fetch();

    if ($res['CANTIDAD']=="0") {
        $query = "INSERT INTO IP_PROTOCOL (IP, HOST, TIPO_ACTIVO, USUARIO, AREA) 
        							VALUES ('$protocolo','$host','$activo','$usuario','$area')";
       //echo $query;
        //exit;
        $busqueda=$conn->prepare($query);

        if($busqueda->execute()){
           $data = "OK";
        }else{
            $data = $conn->errorInfo();
        }
    }else{
    	$data = "DUPLICADO";
        
    }

    echo json_encode($data);
}


if (isset($_POST['obAsignacion'])) {
	$nombre =  strtoupper($_POST['nombre']);
	$query = "
        
        SELECT * FROM (
SELECT 
distinct X.CODIGO_ACTIVO activo,
X.DESCRIPCION ,  
(SELECT  MA.NOMBRE FROM   MARCA MA WHERE MA.MARCA=X.MARCA AND MA.ESTADO='A' AND MA.TIPO_MARCA=1) AS MARCA,
X.MODELO,
X.NRO_SERIE,
X.NRO_ORDEN, 
X.VALOR_COMPRA, 
X.FECHA_COMPRA, 
X.FEC_FIN_VIDA,  
(SELECT PE.APELLIDO_PATERNO||' '||PE.APELLIDO_MATERNO||' '||PE.NOMBRES FROM SIG_PERSONAL PE WHERE PE.EMPLEADO=X.EMPLEADO_FINAL)  EMPLEADO_FINAL,

'' ESTADO_ACTUAL,
  
DECODE(ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0),NULL,0,ROUND((trunc(sysdate) - to_date( X.FECHA_COMPRA, 'dd/mm/yyyy'))/365,0))        as ANIO_USO , 
                 
(SELECT C.NOMBRE_PROV FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) PROVEEDOR,
(SELECT C.EMAIL FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) EMAIL,
(SELECT C.TELEFONOS FROM SIG_CONTRATISTAS C WHERE C.PROVEEDOR=X.PROVEEDOR) TELEFONOS, ':' COMILLAS 

       FROM  SIG_PATRIMONIO X
       
       
       
     /*   WHERE NOT  EXISTS (

SELECT * FROM INVJ WHERE CODIG_PATRI = X.CODIGO_ACTIVO )*/
 
                        
                             WHERE (GRUPO_BIEN = 46 AND CLASE_BIEN = 22    )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 08    )
                             OR   (GRUPO_BIEN = 74 AND CLASE_BIEN = 22   )
                             OR   (GRUPO_BIEN = 95 AND CLASE_BIEN = 22 )
                             
                             ) WHERE   EMPLEADO_FINAL LIKE '%$nombre%'
                             ";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$data = $stmt->fetchAll();
	echo json_encode($data);
}

if (isset($_POST['borrarTableInv'])) {
	$query = "DROP TABLE INV";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		$answer = "OK";
	}else{
		$answer = $conn->errorInfo();
	}
	echo json_encode($answer);
}

if (isset($_POST['crearTablaInv'])) {
	$query = "	CREATE TABLE INV(
				descripcion VARCHAR2(100),
				subcategoria VARCHAR2(100),
				ip VARCHAR2(100),
				marca VARCHAR2(100),
				modelo VARCHAR2(100),
				cod_patrimonial VARCHAR2(100),
				serie VARCHAR2(100),
				fec_compra VARCHAR2(100),
				anio_uso VARCHAR2(150),
				so VARCHAR2(100),
				procesor VARCHAR2(100),
				encargado VARCHAR2(100),
				area VARCHAR2(100),
				observacion VARCHAR2(100)

				)";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		$answer = "OK";
	}else{
		//$answer = "error";
		$answer = $conn->errorInfo();
	}
	echo json_encode($answer);
}

if (isset($_POST['trucarTablaInv'])) {
	$query = "TRUNCATE TABLE INV";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		$answer = "OK";
	}else{
		$answer = $conn->errorInfo();
	}
	echo json_encode($answer);
}


 ?>