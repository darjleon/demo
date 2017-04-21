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
                        <img alt="logo" src="img/logo unico.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="profesor.php">
                        <i class="fa fa-th-large"></i><span class="nav-label">Mi Perfil</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_institucion.php">
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
                <li class="active">
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
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i>Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg ">
            <div class="col-lg-2 text-right">                
                <img src="../img/CURSO.png" style="width:30px">
            </div>                
            <div class="col-lg-5 text-left">                
                <h4 style="margin-left:0;margin-bottom: 0"><strong>CURSO: </strong>3RO BACHILLERATO CONTABILIDAD</h4>
                <h4><strong>DIRIGENTE: </strong>JUAN LOPEZ MARURI</h4>        
            </div>
            <div class="col-lg-5 text-right" style="margin-top:5px;margin-right: -15px">
                <ul>
                    <li style="display:inline-block">
                        <a href="#">
                            <h5 class="btn btn-student-list">Asistencia</h5>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="profesor_agendaescolar.php">
                            <h5 class="btn btn-student-list">Agenda Escolar</h5>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="profesor_calificaciones3CONTABILIDAD.php">
                            <h5 class="btn btn-student-list">Calificaciones</h5>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="profesor_perfiles3CONTABILIDAD.php">
                            <h5 class="btn btn-student-list">Perfiles</h5>
                        </a>
                    </li>
                </ul>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover" style="margin-top:10px;width: 80%">
                            <thead style="background-color: #939598">
                                <tr >
                                    <th class="text-center" style="background-color: #939598;color: white;width:50%" ROWSPAN=2>Alumno</th> 
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Lunes</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Martes</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Viernes</th>
                                </tr>
                                <tr>
                                    <th class="text-center" style="background-color: #939598">
                                        <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">1</span>
                                    </th>
                                    <th class="text-center" style="background-color: #939598">
                                        <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">2</span>
                                    </th>
                                    <th class="text-center" style="background-color: #939598">
                                        <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">8</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white">  
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            NIDIA ALARCON ZURITA
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            ALEJANDRO MANUEL AYALA FARIAS
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            JOSUE SANTIAGO BAIDAL SUAREZ 
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            DAVID SEBASTIAN BECERRA SANCHEZ
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            MARIO ISRAEL CABALLERO CHILA
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            DAVID ESTEBAN CALDERON CARRERA
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                   <td>
                                        <p class="student-list">
                                            JEREMIE ELIAS DAQUILEMA NAVARRO
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                   <td>
                                        <p class="student-list">
                                            JAIME IVAN DUEÑAS CHOEZ
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            CARLOS JAVIER GARCIA RAMONES
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            ANDREA MELISA HABLICH PAREDES 
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            BRUNO MAURICIO LOGROÑO ORTIZ
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            LISSETTE PRISCILA MENDOZA AVILEZ
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            BRYAN NORBERTO MOREIRA PARRALES
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            MAYERLI ADALIZ ORELLANA ROJAS 
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            GERSSON ALEXANDER PEREZ NUÑEZ
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            GRACE STEFANIE SOLORZANO MENDIETA
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            DIANA CAROLINA URRUTIA MOLINA
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            YELENA MARIA VASQUEZ RODRIGUEZ
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            WILSON GARLIS VELASCO CALERO
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            ANTHONY ISMAELVELES GARCIA
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr> 
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            DAYANA GISSELLE ZAMORA GUSMAN
                                        </p>
                                    </td> 
                                    <form>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input class="text-center" type="checkbox" value="d1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkbox" style="margin-top:0">
                                                <input type="checkbox" value="d3">
                                            </div>
                                        </td>
                                    </form>
                                </tr>          
                            </tbody> 
                            
                        </table>
                    </div>            
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
