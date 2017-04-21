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
                <li>
                    <a href="padre.php">
                        <i class="fa fa-th-large"></i><span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="padre_notificacion.php">
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
                        <li><a href="padre_hijo1.php"><img src="../img/icono persona.png" width="20px"> ELKIN DAVID SANNA HERA</a></li>
                        <li><a href="padre_hijo2.php"><img src="../img/icono persona.png" width="20px"> ALAN JOEL SANNA HERA</a></li>
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
                        <a class="count-info" href="padre_notificacion.php">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i><span class="label label-primary">1</span>
                        </a>                        
                    </li>
                    <li>
                        <a href="../logout.php">
                            <i class="fa fa-sign-out"></i>Cerrar Sesion
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
                <p class="title-direction">CDLA. DEMOCRATICA SUR, CALLE MANUEL DIAZ GRANADOS S/N.(FRENTE A PRIMAVERA 2 )</p>
            </div>             
        </div>
        <div class="row wrapper wrapper-content">            
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                    <div class="widget widget-tabs">
                        <div class="tabs-container-school">
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
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Telefono:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    2552500 SECRETARIA - 2550373 RECTORADO
                                                </div>                                            
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Seccion:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    ESCUELA - COLEGIO - BACHILLERATO
                                                </div>                                            
                                            </li>   
                                        </div>
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
                                    </ul>   
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="row">
                                        <div class="col-lg-12 option-tabs-g">
                                            <p class="p-sm ">ESTAMOS COMPROMETIDOS EN ENTREGAR A LA COMUNIDAD JOVENES FORMADOS CON SOLIDAS BASES EN VALORES HUMANOS, PROACTIVOS, SOLIDARIOS,AUTONOMOS Y EMPRENDEDORES LLEGANDO A SER, EN CUALQUIER MEDIO EN QUE SE DESEMPEÑEN, AGENTES POSITIVOS DE CAMBIO, BUSCANDO EL PROGRESO Y BIENESTAR PROPIO Y DE QUIENES LO RODEAN EN LA ALDEA GLOBAL.</p>
                                        </div>                                    
                                        <div class="col-lg-6 text-center" >
                                            <img src="../img/mision.png" width="60%">
                                        </div>
                                    </div> 
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-lg-12 option-tabs-g text-center">
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
<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>