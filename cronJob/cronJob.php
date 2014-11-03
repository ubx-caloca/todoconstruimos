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
	if($rowCobroTipo['tipo'] == 'clasificado_premium')
		$codigoTipoCobro = 'CLASF';
	if($rowCobroTipo['tipo'] == 'ser_proveedor')
		$codigoTipoCobro = 'PROV';
	if($rowCobroTipo['tipo'] == 'imagen_proveedor')
		$codigoTipoCobro = 'PROVIMG';	
	$cobrotipoprefix = substr ( $rowCobroTipo['tipo'] , 0, 7 );
	if($cobrotipoprefix == 'BANNER-')
		$codigoTipoCobro = 'BANN';	
	$rs2->free();
	
	$cobrop_concepto = 'TODCONS'.$cobro_id . $codigoTipoCobro.$cobro_datosAdicionales.$date_now->format('YmdHi').$randnum; // Concepto = clave_empresa+ clave_cobro+ clave_tipo_cobro + clave_objeto_de_cobro + fecha+4_digitos_random (Por favor mejorar!!)
	
	
	//Ver si existe el row del servicio asociado al cobro, si no existe parar para este cobro
	if($codigoTipoCobro == 'PROV'){	
		$SQL7="SELECT * FROM proveedores WHERE id=".$cobro_datosAdicionales;
		$rows7 = $db->query($SQL7);
		if($rows7==false){
			continue;
		}			
	}
	if($codigoTipoCobro == 'CLASF'){
		$SQL7="SELECT * FROM clasificados WHERE id=".$cobro_datosAdicionales;
		$rows7 = $db->query($SQL7);
		if($rows7==false){
			continue;
		}
	}	
	if($codigoTipoCobro == 'PROVIMG'){
		$SQL7="SELECT * FROM  proveedor_galeria WHERE id=".$cobro_datosAdicionales;
		$rows7 = $db->query($SQL7);
		if($rows7==false){
			continue;		
		}			
	}
		
	if($codigoTipoCobro == 'BANN'){
		$SQL7="SELECT * FROM banners WHERE id=".$cobro_datosAdicionales;
		$rows7 = $db->query($SQL7);
		if($rows7==false){
			continue;		
		}
	}		
	
	

	//Insertar nuevo row de cobros pendientes
	$SQL3 = "INSERT INTO cobros_pendientes (cobro_id, fecha, cobro_concepto, created_at, updated_at) VALUES (". $cobrop_cobroid.", '".$date_now->format('Y-m-d H:i:s')."', '".$cobrop_concepto."', '".$date_now->format('Y-m-d H:i:s')."', '". $date_now->format('Y-m-d H:i:s')."')";
	if($db->query($SQL3)=== false){
		die('There was an error running the query [' . $db->error . ']');
	}	
	$last_inserted_id = $db->insert_id;
	$tipoServicio = '';
	
	
	//Aqui ya depende del tipo de cobro
	if($codigoTipoCobro == 'PROV'){	
		$tipoServicio = 'Proveedor';
		//poner campo 'solicitar_premium' a 1 y habilitar de 1 a 0
		$SQL5="UPDATE proveedores SET solicitar_premium=1, habilitar=0 WHERE id=".$cobro_datosAdicionales;
		if($db->query($SQL5) === false) {
			die('There was an error running the update query [' . $db->error . ']');
		}				
	}
	if($codigoTipoCobro == 'CLASF'){
		$tipoServicio = 'Clasificado';
		//poner campo 'solicitar_premium' a 1 y premium de 1 a 0
		$SQL5="UPDATE clasificados SET solicitar_premium=1, premium=0 WHERE id=".$cobro_datosAdicionales;
		if($db->query($SQL5) === false) {
			die('There was an error running the update query [' . $db->error . ']');
		}
	}	
	if($codigoTipoCobro == 'PROVIMG'){
		$tipoServicio = 'Imagen_Proveedor';
		//poner campo 'premium' de 2 a 1
		$SQL5="UPDATE proveedor_galeria SET premium=1 WHERE id=".$cobro_datosAdicionales;
		if($db->query($SQL5) === false) {
			die('There was an error running the update query [' . $db->error . ']');
		}				
	}
		
	if($codigoTipoCobro == 'BANN'){
		$tipoServicio = 'Banner';
		//poner campo 'solicitar_habilitar' a 1 y habilitar de 1 a 0
		$SQL5="UPDATE banners SET solicitar_habilitar=1, habilitar=0 WHERE id=".$cobro_datosAdicionales;
		if($db->query($SQL5) === false) {
			die('There was an error running the update query [' . $db->error . ']');
		}					
	}
	
	//Actualizar estado de cobro a 'pendiente a pagar'
	$SQL8="UPDATE cobros SET estado='pendiente a pagar' WHERE id=".$cobro_id;
		if($db->query($SQL8) === false) {
			die('There was an error running the update query [' . $db->error . ']');
		}	
	
	
	print "New cobro_pendiente added (".$last_inserted_id."), disabled ".$tipoServicio." with id=".$cobro_datosAdicionales." \n";
		
}
$rs1->free();


$db->close();


?>