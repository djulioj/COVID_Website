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
        <title>COVID-DB</title>
        <link rel="shortcut icon" type="image/x-icon" href="Images/virus.ico" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
        <!-- MDB -->
        <link rel="stylesheet" href="css/mdb.min.css" />
        <!-- Custom styles -->
        <link rel="stylesheet" href="css/style.css" />
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
                                    <a class="navbar-brand">
                                        <img src="img/logo.png"
                                             height="30" alt="" loading="lazy" />
                                    </a>
                                </div>



                                <!--Iconos-->
                                <div class="col-md-6">
                                    <ul class="navbar-nav justify-content-center">
                                        <!-- Avatar --> 
                                        <div class="dropdown">
                                            <a class="btn btn-primary dropdown-toggle btn-lg" href="#" role="button" id="langB"
                                               data-mdb-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-language fa-lg"></i> Cambiar idioma</a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" onclick="changeLanguage(1)" href="#"><i class="flag flag-es"></i>&nbsp;&nbsp;Español</a>
                                                <a class="dropdown-item" onclick="changeLanguage(0)" href="#"><i class="flag flag-uk"></i>&nbsp;&nbsp;English</a>
                                                <a class="dropdown-item" onclick="changeLanguage(2)" href="#"><i class="flag flag-de"></i>&nbsp;&nbsp;Deutsh</a>
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
                                <small>Desarrollado por</small>
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
                                            <span class="user-name">hecaicedo@uninorte.edu.co</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <!--Second person-->
                                <!--Photo-->
                                <div class="col-md-2">
                                    <img src="https://lh3.googleusercontent.com/a-/AOh14GhJqToqzaW3rxjsnPBIBbxMVW8xbvUlSo9_zPxk=s300-p-k-rw-no" class="rounded-circle mt-2" height="40"
                                         alt="Avatar" />
                                </div>
                                <!--Text-->
                                <div class="col-md-8">
                                    <ul class="ml-0 pl-1 mt-1 list-unstyled">
                                        <li>
                                            <small class="user-name"><strong>Breynner Hurtado</strong></small>
                                        </li>
                                        <li>
                                            <span class="user-name">breynnerh@uninorte.edu.co</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2"> 
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
                                            <span class="user-name">djulioj@uninorte.edu.co</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                </div>
                        </section>
                    </div>
                    <div class="col-md-7">
                        <section class="newsfeed my-5">
                            <div class="post">

                                <!--Welcome Card-->
                                <div id=tarjeta class="card border border-primary shadow-0 mb-3">
                                    <div class="card-body text-primary">
                                        <h5 id=welcomeT class="card-title">¡Bienvenid@!</h5>
                                        <p id=welcomeBodyT class="card-text">
                                            Some quick example text to build on the card title and make up the bulk of the
                                            card's content.
                                        </p>
                                    </div>
                                </div>

                                <!--FIRST CARD-->
                                <div class="card mb-3">
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
                                                       aria-controls="ex1-tabs-1" aria-selected="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                                                       aria-controls="ex1-tabs-2" aria-selected="false">Tab 2</a>
                                                </li>
                                            </ul>
                                            <!-- Tabs navs -->
                                            <!-- Tabs content -->
                                            <div class="tab-content" id="ex1-content">
                                                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                                                     aria-labelledby="ex1-tab-1">
                                                    <div class="scrollbar scrollbar-primary">
                                                        <div class="force-overflow"></div>
                                                    </div>
                                                    <!--Tab 1 content-->
                                                    <div class="card-body" id="tab1Body">
                                                        <!-- SUBTABS TAB1 -->
                                                    <ul class="nav nav-tabs mb-3" id="ex1a" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a
                                                        class="nav-link active"
                                                        id="ex1-tab-1a"
                                                        data-mdb-toggle="tab"
                                                        href="#ex1-tabs-1a"
                                                        role="tab"
                                                        aria-controls="ex1-tabs-1a"
                                                        aria-selected="true"
                                                        >Tab 1</a
                                                        >
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a
                                                        class="nav-link"
                                                        id="ex1-tab-2a"
                                                        data-mdb-toggle="tab"
                                                        href="#ex1-tabs-2a"
                                                        role="tab"
                                                        aria-controls="ex1-tabs-2a"
                                                        aria-selected="false"
                                                        >Tab 2</a
                                                        >
                                                    </li>
                                                    </ul>
                                                    <!-- Tabs navs -->

                                                    <!-- Tabs content -->
                                                    <div class="tab-content" id="ex1-contenta">
                                                    <div
                                                        class="tab-pane fade show active"
                                                        id="ex1-tabs-1a"
                                                        role="tabpanel"
                                                        aria-labelledby="ex1-tab-1a"
                                                    >
                                                        <canvas id="myChart" width="100" height="100"></canvas>
                                                    </div>
                                                    <div class="tab-pane fade" id="ex1-tabs-2a" role="tabpanel" aria-labelledby="ex1-tab-2a">
                                                        <?php
                                                        $sql = "select Continente, sum(Casos_totales/10) as Total from Registro_M where Registro_M.Continente <> '' and Registro_M.Fecha like '%2021-10-12%' group by Continente";
                                                        $stmt = sqlsrv_query($conn, $sql);

                                                        echo "
                                                        <table class='table'>
                                                        <tr>
                                                        <th>Continente</th>
                                                        <th># de infectados</th>  
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
                                                    <!-- SubTabs 1 content -->
                                                    </div>

                                                    
                                                </div>
                                                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                                    <div class="card-body" id="tab2Body">
                                                           <!-- SUBTABS TAB2 -->
                                                    <ul class="nav nav-tabs mb-3" id="ex1b" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a
                                                        class="nav-link active"
                                                        id="ex1-tab-1b"
                                                        data-mdb-toggle="tab"
                                                        href="#ex1-tabs-1b"
                                                        role="tab"
                                                        aria-controls="ex1-tabs-1b"
                                                        aria-selected="true"
                                                        >Tab 1</a
                                                        >
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a
                                                        class="nav-link"
                                                        id="ex1-tab-2b"
                                                        data-mdb-toggle="tab"
                                                        href="#ex1-tabs-2b"
                                                        role="tab"
                                                        aria-controls="ex1-tabs-2b"
                                                        aria-selected="false"
                                                        >Tab 2</a
                                                        >
                                                    </li>
                                                    </ul>
                                                    <!-- Tabs navs -->

                                                    <!-- Tabs content -->
                                                    <div class="tab-content" id="ex1-contentb">
                                                    <div
                                                        class="tab-pane fade show active"
                                                        id="ex1-tabs-1b"
                                                        role="tabpanel"
                                                        aria-labelledby="ex1-tab-1b"
                                                    >
                                                        <canvas id="myChart4" width="100" height="100"></canvas>
                                                    </div>
                                                    <div class="tab-pane fade" id="ex1-tabs-2b" role="tabpanel" aria-labelledby="ex1-tab-2b">
                                                        <?php
                                                        $sql4 = "select Continente, sum(Total_muertes/10) as Total from Registro_M where Registro_M.Continente <> '' and Registro_M.Fecha like '%2021-10-12%' group by Continente";
                                                        $stmt4 = sqlsrv_query($conn, $sql4);

                                                        echo "
                                                        <table class='table'>
                                                        <tr>
                                                        <th>Continente</th>
                                                        <th># de muertos</th>  
                                                        </tr>";
                                                        while ($row = sqlsrv_fetch_Array($stmt4, SQLSRV_FETCH_ASSOC)) {
                                                            echo "<tr>";
                                                            echo "<td>" . $row['Continente'] . "</td>";
                                                            echo "<td>" . $row['Total'] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        echo "</table>";
                                                        ?>
                                                    </div>
                                                    </div>
                                                    <!-- SubTabs 1 content -->
                                                    </div>
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

                                <!--SECOND CARD-->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h1 class="card-title">Vacunados</h1>
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer.
                                        </p>
                                    </div>

                                    <!-- Tab navs -->
                                    <div class="card-body" style="height: 33rem">
                                        <div class="container">
                                            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="ex1-tab-1-b" data-mdb-toggle="tab" href="#ex1-tabs-1-b" role="tab"
                                                       aria-controls="ex1-tabs-1-b" aria-selected="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="ex1-tab-2-b" data-mdb-toggle="tab" href="#ex1-tabs-2-b" role="tab"
                                                       aria-controls="ex1-tabs-2-b" aria-selected="false">Tab 2</a>
                                                </li>
                                            </ul>
                                            <!-- Tabs navs -->
                                            <!-- Tabs content -->
                                            <div class="tab-content" id="ex1-content-b">
                                                <div class="tab-pane fade show active" id="ex1-tabs-1-b" role="tabpanel"
                                                     aria-labelledby="ex1-tab-1-b">
                                                    <div class="scrollbar scrollbar-primary">
                                                        <div class="force-overflow"></div>
                                                    </div>
                                                    <!--Tab 1 content-->
                                                    <div class="card-body" id="tab1Body-b">
                                                        <canvas id="myChart2" width="100" height="100"></canvas>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="ex1-tabs-2-b" role="tabpanel" aria-labelledby="ex1-tab-2-b">
                                                    <div class="card-body" id="tab2Body-b">
                                                        <?php
                                                        $sql2 = "select Pais, Registro_M.Total_muertes/10 as Fallecidos, Registro_M.Fecha as Hasta from Registro_M where Registro_M.Continente = 'South America' and Registro_M.Pais <> 'Falkland Islands' and Registro_M.Fecha like '%2021-10-12%' group by Registro_M.Pais, Registro_M.Total_muertes, Registro_M.Fecha";
                                                        $stmt2 = sqlsrv_query($conn, $sql2);

                                                        echo "
                                                        <table class='table'>
                                                        <tr>
                                                        <th>País</th>
                                                        <th>Total de fallecidos</th>  
                                                        </tr>";
                                                        while ($row = sqlsrv_fetch_Array($stmt2, SQLSRV_FETCH_ASSOC)) {
                                                            echo "<tr>";
                                                            echo "<td>" . $row['Pais'] . "</td>";
                                                            echo "<td>" . $row['Fallecidos'] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        echo "</table>";
                                                        ?>
                                                    </div>
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

                                <!--THIRD CARD-->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h1 class="card-title">Vacunados</h1>
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
                                                    <a class="nav-link active" id="ex1-tab-1-c" data-mdb-toggle="tab" href="#ex1-tabs-1-c" role="tab"
                                                       aria-controls="ex1-tabs-1-c" aria-selected="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="ex1-tab-2-c" data-mdb-toggle="tab" href="#ex1-tabs-2-c" role="tab"
                                                       aria-controls="ex1-tabs-2-c" aria-selected="false">Tab 2</a>
                                                </li>
                                            </ul>
                                            <!-- Tabs navs -->
                                            <!-- Tabs content -->
                                            <div class="tab-content" id="ex1-content-c">
                                                <div class="tab-pane fade show active" id="ex1-tabs-1-c" role="tabpanel"
                                                     aria-labelledby="ex1-tab-1-c">
                                                    <div class="scrollbar scrollbar-primary">
                                                        <div class="force-overflow"></div>
                                                    </div>
                                                    <!--Tab 1 content-->
                                                    <div class="card-body" id="tab1Body-c">
                                                        <canvas id="myChart3" width="100" height="100"></canvas>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="ex1-tabs-2-c" role="tabpanel" aria-labelledby="ex1-tab-2-c">
                                                    <div class="card-body" id="tab2Body-c">
                                                        <?php
                                                        $sql3 = "select Pais, cast(Diafecha as nchar(50)) as fecha,sum(V_por_millon_S/10000) as vacunados from Vacunas where Vacunas.V_por_millon_S/10000 < 1 and Vacunas.Diafecha like '%-09-%' and Vacunas.Pais = 'Colombia' group by Pais, Diafecha";
                                                        $stmt3 = sqlsrv_query($conn, $sql3);

                                                        echo "
                                                        <table class='table'>
                                                        <tr>
                                                        <th>País</th>
                                                        <th>Fecha</th>
                                                        <th># vacunados por millón</th>
                                                        </tr>";
                                                        while ($row = sqlsrv_fetch_Array($stmt3, SQLSRV_FETCH_ASSOC)) {
                                                            echo "<tr>";
                                                            echo "<td>" . $row['Pais'] . "</td>";
                                                            echo "<td>" . $row['fecha'] . "</td>";
                                                            echo "<td>" . $row['vacunados'] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        echo "</table>";
                                                        ?>
                                                    </div>
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
                        </section>
                    </div>
                </div>
            </div>
        </main>


        <script>


            // Javascript to enable link to tab
            var hash = location.hash.replace(/^#/, '');  // ^ means starting, meaning only match the first hash
            if (hash) {
                $('.nav-tabs a[href="#' + hash + '"]').tab('show');
            } 

            document.getElementById("testB").onClick = function () {
                changeLanguage(2)
            };

            function changeContinent(cont) {

                var code="<p>das</p>"
               

                switch (cont) {
                    default: //North America
                        code = "<p>Norteamérica</p>"
                        break;
                    case 1: //South America
                        code = "<button type='button' class='btn btn-secondary'>Secondary</button>"
                        break;
                    case 2: //Europe
                        code = "<button type='button' class='btn btn-warning'>Warning</button>"
                        break;
                    case 3: //Asia
                        code = "<p>Hello</p>"
                        break;
                    case 4: //Africa
                        code = "<p>Africa</p>"
                        break;
                    case 5: //Oceania
                        code = "<p>Oceania</p>"
                        break;
                }
                
                document.getElementById("tab1Body").innerHTML = code;
            }


            //Función cambiar idioma
            function changeLanguage(lang) {
                switch (lang) {
                    default: //English
                        welcomeT = "Welcome!";
                        langB = "Change language"
                        welcomeBodyT = "Some quick example text to build on the card title and make up the bulk of the card's content."
                        break;
                    case 1: //Spanish
                        welcomeT = "¡Bienvenid@!"
                        langB = "Cambiar idioma"
                        welcomeBodyT = "Algún texto de ejemplo rápido para construir sobre el título de la tarjeta y constituir la mayor parte del contenido de la tarjeta."
                        break;
                    case 2: //German
                        welcomeT = "Herzlich willkommen!"
                        langB = "Sprache ändern"
                        welcomeBodyT = "Einige kurze Beispieltexte, die auf dem Kartentitel aufbauen und den Großteil des Karteninhalts ausmachen."
                }

                document.getElementById("welcomeT").innerHTML = welcomeT;
                document.getElementById("welcomeBodyT").innerHTML = welcomeBodyT;
                document.getElementById("langB").innerHTML = "<i class='fas fa-globe'></i> " + langB;
            }
        </script>


        <!-- MDB -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript" src="js/script.js"></script>
        <script src="js/script.js"></script>
    </body>
<script src="js/chart.min.js"></script>
    <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Europa', 'América del Norte', 'América del sur', 'Oceanía', 'África', 'Asia'],
                    datasets: [{
                            data: [611182330,
                                536038560,
                                380116970,
                                2131430,
                                84008330,
                                773554090
                            ],
                            backgroundColor: [
                                'rgba(255, 99, 132)',
                                'rgba(54, 162, 235)',
                                'rgba(255, 206, 86)',
                                'rgba(75, 192, 192)',
                                'rgba(153, 102, 255)',
                                'rgba(255, 159, 64)'
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
                    animation: {
                        duration: 4000
                    }
                }
            });
    </script>

    <script>
        var ctx2 = document.getElementById('myChart2');
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Argentina',
                    'Bolivia',
                    'Brazil',
                    'Chile',
                    'Colombia',
                    'Ecuador',
                    'Guyana',
                    'Paraguay',
                    'Peru',
                    'Suriname',
                    'Uruguay',
                    'Venezuela'],
                datasets: [{
                        data: [115547,
                            18806,
                            601398,
                            37574,
                            126692,
                            32848,
                            848,
                            16207,
                            199727,
                            974,
                            6064,
                            4634],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(50, 224, 65, 0.2)',
                            'rgba(50, 224, 221, 0.2)',
                            'rgba(224, 50, 155, 0.2)',
                            'rgba(224, 186, 50, 0.2)',
                            'rgba(224, 149, 50, 0.2)',
                            'rgba(50, 53, 224, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(50, 224, 65, 1)',
                            'rgba(50, 224, 221, 1)',
                            'rgba(224, 50, 155, 1)',
                            'rgba(224, 186, 50, 1)',
                            'rgba(224, 149, 50, 1)',
                            'rgba(50, 53, 224, 1)'
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
                animation: {
                    duration: 4000
                },
                indexAxis: 'y'
            }
        });
    </script>

    <script>
        var ctx3 = document.getElementById('myChart3');
        var myChart3 = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['Semana 1',
                    'Semana 2',
                    'Semana 3',
                    'Semana 4',
                    'Semana 5'],
                datasets: [{
                        data: [1.0723,
                            2.7238,
                            3.9587,
                            5.2066,
                            6.803],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
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
                animation: {
                    duration: 4000
                }
            }
        });
    </script>

    <script>
            var ctx4 = document.getElementById('myChart4');
            var myChart4 = new Chart(ctx4, {
                type: 'pie',
                data: {
                    labels: ['Europa', 'América del Norte', 'América del sur', 'Oceanía', 'África', 'Asia'],
                    datasets: [{
                            data: [1253579,
                                1087310,
                                1161319,
                                2412,
                                214402,
                                1146582
                            ],
                            backgroundColor: [
                                'rgba(255, 99, 132)',
                                'rgba(54, 162, 235)',
                                'rgba(255, 206, 86)',
                                'rgba(75, 192, 192)',
                                'rgba(153, 102, 255)',
                                'rgba(255, 159, 64)'
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
                    animation: {
                        duration: 4000
                    }
                }
            });
    </script>



</html>