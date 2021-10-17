<?php
$serverName = "localhost\SQLEXPRESS";
$connectionInfo = array("Database" => "Covid");
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-sacle=1">

        <title>COVID-19 NEWS</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/Estilos.css" rel="stylesheet">   
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">
                            Este botón despliega la barra de navegación
                        </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">COVID-19 NEWS</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Today</a></li>
                        <li><a href="#">Favorites</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Contact us</a></li>                      
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1>COVID-19 NEWS</h1>
                <P>
                    WebSite for COVID-19 information
                </P>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="What are you looking for?">
                                    </div>
                                    <button class="form-control">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filter
                                </div>
                                <div class="panel-body">
                                    Filter
                                </div>
                            </div>
                        </div>
                    </div>                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Calendar
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                    </div>                 
                </div>
                <div class="col-md-8">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Registros
                        </div>
                        <div class="panel-body">
                            <?php
                            
                            $sql = "select Pais, Iso_code, Diafecha, V_por_millon_S from Vacunas";
                            $stmt = sqlsrv_query($conn, $sql);

                            if ($stmt === false) {
                                die(print_r(sqlsrv_errors(), true));
                            }
                            echo "
                                    <table class='table'>
                                    <tr>
                                    <th>Pais</th>
                                    <th>Iso_code</th> 
                                    <th>Diafecha</th> 
                                    <th>V_por_millon_S</th> 
                                    </tr>";                            
                            while ($row = sqlsrv_fetch_Array($stmt, SQLSRV_FETCH_ASSOC)) {
                                $time = time();                              
                                echo "<tr>";
                                echo "<td>" . $row['Pais'] . "</td>";
                                echo "<td>" . $row['Iso_code'] . "</td>";
                                echo "<td>" .DateTime($row['Diafecha'], $time). "</td>";
                                echo "<td>" . $row['V_por_millon_S'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
