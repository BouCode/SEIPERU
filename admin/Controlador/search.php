<?php

include_once ($_SERVER['DOCUMENT_ROOT'].'/prestacional/config.php');
include (CONTROLLER_PATH."conexion.php");


$function = $_GET['function'];

$conn = new PDO("mysql:host=".DB_SERVER.";charset=utf8;port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

							
function normaliza($cadena){
    $originales =  'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiionoooooouuuyybyRr';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    $cadena = strtoupper($cadena);
    return utf8_encode($cadena);
}



if($function=="pacienteDatos"){

	$NroDoc = $_GET['NroDoc'];
	$datos = array();

	try {
		
		$stmt = $conn->prepare("SELECT `idRegistro`, `usuario`, `TipoSeguro`, `iafa`, `NroCuenta`, `ApePaterno`,
		 `ApeMaterno`, `Nombres`, `edad`, `servicio`, `diagnostico`, `seguro`, `fechaIngreso`, `fechaCorte`, 
		 `HistoriaClinica`, `fe_in`, `estatus`, `feNacimiento`, `upss`, `nroliq`  FROM `regpaciente` WHERE idRegistro = :term " );
		$stmt->execute(array('term' => $NroDoc));
		
		
		while($row = $stmt->fetch()) {
			sort($datos, SORT_NATURAL | SORT_FLAG_CASE);

			$datos[] =  normaliza($row['TipoSeguro']);
			$datos[] =  normaliza($row['NroCuenta']);
			$datos[] =  $row['ApePaterno'];
			$datos[] =  $row['ApeMaterno'];
			$datos[] =  normaliza($row['Nombres']);		
			$datos[] =  normaliza($row['edad']);
			$datos[] =  normaliza($row['servicio']);
			$datos[] =  normaliza($row['diagnostico']);
			$datos[] =  normaliza($row['seguro']);
			$datos[] =  normaliza($row['fechaIngreso']);
			$datos[] =  normaliza($row['fechaCorte']);
			$datos[] =  normaliza($row['HistoriaClinica']);
			$datos[] =  $row['iafa'];
			$datos[] =  $row['feNacimiento'];
			$datos[] =  $row['upss'];
			$datos[] =  $row['nroliq'];
			$datos[] =  $row['estatus'];

		}
		

	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

	echo json_encode($datos,JSON_UNESCAPED_UNICODE);

}

else if($function=="pacienteDatosAuto"){

	$NroDoc = $_GET['NroDoc'];
	$datos = array();

	try {
		
		$stmt = $conn->prepare("SELECT `idRegistro`, `idUsuario`, `id_prestacion`, `IdCuentaAtencion`, `nro_documento_autorizacion`,
			`fecha_ingreso`, `fecha_alta`, `tipo_documento_responsable`, `nro_documento_responsable`, `apellido_paterno_responsable`,
			`apellido_materno_responsable`, `nombres_responsable`, `profesion_responsable`, `nro_colegiatura`, `codigo_especialidad`,
			`nro_registro_especialista`, `condicion_alta`, `fechaRegistro`, `estadoCuenta` FROM `imp_cuentas` 
			WHERE `IdCuentaAtencion`= :term "  );
		$stmt->execute(array('term' => $NroDoc));
		
		
		while($row = $stmt->fetch()) {
			sort($datos, SORT_NATURAL | SORT_FLAG_CASE);

			$datos[] =  $row['tipo_documento_responsable'];
			$datos[] =  $row['nro_documento_responsable'];
			$datos[] =  $row['apellido_paterno_responsable'];
			$datos[] =  $row['apellido_materno_responsable'];
			$datos[] =  $row['nombres_responsable'];		
			$datos[] =  $row['fecha_ingreso'];
			$datos[] =  $row['fecha_alta'];
			$datos[] =  $row['profesion_responsable'];
			$datos[] =  $row['nro_colegiatura'];
			$datos[] =  $row['codigo_especialidad'];
			$datos[] =  $row['nro_registro_especialista'];
			$datos[] =  $row['condicion_alta'];
			$datos[] =  $row['estadoCuenta'];

		}

	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

	echo json_encode($datos,JSON_UNESCAPED_UNICODE);

}



?>