<?php
ini_set( "soap.wsdl_cache_enabled", 0 );
ini_set( 'soap.wsdl_cache_ttl', 0 );

function read( $id, $data )
{
	$con = mysqli_connect("localhost", 'root', '');
	if(!$con){
		return "connect error";
	}
	$result = mysqli_query($con, "SELECT * FROM test.cursos Where id = ".$id);
	$str_data = '';
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        $str_data .= "id: " . $row["id"]. " - nombre: " . $row["nombre"]. "<br>";
	    }
	} else {
	    $str_data = "0 results";
	}
	mysqli_close($con);
  	return $str_data;
}

function write( $id,$data )
{
	$con = mysqli_connect("localhost", 'root', '');
	if(!$con){
		return "connect error";
	}
	mysqli_query($con, "insert into test.cursos (id, nombre) values (".$id.", '".$data."')");
	mysqli_close($con);
  	return "Write success!";
}

$server = new SoapServer( "organization.wsdl" );
$server->addFunction( "read" );
$server->addFunction( "write" );
$server->handle();
?>