<?php
$serverName = "localhost\SQLEXPRESS";
$connectionInfo = array("Database"=>"Covid"); 
$conn = sqlsrv_connect($serverName, $connectionInfo);

    if($conn){
        echo "Conexión establecida.<br />";
    }else{
        echo "Fallo en la conexión.<br />";
        die(print_r(sqlrv_errors(), true));
    }    
?>
