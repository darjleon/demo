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
                                <h3><strong class="font-bold">CINTHIA HERA RODRIGUEZ</strong></h3>
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="padre_perfil.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="padre_institucion.php">
                        <i class="fa fa-institution"></i> <span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="padre_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <img src="../img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumno</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="padre_hijo1.php">
                                <img src="../img/icono persona.png" width="20px">ELKIN DAVID SANNA HERA
                            </a>
                        </li>
                        <li class="active">
                            <a href="padre_hijo2.php">
                                <img src="../img/icono persona.png" width="20px">ALAN JOEL SANNA HERA
                            </a>
                        </li>
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
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="padre_notificacion.php">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Coordinación Académica
                                        <span class="pull-right text-muted small">ayer(11.15 am)</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="padre_notificacion.php">
                                        <strong>See All Alerts</strong><i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../logout.php">
<<<<<<< HEAD
                            <i class="fa fa-sign-out"></i>Cerrar Sesión
=======
                            <i class="fa fa-sign-out"></i> Cerrar Sesión
>>>>>>> 57cc21473110ae7c7f47ccd7a00f0caed2e853d5
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-6">
<<<<<<< HEAD
                <div class="row">
                    <div class="col-xs-12 col-lg-6"> 
                        <div class="profile-image">
                            <img src="../img/estudiantes.png" class="img-circle circle-border m-b-md" alt="profile" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6"> 
                        <div class="profile-info">
                            <h3 style="margin-top:5px;margin-bottom:0">ALAN JOEL SANNA HERA</h3>
                            <hr>
                            <div class="curso"> 
                                <!-- <img src="img/curso.png" alt="" width="25"> -->
                                <h4 style="margin-bottom:0"><strong>Curso: </strong>1RO DE BACHILLERATO INFORMATICA</h4> 
                                <h4 style="margin-top:0"><strong>Dirigente: </strong>ANA PLUA RIVERA</h4>
                            </div>   
                        </div>
                    </div>
=======
                <div class="profile-image" style="padding-top:10px">
                    <img src="../img/estudiantes.png" class="img-circle circle-border m-b-md" alt="profile" >
                </div>
                <div class="profile-info" style="padding-top:25px">
                    <h3 style="margin-top:5px;margin-bottom:0">ALAN JOEL SANNA HERA</h3>
                    <h4 style="margin-bottom:0"><strong>Curso: </strong>1RO DE BACHILLERATO INFORMATICA</h4> 
                    <h4 style="margin-top:0"><strong>Dirigente: </strong>ANA PLUA RIVERA</h4>
>>>>>>> 57cc21473110ae7c7f47ccd7a00f0caed2e853d5
                </div>
            </div>                
            <div id="tabs" class="col-sm-8 col-lg-4">
                <div class="tabs-container" style="padding-top:10px">
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#tab-1">Domicilio</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Informacion Medica</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="row tab-pane">
                            <ul class="list-unstyled m-t-md">
                                <div class="row">
                                    <li>                                        
                                        <div class="col-lg-3">
                                            <label>Ciudad:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <p>DAULE</p>
                                        </div>             
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col-lg-3">
                                            <label>Dirección:</label>
                                        </div>
                                        <div class="col-lg-9">
                                           <p>CDLA. CATALUÑA MZ 17 V 17</p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col-lg-3">
                                            <label>Telefono:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <p>091 234 5678</p>
                                        </div>
                                    </li>
                                </div>
                            </ul>   
                        </div>
                        <div id="tab-2" class="row tab-pane">
                            <ul class="list-unstyled m-t-md">
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Teléfono de emergencia:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            042 55 99 88
                                        </div>                                                          
                                    </li>
                                </div>
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Grupo sanguinero:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            O-
                                        </div>                                                          
                                    </li>
                                </div> 
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Sufre de enfermedad:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            NO
                                        </div>                                                          
                                    </li>
                                </div>                               
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Alergia:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            NO
                                        </div>                                                          
                                    </li>
                                </div>                              
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 return-button">
                <a href="padre_hijo2.php">
                    <button type="button" class="btn btn-outline btn-success return">
                        <img src="../img/return.png" alt="" width="17">
                        <span>
                            Regresar
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
<<<<<<< HEAD
                    <h2 class="text-left title_hdc" style="margin-top:0">
                        <img src="../img/horario.png" style="width:50px"> | Horario de Clases <span>|</span> <div>Periodo : <label>2016-2017</label></div> 
