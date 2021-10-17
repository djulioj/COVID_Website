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
    
    $sql = "select Pais, Iso_code, V_por_millon_S from Vacunas";
    $stmt = sqlsrv_query($conn,$sql);
    
    if($stmt === false){
        die (print_r(sqlsrv_errors(),true));
    }
    echo "
     <table class='table'>
     <tr>
     <th>Pais</th>
     <th>Iso_code</th> 
     <th>Diafecha</th> 
     <th>V_por_millon_S</th> 
     </tr>";
    
    while($row=sqlsrv_fetch_Array($stmt,SQLSRV_FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>".$row['Pais']."</td>";
        echo "<td>".$row['Iso_code']."</td>";
        echo "<td>".date($row['Diafecha'])."</td>";
        echo "<td>".$row['V_por_millon_S']."</td>";
        echo "</tr>";
    }
        echo "</table>";
        
    
?>
