<?php
$serverName = "103.82.240.229"; //serverName\instanceName
$connectionInfo = array( "Database"=>"DbDO", "UID"=>"fajar", "PWD"=>"Makassar2020");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false)  {
    die( print_r( sqlsrv_errors(), true));
}
?>