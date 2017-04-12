<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pined | Profesor</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
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
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i>Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg ">
            <div class="col-lg-2 text-right">                
                <img src="img/CURSO.png" style="width:35px">
            </div>                
            <div class="col-lg-10 text-left">                
                <h3 style="margin-left:0"><strong>CURSO: </strong>3RO BACHILLERATO CIENTIFICO</h3>
                <h3><strong>DIRIGENTE: </strong>GLENDA CANDEL CARBO</h3>        
            </div>
            <div class="pull-right" style="margin-top:5px;margin-right: -15px">
                <a href="profesor_cursos.php">
                    <span style="font-size:14px"><img src="img/LISTA.png" width="25px"></span>
                </a> 
                <a href="profesor_cursos_cuadricula.php">
                    <span style="font-size:14px"><img src="img/ICONO.png" width="25px"></span>
                </a>
            </div>                                                 
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover" style="margin-top:10px">
                            <thead style="background-color: #939598">
                                <tr style="background-color: #939598">
                                    <th class="text-center" style="background-color: #939598;color: white">Alumno</th>
                                    <th class="text-center" style="background-color: #939598;color: white">Representante</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white">                            
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            CINDY MARCELA ALARCON MOROCHO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            BRAD ALEXANDER ALCIVAR VERA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            JOSUE MIGUEL ALVARADO AVILA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            LUIS ALBERTO ANDRADE FIGUEROA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            ALLISON ANDREA ARREAGA ANDRADE |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            JOSE MIGUEL AGUILAR RAMIREZ |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            EILEEN GEOMARA BAREO SANJINES |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            BRENDA CAROLINA BERNAL VELASQUEZ |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            CHRISTIAN JOAO BORJA SALAO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            JOSELINE ARIANA BUÑAY RAMOS |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            STEFANI JAMILETH BURGOS FIGUEROA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            MAYLEE NINOSKA BURNHAM MARCILLO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            DAGMAR ALISON CAÑAS PEÑAFIEL |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                        </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            DEREK JOSHUA CARDENAS AMBI |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            GINGER LISBETH CASTRO RUIZ |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            SERGIO ANDRES CLAVIJO AGUAYZA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            ALICIA YADIRA CORDOVA MAYOR |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            GIUSEPPE OLIVER GARCIA INTRIAGO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            CRISTOPHER JULIAN INTRIAGO LEON |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            MAYLIN BRENDA JARAMILLO SANTILLAN |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            MICHAEL DOUGLAS MONCADA LADINES |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            JEAN PIERRE MENDEZ APOLINARIO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            LADY LISBETH MORENO MANTILLA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            DOMENICA ANTONIA OLVERA URBINA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            BRITANY SHAJAIRA ORDOÑEZ NIETO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            ERIC JOSUE QUIMIS SOLIS |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            DAVID STALYN REBUTTI DELGADO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            NANCY BEATRIZ RIGCHAG AMANCHA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            MERIDA ROBERTA RIVERA VERA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            ENRIQUE GABRIEL RODRIGUEZ |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            MARIA EDITHSOTO CHICHANDE |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
>                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            THALIA NICOLE TAPIA LOOR |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            TAIS VERENICE TENORIO CARABALI |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            ALLISON DOMENIQUE VARGAS MEZA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            KATTHYA MELISSA VARGAS MEZA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            DOMENICA BELEN VILLOTA MOROCHO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            MARIA BELEN VITERI JURADO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            JOSE JAVIER ZAMBRANO CABRERA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            DAYANNA FIORELA ZHUMA TENEZACA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>          
                            </tbody>   
                        </table>
                    </div>
                </div>
            </div>                                      
        </div>
    </div> 
</div>


    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            
            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];
        });
    </script>
</body>
</html>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>
