<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
?>
<?php include ('include/header.php'); ?>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="profile-element"> 
                        <img alt="image" class="img-circle" src="../img/a5.jpg" width="40%" />
                        <a href="#">
                            <span class="block ">
                                <h4>
                                    <strong class="font-bold">CARMEN OJEDA LEON</strong>
                                    <br><small class="profile-type">RECTOR</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>                
                <li>
                    <a href="director.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="director_informacion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Informacion</span> 
                    </a>
                </li>
                <li>
                    <a href="director_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li>
                    <a href="director_cursos.php">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos </span>
                    </a>
                </li>
                <li class="active">
                    <a href="director_horarios.php">
                        <i class="fa fa-clock-o"></i>
                        <span class="nav-label">Horarios </span>
                    </a>
                </li>
                <li>
                    <a href="director_asistencia.php">
                        <i class="fa fa-list"></i>
                        <span class="nav-label">Asistencia </span>
                    </a>
                </li>
                <li>
                    <a href="director_pagos.php">
                        <i class="fa fa-usd"></i>
                        <span class="nav-label">Pagos </span>
                    </a>
                </li>
                <li>
                    <a href="director_plancurricular.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Plan Curricular </span>
                    </a>
                </li>
                <li>
                    <a href="director_configuraciones.php">
                        <i class="fa fa-cogs"></i>
                        <span class="nav-label">Configuraciones </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper white-bg "> 
            <div class="col-xs-12 seleccion-curso">
                <h2 style="margin:1em 0">Seleccione un Curso</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                                
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario8A.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                8 'A'    
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE:</strong>
                                                LUIS CORREA ZAMBRANO    
                                            </h4>
                                        </div>
                                    </a>                                              
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario8B.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                8 'B' 
                                            </h4>                                            
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>RUTH ARGUELLO MENDOZA
                                            </h4>
                                        </div>
                                    </a> 
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario9A.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                9 'A'
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                MERY URBINA ANDALUZ
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario9B.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                9 'B'
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                CAROLINA QUIROZ SANTOS
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario10A.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                10 'A'
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                JAVIER ARVELAEZ MOSQUERA 
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario10B.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                10 'B'
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                TATIANA ARICHAVALA CRESPIN
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario1CIENTIFICO.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                1RO BACHILLERATO CIENTIFICO
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                TATIANA CARREÑO QUIROZ
                                            </h4>
                                        </div>                                         
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario1CONTABILIDAD.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                1RO BACHILLERATO CONTABILIDAD
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                SONIA RODRIGUEZ NOBOA 
                                            </h4>
                                        </div>                                         
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario1INFORMATICA.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                1RO BACHILLERATO INFORMATICA
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                ANA PLUA RIVERA
                                            </h4>
                                        </div>                                         
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario2CIENTIFICO.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                2DO BACHILLERATO CIENTIFICO
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                VIVIANA CIRINO DE LA ROSA 
                                            </h4>
                                        </div>
                                    </a>                                               
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario2CONTABILIDAD.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                2DO BACHILLERATO CONTABILIDAD
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                MARIANA CAMACHO CUJI
                                            </h4>
                                        </div>
                                    </a>                                               
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario2INFORMATICA.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                2DO BACHILLERATO INFORMATICA
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                MARCOS PAZAN REYES
                                            </h4>
                                        </div>                                         
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario3CIENTIFICO.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                3RO BACHILLERATO CIENTIFICO
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                GLENDA CANDEL CARBO
                                            </h4>
                                        </div>                            
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario3CONTABILIDAD.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                3RO BACHILLERATO CONTABILIDAD
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                JUAN LOPEZ MARURI
                                            </h4>
                                        </div>                                         
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="director_horario3INFORMATICA.php" style="color:black">
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <img src="../img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                3RO BACHILLERATO INFORMATICA
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                ANGELICA VILLABLANCA TRUJILLO
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>                
            </div>
        </div> 
    </div>
</div>
<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>
