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

    <title>Pined | Representante</title>

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
                    <div class="profile-element"> 
                        <img alt="image" class="img-circle" src="img/a5.jpg" width="40%" />
                        <a href="#">
                            <span class="block ">
                                <h4>
                                    <strong class="font-bold">CINTHIA HERA RODRIGUEZ</strong>
                                    <br><small class="profile-type">REPRESENTANTE</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="img/logo unico.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="padre.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="padre_institucion.php">
                        <i class="fa fa-institution"></i> <span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="padre_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <img src="img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumno</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="padre_hijo1.php">
                                <img src="img/icono persona.png" width="20px">ELKIN DAVID SANNA HERA
                            </a>
                        </li>
                        <li class="active">
                            <a href="padre_hijo2.php">
                                <img src="img/icono persona.png" width="20px">ALAN JOEL SANNA HERA
                            </a>
                        </li>
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
                        <a class="count-info" href="p_notificacion.html">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i><span class="label label-primary">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="p_notificacion.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Coordinación Académica
                                        <span class="pull-right text-muted small">ayer(11.15 am)</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="p_notificacion.html">
                                        <strong>See All Alerts</strong><i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i> Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-6">
                <div class="profile-image" style="padding-top:10px">
                    <img src="img/estudiantes.png" class="img-circle circle-border m-b-md" alt="profile" >
                </div>
                <div class="profile-info" style="padding-top:25px">
                    <h3 style="margin-top:5px;margin-bottom:0">ALAN JOEL SANNA HERA</h3>
                    <h4 style="margin-bottom:0"><strong>Curso: </strong>1RO DE BACHILLERATO INFORMATICA</h4> 
                    <h4 style="margin-top:0"><strong>Dirigente: </strong>ANA PLUA RIVERA</h4>
                </div>
            </div>                
            <div class="col-lg-6">
                <div class="tabs-container" style="padding-top:10px">
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#tab-1">Domicilio</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Informacion Medica</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="row tab-pane">
                            <ul class="list-unstyled m-t-md">
                                <div class="row">
                                    <li>                                        
                                        <div class="col-lg-3">
                                            <label style="padding-left:50px">Ciudad:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            DAULE
                                        </div>                                    
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col-lg-3">
                                            <label style="padding-left:50px">Dirección:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            CDLA. CATALUÑA MZ 17 V 17
                                        </div>
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col-lg-3">
                                            <label style="padding-left:50px">Telefono:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            091 234 5678
                                        </div>
                                    </li>
                                </div>
                            </ul>   
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <ul class="list-unstyled m-t-md" style="padding-left: 25px">
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Teléfono de emergencia:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            042 55 99 88
                                        </div>                                                          
                                    </li>
                                </div>
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Grupo sanguinero:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            O-
                                        </div>                                                          
                                    </li>
                                </div> 
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Sufre de enfermedad:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            NO
                                        </div>                                                          
                                    </li>
                                </div>                               
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Alergia:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            NO
                                        </div>                                                          
                                    </li>
                                </div>                              
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="padre_hijo2.php">
                    <button type="button" class="btn btn-outline btn-success">Regresar</button>
                </a>
            </div>
        </div>
        <div class="wrapper wrapper-content"> 
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-left" style="margin-top:0">
                        <img src="img/diario escolar.png" style="width:50px"> Diario Escolar | <small>Semana : 23-27  Enero/2017</small> |  <button type="button" class="btn btn-w-m btn-primary" data-toggle="modal" data-target="#myModal">Semana Anterior</button>
                    </h2>
                </div>                                            
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container" style="padding-top:10px">
                        <ul class="nav nav-tabs text-center">                            
                            <li class="active"><a data-toggle="tab" href="#tab-1s">LUNES</a></li>
                            <li><a data-toggle="tab" href="#tab-2s">MARTES</a></li>
                            <li><a data-toggle="tab" href="#tab-3s">MIERCOLES</a></li>
                            <li><a data-toggle="tab" href="#tab-4s">JUEVES</a></li>
                            <li><a data-toggle="tab" href="#tab-5s">VIERNES</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1s" class="tab-pane active">
                                <div class="ibox-content" >
                                    
                                    <div class="timeline-item" style="padding-top:30px">
                                        <div class="row">
                                            <div class="col-lg-3">                          
                                                <div class="col-lg-9 text-right">
                                                    <h5>MATEMATICAS<br>
                                                    1ra Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4> <strong>PROFESOR: </strong>CAROLINA QUIROZ SANTOS | 
                                                <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button>
                                                </h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px;margin-top:5px;margin-bottom:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>PROGRAMACION EN LENGUAJE ESTRUCTURADO<br>
                                                    2da Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>MARCOS PAZAN REYES | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                            
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA EXTRANJERA<br>
                                                    <small style="margin-top:0">3Ra Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>  
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>CLAUDIA LOPEZ SANCHEZ-ANA PLUA RIVERA-RUTH LLERENA YULAN | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>EDUCACION ARTISTICA<br>
                                                    <small style="margin-top:0">4ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>GLENDA CANDEL CARBO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>RELACION EN EL EQUIPO DE TRABAJO<br>
                                                    <small style="margin-top:0">5ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>JUAN LOPEZ MARURI | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>QUIMICA<br>
                                                    <small style="margin-top:0">6ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>DENISSE MARCILLO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA Y LITERATURA<br>
                                                    <small style="margin-top:0">7ma Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>TATIANA CARREÑO QUIROZ | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>HISTORIA Y CIENCIAS SOCIALES<br>
                                                    <small style="margin-top:0">8va Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>SONIA RODRIGUEZ NOBOA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right" style="">
                                                    <h5>INFORMATICA APLICADA A LA EDUCACION<br>
                                                    <small style="margin-top:0">9na Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>VIVIANA CIRINO DE LA ROSA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>

                                </div>  
                            </div>
                            <div id="tab-2s" class="tab-pane">
                                <div class="ibox-content">

                                    <div class="timeline-item" style="padding-top:30px">
                                        <div class="row">
                                            <div class="col-lg-3">                          
                                                <div class="col-lg-9 text-right">
                                                    <h5>MATEMATICAS<br>
                                                    1ra Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4> <strong>PROFESOR: </strong>CAROLINA QUIROZ SANTOS | 
                                                <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button>
                                                </h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px;margin-top:5px;margin-bottom:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>PROGRAMACION EN LENGUAJE ESTRUCTURADO<br>
                                                    2da Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>MARCOS PAZAN REYES | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                            
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA EXTRANJERA<br>
                                                    <small style="margin-top:0">3Ra Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>  
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>CLAUDIA LOPEZ SANCHEZ-ANA PLUA RIVERA-RUTH LLERENA YULAN | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>EDUCACION ARTISTICA<br>
                                                    <small style="margin-top:0">4ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>GLENDA CANDEL CARBO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>RELACION EN EL EQUIPO DE TRABAJO<br>
                                                    <small style="margin-top:0">5ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>JUAN LOPEZ MARURI | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>QUIMICA<br>
                                                    <small style="margin-top:0">6ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>DENISSE MARCILLO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA Y LITERATURA<br>
                                                    <small style="margin-top:0">7ma Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>TATIANA CARREÑO QUIROZ | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>HISTORIA Y CIENCIAS SOCIALES<br>
                                                    <small style="margin-top:0">8va Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>SONIA RODRIGUEZ NOBOA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right" style="">
                                                    <h5>INFORMATICA APLICADA A LA EDUCACION<br>
                                                    <small style="margin-top:0">9na Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>VIVIANA CIRINO DE LA ROSA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                </div>  
                            </div>
                            <div id="tab-3s" class="tab-pane">
                                <div class="ibox-content">

                                    <div class="timeline-item" style="padding-top:30px">
                                        <div class="row">
                                            <div class="col-lg-3">                          
                                                <div class="col-lg-9 text-right">
                                                    <h5>MATEMATICAS<br>
                                                    1ra Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4> <strong>PROFESOR: </strong>CAROLINA QUIROZ SANTOS | 
                                                <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button>
                                                </h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px;margin-top:5px;margin-bottom:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>PROGRAMACION EN LENGUAJE ESTRUCTURADO<br>
                                                    2da Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>MARCOS PAZAN REYES | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                            
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA EXTRANJERA<br>
                                                    <small style="margin-top:0">3Ra Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>  
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>CLAUDIA LOPEZ SANCHEZ-ANA PLUA RIVERA-RUTH LLERENA YULAN | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>EDUCACION ARTISTICA<br>
                                                    <small style="margin-top:0">4ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>GLENDA CANDEL CARBO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>RELACION EN EL EQUIPO DE TRABAJO<br>
                                                    <small style="margin-top:0">5ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>JUAN LOPEZ MARURI | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>QUIMICA<br>
                                                    <small style="margin-top:0">6ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>DENISSE MARCILLO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA Y LITERATURA<br>
                                                    <small style="margin-top:0">7ma Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>TATIANA CARREÑO QUIROZ | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>HISTORIA Y CIENCIAS SOCIALES<br>
                                                    <small style="margin-top:0">8va Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>SONIA RODRIGUEZ NOBOA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right" style="">
                                                    <h5>INFORMATICA APLICADA A LA EDUCACION<br>
                                                    <small style="margin-top:0">9na Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>VIVIANA CIRINO DE LA ROSA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                </div> 
                            </div>
                            <div id="tab-4s" class="tab-pane">
                                <div class="ibox-content">
                                    
                                    <div class="timeline-item" style="padding-top:30px">
                                        <div class="row">
                                            <div class="col-lg-3">                          
                                                <div class="col-lg-9 text-right">
                                                    <h5>MATEMATICAS<br>
                                                    1ra Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4> <strong>PROFESOR: </strong>CAROLINA QUIROZ SANTOS | 
                                                <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button>
                                                </h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px;margin-top:5px;margin-bottom:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>PROGRAMACION EN LENGUAJE ESTRUCTURADO<br>
                                                    2da Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>MARCOS PAZAN REYES | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                            
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA EXTRANJERA<br>
                                                    <small style="margin-top:0">3Ra Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>  
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>CLAUDIA LOPEZ SANCHEZ-ANA PLUA RIVERA-RUTH LLERENA YULAN | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>EDUCACION ARTISTICA<br>
                                                    <small style="margin-top:0">4ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>GLENDA CANDEL CARBO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>RELACION EN EL EQUIPO DE TRABAJO<br>
                                                    <small style="margin-top:0">5ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>JUAN LOPEZ MARURI | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>QUIMICA<br>
                                                    <small style="margin-top:0">6ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>DENISSE MARCILLO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA Y LITERATURA<br>
                                                    <small style="margin-top:0">7ma Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>TATIANA CARREÑO QUIROZ | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>HISTORIA Y CIENCIAS SOCIALES<br>
                                                    <small style="margin-top:0">8va Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>SONIA RODRIGUEZ NOBOA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right" style="">
                                                    <h5>INFORMATICA APLICADA A LA EDUCACION<br>
                                                    <small style="margin-top:0">9na Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>VIVIANA CIRINO DE LA ROSA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                </div> 
                            </div>
                            <div id="tab-5s" class="tab-pane">
                                <div class="ibox-content">
                                    
                                    <div class="timeline-item" style="padding-top:30px">
                                        <div class="row">
                                            <div class="col-lg-3">                          
                                                <div class="col-lg-9 text-right">
                                                    <h5>MATEMATICAS<br>
                                                    1ra Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4> <strong>PROFESOR: </strong>CAROLINA QUIROZ SANTOS | 
                                                <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button>
                                                </h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px;margin-top:5px;margin-bottom:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>PROGRAMACION EN LENGUAJE ESTRUCTURADO<br>
                                                    2da Hora
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>MARCOS PAZAN REYES | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                            
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA EXTRANJERA<br>
                                                    <small style="margin-top:0">3Ra Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>  
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>CLAUDIA LOPEZ SANCHEZ-ANA PLUA RIVERA-RUTH LLERENA YULAN | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>EDUCACION ARTISTICA<br>
                                                    <small style="margin-top:0">4ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>GLENDA CANDEL CARBO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>RELACION EN EL EQUIPO DE TRABAJO<br>
                                                    <small style="margin-top:0">5ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>JUAN LOPEZ MARURI | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>QUIMICA<br>
                                                    <small style="margin-top:0">6ta Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>DENISSE MARCILLO | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>LENGUA Y LITERATURA<br>
                                                    <small style="margin-top:0">7ma Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>TATIANA CARREÑO QUIROZ | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right">
                                                    <h5>HISTORIA Y CIENCIAS SOCIALES<br>
                                                    <small style="margin-top:0">8va Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>SONIA RODRIGUEZ NOBOA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="timeline-item" style="padding-top:10px">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="col-lg-9 text-right" style="">
                                                    <h5>INFORMATICA APLICADA A LA EDUCACION<br>
                                                    <small style="margin-top:0">9na Hora</small>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="img/docentes.png" style="width:40px">
                                                </div>
                                            </div>
                                            <div class="col-lg-9" style="background-color: #E6E7E9;padding: 10px  20px 10px 25px">
                                                <h4><strong>PROFESOR: </strong>VIVIANA CIRINO DE LA ROSA | <button type="button" class="btn " data-toggle="modal" data-target="#myModal2" style="background-color: #D53362;color:white;padding-top:0;padding-bottom:0">ver más</button></h4>
                                                <p>Descripcion de clase, deberes, talleres o lecciones.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                </div>                                     
                            </div>                            
                        </div>
                    </div>                                        
                </div>          
            </div> 
            <div class="row">
                <div class="col-lg-12">                                 
                    <div class="modal inmodal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="padding-bottom: 0; padding-top: 0">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <h2 class="text-left">
                                        <i class="fa fa-calendar fa-x"></i> | Elija una semana
                                    </h2>
                                </div>
                                <div class="modal-body">
                                    <div class="ibox-content">
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" width="100%">MES - AÑO | Q1-Q2
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">MAYO-2016 | Q1</a></li>
                                                <li><a href="#">JUNIO-2016 | Q1</a></li>
                                                <li><a href="#">JULIO-2016 | Q1</a></li>
                                                <li><a href="#">AGOSTO-2016 | Q1</a></li>
                                                <li><a href="#">SEPTIEMBRE-2016 | Q1</a></li>
                                                <li><a href="#">OCTUBRE-2016 | Q2</a></li>
                                                <li><a href="#">NOVIEMBRE-2016 | Q2</a></li>
                                                <li><a href="#">DICIEMBRE-2016 | Q2</a></li>
                                                <li><a href="#">ENERO-2017 | Q2</a></li>
                                                <li><a href="#">FEBRERO-2017 | Q2</a></li>
                                            </ul>
                                        </div> 
                                        <table class="table">
                                            <thead class="text-center">
                                                <tr>
                                                    <th class="text-center" style="background-color:#F8FAFB;border-style: solid;border-width: 5px;border-color:white">Lunes</th>
                                                    <th class="text-center" style="background-color:#F8FAFB;border-style: solid;border-width: 5px;border-color:white">Martes</th>
                                                    <th class="text-center" style="background-color:#F8FAFB;border-style: solid;border-width: 5px;border-color:white">Miercoles</th>
                                                    <th class="text-center" style="background-color:#F8FAFB;border-style: solid;border-width: 5px;border-color:white">Jueves</th>
                                                    <th class="text-center" style="background-color:#F8FAFB;border-style: solid;border-width: 5px;border-color:white">Viernes</th>
                                                    <th class="text-center" style="background-color:#FFE5E5;border-style: solid;border-width: 5px;border-color:white"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td>4</td>
                                                    <td>5</td>
                                                    <td>6</td>
                                                    <td class="text-center" style="background-color:#FFE5E5;border-style: solid;border-width: 5px;border-color:white">
                                                        <a href="p_de_1.html">
                                                            <button type="button" class="btn btn-sm btn-primary"> Ver la Semana
                                                            </button> 
                                                        </a>            
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>9</td>
                                                    <td>10</td>
                                                    <td>11</td>
                                                    <td>12</td>
                                                    <td>13</td>
                                                    <td class="text-center" style="background-color:#FFE5E5;border-style: solid;border-width: 5px;border-color:white">
                                                        <a href="p_de_1.html">
                                                            <button type="button" class="btn btn-sm btn-primary"> Ver la Semana
                                                            </button> 
                                                        </a>            
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>16</td>
                                                    <td>17</td>
                                                    <td>18</td>
                                                    <td>19</td>
                                                    <td>20</td>
                                                    <td class="text-center" style="background-color:#FFE5E5;border-style: solid;border-width: 5px;border-color:white">
                                                        <a href="p_de_1.html">
                                                            <button type="button" class="btn btn-sm btn-primary"> Ver la Semana
                                                            </button> 
                                                        </a>            
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>23</td>
                                                    <td>24</td>
                                                    <td>25</td>
                                                    <td>26</td>
                                                    <td>27</td>
                                                    <td class="text-center" style="background-color:#FFE5E5;border-style: solid;border-width: 5px;border-color:white">
                                                        <a href="p_de_1.html">
                                                            <button type="button" class="btn btn-sm btn-primary"> Ver la Semana
                                                            </button> 
                                                        </a>            
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>30</td>
                                                    <td>31</td>
                                                    <td style="color:silver">1</td>
                                                    <td style="color:silver">2</td>
                                                    <td style="color:silver">3</td>
                                                    <td class="text-center" style="background-color:#FFE5E5;border-style: solid;border-width: 5px;border-color:white">
                                                        <a href="p_de_1.html">
                                                            <button type="button" class="btn btn-sm btn-primary"> Ver la Semana
                                                            </button> 
                                                        </a>            
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
            </div>
            <div class="row">
                <div class="col-lg-12">                                 
                    <div class="modal inmodal fade" id="myModal2" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="padding-bottom: 0; padding-top: 0">
                                    <div class="row">
                                        <div class="col-lg-4"> 
                                            <div class="pull-left" style="padding-top:10px;padding-right:10px">
                                                <img src="img/docentes.png" style="width:50px">
                                            </div>
                                            <h5 class="text-left" style="padding: 5px">
                                                CAROLINA QUIROZ SANTOS<br>
                                                <strong>PROFESOR</strong><br>
                                                <button type="button" class="btn " data-toggle="modal" style="background-color: #AEAEA3;color:white;padding-top:0;padding-bottom:0;margin-top:5px"><strong>PERFIL</strong></button>
                                            </h5>          
                                        </div>
                                        <div class="col-lg-2 text-left" style="padding-top:20px">
                                            <h5 style="margin-bottom:0">MATEMATICAS</h5>
                                            <label>1ra hora</label>
                                        </div>
                                        <div class="col-lg-4 text-left" style="padding-top:20px">
                                            <h2 class="text-left" style="margin-top:0">
                                                <img src="img/diario escolar.png" style="width: 30px"> Diario Escolar 
                                            </h2>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                                                        
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <textarea class="form-control" rows="5">
                                            El titulo va aqui
                                            La descripcion va aqui
                                            Los deberes va aqui
                                            Los talleres va aqui
                                            Las lecciones va aqui
                                        </textarea>
                                    </center>
                                </div>
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