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
                        <img alt="image" class="img-circle" src="img/a5.jpg" width="40%" />
                        <a href="#">
                            <span class="block ">
                                <h4>
                                    <strong class="font-bold">CARMEN OJEDA LEON</strong>
                                    <br><small class="profile-type">RECTOR</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="img/logo unico.png" width="50px" />
                    </div>
                </li>                
                <li class="active">
                    <a href="director/director.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="director/director_informacion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Informacion</span> 
                    </a>
                </li>
                <li>
                    <a href="director/director_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li>
                    <a href="director/director_cursos.php">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos </span>
                    </a>
                </li>
                <li>
                    <a href="director/director_horarios.php">
                        <i class="fa fa-clock-o"></i>
                        <span class="nav-label">Horarios </span>
                    </a>
                </li>
                <li>
                    <a href="director/director_asistencia.php">
                        <i class="fa fa-list"></i>
                        <span class="nav-label">Asistencia </span>
                    </a>
                </li>
                <li>
                    <a href="director/director_pagos.php">
                        <i class="fa fa-usd"></i>
                        <span class="nav-label">Pagos </span>
                    </a>
                </li>
                <li>
                    <a href="director/director_plancurricular.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Plan Curricular </span>
                    </a>
                </li>
                <li>
                    <a href="director/director_configuraciones.php">
                        <i class="fa fa-cogs"></i>
                        <span class="nav-label">Configuraciones </span>
                    </a>
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
                        <a class="count-info" href="representante/padre_notificacion.php">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i><span class="label label-primary">1</span>
                        </a>                        
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i>Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg ">                        
            <div class="profile-image">
                <img src="img/a8.jpg" class="img-circle circle-border m-b-md" alt="profile">
            </div>
            <div class="profile-info">
                <h2 class="no-margins">CARMEN OJEDA LEON</h2>  
                <h3 style="padding-left:10px"><strong>PERFIL</strong></h3>                  
            </div>             
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="widget widget-tabs">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab-1">GENERAL</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2">DOMICILIO</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3">MEDICA</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <ul class="list-unstyled m-t">
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Nombres:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    CARMEN
                                                </div>                                            
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Apellidos:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    OJEDA LEON
                                                </div>                                            
                                            </li>   
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>C.i:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    091538132-1
                                                </div>                                                
                                            </li>
                                        </div>       
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Correo:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    misscarmen_3@gmail.com
                                                </div>
                                            </li>
                                        </div>                                                   
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Telefono:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    099 399 8977
                                                </div>
                                            </li>    
                                        </div>                                                         
                                    </ul>   
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <ul class="list-unstyled m-t">
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Ciudad:</label>
                                                </div>         
                                                <div class="col-lg-10">
                                                    DURAN
                                                </div>                                                
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">                
                                                    <label>Direccion:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    CDLA. DEMOCRATICA SUR 
                                                </div>
                                            </li> 
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Telefono:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    099 399 8977
                                                </div>                                                
                                            </li> 
                                        </div>                                      
                                    </ul> 
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <ul class="list-unstyled m-t">
                                        <div class="row"> 
                                            <li class="option-tabs">
                                                <div class="col-lg-4">
                                                    <label>Telefono de emergencia:</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    042 55 99 88
                                                </div> 
                                            </li>                                            
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">    
                                                <div class="col-lg-4">
                                                    <label>Sufre de enfermedad:</label>
                                                </div>                      
                                                <div class="col-lg-8">
                                                    SI
                                                </div>                                                
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-4">
                                                    <label>Alergia:</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    SI - FRESAS
                                                </div>                                                  
                                            </li>
                                        </div>
                                    </ul> 
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
