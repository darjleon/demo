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
                            <img src="img/profile_small.jpg" class="img-circle" alt="profile" width="40%"/>
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
                        <img alt="logo" src="img/logo unico.png" width="50px" />
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
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper white-bg "> 
            <div class="col-xs-12 seleccion-curso">
                <h2 style="margin:1em 0">Seleccione un Curso</h2>
                <div class="formatos">
                    <a href="#"> 
                        <img src="img/cuadricula.png" alt="" width="17">
                    </a>                    
                    <a href="profesor_cursos.php"> 
                        <img src="img/list.png" alt="" width="20">
                    </a>
                </div>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="cursos-master">
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia MATEMATICAS</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula8A.php" > 
                            <div class="dirigente">
                                <p>Curso: 8 'A'</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia MATEMATICAS</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula8B.php" > 
                            <div class="dirigente">
                                <p>Curso: 9 'B'</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia MATEMATICAS</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula9A.php" > 
                            <div class="dirigente">
                                <p>Curso: 9 'A'</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula1CIENTIFICO.php" > 
                            <div class="dirigente">
                                <p>Curso: 1RO BACHILLERATO CIENTIFICO</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula2CIENTIFICO.php" > 
                            <div class="dirigente">
                                <p>Curso: 2DO BACHILLERATO CIENTIFICO</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula2INFORMATICA.php" > 
                            <div class="dirigente">
                                <p>Curso: 2DO BACHILLERATO INFORMATICA</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula3CIENTIFICO.php" > 
                            <div class="dirigente">
                                <p>Curso: 3RO BACHILLERATO CIENTIFICO</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula3CONTABILIDAD.php" > 
                            <div class="dirigente">
                                <p>Curso: 3RO BACHILLERATO CONTABILIDAD</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
                            </div>
                        </a>
                    </div>
                    <div class="cursos-cuadricula text-center">
                        <h3 class="text-center"><img src="img/CURSO.png" width="10">Materia INVESTIGACION</h3>
                        <hr>
                        <a href="profesor_curso_cuadricula3INFORMATICA.php" > 
                            <div class="dirigente">
                                <p>Curso: 3RO BACHILLERATO INFORMATICA</p>
                                <h4>Dirigente: </br> Luis Correa Zambrano</h4>
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
