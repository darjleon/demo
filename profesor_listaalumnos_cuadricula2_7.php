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
                        <img alt="logo" src="img/logo.png" width="50px"/>
                    </div>
                </li>
                <li>
                    <a href="profesor.html">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_institucion.html">
                        <i class="fa fa-institution"></i> <span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_notificaciones.html">
                        <i class="fa fa-newspaper-o"></i><span class="nav-label">Notificaciones</span>
                    </a>
                </li>
                <li class="active">
                    <a href="profesor_listaalumnos.html">
                        <img src="img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumnos</span>
                    </a>
                </li>
                <li>
                    <a href="profesor_asistencia.html">
                        <i class="fa fa-list"></i><span class="nav-label">Asistencia</span>
                    </a>      
                </li>
                <li>
                    <a href="profesor_horario.html">
                        <i class="fa fa-table"></i><span class="nav-label">Horarios</span>
                    </a>      
                </li>                                                          
                <li>
                    <a href="profesor_calificaciones.html">
                        <i class="fa fa-fw fa-list-alt"></i><span class="nav-label">Calificaciones</span>
                    </a>      
                </li> 
                <li>
                    <a href="#">
                        <i class="fa fa-institution"></i>
                        <span class="nav-label">Planificaciones</span><span class="fa arrow"></span>
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
                        <a class="count-info" href="p_notificaciones.html">
                            <i class="fa fa-envelope"></i><span class="label label-warning">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i><span class="label label-primary">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="p_notificaciones.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Coordinación Académica
                                        <span class="pull-right text-muted small">ayer(11.15 am)</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="p_notificaciones.html">
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
            <div class="pull-left">                
                <h2>Listado de Alumnos</h2>
            </div>
            <div class="pull-right" style="margin-top:5px;margin-right: -15px">
                <a href="profesor_listaalumnos.html">
                    <span style="font-size:14px"><img src="img/LISTA.png" width="25px"></span>
                </a> 
                <a href="profesor_listaalumnos_cuadricula.html">
                    <span style="font-size:14px"><img src="img/ICONO.png" width="25px"></span>
                </a>
            </div>                       
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>CINDY MARCELA</strong></h3>
                            <h3><strong>ALARCON MOROCHO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>BRAD ALEXANDER</strong></h3>
                            <h3><strong>ALCIVAR VERA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>JOSUE MIGUEL</strong></h3>
                            <h3><strong>ALVARADO AVILA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>LUIS ALBERTO</strong></h3>
                            <h3><strong>ANDRADE FIGUEROA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>ALLISON ANDREA</strong></h3>
                            <h3><strong>ARREAGA ANDRADE</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>JOSE MIGUEL</strong></h3>
                            <h3><strong>AGUILAR RAMIREZ</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>EILEEN GEOMARA</strong></h3>
                            <h3><strong>BAREO SANJINES</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>BRENDA CAROLINA</strong></h3>
                            <h3><strong>BERNAL VELASQUEZ</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>CHRISTIAN JOAO</strong></h3>
                            <h3><strong>BORJA SALAO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>JOSELINE ARIANA</strong></h3>
                            <h3><strong>BUÑAY RAMOS</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>STEFANI JAMILETH</strong></h3>
                            <h3><strong>BURGOS FIGUEROA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>MAYLEE NINOSKA</strong></h3>
                            <h3><strong>BURNHAM MARCILLO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>DAGMAR ALISON</strong></h3>
                            <h3><strong>CAÑAS PEÑAFIEL</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>DEREK JOSHUA</strong></h3>
                            <h3><strong>CARDENAS AMBI</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>GINGER LISBETH</strong></h3>
                            <h3><strong>CASTRO RUIZ</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>              
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>SERGIO ANDRES</strong></h3>
                            <h3><strong>CLAVIJO AGUAYZA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>ALICIA YADIRA</strong></h3>
                            <h3><strong>CORDOVA MAYOR</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>GIUSEPPE OLIVER</strong></h3>
                            <h3><strong>GARCIA INTRIAGO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>CRISTOPHER JULIAN</strong></h3>
                            <h3><strong>INTRIAGO LEON</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>MAYLIN BRENDA</strong></h3>
                            <h3><strong>JARAMILLO SANTILLAN</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>MICHAEL DOUGLAS</strong></h3>
                            <h3><strong>MONCADA LADINES</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>JEAN PIERRE</strong></h3>
                            <h3><strong>MENDEZ APOLINARIO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>LADY LISBETH</strong></h3>
                            <h3><strong>MORENO MANTILLA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>DOMENICA ANTONIA</strong></h3>
                            <h3><strong>OLVERA URBINA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>BRITANY SHAJAIRA</strong></h3>
                            <h3><strong>ORDOÑEZ NIETO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>ERIC JOSUE</strong></h3>
                            <h3><strong>QUIMIS SOLIS</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>DAVID STALYN</strong></h3>
                            <h3><strong>REBUTTI DELGADO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>NANCY BEATRIZ</strong></h3>
                            <h3><strong>RIGCHAG AMANCHA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>MERIDA ROBERTA</strong></h3>
                            <h3><strong>RIVERA VERA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>ENRIQUE GABRIEL</strong></h3>
                            <h3><strong>RODRIGUEZ</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>MARIA EDITH</strong></h3>
                            <h3><strong>SOTO CHICHANDE</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>THALIA NICOLE</strong></h3>
                            <h3><strong>TAPIA LOOR</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>TAIS VERENICE</strong></h3>
                            <h3><strong>TENORIO CARABALI</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>ALLISON DOMENIQUE</strong></h3>
                            <h3><strong>VARGAS MEZA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>KATTHYA MELISSA</strong></h3>
                            <h3><strong>VARGAS MEZA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>DOMENICA BELEN</strong></h3>
                            <h3><strong>VILLOTA MOROCHO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>MARIA BELEN</strong></h3>
                            <h3><strong>VITERI JURADO</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>JOSE JAVIER</strong></h3>
                            <h3><strong>ZAMBRANO CABRERA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h3><strong>DAYANNA FIORELA</strong></h3>
                            <h3><strong>ZHUMA TENEZACA</strong></h3>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
                            </div>                                                          
                            <h3>3RO BACHILLERATO CIENTIFICO</h3>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
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
