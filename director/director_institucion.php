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
                                    <strong class="font-bold">CARMEN OJEDA LEON</strong>
                                    <br><small class="profile-type">RECTOR</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>                
                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li class="active">
                    <a href="director_informacion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Informacion</span> 
                    </a>
                </li>
                <li>
                    <a href="director_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li>
                    <a href="director_cursos.php">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos </span>
                    </a>
                </li>
                <li>
                    <a href="director_horarios.php">
                        <i class="fa fa-clock-o"></i>
                        <span class="nav-label">Horarios </span>
                    </a>
                </li>
                <li>
                    <a href="director_asistencia.php">
                        <i class="fa fa-list"></i>
                        <span class="nav-label">Asistencia </span>
                    </a>
                </li>
                <li>
                    <a href="director_pagos.php">
                        <i class="fa fa-usd"></i>
                        <span class="nav-label">Pagos </span>
                    </a>
                </li>
                <li>
                    <a href="director_plancurricular.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Plan Curricular </span>
                    </a>
                </li>
                <li>
                    <a href="director_configuraciones.php">
                        <i class="fa fa-cogs"></i>
                        <span class="nav-label">Configuraciones </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1 relative">
    <a class="button-br" href="director_informacion.php">
        <button class="cb">
            <img src="../img/return.png" alt="" width="17">Regresar
        </button>
    </a>
        <?php include ('include/barra.php'); ?>

        <div class="row wrapper white-bg institucion">

            <div class="col-sm-4 text-center img-school" style="">
                <img src="../img/escudo.png" width="60%">
            </div>
            <div class="col-sm-6">
                <h1 class="title-school text-center no-margin">
                <small class="text-center">UNIDAD EDUCATIVA</small>
                   </br>FEDERICO GONZALEZ SUAREZ 
                </h1>
            </div>             
        </div>
        <div class="row wrapper wrapper-content"> 
           
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
                                            <li class="option-tabs">
                                                <div class="col-lg-2">
                                                    <label>Direccion:</label>
                                                </div>
                                                <div class="col-lg-10">
                                                    CDLA. DEMOCRATICA SUR, CALLE MANUEL DIAZ GRANADOS S/N.(FRENTE A PRIMAVERA 2 )
                                                </div>                                            
                                            </li>
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
                                            <p>FUNDADA EL 12 DE FEBRERO DE 1978.</p>
                                        </div>
                                        <div class="col-lg-6 text-center mt-2" >
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
