<?php
    $europa = sqlsrv_fetch_array("select sum(Casos_totales) as Total from Registro_M where Registro_M.Continente = 'Europe' group by Continente");
    $norteAmerica = sqlsrv_fetch_array("select sum(Casos_totales) as Total from Registro_M where Registro_M.Continente = 'North America' group by Continente");
    $surAmerica = sqlsrv_fetch_array("select sum(Casos_totales) as Total from Registro_M where Registro_M.Continente = 'South America' group by Continente");
    $oceania = sqlsrv_fetch_array("select sum(Casos_totales) as Total from Registro_M where Registro_M.Continente = 'Oceania' group by Continente");
    $africa = sqlsrv_fetch_array("select sum(Casos_totales) as Total from Registro_M where Registro_M.Continente = 'Africa' group by Continente");
    $asia = sqlsrv_fetch_array("select sum(Casos_totales) as Total from Registro_M where Registro_M.Continente = 'Asia' group by Continente");
    
    $data = array(    
                    0 => round($europa['r'],1),
                    1 => round($norteAmerica['r'],1),
                    2 => round($surAmerica['r'],1),
                    3 => round($oceania['r'],1),
                    4 => round($africa['r'],1),
                    5 => round($asia['r'],1)
                );
    echo json_encode($data);
?>

