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
        <div class="row wrapper white-bg" style="padding-top:5px">
            <div class="col-lg-2 text-right">                
                <img src="img/CURSO.png" style="width:35px">
            </div>                
            <div class="col-lg-5 text-left">                
                <h4 style="margin-left:0;margin-bottom: 0;margin-top: 10px"><strong>CURSO: </strong>2DO BACHILLERATO CIENTIFICO</h4>
                <h4 style="margin-top:0;margin-bottom: 0"><strong>DIRIGENTE: </strong>CLAUDIA LOPEZ SANCHEZ</h4>       
                <h4 style="margin-top: 10px"><strong>MATERIA: </strong>INVESTIGACION</h4> 
            </div>
            <div class="col-lg-5 text-right">
                <a href="profesor_cursos_cuadricula.php">
                    <button type="button" class="btn btn-outline btn-success" style="margin-top:5px;margin-bottom: 5px">Regresar</button>
                </a>
            </div>                                                  
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>WAGNER ANDRES AGUILAR GOMEZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>KENYI JOEL ALVAREZ PEÑAFIEL</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>FERNANDO XAVIER BASTIDAS GARCIA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MARIA DANIELA BRITO ABAD</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>PAUL ANDRES BUSTAMANTE MORAN</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ALFONSO JOSHUE CAMACHO HIDALGO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>GENESIS GABRIELA CASTRO ZAMBRANO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>DARWIN JOSEPH CEVALLOS BARZOLA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>RICARDO ANDRES CONTRERAS FRANCO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>CRISTOPHER ALEXANDER DUCHE YNEZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ANAHI YAMILETH ESCOBAR DALMA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ANDREA STEFANIA ESCOBAR RENDOM</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>EMILIO DANILO ESPINOZA VIZCAINO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>RENE JOSUE GALLO ROUSSEAU</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>LENIN HENRY GARCIA PALMA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>NESTOR RICARDO GARCIA RODRIGUEZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>WALESCA SOFIA GONZALES LOOR</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>CARLA MADELEINE JACHO WONG</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ANGEL ISRAEL LOZANO LEON</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>KRISTELLE KARELYS LUCIN QUIÑONEZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MARIA JOSE MACARLUPO GARCIA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>RICHARD ANDRES MACIAS TORRES</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MELANIE NOEMI MERA ZUÑIGA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>GABRIELA STEFANIA MIRANDA ORELLANA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>DAYANNA THAIS MORA CALDERON</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MARIANA STEFANIA PAZAN RODRIGUEZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>NELLY ROUSE PONCE GONZALES</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>OSCAR DAVID QUINTERO HURTADO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>JONATHAN JOSE REBUTTI MACIAS</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MARIA DELIA REGALADO LARA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>VALERY GARDENIA RIVERA VERA</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ERICK ALEXIS ROSERO MACIAS</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>CARLOS XAVIER VALENCIA RODRIGUEZ</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>MARIA FERNANDA VELASCO GUADALUPE</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>ALINSON IVANA VELIZ TRIVIÑO</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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
                                <img class="icono-alumno" src="img/icono_persona.png" >
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>LUANA GUADALUPE ZAMBRANO BURGOS</h5>
                            <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal">PERFIL</button>
                        </div>
                        <div class="clearfix"></div>                        
                        <div class="contact-box-footer">
                            <div class="pull-left">
                                <img class="icono-representante" src="img/REPRESENTANTE.png">
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