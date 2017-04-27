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
        <div class="row wrapper white-bg" style="padding-top:5px">  
            <div class="col-xs-12 profe-cuadricula">
                <div class="nombres">
                    <h3>Luis Correa Zambrano</h3>
                    <p><strong>Curso 8 'A'</strong></p>
                </div>
                <div class="back">
                    <a href="profesor_cursos_cuadricula.php">
                        <button class="button-back cb">
                            <img src="../img/return.png" alt="" width="17">Regresar
                        </button>
                    </a>
                </div>
            </div>
        </div>     
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="alumnos-master"> 
                <div class="alumnos-cuadricula">
                    <div class="alumno">
                        <img src="img/icono_persona.png" alt="" width="25">
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
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
                        <h4>Shirley Arias Ascencio</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                    </div>
                    <div class="representante">
                        <img src="img/representante.png" alt="" width="25">
                        <h4>Nombres y Apellidos</h4>
                        <a href="">
                            <button>Perfil</button>
                        </a>
                        <a href="">
                            <button>Representante</button>
                        </a>
                    </div>
                </div>
            </div>
<!--             <div class="row">
                <div class="col-lg-3">
                    <div class="contact-box">                        
                        <div class="col-sm-3">
                            <div class="text-center">                            
                                <img class="icono-alumno" src="img/icono_persona.png">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h5>SHIRLEY ARIAS ASCENCIO</h5>
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
                                <button type="button" class="btn btn-info-alumno" data-toggle="modal" data-target="#myModal3">REPRESENTANTE</button>
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
                            <h5>BRYAN ARONE SAAVEDRA</h5>
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
                            <h5>ARACELI CAQUEO VILLARREAL</h5>
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
                            <h5>JESSENIA GABRIELA CHAMBA FLORES</h5>
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
                            <h5>ITALO JAVIER CONDORI VELASQUEZ</h5>
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
                            <h5>SONIA CRUZ CRUZ</h5>
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
                            <h5>NATHALIE ALEXANDRA DAVILA RIOS</h5>
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
                            <h5>LENIN MAXIMO ELONS CARRASCO</h5>
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
                            <h5>JAHAIRA KIMBERLY MESTANZA RODAS</h5>
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
                            <h5>PETER JOSEPH NARVAEZ ASENCIO</h5>
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
                            <h5>CRISTHIAN ALEX PACHECO VERA</h5>
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
                            <h5>LUIS ALEJANDRO REYES NUÑEZ</h5>
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
                            <h5>ANDREA NICOL SALAZAR SALAZAR</h5>
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
                            <h5>KAREN ALEX SANTIAGO RAYMONDI</h5>
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
                            <h5>LUIS DAVID SIFUENTES CORDOVA</h5>
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
                            <h5>NICOLLE VALERIA SPENCER PUCA</h5>
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
                            <h5>MELISSA JAHAIRA URBANO HUAMANI</h5>
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
                            <h5>DANIEL JESUS VARAS RODRIGUEZ</h5>
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
            </div> -->
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

