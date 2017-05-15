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
                    <div class="profile-element"> 
                        <img alt="image" class="img-circle" src="../img/a5.jpg" width="40%" />
                        <a href="#">
                            <span class="block ">
                                <h3><strong class="font-bold">CINTHIA HERA RODRIGUEZ</strong></h3>
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
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
                        <img src="../img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumno</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li class="active">
                            <a href="padre_hijo1.php">
                                <img src="../img/icono persona.png" width="20px">ELKIN DAVID SANNA HERA
                            </a>
                        </li>
                        <li>
                            <a href="padre_hijo2.php">
                                <img src="../img/icono persona.png" width="20px">ALAN JOEL SANNA HERA
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a>
                        <img src="../img/pago.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Pagos</span>
                        
                    </a>
                </li>                                         
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <?php include ('include/hijo1.php'); ?>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">                
                <div class="col-xs-12 col-sm-4 mb-2" >
                    <a href="padre_de_1.php">
                        <img src="../img/diario escolar.png" class="img-responsive" style="width: 40%;display:block;margin:auto;">
                        <h2 class="cb m-xs text-center">Agenda Escolar</h2>
                    </a>                        
                </div>
                <div class="col-xs-12 col-sm-4 mb-2">
                    <a href="padre_hc_1.php">
                        <img src="../img/horario.png" class="img-responsive" style="width: 40%;display:block;margin:auto;">
                        <h2 class="cb m-xs text-center">Horario de clases</h2>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 mb-2">
                    <a href="padre_calificaciones1.php">
                        <img src="../img/calificaciones.png" class="img-responsive" style="width: 40%;display:block;margin:auto;">
                        <h2 class="cb m-xs text-center">Calificaciones</h2>
                    </a>
                </div>                
            </div>
            <div class="row">                
                <div class="col-xs-12 col-sm-4 mb-2">
                    <a href="padre_estadisticas1.php">
                        <img src="../img/estadistica.png" class="img-responsive" style="width: 40%;display:block;margin:auto;">
                        <h2 class="cb m-xs text-center">Estadísticas</h2>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 mb-2">
                    <a href="padre_reportes1.php">
                        <img src="../img/rendimiento.png" class="img-responsive" style="width: 40%;display:block;margin:auto;">
                        <h2 class="cb m-xs text-center">Reportes</h2>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 mb-2">
                    <a href="padre_asistencia1.php">
                        <img src="../img/asistencia blanco.png" class="img-responsive" style="width: 40%;display:block;margin:auto;">
                        <h2 class="cb m-xs text-center">Asistencia</h2>
                    </a>
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