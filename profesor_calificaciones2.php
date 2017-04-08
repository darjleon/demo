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
                        <img alt="logo" src="img/logo.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="profesor.html">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Información</span> 
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
                <li>
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
                <li class="active">
                    <a href="profesor_calificaciones.html">
                        <i class="fa fa-fw fa-list-alt"></i><span class="nav-label">Calificaciones</span>
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
                        <a class="count-info" href="p_notificacion.html">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  
                            <span class="label label-primary">1</span>
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
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
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
        <div class="row wrapper white-bg ">                        
            <div class="col-lg-12">
                <h2>Notificaciones</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">                
                <div class="col-lg-4">
                    <a href="padre_calificaciones8Aq1.html">                    
                        <img src="img/1quimestre.png" class="img-responsive" style="width: 50%;display:block;margin:auto;">                        
                    </a>                        
                </div>
                <div class="col-lg-4">
                    <a href="padre_calificaciones8Aq2.html">
                        <img src="img/2quimestre.png" class="img-responsive" style="width: 50%;display:block;margin:auto;">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="padre_calificaciones8A.html">
                        <img src="img/sabana.png" class="img-responsive" style="width: 50%;display:block;margin:auto;">
                    </a>
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
