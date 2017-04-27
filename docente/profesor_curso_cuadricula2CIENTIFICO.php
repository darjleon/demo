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
                        <a class="count-info" href="profesor_notificaciones.html">
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
                            <i class="fa fa-sign-out"></i> Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg">
            <div class="col-lg-2 text-right">                
                <img src="../img/CURSO.png" style="width:35px">
            </div>                
            <div class="col-lg-10 text-left">                
                <h3 style="margin-left:0"><strong>CURSO: </strong>2DO BACHILLERATO CIENTIFICO</h3>
                <h3><strong>DIRIGENTE: </strong>TATIANA CARREÑO QUIROZ</h3>        
            </div>
            <div class="pull-right" style="margin-top:5px;margin-right: -15px">
                <a href="profesor_cursos.php">
                    <span style="font-size:14px"><img src="../img/LISTA.png" width="25px"></span>
                </a> 
                <a href="profesor_cursos_cuadricula.php">
                    <span style="font-size:14px"><img src="../img/ICONO.png" width="25px"></span>
                </a>
            </div>                                                 
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="alumnos-master">
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>WAGNER ANDRES AGUILAR GOMEZ</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>KENYI JOEL ALVAREZ PEÑAFIEL</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>FERNANDO XAVIER BASTIDAS GARCIA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>MARIA DANIELA BRITO ABAD</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>PAUL ANDRES BUSTAMANTE MORAN</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>ALFONSO JOSHUE CAMACHO HIDALGO</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>GENESIS GABRIELA CASTRO ZAMBRANO</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>DARWIN JOSEPH CEVALLOS BARZOLA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>RICARDO ANDRES CONTRERAS FRANCO</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>CRISTOPHER ALEXANDER DUCHE YNEZ</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>ANAHI YAMILETH ESCOBAR DALMA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>ANDREA STEFANIA ESCOBAR RENDOM</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>EMILIO DANILO ESPINOZA VIZCAINO</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>RENE JOSUE GALLO ROUSSEAU</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>LENIN HENRY GARCIA PALMA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>NESTOR RICARDO GARCIA RODRIGUEZ</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>WALESCA SOFIA GONZALES LOOR</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>CARLA MADELEINE JACHO WONG</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>ANGEL ISRAEL LOZANO LEON</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>KRISTELLE KARELYS LUCIN QUIÑONEZ</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>MARIA JOSE MACARLUPO GARCIA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>RICHARD ANDRES MACIAS TORRES</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>MELANIE NOEMI MERA ZUÑIGA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>GABRIELA STEFANIA MIRANDA ORELLANA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>DAYANNA THAIS MORA CALDERON</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>MARIANA STEFANIA PAZAN RODRIGUEZ</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>NELLY ROUSE PONCE GONZALES</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>OSCAR DAVID QUINTERO HURTADO</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>JONATHAN JOSE REBUTTI MACIAS</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>MARIA DELIA REGALADO LARA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>VALERY GARDENIA RIVERA VERA</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>ERICK ALEXIS ROSERO MACIAS</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>CARLOS XAVIER VALENCIA RODRIGUEZ</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>MARIA FERNANDA VELASCO GUADALUPE</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>ALINSON IVANA VELIZ TRIVIÑO</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>LUANA GUADALUPE ZAMBRANO BURGOS</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4></h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
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