<?PHP

function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

print "Cron Job started\n";

$user_name = "admin";
$password = "Wqr1Na;0z8ZC";
$database = "dbtodoconstruimos";
$server = "23.229.133.39";

$db = new mysqli($server, $user_name, $password, $database);   

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
/*
	$randnum2 = generateRandomString(4);
	$date_now2 = new DateTime();
	$i =1;
	//Test
$sql = "INSERT INTO tabla_test (fecha, datos, datosint) VALUES ('". $date_now2->format('Y-m-d H:i:s')."', '".$randnum2."', ".$i.")";

if($db->query($sql)=== false){
    die('There was an error running the query [' . $db->error . ']');
}
*/

	
	

//SELECT
$SQL1 = "SELECT * FROM cobros AS C WHERE fechaExpiracion IS NOT  NULL AND DATEDIFF(fechaExpiracion, CURDATE()) < 1 AND NOT EXISTS (SELECT * FROM cobros_pendientes AS P WHERE cobro_id=C.id)";

$rs1=$db->query($SQL1);
while($rowCobros = $rs1->fetch_assoc()){

	$randnum = generateRandomString(4);
	$date_now = new DateTime();
	
	//Obtener datos de cobro
	$cobro_id = $rowCobros['id'];
	$cobro_tipoid = $rowCobros['tipo_id'];
	$cobro_datosAdicionales = $rowCobros['datosAdicionales'];
	
	//Obtener row de cobroTipo con el tipo_id del row de cobros
	$SQL2 = "SELECT * FROM cobro_tipo WHERE id = ". $cobro_tipoid;
	$rs2=$db->query($SQL2);
	$rowCobroTipo = $rs2->fetch_assoc();
	
	$cobrop_cobroid = $cobro_id;
	$cobrop_fecha  = $date_now;

	$codigoTipoCobro= '';
	if($rowCobroTipo['tipo'] = 'clasificado_premium')
		$codigoTipoCobro = 'CLASF';
	if($rowCobroTipo['tipo'] = 'ser_proveedor')
		$codigoTipoCobro = 'PROV';
	if($rowCobroTipo['tipo'] = 'imagen_proveedor')
		$codigoTipoCobro = 'PROVIMG';	
	$cobrotipoprefix = substr ( $rowCobroTipo['tipo'] , 0, 7 );
	if($cobrotipoprefix == 'BANNER-')
		$codigoTipoCobro = 'BANN';	
	$rs2->free();
	
	$cobrop_concepto = 'TODCONS'.$cobro_id . $codigoTipoCobro.$cobro_datosAdicionales.$date_now->format('YmdHi').$randnum; // Concepto = clave_empresa+ clave_cobro+ clave_tipo_cobro + clave_objeto_de_cobro + fecha+4_digitos_random (Por favor mejorar!!)

	//Insertar nuevo row de cobros pendientes
	$SQL3 = "INSERT INTO cobros_pendientes (cobro_id, fecha, cobro_concepto, created_at, updated_at) VALUES (". $cobrop_cobroid.", '".$date_now->format('Y-m-d H:i:s')."', '".$cobrop_concepto."', '".$date_now->format('Y-m-d H:i:s')."', '". $date_now->format('Y-m-d H:i:s')."')";
	if($db->query($SQL3)=== false){
		die('There was an error running the query [' . $db->error . ']');
	}	
	$last_inserted_id = $db->insert_id;
	print "New cobro_pendiente added (".$last_inserted_id.")\n";
	
	//print "INSERT INTO cobros_pendientes (cobro_id, fecha, cobro_concepto) VALUES (". $cobrop_cobroid.", '".$date_now->format('Y-m-d H:i:s')."', '".$cobrop_concepto."')\n";
	
}
$rs1->free();

$db->close();


?>