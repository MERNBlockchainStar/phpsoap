<?php
    $id = $_POST['id'];
    $data = $_POST['data'];
    ini_set("soap.wsdl_cache_enabled", 0);
    try {
        $client = new SoapClient( "http://localhost/webServicePHP_soap/organization.wsdl");
        if($id <= 100){
            $responseLogin = $client->read( $id, $data ); 
        }else {
            $responseLogin = $client->write( $id, $data );
        }
        echo $responseLogin;
    } catch ( SoapFault $sf ) {
        echo $sf->getMessage();
    }
?>