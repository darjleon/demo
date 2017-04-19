<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pined | Profesor</title>

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
            <div class="col-lg-12">
                <h2>Horario</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                            
                        <table class="table ss1">
                            <thead class="scheduler ss1">
                                <tr>
                                    <th class="text-center scheduler">Hora</th>
                                    <th class="text-center scheduler">Lunes</th>
                                    <th class="text-center scheduler">Martes</th>
                                    <th class="text-center scheduler">Miercoles</th>
                                    <th class="text-center scheduler">Jueves</th>
                                    <th class="text-center scheduler">Viernes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-1">1</span>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            3RO BACHILLERATO CONTABILIDAD
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia3CONTABILIDAD.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>    
                                        </a>                                        
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'B'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8B.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            3RO BACHILLERATO CIENTIFICO
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia3CIENTIFICO.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            NOVENO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia9A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-2">2</span>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            3RO BACHILLERATO CIENTIFICO
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia3CIENTIFICO.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            3RO BACHILLERATO CONTABILIDAD
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia3CONTABILIDAD.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            2DO BACHILLERATO CIENTIFICO
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia2CIENTIFICO.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            1RO BACHILLERATO CIENTIFICO
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia1CIENTIFICO.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-3">3</span>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'B'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8B.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            3RO BACHILLERATO INFORMATICA
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia3INFORMATICA.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            3RO BACHILLERATO INFORMATICA
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia3INFORMATICA.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-1">4</span>
                                    </td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            NOVENO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia9A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr style="background-color: #C2C2C2">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-2">5</span>
                                    </td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'B'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8B.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-3">6</span>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            NOVENO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia9A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'B'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8B.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'B'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8B.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-1">7</span>
                                    </td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            NOVENO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia9A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            NOVENO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia9A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            3RO BACHILLERATO CIENTIFICO
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia3CIENTIFICO.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                    <td></td>           
                                </tr>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-2">8</span>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'A'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8A.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            OCTAVO 'B'
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia8B.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                        </a>
                                    </td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            3RO BACHILLERATO CONTABILIDAD
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia3CONTABILIDAD.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr style="background-color: #C2C2C2">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="scheduler" style="vertical-align: middle">
                                        <span class="hour hour-2">9</span>
                                    </td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            1RO BACHILLERATO CIENTIFICO
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia1CIENTIFICO.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                    <td></td>
                                    <td class="subject" style="vertical-align: middle;font-size:12px">
                                        <img src="../img/CURSO.png" style="width:15px;padding-left:0">
                                        <p style="display: inline">
                                            2DO BACHILLERATO INFORMATICA
                                        </p>
                                        <hr style="background-color: #243949; height: 1px;margin-top: 5px;margin-bottom: 0">
                                        <a href="profesor_asistencia2INFORMATICA.php" class="enlace-curso">
                                            <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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

    <!-- Sparkline -->
    <script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="../js/plugins/chartJs/Chart.min.js"></script>

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
