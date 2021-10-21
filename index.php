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
                                             height="40" alt="" loading="lazy" />
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
                                                <a class="dropdown-item" onclick="changeLanguage(1)" href="#"><i class="flag flag-de"></i>&nbsp;&nbsp;Deutsch</a>
                                                <a class="dropdown-item" onclick="changeLanguage(0)" href="#"><i class="flag flag-uk"></i>&nbsp;&nbsp;English</a>
                                                <a class="dropdown-item" onclick="changeLanguage(2)" href="#"><i class="flag flag-es"></i>&nbsp;&nbsp;Español</a>
                                                <a class="dropdown-item" onclick="changeLanguage(3)" href="#"><i class="flag flag-fr"></i>&nbsp;&nbsp;Français</a>
                                                <a class="dropdown-item" onclick="changeLanguage(4)" href="#"><i class="flag flag-it"></i>&nbsp;&nbsp;Italiano</a>
                                                <a class="dropdown-item" onclick="changeLanguage(5)" href="#"><i class="flag flag-pt"></i>&nbsp;&nbsp;Português</a>
                                                <a class="dropdown-item" onclick="changeLanguage(6)" href="#"><i class="flag flag-ru"></i>&nbsp;&nbsp;русский</a>
                                                <a class="dropdown-item" onclick="changeLanguage(7)" href="#"><i class="flag flag-ae"></i>&nbsp;&nbsp;عرب</a>
                                                <a class="dropdown-item" onclick="changeLanguage(8)" href="#"><i class="flag flag-jp"></i>&nbsp;&nbsp;日本</a>
                                                <a class="dropdown-item" onclick="changeLanguage(9)" href="#"><i class="flag flag-kr"></i>&nbsp;&nbsp;한국인</a>
                                                <a class="dropdown-item" onclick="changeLanguage(10)" href="#"><i class="flag flag-cn"></i>&nbsp;&nbsp;简体中文</a>
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
                                            <p class="ml-3 text-dark mb-0 mt-1" id="aboutT">
                                                <strong>Acerca de</strong>
                                            </p>
                                        </li>
                                        <li>
                                            <span class="ml-3 text-dark" id="aboutTxt">Desarrollado por estudiantes de Uninorte. 2021.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Suggestions -->
                            <div id="byT">
                                <small>Integrantes del equipo</small>
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
                                        <h5 id=welcomeT class="card-title">¡Bienvenidx!</h5>
                                        <p id=welcomeBodyT class="card-text">
                                        En Covid-DB encontrarás información relacionada con la enfermedad Covid-19, con datos recopilados hasta mediados del mes de octubre de 2021. Aquí hallarás gráficos estadísticos y tablas que te permitirán comprender de un modo más sencillo la información suministrada.<br>Datos tomados de Our World in Data.
                                        </p>
                                    </div>
                                </div>

                                <!--FIRST CARD-->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h1 class="card-title" id="c1t">Casos y muertes globales</h1>
                                        <p class="card-text" id="c1txt">
                                        Esta sección inicial cuenta con 2 gráficos y brinda información de los continentes referente al total de infectados y fallecidos a nivel global.
                                        </p>
                                    </div>

                                    <!-- Tab navs -->
                                    <div class="card-body">
                                        <div class="container">
                                            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                                                       aria-controls="ex1-tabs-1" aria-selected="true">Casos</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                                                       aria-controls="ex1-tabs-2" aria-selected="false">Muertes</a>
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
                                                        ><i class="fas fa-chart-pie fa-lg"></i> Gráfico</a
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
                                                        ><i class="fas fa-table fa-lg"></i> Tabla</a
                                                        >
                                                    </li>
                                                    </ul>
                                                    <!-- Tabs navs -->

                                                    <!-- Tabs content -->
                                                    <div class="tab-content" id="ex1-contenta">
                                                    <div
                                                        class="tab-pane fade show active" id="ex1-tabs-1a" role="tabpanel" aria-labelledby="ex1-tab-1a"
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
                                                        ><i class="fas fa-chart-pie fa-lg"></i> Gráfico</a
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
                                                        ><i class="fas fa-table fa-lg"></i> Tabla</a
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
                                                <p class="note note-primary" id="c1n">
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
                                        <h1 class="card-title" id="c2t">Vacunados</h1>
                                        <p class="card-text" id="c2txt">
                                            This is a wider card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer.
                                        </p>
                                    </div>

                                    <!-- Tab navs -->
                                    <div class="card-body">
                                        <div class="container">
                                            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="ex1-tab-1-b" data-mdb-toggle="tab" href="#ex1-tabs-1-b" role="tab"
                                                       aria-controls="ex1-tabs-1-b" aria-selected="true"><i class='fas fa-chart-bar fa-lg'></i> Gráfico</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="ex1-tab-2-b" data-mdb-toggle="tab" href="#ex1-tabs-2-b" role="tab"
                                                       aria-controls="ex1-tabs-2-b" aria-selected="false"><i class="fas fa-table fa-lg"></i> Tabla</a>
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
                                                <p class="note note-primary" id="c2n">
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
                                        <h1 class="card-title" id="c3t">Vacunados</h1>
                                        <p class="card-text" id="c3txt">
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
                                                       aria-controls="ex1-tabs-1-c" aria-selected="true"><i class="fas fa-chart-line fa-lg"></i> Gráfico</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="ex1-tab-2-c" data-mdb-toggle="tab" href="#ex1-tabs-2-c" role="tab"
                                                       aria-controls="ex1-tabs-2-c" aria-selected="false"><i class="fas fa-table fa-lg"></i> Tabla</a>
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
                                                <p class="note note-primary" id="c3n">
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


            //Función cambiar idioma
            function changeLanguage(lang) {
                switch (lang) {
                    default: //English
                        //Left section
                        aboutT = "About";
                        aboutTxt = "Developed by Uninorte students. 2021.";
                        byT = "Team members";
                        //Welcome card
                        welcomeT = "Welcome!";
                        langB = "Change language";
                        welcomeBodyT = "In Covid-DB you will find information related to the Covid-19 disease, with data collected until mid-October 2021. Here you will find statistical graphs and tables that will allow you to understand the information provided in a more simple way. <br> Data taken from Our World in Data.";
                        //Card 1
                        c1t = "Global cases and deaths";
                        c1txt = "This initial section has 2 graphs and provides information on the continents regarding the total number of infected and deceased globally.";
                        c1n = "";
                        c1tab1 = "Cases";
                        c1tab1a = "Graph";
                        c1tab1b = "Graph";
                        c1tab2 = "Deaths";
                        c1tab2a = "Table";
                        c1tab2b = "Table";
                        // Card 2
                        c2t = "Deaths in South America";
                        c2txt = "This second section has a graph that provides more detailed information on the number of deaths caused by Covid-19 in South America. In addition, in the second tab you can find the table with the data represented in the graph. ";
                        c2n = "";
                        c2tab1 = "Chart";
                        c2tab2 = "Table";
                        // Card 3
                        c3t = "Vaccinated in Colombia";
                        c3txt = "This last section has a graph that provides information about the number of vaccinated in Colombia during the month of September 2021. In addition, in the second tab you can find the table with the data represented in the graph in more detail. ";
                        c3n = "";
                        c3tab1 = "Chart";
                        c3tab2 = "Table";
                        break;

                    case 2: //Spanish
                        //Left section
                        aboutT = "Acerca de";
                        aboutTxt = "Desarrollado por estudiantes de Uninorte. 2021.";
                        byT = "Integrantes del equipo";
                        //Welcome card
                        welcomeT = "¡Bienvenidx!";
                        langB = "Cambiar idioma";
                        welcomeBodyT = "En Covid-DB encontrarás información relacionada con la enfermedad Covid-19, con datos recopilados hasta mediados del mes de octubre de 2021. Aquí hallarás gráficos estadísticos y tablas que te permitirán comprender de un modo más sencillo la información suministrada.<br>Datos tomados de Our World in Data.";
                        //Card 1
                        c1t = "Casos y muertes globales";
                        c1txt = "Esta sección inicial cuenta con 2 gráficos y brinda información de los continentes referente al total de infectados y fallecidos a nivel global.";
                        c1n = "";
                        c1tab1 = "Casos";
                        c1tab1a = "Gráfico";
                        c1tab1b = "Gráfico";
                        c1tab2 = "Muertes";
                        c1tab2a = "Tabla";
                        c1tab2b = "Tabla";
                        //Card 2
                        c2t = "Muertes en América del Sur";
                        c2txt = "Esta segunda sección cuenta con un gráfico que brinda información más a detalle del número de muertes que ha dejado el Covid-19 en América del Sur. Además, en la segunda pestaña podrás encontrar la tabla con los datos representados en el gráfico.";
                        c2n = "";
                        c2tab1 = "Gráfico";
                        c2tab2 = "Tabla";
                        //Card 3
                        c3t = "Vacunados en Colombia";
                        c3txt = "Esta última sección cuenta con un gráfico que brinda información acerca del número de vacunados en Colombia durante el mes de septiembre de 2021. Además, en la segunda pestaña podrás encontrar la tabla con los datos representados en el gráfico de manera más detallada.";
                        c3n = "";
                        c3tab1 = "Gráfico";
                        c3tab2 = "Tabla";
                        break;

                    case 1: //German
                        //Left section
                        aboutT = "Über";
                        aboutTxt = "Entwickelt von Uninorte-Studenten. 2021.";
                        byT = "Teammitglieder";
                        //Welcome card
                        welcomeT = "Willkommen!";
                        langB = "Sprache ändern";
                        welcomeBodyT = "In Covid-DB finden Sie Informationen zur Covid-19-Erkrankung mit Daten, die bis Mitte Oktober 2021 gesammelt wurden. Hier finden Sie statistische Grafiken und Tabellen, die Ihnen ein einfacheres Verständnis der bereitgestellten Informationen ermöglichen . <br> Daten aus unserer Welt in Daten.";
                        //Karte 1
                        c1t = "Globale Fälle und Todesfälle";
                        c1txt = "Dieser erste Abschnitt enthält 2 Grafiken und enthält Informationen zu den Kontinenten bezüglich der Gesamtzahl der Infizierten und Verstorbenen weltweit.";
                        c1n = "";
                        c1tab1 = "Fälle";
                        c1tab1a = "Grafik";
                        c1tab1b = "Grafik";
                        c1tab2 = "Todesfälle";
                        c1tab2a = "Tabelle";
                        c1tab2b = "Tabelle";
                        // Karte 2
                        c2t = "Todesfälle in Südamerika";
                        c2txt = "Dieser zweite Abschnitt enthält eine Grafik, die detailliertere Informationen über die Anzahl der Todesfälle durch Covid-19 in Südamerika bietet. Außerdem finden Sie im zweiten Tab die Tabelle mit den in der Grafik dargestellten Daten. ";
                        c2n = "";
                        c2tab1 = "Diagramm";
                        c2tab2 = "Tabelle";
                        // Karte 3
                        c3t = "In Kolumbien geimpft";
                        c3txt = "Dieser letzte Abschnitt enthält eine Grafik, die Informationen über die Anzahl der Geimpften in Kolumbien im September 2021 enthält. Außerdem finden Sie auf der zweiten Registerkarte die Tabelle mit den in der Grafik ausführlicher dargestellten Daten. " ;
                        c3n = "";
                        c3tab1 = "Diagramm";
                        c3tab2 = "Tabelle";
                    break;

                    case 3: //French
                        //Left section
                        aboutT = "À propos de";
                        aboutTxt = "Développé par les étudiants d'Uninorte. 2021.";
                        byT = "Membres de l'équipe";
                        //Welcome card
                        welcomeT = "Bienvenue!";
                        langB = "Changer de langue";
                        welcomeBodyT = "Dans Covid-DB, vous trouverez des informations liées à la maladie Covid-19, avec des données collectées jusqu'à la mi-octobre 2021. Vous trouverez ici des graphiques et des tableaux statistiques qui vous permettront de comprendre les informations fournies de manière plus simple . <br> Données extraites de Notre monde en données.";
                        //Card 1
                        c1t = "Cas et décès dans le monde" ;
                        c1txt = "Cette section initiale comporte 2 graphiques et fournit des informations sur les continents concernant le nombre total de personnes infectées et décédées dans le monde.";
                        c1n = "" ;
                        c1tab1 = "Cas" ;
                        c1tab1a = "Graphique" ;
                        c1tab1b = "Graphique" ;
                        c1tab2 = "Décès" ;
                        c1tab2a = "Tableau" ;
                        c1tab2b = "Tableau" ;
                        // Card 2
                        c2t = "Décès en Amérique du Sud" ;
                        c2txt = "Cette deuxième section contient un graphique qui fournit des informations plus détaillées sur le nombre de décès causés par Covid-19 en Amérique du Sud. De plus, dans le deuxième onglet, vous pouvez trouver le tableau avec les données représentées dans le graphique. ";
                        c2n = "" ;
                        c2tab1 = "Graphique" ;
                        c2tab2 = "Tableau" ;
                        // Card 3
                        c3t = "Vacciné en Colombie" ;
                        c3txt = "Cette dernière section contient un graphique qui fournit des informations sur le nombre de vaccinés en Colombie au cours du mois de septembre 2021. De plus, dans le deuxième onglet, vous pouvez trouver le tableau avec les données représentées dans le graphique plus en détail. " ;
                        c3n = "" ;
                        c3tab1 = "Graphique" ;
                        c3tab2 = "Tableau" ;
                        break;

                    case 4: //Italian
                        //Left section
                        aboutT = "Di";
                        aboutTxt = "Sviluppato dagli studenti Uninorte. 2021.";
                        byT = "Membri del team";
                        //Welcome card
                        welcomeT = "Benvenuto!";
                        langB = "Cambia lingua";
                        welcomeBodyT = "In Covid-DB troverai le informazioni relative alla malattia Covid-19, con i dati raccolti fino a metà ottobre 2021. Qui troverai grafici e tabelle statistiche che ti permetteranno di comprendere le informazioni fornite in modo più semplice . <br> Dati presi da Our World in Data.";
                        //Card 1
                        c1t = "Casi e decessi globali";
                        c1txt = "Questa sezione iniziale ha 2 grafici e fornisce informazioni sui continenti per quanto riguarda il numero totale di infetti e deceduti a livello globale.";
                        c1n = "";
                        c1tab1 = "Casi";
                        c1tab1a = "Grafico";
                        c1tab1b = "Grafico";
                        c1tab2 = "Morte";
                        c1tab2a = "Tabella";
                        c1tab2b = "Tabella";
                        // Card 2
                        c2t = "Decessi in Sud America";
                        c2txt = "Questa seconda sezione ha un grafico che fornisce informazioni più dettagliate sul numero di decessi causati da Covid-19 in Sud America. Inoltre, nella seconda scheda puoi trovare la tabella con i dati rappresentati nel grafico. ";
                        c2n = "";
                        c2tab1 = "Grafico";
                        c2tab2 = "Tabella";
                        // Card 3
                        c3t = "Vaccinato in Colombia";
                        c3txt = "Quest'ultima sezione ha un grafico che fornisce informazioni sul numero di vaccinati in Colombia durante il mese di settembre 2021. Inoltre, nella seconda scheda puoi trovare la tabella con i dati rappresentati nel grafico in modo più dettagliato. " ;
                        c3n = "";
                        c3tab1 = "Grafico";
                        c3tab2 = "Tabella";
                        break;
                    
                    case 5: //Portuguese
                        //Left section
                        aboutT = "Sobre";
                        aboutTxt = "Desenvolvido por alunos da Uninorte. 2021.";
                        byT = "Integrantes da equipe";
                        //Welcome card
                        welcomeT = "Bem-vindo!";
                        langB = "Alterar idioma";
                        welcomeBodyT = "No Covid-DB você encontrará informações relacionadas à doença Covid-19, com dados coletados até meados de outubro de 2021. Aqui você encontrará gráficos e tabelas estatísticas que permitirão compreender as informações prestadas de forma mais simples forma. <br> Dados retirados de Our World in Data. ";
                        // Card 1
                        c1t = "Casos e óbitos globais";
                        c1txt = "Esta seção inicial possui 2 gráficos e fornece informações sobre os continentes em relação ao número total de infectados e falecidos globalmente.";
                        c1n = "";
                        c1tab1 = "Casos";
                        c1tab1a = "Gráfico";
                        c1tab1b = "Gráfico";
                        c1tab2 = "Mortes";
                        c1tab2a = "Tabela";
                        c1tab2b = "Tabela";
                        // Card 2
                        c2t = "Mortes na América do Sul";
                        c2txt = "Esta segunda seção possui um gráfico que fornece informações mais detalhadas sobre o número de mortes causadas pela Covid-19 na América do Sul. Além disso, na segunda aba você encontra a tabela com os dados representados no gráfico.";
                        c2n = "";
                        c2tab1 = "Gráfico";
                        c2tab2 = "Tabela";
                        // Card 3
                        c3t = "Vacinado na Colômbia";
                        c3txt = "Esta última seção contém um gráfico que fornece informações sobre o número de vacinados na Colômbia durante o mês de setembro de 2021. Além disso, na segunda aba você pode encontrar a tabela com os dados representados no gráfico com mais detalhes." ;
                        c3n = "";
                        c3tab1 = "Gráfico";
                        c3tab2 = "Tabela";
                        break;

                    case 6: //Russian
                        //Left section
                        aboutT = "О";
                        aboutTxt = "Разработано студентами Uninorte. 2021 г.";
                        byT = "Члены команды";
                        //Welcome card
                        welcomeT = "Добро пожаловать!";
                        langB = "Сменить язык";
                        welcomeBodyT = "В Covid-DB вы найдете информацию, связанную с заболеванием Covid-19, с данными, собранными до середины октября 2021 года. Здесь вы найдете статистические графики и таблицы, которые позволят вам понять предоставленную информацию более простым способом. . <br> Данные взяты из нашего мира в данных. ";
                        // Card 1
                        c1t = "Глобальные случаи и смерти";
                        c1txt = "Этот начальный раздел содержит 2 графика и предоставляет информацию по континентам относительно общего числа зараженных и умерших во всем мире.";
                        c1n = "";
                        c1tab1 = "Дела";
                        c1tab1a = "График";
                        c1tab1b = "График";
                        c1tab2 = "Смерти";
                        c1tab2a = "Таблица";
                        c1tab2b = "Таблица";
                        // Card 2
                        c2t = "Смерти в Южной Америке";
                        c2txt = "В этом втором разделе есть график, который предоставляет более подробную информацию о количестве смертей, вызванных Covid-19 в Южной Америке. Кроме того, во второй вкладке вы можете найти таблицу с данными, представленными на графике.";
                        c2n = "";
                        c2tab1 = "Диаграмма";
                        c2tab2 = "Таблица";
                        // Card 3
                        c3t = "Вакцинирован в Колумбии";
                        c3txt = "В этом последнем разделе есть график, который предоставляет информацию о количестве вакцинированных в Колумбии в течение сентября 2021 года. Кроме того, на второй вкладке вы можете найти таблицу с данными, представленными на графике более подробно.";
                        c3n = "";
                        c3tab1 = "Диаграмма";
                        c3tab2 = "Таблица";
                        break;

                    case 7: //Arabic
                        //Left section
                        aboutT = "عن";
                        aboutTxt = "تم تطويره بواسطة طلاب Uninorte. 2021.";
                        byT = "أعضاء الفريق";
                        //Welcome card
                        welcomeT = "أهلا بك!";
                        langB = "تغيير اللغة";
                        welcomeBodyT = "ستجد في Covid-DB معلومات تتعلق بمرض Covid-19 ، مع البيانات التي تم جمعها حتى منتصف أكتوبر 2021. ستجد هنا الرسوم البيانية والجداول الإحصائية التي ستتيح لك فهم المعلومات المقدمة بطريقة أكثر بساطة. <br> البيانات مأخوذة من عالمنا في البيانات.";
                        // Card 1
                        c1t = "الحالات والوفيات العالمية" ;
                        c1txt = "يحتوي هذا القسم الأولي على رسمين بيانيين ويقدم معلومات عن القارات فيما يتعلق بالعدد الإجمالي للمصابين والمتوفين على مستوى العالم.";
                        c1n = "";
                        c1tab1 = "الحالات" ;
                        c1tab1a = "رسم بياني" ;
                        c1tab1b = "رسم بياني";
                        c1tab2 = "وفيات" ;
                        c1tab2a = "جدول" ;
                        c1tab2b = "جدول" ;
                        // البطاقة 2
                        c2t = "وفيات في أمريكا الجنوبية" ;
                        c2txt = "يحتوي هذا القسم الثاني على رسم بياني يوفر معلومات أكثر تفصيلاً عن عدد الوفيات الناجمة عن Covid-19 في أمريكا الجنوبية. بالإضافة إلى ذلك ، في علامة التبويب الثانية ، يمكنك العثور على جدول بالبيانات الممثلة في الرسم البياني.";
                        c2n = "";
                        c2tab1 = "مخطط";
                        c2tab2 = "جدول";
                        // البطاقة 3
                        c3t = "تم تلقيحها في كولومبيا";
                        c3txt = "يحتوي هذا القسم الأخير على رسم بياني يوفر معلومات حول عدد الذين تم تطعيمهم في كولومبيا خلال شهر سبتمبر 2021. بالإضافة إلى ذلك ، في علامة التبويب الثانية ، يمكنك العثور على الجدول الذي يحتوي على البيانات الممثلة في الرسم البياني بمزيد من التفصيل.";
                        c3n = "";
                        c3tab1 = "مخطط";
                        c3tab2 = "جدول";
                        break;

                    case 8: //Japanese
                        //Left section
                        aboutT = "だいたい";
                        aboutTxt = "Uninorteの学生によって開発されました。 2021年。";
                        byT = "チームメンバー";
                        //Welcome card
                        welcomeT = "ようこそ！";
                        langB = "言語の変更";
                        welcomeBodyT = "Covid-DBには、2021年10月中旬までに収集されたデータとともに、Covid-19病に関連する情報があります。ここには、より簡単な方法で提供される情報を理解できる統計グラフと表があります。 。<br>データで私たちの世界から取得したデータ。 ";
                        //カード1
                        c1t = "世界的な症例と死亡";
                        c1txt = "この最初のセクションには2つのグラフがあり、世界の感染者と死亡者の総数に関する大陸に関する情報を提供します。";
                        c1n = "";
                        c1tab1 = "ケース";
                        c1tab1a = "グラフ";
                        c1tab1b = "グラフ";
                        c1tab2 = "死";
                        c1tab2a = "テーブル";
                        c1tab2b = "テーブル";
                        //カード2
                        c2t = "南アメリカでの死";
                        c2txt = "この2番目のセクションには、南米でCovid-19によって引き起こされた死亡者数に関する詳細情報を提供するグラフがあります。さらに、2番目のタブには、グラフで表されたデータを含む表があります。";
                        c2n = "";
                        c2tab1 = "チャート";
                        c2tab2 = "テーブル";
                        //カード3
                        c3t = "コロンビアでワクチン接種";
                        c3txt = "この最後のセクションには、2021年9月の間にコロンビアでワクチン接種された数に関する情報を提供するグラフがあります。さらに、2番目のタブで、グラフに表示されたデータを含む表をより詳細に見つけることができます。" ;
                        c3n = "";
                        c3tab1 = "チャート";
                        c3tab2 = "テーブル";
                        break;

                    case 9: //Korean
                        //Left section
                        aboutT = "에 대한";
                        aboutTxt = "Uninorte 학생들이 개발했습니다. 2021.";
                        byT = "팀 멤버";
                        //Welcome card
                        welcomeT = "환영합니다!";
                        langB = "언어 변경";
                        welcomeBodyT = "Covid-DB에서는 2021년 10월 중순까지 수집된 데이터와 함께 Covid-19 질병과 관련된 정보를 찾을 수 있습니다. 여기에서 제공되는 정보를 보다 쉽게 ​​이해할 수 있는 통계 그래프와 표를 찾을 수 있습니다. . <br> 데이터의 세계에서 가져온 데이터.";
                        //카드 1
                        c1t = "글로벌 사례 및 사망";
                        c1txt = "이 초기 섹션에는 2개의 그래프가 있으며 전 세계적으로 감염 및 사망자의 총 수에 관한 대륙 정보를 제공합니다.";
                        c1n = "";
                        c1tab1 = "케이스";
                        c1tab1a = "그래프";
                        c1tab1b = "그래프";
                        c1tab2 = "죽음";
                        c1tab2a = "표";
                        c1tab2b = "표";
                        // 카드 2
                        c2t = "남아메리카의 사망";
                        c2txt = "이 두 번째 섹션에는 남아메리카의 Covid-19로 인한 사망자 수에 대한 자세한 정보를 제공하는 그래프가 있습니다. 또한 두 번째 탭에서는 그래프에 표시된 데이터가 있는 표를 찾을 수 있습니다. ";
                        c2n = "";
                        c2tab1 = "차트";
                        c2tab2 = "표";
                        // 카드 3
                        c3t = "콜롬비아에서 예방 접종";
                        c3txt = "이 마지막 섹션에는 2021년 9월 한 달 동안 콜롬비아에서 예방 접종을 한 사람의 수에 대한 정보를 제공하는 그래프가 있습니다. 또한 두 번째 탭에서 그래프에 표시된 데이터가 있는 표를 더 자세히 찾을 수 있습니다. " ;
                        c3n = "";
                        c3tab1 = "차트";
                        c3tab2 = "표";
                        break;

                    case 10: //Chinese
                        //Left section
                        aboutT = "关于";
                        aboutTxt = "由 Uninorte 学生开发。 2021。";
                        byT = "团队成员";
                        //Welcome card
                        welcomeT = "欢迎！";
                        langB = "改变语言";
                        welcomeBodyT = "在 Covid-DB 中，您会找到与 Covid-19 疾病相关的信息，收集的数据截至 2021 年 10 月中旬。在这里，您会找到统计图表和表格，让您能够以更简单的方式了解所提供的信息。 <br> 数据取自我们的数据世界。";
                        //Card 1
                        //卡片1
                        c1t = "全球病例和死亡人数";
                        c1txt = "这个初始部分有 2 个图表，并提供了有关全球感染和死亡总数的各大洲的信息。";
                        c1n = "";
                        c1tab1 = "案例";
                        c1tab1a = "图表";
                        c1tab1b = "图表";
                        c1tab2 = "死亡人数";
                        c1tab2a = "表格";
                        c1tab2b = "表格";
                        //卡片2
                        c2t = "南美洲的死亡人数";
                        c2txt = "这第二部分有一个图表，提供了有关南美洲 Covid-19 造成的死亡人数的更详细信息。此外，在第二个选项卡中，您可以找到包含图表中数据的表格。";
                        c2n = "";
                        c2tab1 = "图表";
                        c2tab2 = "表格";
                        //卡片3
                        c3t = "在哥伦比亚接种过疫苗";
                        c3txt = "最后一部分的图表提供了有关 2021 年 9 月哥伦比亚接种疫苗数量的信息。此外，在第二个选项卡中，您可以找到包含图表中更详细数据的表格。" ;
                        c3n = "";
                        c3tab1 = "图表";
                        c3tab2 = "表格";
                        break;
                
                }


                //About
                document.getElementById("aboutT").innerHTML = "<strong>"+aboutT+"</strong>";
                document.getElementById("aboutTxt").innerHTML = aboutTxt;
                document.getElementById("byT").innerHTML = "<small>"+byT+"</small>";
                //Welcome card
                document.getElementById("welcomeT").innerHTML = welcomeT;
                document.getElementById("welcomeBodyT").innerHTML = welcomeBodyT;
                document.getElementById("langB").innerHTML = "<i class='fas fa-language fa-lg'></i> " + langB;
                //Card 1
                document.getElementById("c1t").innerHTML = c1t;
                document.getElementById("c1txt").innerHTML = c1txt;
                document.getElementById("c1n").innerHTML = c1n;
                document.getElementById("ex1-tab-1").innerHTML = c1tab1;
                document.getElementById("ex1-tab-1a").innerHTML = "<i class='fas fa-chart-pie fa-lg'></i> " + c1tab1a;
                document.getElementById("ex1-tab-1b").innerHTML = "<i class='fas fa-chart-pie fa-lg'></i> " + c1tab1b;
                document.getElementById("ex1-tab-2").innerHTML = c1tab2;
                document.getElementById("ex1-tab-2a").innerHTML = "<i class='fas fa-table fa-lg'></i> " + c1tab2a;
                document.getElementById("ex1-tab-2b").innerHTML = "<i class='fas fa-table fa-lg'></i> " + c1tab2b;
                //Card 2
                document.getElementById("c2t").innerHTML = c2t;
                document.getElementById("c2txt").innerHTML = c2txt;
                document.getElementById("c2n").innerHTML = c2n;
                document.getElementById("ex1-tab-1-b").innerHTML = "<i class='fas fa-chart-bar fa-lg'></i> " + c2tab1;
                document.getElementById("ex1-tab-2-b").innerHTML = "<i class='fas fa-table fa-lg'></i> " + c2tab2;
                //Card 3
                document.getElementById("c3t").innerHTML = c3t;
                document.getElementById("c3txt").innerHTML = c3txt;
                document.getElementById("c3n").innerHTML = c3n;
                document.getElementById("ex1-tab-1-c").innerHTML = "<i class='fas fa-chart-line fa-lg'></i> " + c3tab1;
                document.getElementById("ex1-tab-2-c").innerHTML = "<i class='fas fa-table fa-lg'></i> " + c3tab2;
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