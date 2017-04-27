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
                    <a href="profesor.html">
                        <i class="fa fa-th-large"></i><span class="nav-label">Mi Perfil</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_institucion.html">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_notificaciones.html">
                        <i class="fa fa-newspaper-o"></i><span class="nav-label">Notificaciones</span>
                    </a>
                </li>
                <li class="active">
                    <a href="profesor_cursos.html">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos</span>
                    </a>
                </li>
                <li>
                    <a href="profesor_horario.html">
                        <i class="fa fa-clock-o"></i><span class="nav-label">Horarios</span>
                    </a>      
                </li>
                <li>
                    <a href="profesor_calendario.html">
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
        <div class="row wrapper white-bg">
            <h2 style="padding-bottom:0;margin-bottom:0">Seleccione un Curso</h2>
            <div class="pull-right" style="margin-right: -15px">
                <a href="#">
                    <span style="font-size:14px"><img src="img/LISTA.png" width="25px"></span>
                </a> 
                <a href="profesor_cursos_cuadricula.html">
                    <span style="font-size:14px;padding-right:-15px"><img src="img/ICONO.png" width="25px"></span>
                </a>
            </div>                                                 
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                                
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="profesor_curso8A.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                8 'A'    
                                            </h4>
                                        </div>
                                        <div class="col-lg-6">
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
                                    <a href="profesor_curso8B.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                8 'B' 
                                            </h4>                                            
                                        </div>
                                        <div class="col-lg-6">
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
                                    <a href="profesor_curso9A.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                9 'A'
                                            </h4>
                                        </div>
                                        <div class="col-lg-6">
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
                                    <a href="profesor_curso1CIENTIFICO.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                1RO BACHILLERATO CIENTIFICO
                                            </h4>
                                        </div>
                                        <div class="col-lg-6">
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
                                    <a href="profesor_curso2CIENTIFICO.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                2DO BACHILLERATO CIENTIFICO
                                            </h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <strong>DIRIGENTE: </strong>
                                                CLAUDIA LOPEZ SANCHEZ
                                            </h4>
                                        </div>
                                    </a>                                               
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-bottom:5px">
                            <div class="panel-heading" style="background-color:white">
                                <div class="row">
                                    <a href="profesor_curso2INFORMATICA.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                2DO BACHILLERATO INFORMATICA
                                            </h4>
                                        </div>
                                        <div class="col-lg-6">
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
                                    <a href="profesor_curso3CIENTIFICO.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                3RO BACHILLERATO CIENTIFICO
                                            </h4>
                                        </div>
                                        <div class="col-lg-6">
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
                                    <a href="profesor_curso3CONTABILIDAD.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                3RO BACHILLERATO CONTABILIDAD
                                            </h4>
                                        </div>
                                        <div class="col-lg-6">
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
                                    <a href="profesor_curso3INFORMATICA.html" style="color:black">
                                        <div class="col-lg-6">
                                            <h4 class="course-title">
                                                <img src="img/CURSO.png" width="15px">
                                                <strong class="curso-lista">CURSO:</strong>
                                                3RO BACHILLERATO INFORMATICA
                                            </h4>
                                        </div>
                                        <div class="col-lg-6">
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