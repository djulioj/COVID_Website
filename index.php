<?php
$serverName = "localhost\SQLEXPRESS";
$connectionInfo = array("Database" => "Covid");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "Conexión establecida.<br />";
} else {
    echo "Fallo en la conexión.<br />";
    die(print_r(sqlrv_errors(), true));
}
?>

<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Material Design for Bootstrap</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
        <!-- MDB -->
        <link rel="stylesheet" href="css/mdb.min.css" />
        <!-- Custom styles -->
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/chart.min.js"></script>
    </head>

    <body>
        <header>
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCenteredExample"
                            aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-1"></div>

                                <!--Logo-->
                                <div class="col-md-5">
                                    <a class="navbar-brand" href="#">
                                        <img src="img/logo.png"
                                             height="30" alt="" loading="lazy" />
                                    </a>
                                </div>

                                <!--Iconos-->
                                <div class="col-md-6">
                                    <ul class="navbar-nav justify-content-center">
                                        <!-- Avatar -->
                                        <div class="dropdown">
                                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                               data-mdb-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-globe"></i> Cambiar idioma
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#"><i class="flag flag-es"></i>&nbsp;&nbsp;Español</a>
                                                <a class="dropdown-item" href="#"><i class="flag flag-uk"></i>&nbsp;&nbsp;English</a>
                                                <a class="dropdown-item" href="#"><i class="flag flag-de"></i>&nbsp;&nbsp;Deutsh</a>
                                                <!--  <li><a class="dropdown-item" href="#">Español</a></li>
                                                  <li><a class="dropdown-item" href="#">English</a></li>
                                                  <li><a class="dropdown-item" href="#">Deutsch</a></li> -->
                                            </ul>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
        </header>

        <main>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3 d-md-none d-lg-block">



                        <section class="mt-5">
                            <!-- About -->
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="https://bincaglobal.org/wp-content/uploads/2019/01/UniversidadNorte.jpg"
                                         class="rounded-circle" height="60" alt="Avatar" />
                                </div>
                                <div class="col-md-9">
                                    <ul class="ml-0 pl-1 mt-1 list-unstyled">
                                        <li>
                                            <p class="ml-3 text-dark mb-0 mt-1">
                                                <strong>Acerca de</strong>
                                            </p>
                                        </li>
                                        <li>
                                            <span class="ml-3 text-dark">Página web</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Suggestions -->
                            <div>
                                <small>Integrantes del grupo</small>
                            </div>

                            <!-- Suggested users -->
                            <div class="row">
                                <!--First Person-->
                                <!--Photo-->
                                <div class="col-md-2">
                                    <img src="https://lh3.googleusercontent.com/fife/AAWUweXZu72X8gjkNo99StbBbB24kp97k5GlT-dAuQE9FPGBELnnCLGZVbfAdkIpzsQOo564vHJDs9qv9mdLtyigVJoxeIAcMLNOHezIPBgltyD6JGwJAo-jID2W7r-C7ARS_ntybJ2vNvvQF-xVHAsXSNwvy5ckcrR8wF8z0z0TziFEy9ZcMuvKosAoSZSCQdlnCdyRpYlSEKuH8wss1fCUV7dG7E5MC5STr2-1EZB2bgI4VyZ8tyjBDwzmJZrvvy-Yvm58gyK05Fy16EGpBbKto76z2xC12PP9lU-XpQQbcIph7KYm1JFuarhXPhfe1V4Y_xUsAbl1QjxjR7lvIWTssTxO_xhRQOg5ft6HKeWrUIE-nUTONXKckiM4vLtzofzMM5NSh9T2iYXZIzxm6hfDgeo-N0KrVFniz3rWb5A62KyPvER9WFGrI1X7qPLKq3rcmLY_HzK4524W2ioKjv2pUX1yd4PVVnpbMiY-YZ0qguniVmfKVx0wmagNRXnFY9m12uHtes86dE6vJBIVHQoHDGjm3WP1UqpcvP9dAvcaT6BvD7orFfIUn4Sb1d1o2faL7tl_uwVmhAFaIc4ZCapsy6EV2IJ92HuF6InUgo6DfU_P5cPmaWC_DiA5XT7roYiS9vorHmin5-I-02dM_tVsa8SxY0Z4BpCpMaxGrNz9z4Zw5KEyM0RqxB-cbEce9qV-TtoeMOP7JjQNsvcqDMg52f4EpcWLxUtxVUFpj-jx6CRD9Q=s83-c" class="rounded-circle mt-2" height="40"
                                         alt="Avatar" />
                                </div>
                                <!--Text-->
                                <div class="col-md-8">
                                    <ul class="ml-0 pl-1 mt-1 list-unstyled">
                                        <li>
                                            <small class="user-name"><strong>Henry Caicedo Pimienta</strong></small>
                                        </li>
                                        <li>
                                            <span class="user-name">Blah blah blah</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <p class="user-name mt-4 text-primary">Follow</p>  
                                </div>
                                <!--Second person-->
                                <!--Photo-->
                                <div class="col-md-2">
                                    <img src="https://mdbootstrap.com/img/new/avatars/10.jpg" class="rounded-circle mt-2" height="40"
                                         alt="Avatar" />
                                </div>
                                <!--Text-->
                                <div class="col-md-8">
                                    <ul class="ml-0 pl-1 mt-1 list-unstyled">
                                        <li>
                                            <small class="user-name"><strong>Breynner Hurtado</strong></small>
                                        </li>
                                        <li>
                                            <span class="user-name">Blah blah blah</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <p class="user-name mt-4 text-primary">Follow</p>  
                                </div>
                                <!--Third Person-->
                                <!--Photo-->
                                <div class="col-md-2">
                                    <img src="https://lh3.googleusercontent.com/a-/AOh14GiRnyzBzxM15E6Qd8CPg_cc1LVn_4td7OYHx0wdqw=s300-p-k-rw-no" class="rounded-circle mt-2" height="40"
                                         alt="Avatar" />
                                </div>
                                <!--Text-->
                                <div class="col-md-7">
                                    <ul class="ml-0 pl-1 mt-1 list-unstyled">
                                        <li>
                                            <small class="user-name"><strong>Juan David Julio</strong></small>
                                        </li>
                                        <li>
                                            <span class="user-name">Blah blah blah</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <p class="user-name mt-4 text-primary">Follow</p>  
                                </div>
                        </section>
                    </div>
                    <div class="col-md-7">
                        <section class="newsfeed my-5">
                            <div class="post">

                                <!--Welcome Card-->
                                <div class="card border border-primary shadow-0 mb-3">
                                    <div class="card-body text-primary">
                                        <h5 class="card-title">¡Bienvenidxs!</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                    </div>
                                </div>

                                <!--INFECTED CARD-->
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="card-title">Infectados</h1>
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer.
                                        </p>
                                    </div>

                                    <!-- Tab navs -->
                                    <div class="card-body">
                                        <div class="container">
                                            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                                                       aria-controls="ex1-tabs-1" aria-selected="true">Gráfico</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                                                       aria-controls="ex1-tabs-2" aria-selected="false">Tabla</a>
                                                </li>                                              
                                            </ul>
                                            <!-- Tabs navs -->
                                            <!-- Tabs content -->
                                            <div class="tab-content" id="ex1-content">
                                                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                                                     aria-labelledby="ex1-tab-1">   
                                                    <canvas id="myChart" width="100" height="100"></canvas>
                                                </div>                                               
                                                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                                    <?php
                                                    $sql = "select Continente, sum(Casos_totales) as Total from Registro_M where Registro_M.Continente <> '' group by Continente";
                                                    $stmt = sqlsrv_query($conn, $sql);

                                                    if ($stmt === false) {
                                                        die(print_r(sqlsrv_errors(), true));
                                                    }
                                                    echo "
                                                        <table class='table'>
                                                        <tr>
                                                        <th>Continente</th>
                                                        <th>Total de infectados</th>  
                                                        </tr>";
                                                    while ($row = sqlsrv_fetch_Array($stmt, SQLSRV_FETCH_ASSOC)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['Continente'] . "</td>";
                                                        echo "<td>" . $row['Total'] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "</table>";
                                                    ?>
                                                </div>     
                                            </div>
                                            <!-- Tabs content -->
                                        </div>
                                    </div>

                                    <!-- Info card  -->
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <p class="note note-primary">
                                                    <strong>Note primary:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Cum doloremque officia laboriosam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- MDB -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript" src="js/script.js"></script>
    </body>

    <script src="js/chart.min.js"></script>

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Europa', 'América del Norte', 'América del sur', 'Oceanía', 'África', 'Asia'],
                datasets: [{
                    data: [144465211040,130489099760,92519673010,251377790,18142311730,152910642320],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]            
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                indexAxis: 'y'           
            }
        });
    </script> 

</html>