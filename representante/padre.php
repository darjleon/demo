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

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
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
                                <h4>
                                    <strong class="font-bold">CINTHIA HERA RODRIGUEZ</strong>
                                    <br><small class="profile-type">REPRESENTANTE</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>                
                <li class="active">
                    <a href="#">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="padre_institucion.html">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="padre_notificacion.html">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="../img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumno</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="padre_hijo1.html"><img src="img/icono persona.png" width="20px"> ELKIN DAVID SANNA HERA</a></li>
                        <li><a href="padre_hijo2.html"><img src="img/icono persona.png" width="20px"> ALAN JOEL SANNA HERA</a></li>
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
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i> Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg ">                        
            <div class="profile-image">
                <img src="../img/a8.jpg" class="img-circle circle-border m-b-md" alt="profile">
            </div>
            <div class="profile-info">
                <h2 class="no-margins">CINTHIA HERA RODRIGUEZ</h2>  
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
                                    <a data-toggle="tab" href="#tab-3">PROFESION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-4">MEDICA</a>
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
                                                    CINTHIA
                                                </div>                                            
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Apellidos:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    HERA SANNA
                                                </div>                                            
                                            </li>   
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>C.i:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    092757069-7
                                                </div>                                                
                                            </li>
                                        </div>       
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Correo:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    representante@gmail.com
                                                </div>
                                            </li>
                                        </div>                                                   
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Telefono:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    098 347 4339
                                                </div>
                                            </li>    
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Parentezco:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    MADRE
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
                                                    DAULE
                                                </div>                                                
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">                
                                                    <label>Direccion:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    CDLA. CATALUÑA MZ 17 V 17
                                                </div>
                                            </li> 
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Telefono:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    098 347 4339
                                                </div>                                                
                                            </li> 
                                        </div>                                      
                                    </ul> 
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <ul class="list-unstyled m-t">
                                        <div class="row">                                            
                                            <li class="option-tabs">        
                                                <div class="col-lg-2">
                                                    <label>Profesion:</label>
                                                </div>                                       
                                                <div class="col-lg-10">
                                                    GERENTE GENERAL
                                                </div>
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Ciudad:</label>
                                                </div> 
                                                <div class="col-lg-10">
                                                    GUAYAQUIL
                                                </div>          
                                            </li>
                                        </div>                                        
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Direccion:</label>
                                                </div>                                                
                                                <div class="col-lg-10">
                                                    EDIFICIO THE POINT OFICINA 105
                                                </div>
                                            </li>
                                        </div>                                        
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Telefono:</label>    
                                                </div>                                                  
                                                <div class="col-lg-10">
                                                    098 347 4339
                                                </div>                   
                                            </li> 
                                        </div>                                                                            
                                    </ul> 
                                </div>
                                <div id="tab-4" class="tab-pane">
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
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="../js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Toastr -->
    <script src="../js/plugins/toastr/toastr.min.js"></script>

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