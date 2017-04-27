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
                    <div class="dropdown profile-element">
                        <span>                            
                            <img src="../img/profile_small.jpg" class="img-circle" alt="profile" width="40%"/>
                        </span>
                        <a href="#">
                            <span class="block">                                
                                <h4>
                                    <strong class="font-bold">LUIS CORREA ZAMBRANO</strong>
                                    <br><small class="profile-type">PROFESOR</small>
                                </h4>
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="profesor.php">
                        <i class="fa fa-th-large"></i><span class="nav-label">Mi Perfil</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_institucion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_notificaciones.php">
                        <i class="fa fa-newspaper-o"></i><span class="nav-label">Notificaciones</span>
                    </a>
                </li>
                <li class="active">
                    <a href="profesor_cursos.php">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos</span>
                    </a>
                </li>
                <li>
                    <a href="profesor_horario.php">
                        <i class="fa fa-clock-o"></i><span class="nav-label">Horarios</span>
                    </a>      
                </li>
                <li>
                    <a href="profesor_calendario.php">
                        <i class="fa fa-calendar"></i><span class="nav-label">Calendario Academico</span>
                    </a>      
                </li>                                                          
                <li>
                    <a href="#">
                        <i class="fa fa-institution"></i>
                        <span class="nav-label">Planificaciones</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="#">Opcion 1</a></li>
                        <li><a href="#">Opcion 2</a></li>
                    </ul> 
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">            
                    <li class="dropdown">
                        <a class="count-info" href="profesor_notificaciones.php">
                            <i class="fa fa-envelope"></i><span class="label label-warning">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i><span class="label label-primary">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="profesor_notificaciones.php">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Coordinación Académica
                                        <span class="pull-right text-muted small">ayer(11.15 am)</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="profesor_notificaciones.php">
                                        <strong>See All Alerts</strong><i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <i class="fa fa-sign-out"></i>Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg ">                  
            <h2 style="padding-bottom:0;margin-bottom:0">Seleccione un Curso</h2>
            <div class="pull-right" style="margin-right: -15px">
                <a href="profesor_cursos.php">
                    <span style="font-size:14px"><img src="../img/LISTA.png" width="25px"></span>
                </a> 
                <a href="#">
                    <span style="font-size:14px;padding-right:-15px"><img src="../img/ICONO.png" width="25px"></span>
                </a>
            </div>                                                 
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="cursos-master">
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">MATEMATICAS</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula8A.php" > 
                            <div class="dirigente">
                                <p>Curso: 8 'A'</p>
                                <h4>Dirigente: </br>LUIS CORREA ZAMBRANO</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">MATEMATICAS</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula8B.php" > 
                            <div class="dirigente">
                                <p>Curso: 8 'B'</p>
                                <h4>Dirigente: </br>RUTH ARGUELLO MENDOZA</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">MATEMATICAS</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula9A.php" > 
                            <div class="dirigente">
                                <p>Curso: 9 'A'</p>
                                <h4>Dirigente: </br>MERY URBINA ANDALUZ</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula1CIENTIFICO.php" > 
                            <div class="dirigente">
                                <p>Curso: 1RO BACHILLERATO CIENTIFICO</p>
                                <h4>Dirigente: </br>TATIANA CARREÑO QUIROZ</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula2CIENTIFICO.php" > 
                            <div class="dirigente">
                                <p>Curso: 2DO BACHILLERATO CIENTIFICO</p>
                                <h4>Dirigente: </br>CLAUDIA LOPEZ SANCHEZ</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula2INFORMATICA.php" > 
                            <div class="dirigente">
                                <p>Curso: 2DO BACHILLERATO INFORMATICA</p>
                                <h4>Dirigente: </br>MARCOS PAZAN REYES</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula3CIENTIFICO.php" > 
                            <div class="dirigente">
                                <p>Curso: 3RO BACHILLERATO CIENTIFICO</p>
                                <h4>Dirigente: </br>GLENDA CANDEL CARBO</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula3CONTABILIDAD.php" > 
                            <div class="dirigente">
                                <p>Curso: 3RO BACHILLERATO CONTABILIDAD</p>
                                <h4>Dirigente: </br>JUAN LOPEZ MARURI</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="../img/CURSO.png" width="10">INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula3INFORMATICA.php" > 
                            <div class="dirigente">
                                <p>Curso: 3RO BACHILLERATO INFORMATICA</p>
                                <h4>Dirigente: </br>ANGELICA VILLABLANCA TRUJILLO</h4>
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