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
                    <a href="#">
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
                <li class="active">
                    <a href="director_cursos.php">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos </span>
                    </a>
                </li>
                <li>
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
                <div class="formatos">                    
                    <a class="formatos-link" href="director_cursos.php"> 
                        <img src="../img/list.png" alt="" width="20">
                    </a>
                </div>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="cursos-master">

                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 8 'A'</h3>
                        <hr>
                        <a href="director_curso_cuadricula8A.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> LUIS CORREA ZAMBRANO</h4>
                            </div>
                        </a>
                    </div>

                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 8 'B'</h3>
                        <hr>
                        <a href="director_curso_cuadricula8B.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> RUTH ARGUELLO</h4>
                            </div>
                        </a>
                    </div>

                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 9 'A'</h3>
                        <hr>
                        <a href="director_curso_cuadricula9A.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> MERY URBINA ANDALUZ</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 9 'B'</h3>
                        <hr>
                        <a href="director_curso_cuadricula9B.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> CAROLINA QUIROZ SANTOS</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 10 'A'</h3>
                        <hr>
                        <a href="director_curso_cuadricula10A.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> JAVIER ARVELAEZ MOSQUERA</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 10 'B'</h3>
                        <hr>
                        <a href="director_curso_cuadricula10B.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> TATIANA ARICHAVALA CRESPIN</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 1RO BACHILLERATO CIENTIFICO</h3>
                        <hr>
                        <a href="director_curso_cuadricula1CIENTIFICO.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> TATIANA CARREÑO QUIROZ</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 1RO BACHILLERATO CONTABILIDAD</h3>
                        <hr>
                        <a href="director_curso_cuadricula1CONTABILIDAD.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> SONIA RODRIGUEZ NOBOA</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 1ro BACHILLERATO INFORMATICA</h3>
                        <hr>
                        <a href="director_curso_cuadricula1INFORMATICA.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> ANA PLUA RIVERA</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 2do BACHILLERATO CIENTIFICO</h3>
                        <hr>
                        <a href="director_curso_cuadricula2CIENTIFICO.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> VIVIANA CIRINO DE LA ROSA</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 2DO BACHILLERATO CONTABILIDAD</h3>
                        <hr>
                        <a href="director_curso_cuadricula2CONTABILIDAD.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> MARIANA CAMACHO CUJI</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 2DO BACHILLERATO INFORMATICA</h3>
                        <hr>
                        <a href="director_curso_cuadricula2INFORMATICA.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> MARCOS PAZAN REYES</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 3RO BACHILLERATO CIENTIFICO</h3>
                        <hr>
                        <a href="director_curso_cuadricula3CIENTIFICO.php" > 
                            <div class="dirigente">
                                <h4>Dirigente: </br> GLENDA CANDEL CARBO</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 3RO BACHILLERATO CONTABILIDAD</h3>
                        <hr>
                        <a href="director_curso_cuadricula3CONTABILIDAD.php" > 
                            <div class="dirigente">
                                <h4>DIRIGENTE: </br> JUAN LOPEZ MARURI</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">Curso: 3RO BACHILLERATO INFORMATICA</h3>
                        <hr>
                        <a href="director_curso_cuadricula3INFORMATICA.php" > 
                            <div class="dirigente">
                                <h4>DIRIGENTE: </br>ANGELICA VILLABLANCA TRUJILLO</h4>
                            </div>
                        </a>
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
