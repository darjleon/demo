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
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper white-bg ">                        
            <div class="col-lg-12">
                <h2 style="margin: 1em 0">Horario</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="table-responsive"> 
                            <table class="table ss1 horario-tabla">
                                <thead class="scheduler ss1">
                                    <tr>
                                        <th class="text-center scheduler"></th>
                                        <th class="text-center scheduler cl" style="font-size: 1.6em;">Lunes</th>
                                        <th class="text-center scheduler cl" style="font-size: 1.6em;">Martes</th>
                                        <th class="text-center scheduler cl" style="font-size: 1.6em;">Miercoles</th>
                                        <th class="text-center scheduler cl" style="font-size: 1.6em;">Jueves</th>
                                        <th class="text-center scheduler cl" style="font-size: 1.6em;">Viernes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-1">1</span>
                                            <span>7:00 - 7:45</span>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                3RO BACHILLERATO CONTABILIDAD
                                            </p>
                                            
                                            <a href="profesor_asistencia3CONTABILIDAD.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>    
                                            </a>                                        
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'B'
                                            </p>
                                            
                                            <a href="profesor_asistencia8B.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                3RO BACHILLERATO CIENTIFICO
                                            </p>
                                            
                                            <a href="profesor_asistencia3CIENTIFICO.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia8A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                NOVENO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia9A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-2">2</span>
                                            <span>7:45 - 8:30</span>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                3RO BACHILLERATO CIENTIFICO
                                            </p>
                                            
                                            <a href="profesor_asistencia3CIENTIFICO.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                3RO BACHILLERATO CONTABILIDAD
                                            </p>
                                            
                                            <a href="profesor_asistencia3CONTABILIDAD.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                2DO BACHILLERATO CIENTIFICO
                                            </p>
                                            
                                            <a href="profesor_asistencia2CIENTIFICO.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                1RO BACHILLERATO CIENTIFICO
                                            </p>
                                            
                                            <a href="profesor_asistencia1CIENTIFICO.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia8A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-3">3</span>
                                            <span>8:30 - 9:15</span>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'B'
                                            </p>
                                            
                                            <a href="profesor_asistencia8B.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                3RO BACHILLERATO INFORMATICA
                                            </p>
                                            
                                            <a href="profesor_asistencia3INFORMATICA.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                3RO BACHILLERATO INFORMATICA
                                            </p>
                                            
                                            <a href="profesor_asistencia3INFORMATICA.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-1">4</span>
                                            <span>9:15 - 10:00</span>
                                        </td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia8A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                NOVENO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia9A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-2">5</span>
                                            <span>10:30 - 11:15</span>
                                        </td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia8A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'B'
                                            </p>
                                            
                                            <a href="profesor_asistencia8B.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-3">6</span>
                                            <span>11:15 - 12:00</span>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia8A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                NOVENO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia9A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'B'
                                            </p>
                                            
                                            <a href="profesor_asistencia8B.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'B'
                                            </p>
                                            
                                            <a href="profesor_asistencia8B.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-1">7</span>
                                            <span>12:00 - 12:45</span>
                                        </td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                NOVENO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia9A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                NOVENO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia9A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                3RO BACHILLERATO CIENTIFICO
                                            </p>
                                            
                                            <a href="profesor_asistencia3CIENTIFICO.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        </td>
                                        <td></td>           
                                    </tr>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-2">8</span>
                                            <span>13:15 - 14:00</span>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia8A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'A'
                                            </p>
                                            
                                            <a href="profesor_asistencia8A.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                OCTAVO 'B'
                                            </p>
                                            
                                            <a href="profesor_asistencia8B.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">MATEMATICAS</p>
                                            </a>
                                        </td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                3RO BACHILLERATO CONTABILIDAD
                                            </p>
                                            
                                            <a href="profesor_asistencia3CONTABILIDAD.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="scheduler" style="vertical-align: middle">
                                            <span class="hour hour-2">9</span>
                                            <span>14:00 - 14:45</span>
                                        </td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                1RO BACHILLERATO CIENTIFICO
                                            </p>
                                            
                                            <a href="profesor_asistencia1CIENTIFICO.php" class="enlace-curso">
                                                <p style="margin-bottom:0;padding-top: 5px">INVESTIGACION</p>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td class="subject" style="vertical-align: middle;font-size:14px">
                                            <p style="display: inline">
                                                2DO BACHILLERATO INFORMATICA
                                            </p>
                                            
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
</div>
<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>