<?php
$serverName = "sqlbanco/Banco"; //serverName\instanceName
$connectionInfo = array( "Database"=>"dbName", "UID"=>"Administrador", "PWD"=>"SQLADMIN123a");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>