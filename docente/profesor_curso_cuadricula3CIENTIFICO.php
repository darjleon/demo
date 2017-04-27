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
            <div class="col-lg-2 text-right">                
                <img src="../img/CURSO.png" style="width:35px">
            </div>                
            <div class="col-lg-10 text-left">                
                <h3 style="margin-left:0"><strong>CURSO: </strong>3RO BACHILLERATO CIENTIFICO</h3>
                <h3><strong>DIRIGENTE: </strong>GLENDA CANDEL CARBO</h3>        
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
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>JOSUE MIGUEL ALVARADO AVILA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>LUIS ALBERTO ANDRADE FIGUEROA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ALLISON ANDREA ARREAGA ANDRADE</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>JOSE MIGUEL AGUILAR RAMIREZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>EILEEN GEOMARA BAREO SANJINES</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>BRENDA CAROLINA BERNAL VELASQUEZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>CHRISTIAN JOAO BORJA SALAO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>JOSELINE ARIANA BUÑAY RAMOS</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>STEFANI JAMILETH BURGOS FIGUEROA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MAYLEE NINOSKA BURNHAM MARCILLO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>DAGMAR ALISON CAÑAS PEÑAFIEL</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>DEREK JOSHUA CARDENAS AMBI</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3">REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>GINGER LISBETH CASTRO RUIZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>SERGIO ANDRES CLAVIJO AGUAYZA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ALICIA YADIRA CORDOVA MAYOR</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>GIUSEPPE OLIVER GARCIA INTRIAGO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>CRISTOPHER JULIAN INTRIAGO LEON</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MAYLIN BRENDA JARAMILLO SANTILLAN</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MICHAEL DOUGLAS MONCADA LADINES</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>JEAN PIERRE MENDEZ APOLINARIO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>LADY LISBETH MORENO MANTILLA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>DOMENICA ANTONIA OLVERA URBINA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>BRITANY SHAJAIRA ORDOÑEZ NIETO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ERIC JOSUE QUIMIS SOLIS</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>DAVID STALYN REBUTTI DELGADO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>NANCY BEATRIZ RIGCHAG AMANCHA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MERIDA ROBERTA RIVERA VERA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ENRIQUE GABRIEL RODRIGUEZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MARIA EDITH SOTO CHICHANDE</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>THALIA NICOLE TAPIA LOOR</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>TAIS VERENICE TENORIO CARABALI</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ALLISON DOMENIQUE VARGAS MEZA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>KATTHYA MELISSA VARGAS MEZA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>DOMENICA BELEN VILLOTA MOROCHO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MARIA BELEN VITERI JURADO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>JOSE JAVIER ZAMBRANO CABRERA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal2">
                                    <i class="fa fa-envelope"></i>
                                </button>
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3" >REPRESENTANTE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="../img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>DAYANNA FIORELA ZHUMA TENEZACA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="../img/REPRESENTANTE.png">
                            </div>                                                          
                            <h5>Nombres y Apellidos</h5>
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
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="alumnos-master">
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>CINDY MARCELA ALARCON MOROCHO</h4>
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
                        <h4>BRAD ALEXANDER ALCIVAR VERA</h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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
                        <h4></h4>
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