=======
                    <h2 class="text-left" style="margin-top:0">
                        <img src="../img/horario.png" style="width:50px"> | Horario de Clases | Periodo : <label>2016-2017</label> 
>>>>>>> 57cc21473110ae7c7f47ccd7a00f0caed2e853d5
                    </h2>
                </div>                                            
            </div>
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
                                                    1ra hora
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>1</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td>
                                            <td class="subject" style="vertical-align: middle">QUIMICA</td>
                                            <td class="subject" style="vertical-align: middle">PROGRAMACION EN LENGUAJE ESTRUCTURADO</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td>
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    2da hora
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>2</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">PROGRAMACION EN LENGUAJE ESTRUCTURADO</td>
                                            <td class="subject" style="vertical-align: middle">FISICA</td>
                                            <td class="subject" style="vertical-align: middle">FISICA</td>
                                            <td class="subject" style="vertical-align: middle">QUIMICA</td>
                                            <td class="subject" style="vertical-align: middle">INFORMATICA APLICADA A LA EDUCACION</td>
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    3ra hora
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>3</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td>
                                            <td class="subject" style="vertical-align: middle">PROGRAMACION EN LENGUAJE ESTRUCTURADO</td>
                                            <td class="subject" style="vertical-align: middle">PROGRAMACION EN LENGUAJE ESTRUCTURADO</td>
                                            <td class="subject" style="vertical-align: middle">FISICA</td>
                                            <td class="subject" style="vertical-align: middle">DESARROLLO DEL PENSAMIENTO FILOSOFICO</td>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    4ta hora
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>4</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">EDUCACION ARTISTICA</td>
                                            <td class="subject" style="vertical-align: middle">PROGRAMACION EN LENGUAJE ESTRUCTURADO</td>
                                            <td class="subject" style="vertical-align: middle">PROGRAMACION EN LENGUAJE ESTRUCTURADO</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td>
                                            <td class="subject" style="vertical-align: middle">FISICA</td>
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    5ta hora
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>5</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">RELACION EN EL EQUIPO DE TRABAJO</td>
                                            <td class="subject" style="vertical-align: middle">FYOL</td>
                                            <td class="subject" style="vertical-align: middle">DESARROLLO DEL PENSAMIENTO FILOSOFICO</td>
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td>
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td>
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    6ta hora
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>6</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">QUIMICA</td>
                                            <td class="subject" style="vertical-align: middle">DESARROLLO DEL PENSAMIENTO FILOSOFICO</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td>
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    7ma hora
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>7</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td>
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td>
                                            <td class="subject" style="vertical-align: middle">DESARROLLO DEL PENSAMIENTO FILOSOFICO</td>
                                            <td class="subject" style="vertical-align: middle">QUIMICA</td>               
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    8va hora
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>8</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td>
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td>
                                            <td class="subject">EDUCACION ARTISTICA</td>
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td>
                                            <td class="subject" style="vertical-align: middle">PROGRAMACION EN LENGUAJE ESTRUCTURADO</td>
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    9na hora
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>9</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">INFORMATICA APLICADA A LA EDUCACION</td>
                                            <td class="subject" style="vertical-align: middle">VALORES HUMANOS</td>
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td>
                                            <td class="subject" style="vertical-align: middle">EDUCACION FISICA</td>
                                            <td class="subject" style="vertical-align: middle">FYOL</td>
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