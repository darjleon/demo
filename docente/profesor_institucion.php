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
                <li class="active">
                    <a href="#">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_notificaciones.php">
                        <i class="fa fa-newspaper-o"></i><span class="nav-label">Notificaciones</span>
                    </a>
                </li>
                <li>
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
        <div class="row wrapper white-bg">
            <div class="col-lg-3 text-center img-school" style="">
                <img src="../img/escudo.png" width="60%">
            </div>
            <div class="col-lg-9">
                <h1 class="title-school">
                    UNIDAD EDUCATIVA FEDERICO GONZALEZ SUAREZ
                </h1>
            </div>             
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="widget widget-tabs">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab-1">INFORMACION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2">MISION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3">ANTECEDENTES</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <ul class="list-unstyled m-t">
                                        <div class="row">      

                                            <div class="col-lg-2">
                                                <label class="cb" style="color: #676A6C">Direccion:</label><br>
                                            </div>
                                            <div class="col-lg-10">
                                                <label style="color: #676A6C">
                                                    CDLA. DEMOCRATICA SUR, CALLE MANUEL DIAZ GRANADOS S/N.(FRENTE A PRIMAVERA 2 )
                                                </label><br>
                                            </div> 
                                            <div class="col-lg-2">
                                                <label class="cb" style="color: #676A6C">Telefono:</label><br>
                                            </div>
                                            <div class="col-lg-10" style="color: #676A6C">
                                                <label style="color: #676A6C">
                                                    2552500 SECRETARIA - 2550373 RECTORADO
                                                </label><br>
                                            </div>   
                                            <div class="col-lg-2">
                                                <label class="cb" style="color: #676A6C">Seccion:</label><br>
                                            </div>
                                            <div class="col-lg-10" style="color: #676A6C">
                                                <label style="color: #676A6C">
                                                    ESCUELA - COLEGIO - BACHILLERATO
                                                </label><br>
                                            </div>
                                            <div class="col-lg-2">
                                                <label class="cb" style="color: #676A6C">Ciudad:</label><br>
                                            </div>
                                            <div class="col-lg-10" style="color: #676A6C">
                                                <label style="color: #676A6C">
                                                    DURAN
                                                </label><br>
                                            </div>

                                        </div>
                                    </ul>   
                                </div>
                                <div id="tab-2" class="tab-pane">                                    
                                    <div class="row">
                                        <div class="col-lg-10 option-tabs-g">
                                            <p class="p-sm"  style="color: #676A6C">ESTAMOS COMPROMETIDOS EN ENTREGAR A LA COMUNIDAD JOVENES FORMADOS CON SOLIDAS BASES EN VALORES HUMANOS, PROACTIVOS, SOLIDARIOS,AUTONOMOS Y EMPRENDEDORES LLEGANDO A SER, EN CUALQUIER MEDIO EN QUE SE DESEMPEÑEN, AGENTES POSITIVOS DE CAMBIO, BUSCANDO EL PROGRESO Y BIENESTAR PROPIO Y DE QUIENES LO RODEAN EN LA ALDEA GLOBAL.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 text-center" >
                                            <img src="../img/mision.png" width="60%">
                                        </div>
                                    </div> 
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-lg-12 option-tabs-g text-center"  style="color: #676A6C">
                                            FUNDADA EL 12 DE FEBRERO DE 1978.
                                        </div>
                                        <div class="col-lg-6" >
                                            <img src="../img/vision.png" width="60%">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
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