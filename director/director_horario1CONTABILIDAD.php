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
                <li class="active">
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
            <div class="col-xs-12 seleccion-curso">
                <h2 style="margin:1em 0">Horario 1RO BACHILLERATO CONTABILIDAD</h2>
                <div class="formatos">
                    <div class="back">
                        <a href="director_horarios.php">
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
                    <div class="panel panel-default"> 
                        <div class="horario-clases">
                            <div class="table-responsive">
                                <table class="table ss1">
                                    <thead class="scheduler ss1">
                                        <tr>
                                            <th class="text-center scheduler"><!-- Hora --></th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Lunes</th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Martes</th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Miercoles</th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Jueves</th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Viernes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    7:00<br>7:45
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>1</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">DESARROLLO DEL PENSAMIENTO FILOSOFICO</td> 
                                            <td class="subject" style="vertical-align: middle">DESARROLLO DEL PENSAMIENTO FILOSOFICO</td> 
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td> 
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    7:45<br>8:30
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>2</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">EDUCACION ARTISTICA</td> 
                                            <td class="subject" style="vertical-align: middle">QUIMICA</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td>
                                            <td class="subject" style="vertical-align: middle">GESTION Y ADMINISTRACION DE LA C Y V</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    8:30<br>9:15
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>3</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                            <td class="subject" style="vertical-align: middle">FISICA</td> 
                                            <td class="subject" style="vertical-align: middle">VALORES HUMANOS</td> 
                                            <td class="subject" style="vertical-align: middle">EDUCACION ARTISTICA</td>
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    9:15<br>10:00
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>4</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">CONTABILIDAD GENERAL Y TESORERIA</td> 
                                            <td class="subject" style="vertical-align: middle">CONTABILIDAD GENERAL Y TESORERIA</td> 
                                            <td class="subject" style="vertical-align: middle">COMUNICACION Y ARCHIVO</td> 
                                            <td class="subject" style="vertical-align: middle">DESARROLLO DEL PENSAMIENTO FILOSOFICO</td>
                                            <td class="subject" style="vertical-align: middle">CONTABILIDAD GENERAL Y TESORERIA</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    10:30<br>11:15
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>5</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">FISICA</td> 
                                            <td class="subject" style="vertical-align: middle">EDUCACION FISICA</td> 
                                            <td class="subject" style="vertical-align: middle">INFORMATICA APLICADA A LA EDUCACION</td> 
                                            <td class="subject" style="vertical-align: middle">QUIMICA</td>
                                            <td class="subject" style="vertical-align: middle">COMUNICACION Y ARCHIVO</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    11:15<br>12:00
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>6</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">INFORMATICA APLICADA A LA EDUCACION</td> 
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    12:00<br>12:45
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>7</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">GESTION ADMINISTRACION DE LA C Y V</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                            <td class="subject" style="vertical-align: middle">QUIMICA</td> 
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td> 
                                            <td class="subject" style="vertical-align: middle">DESARROLLO DEL PENSAMIENTO FILOSOFICO</td>                
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    13:15<br>14:00
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>8</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td> 
                                            <td class="subject" style="vertical-align: middle">DIBUJO TECNICO APLICADO</td> 
                                            <td class="subject" style="vertical-align: middle">FISICA</td> 
                                            <td class="subject" style="vertical-align: middle">FISICA</td>
                                            <td class="subject" style="vertical-align: middle">QUIMICA</td>  
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    14:00<br>14:45
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>9</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td> 
                                            <td class="subject" style="vertical-align: middle">COMUNICACION Y ARCHIVO</td> 
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td> 
                                            <td class="subject" style="vertical-align: middle">GESTION ADMINISTRACION DE LA C Y V</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td>  
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
</div>
<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>
