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
                <li class="active">
                    <a href="#">
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
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper white-bg ">                        
            <div class="col-lg-12">
                <h2 style="margin: 1em 0">Notificaciones</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight" style="background-color:#F1E7ED">
            <div class="row">
                <div class="col-lg-4" >
                    <div class="notificacion">
                        <span class="recordatorio">
                            <i class="fa fa-clock-o icono-recordatorio"></i>
                            <label class="texto-recordatorio">Recordatorio<label>
                        </span>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">                            
                            <h5 >
                                <img src="../img/icono persona.png" width="20px">
                                COORDINACION ACADEMICA 
                            </h5>   
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content" style="background-color: #FEF5F9">
                            <div class="row no-margins">
                                <div class="col-lg-9 recordatorioBox">
                                    <h4 style="margin-bottom:0">CITA AGENDADA<br/></h4>
                                    <h4 style="margin-bottom:0"><strong>RECTOR:</strong>CARMEN OJEDA LEON<br/></h4>
                                    <h4 style="margin-bottom:10px"><strong>ASUNTO: </strong>Conducta<br/></h4>
                                    <p style="font-size: 20px;margin-bottom:0"><code>20</code>/<code>02</code>/<code>2017</code></p>
                                    <p style="font-size: 20px"><code>10</code>:<code>00</code></p>
                                </div>
                            </div> 
                            <span class="hora">Ayer (11:15 am)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="notificacion">
                        <span class="notificaciones">
                            <i class="fa fa-bell icono-notificaciones"></i>
                            <label class="texto-notificaciones">Notificaciones<label>
                        </span>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>
                                <img src="../img/icono persona.png" width="20px">
                                COORDINACION ACADEMICA
                            </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                <a class="close-link"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content" style="background-color: #FEF5F9">
                            <p>
                                Estimados padres de familia.
                                Este 20 de Febrero habrá reunión de padres en el curso B5 por motivo de conducta.
                            </p>  
                            <div class="fecha"> 
                                <button type="button" class="btn btn-w-m btn-warning">MÁS</button>
                                <br>
                                <span class="hora pull-right">Ayer (11:15 am)</span>
                            </div>                          
                        </div>
                    </div>
                    <div class="ibox ibox collapsed">
                        <div class="ibox-title">
                            <h5>
                                <img src="../img/icono persona.png" width="20px">
                                COORDINACION ACADEMICA
                            </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                <a class="close-link"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content" style="background-color: #FEF5F9">
                            <p>
                                Estimados padres de familia.<br>
                                Este 20 de Febrero habrá reunión de padres en ek curso B5 por motivo de conducta.
                            </p>
                            <div class="fecha"> 
                                <button type="button" class="btn btn-w-m btn-warning">MAS</button>
                                <br>
                                <span class="hora pull-right">Ayer (11:15 am)</span>
                            </div>
                        </div>
                    </div>
                    <div class="ibox ibox collapsed">
                        <div class="ibox-title">
                            <h5>
                                <img src="../img/icono persona.png" width="20px">
                                SECRETARIA
                            </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                <a class="close-link"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content" style="background-color: #FEF5F9">
                            <p>
                                Estimados padres de familia.<br>
                                Este 20 de Febrero habrá reunión de padres en ek curso B5 por motivo de conducta.
                            </p>
                            <div class="fecha"> 
                                <button type="button" class="btn btn-w-m btn-warning">MAS</button>
                                <br>
                                <span class="hora pull-right">Ayer (11:15 am)</span>
                            </div>
                        </div>
                    </div>
                    <div class="ibox ibox collapsed">
                        <div class="ibox-title">
                            <h5>
                                <img src="../img/icono persona.png" width="20px">
                                Secretaria
                            </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content" style="background-color: #FEF5F9">
                            <p>
                                Estimados padres de familia.<br>
                                Este 20 de Febrero habrá reunión de padres en ek curso B5 por motivo de conducta.
                            </p>
                            <div class="fecha"> 
                                <button type="button" class="btn btn-w-m btn-warning">MAS</button>
                                <br>
                                <span class="hora pull-right">Ayer (11:15 am)</span>
                            </div>
                        </div>
                    </div>
                    <hr>                    
                </div>
                <div class="col-lg-4">
                    <div class="notificacion">
                        <span class="mensajes">
                            <i class="fa fa-envelope icono-mensajes"></i>
                            <label class="texto-mensajes">Mensajes<label>
                        </span>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title" style="overflow: hidden; padding-bottom: 0;">
                            <h5>
                                <img src="../img/icono persona.png" width="20px">
                                AURELIO PESANTEZ<small style="display: block; margin-top: .5em; ">PROFESOR DE MATEMATICAS</small>
                            </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content" style="background-color: #FEF5F9">
                            <p>
                                Estimados padres de familia su representado Jorge Pazmiño.<br>
                                Tiene una falta injustificada por favor acercarse a la institución para poder tratar del tema.
                            </p>
                            <div class="row no-margin">
                                <div class="col-lg-9 recordatorioBox" >
                                    <h4 style="margin-bottom:0">CITA AGENDADA<br/></h4>
                                    <h4 style="margin-bottom:0"><strong>RECTOR:</strong>CARMEN OJEDA LEON<br/></h4>
                                    <h4 style="margin-bottom:10px"><strong>ASUNTO: </strong>Conducta<br/></h4>
                                    <p style="font-size: 20px;margin-bottom:0"><code>20</code>/<code>02</code>/<code>2017</code></p>
                                    <p style="font-size: 20px"><code>10</code>:<code>00</code></p>
                                </div>
                            </div>
                            <span class="hora" >Ayer (11:15 am)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>                                        
                    <h4 class="modal-title">
                        <span class="glyphicon glyphicon-user"></span>  Aurelio Pesantez
                    </h4>                                                    
                    <small>Profesor de  Matemáticas.</small>
                </div>
                <div class="modal-body">
                    <p>
                        Estimados padres de familia su representado Jorge Pazmiño.<br>
                        Tiene una falta injustificada por favor acercarse a la institución para poder tratar del tema.
                    </p>
                    <h2>CITA AGENDADA<br/></h2>
                    <h3><strong>DIRECTOR: </strong>Eugenio Espejo<br/></h3>
                    <h3><strong>ASUNTO: </strong>Conducta<br/></h3>
                    <p><code>27</code>/<code>01</code>/<code>2017</code></p>                            
                    <p><code>10</code>:<code>00</code></p>                        
                </div>
                <div class="modal-footer">
                    <a href="">
                        <span class="glyphicon glyphicon-print" style="font-size:30px; margin-left:25px"></span>
                    </a> 
                    <a href="">
                        <span class="glyphicon glyphicon-share" style="font-size:30px"></span>
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
