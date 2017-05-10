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
                    <a href="director.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
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
                <li class="active">
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
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper white-bg "> 
            <div class="col-xs-12 seleccion-curso">
                <h2 style="margin:1em 0">2DO BACHILLERATO CONTABILIDAD</h2>
                <div class="formatos">
                    <div class="back">
                        <a href="director_asistencia.php">
                            <button class="button-back cb">
                                <img style="margin: 0;" src="../img/return.png" alt="" width="17">
                            </button>
                        </a>
                    </div>
                </div>
            </div>            
        </div>
        <div class="wrapper wrapper-content">
            
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-left" style="margin-top:0;padding-left:10px">
                        <img src="../img/asistencia blanco.png" style="width:30px"> Asistencia |
                        <small>semana:</small><small style="padding:25px">23-28 de Enero del 2017</small> |
                        <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal6" style="color: white"><h5>Semana Anterior</h5></button>
                    </h2>
                </div>                                            
            </div>           
            <?php include ('include/2CONTABILIDADasistencia.php'); ?>
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
