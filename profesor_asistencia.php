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

    <title>Pined | Profesor</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                        <img alt="logo" src="img/logo.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="profesor.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_institucion.php">
                        <i class="fa fa-institution"></i> <span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_notificaciones.php">
                        <i class="fa fa-newspaper-o"></i><span class="nav-label">Notificaciones</span>
                    </a>
                </li>
                <li>
                    <a href="profesor_listaalumnos.php">
                        <img src="img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumnos</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="fa fa-list"></i><span class="nav-label">Asistencia</span>
                    </a>      
                </li>
                <li>
                    <a href="profesor_horario.php">
                        <i class="fa fa-table"></i><span class="nav-label">Horarios</span>
                    </a>      
                </li>                                                          
                <li>
                    <a href="profesor_calificaciones.php">
                        <i class="fa fa-fw fa-list-alt"></i><span class="nav-label">Calificaciones</span>
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
                        <a class="count-info" href="p_notificaciones.html">
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
                            <i class="fa fa-sign-out"></i> Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg ">                                    
            <div class="pull-left">                
                <h2>Asistencia</h2>
            </div>
            <div class="pull-right" style="margin-top:5px;margin-right: -15px">
                <a href="#">
                    <span style="font-size:14px"><img src="img/LISTA.png" width="25px"></span>
                </a> 
                <a href="profesor_listaalumnos_cuadricula.php">
                    <span style="font-size:14px"><img src="img/ICONO.png" width="25px"></span>
                </a>
            </div>                       
        </div>

        <div class="row wrapper wrapper-content animated fadeInRight">
            <div class="col-lg-12">
                <div class="ibox-content">                            
                    <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading"> 
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            8 'A'
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE:</strong>
                                            LUIS CORREA ZAMBRANO    
                                        </div>
                                    </a>                                         
                                </div>                               
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <center>                                         
                                <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                    <thead>
                                        <tr>
                                            <th style="width:25%"></th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="text-center">
                                                <select  class="form-control" id="s1-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">SHIRLEY</td> 
                                            <td style="vertical-align: middle">ARIAS ASCENCIO</td>             
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s2-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">BRYAN</td>
                                            <td style="vertical-align: middle">ARONE SAAVEDRA</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s3-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">ARACELI</td>
                                            <td style="vertical-align: middle">CAQUEO VILLARREAL</td>          
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s4-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">JESSENIA GABRIELA</td>   
                                            <td style="vertical-align: middle">CHAMBA FLORES</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s5-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">ITALO JAVIER</td>              
                                            <td style="vertical-align: middle">CONDORI VELASQUEZ</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s6-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">SONIA</td>
                                            <td style="vertical-align: middle">CRUZ CRUZ</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s7-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">NATHALIE ALEXANDRA</td> 
                                            <td style="vertical-align: middle">DAVILA RIOS</td>            
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s8-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">LENIN MAXIMO</td> 
                                            <td style="vertical-align: middle">ELONS CARRASCO</td>             
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s9-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">JAHAIRA KIMBERLY</td>
                                            <td style="vertical-align: middle">MESTANZA RODAS</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s10-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">PETER JOSEPH</td>              
                                            <td style="vertical-align: middle">NARVAEZ ASENCIO</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s11-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">CRISTHIAN ALEX</td>  
                                            <td style="vertical-align: middle">PACHECO VERA</td>          
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s12-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">LUIS ALEJANDRO</td>              
                                            <td style="vertical-align: middle">REYES NUÑEZ</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s13-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">ANDREA NICOL</td>              
                                            <td style="vertical-align: middle">SALAZAR SALAZAR</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s14-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">KAREN ALEX</td>              
                                            <td style="vertical-align: middle">SANTIAGO RAYMONDI</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s15-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">LUIS DAVID</td>              
                                            <td style="vertical-align: middle">SIFUENTES CORDOVA</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s16-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">NICOLLE VALERIA</td> 
                                            <td style="vertical-align: middle">SPENCER PUCA</td>            
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s17-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">MELISSA JAHAIRA</td>
                                            <td style="vertical-align: middle">URBANO HUAMANI</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <select  class="form-control" id="s18-8A">
                                                    <option value="1">Asistio</option>
                                                    <option value="2">Atraso</option>
                                                    <option value="3">Falta</option>
                                                    <option value="4">Falta Justificada</option>
                                                </select>
                                            </td>
                                            <td style="vertical-align: middle">DANIEL JESUS</td>              
                                            <td style="vertical-align: middle">VARAS RODRIGUEZ</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </center>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">                 
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            8 'B' 
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE: </strong>
                                            RUTH ARGUELLO MENDOZA
                                        </div>
                                    </a> 
                                </div>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <center>    
                                    <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                        <thead>
                                            <tr>
                                                <th style="width:25%"></th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s1-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">LEONARDO MIGUEL</td>
                                                <td style="vertical-align: middle">APAZA BASILIO</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s2-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">RONALDO TYSON</td>
                                                <td style="vertical-align: middle">BALDERA OBREGON</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s3-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">JOEL ALEXANDER</td>
                                                <td style="vertical-align: middle">CALDERON GUEVARA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s4-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">ISAAC MANUEL</td>
                                                <td style="vertical-align: middle">ESTELA SAMANEZ</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s5-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">MILAGROS JANETH</td>
                                                <td style="vertical-align: middle">FLORES MESA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s6-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">JORGE LUIS</td>
                                                <td style="vertical-align: middle">GUEVARA MERA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s7-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">HUGO MANUEL</td>
                                                <td style="vertical-align: middle">LOPEZ PUCA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s8-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">GRISSEL ADRIANA</td>
                                                <td style="vertical-align: middle">MALASQUEZ DESPOSORIO</td>
                                            </tr>            
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s9-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">FAUSTO ENRIQUE</td>
                                                <td style="vertical-align: middle">PAREDES PORTUGAL</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s10-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">JULIO CESAR</td>
                                                <td style="vertical-align: middle">SALAZAR DAGA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s11-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">VIANCA ROXANA</td>
                                                <td style="vertical-align: middle">SALVATIERRA AYALA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s12-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">JAIRO ANTHONY</td>
                                                <td style="vertical-align: middle">SILVA MARQUEZ</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s13-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>                                
                                                <td style="vertical-align: middle">VICTOR JESUS</td>
                                                <td style="vertical-align: middle">SOLANO VILMA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s14-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">GONZALO ALBERTO</td>
                                                <td style="vertical-align: middle">TAIPE HUAMANI</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s15-8B">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">ROBINSON LUIS</td>
                                                <td style="vertical-align: middle">VILLANUEVA ASENCIO</td>
                                            </tr>                                    
                                        </tbody>
                                    </table>
                                </center>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            9 'A'
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE: </strong>
                                            MERY URBINA ANDALUZ
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <center>                                                   
                                    <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                        <thead>
                                            <tr>
                                                <th style="width:25%"></th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s1-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">JUAN MANUEL</td>
                                                <td style="vertical-align: middle">AGUILERA QUISPE</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s2-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">ANDREA PAOLA</td>
                                                <td style="vertical-align: middle">ALEGRE CASTRO</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s3-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">FABIOLA PAMELA</td>
                                                <td style="vertical-align: middle">CASTILLO MISARI</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s4-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">ANYEL ALEXANDRA</td>
                                                <td style="vertical-align: middle">DAVILA CHAVEZ</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s5-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">REYNALDO JERSON</td>
                                                <td style="vertical-align: middle">FILIOS HERNANDEZ</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s6-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">KEVIN ADRIAN</td>
                                                <td style="vertical-align: middle">LOPEZ GOYZUETA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s7-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">MELANY ROCIO</td>
                                                <td style="vertical-align: middle">PADILLA CHAUCA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s8-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">EDER ANDRES</td>
                                                <td style="vertical-align: middle">PAIVA PISCOYA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s9-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">LUIS ENRIQUE</td>
                                                <td style="vertical-align: middle">PAREDES POCCO</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s10-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">CRISTHIAN ANDRES</td>
                                                <td style="vertical-align: middle">PINEDA ROJAS</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s11-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">SELENA STEFANIA</td>
                                                <td style="vertical-align: middle">QUEREVALU DAVILA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s12-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">ANGELA BRIGGITTE</td>
                                                <td style="vertical-align: middle">QUISPE RODRÍGUEZ</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s13-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">SAUL ALEXIS</td>
                                                <td style="vertical-align: middle">REGALADO ALFARO</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s14-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">TANIA MARCELA</td>
                                                <td style="vertical-align: middle">ROMERO SALVATIERRA</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select  class="form-control" id="s15-9A">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">LORENA ROXANA</td>
                                                <td style="vertical-align: middle">SAENZ TEJADA</td>
                                            </tr>                                    
                                        </tbody>
                                    </table>
                                </center>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            1RO BACHILLERATO CIENTIFICO
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE: </strong>
                                            TATIANA CARREÑO QUIROZ
                                        </div>                                         
                                    </a>
                                </div>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <center> 
                                    <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                        <thead>
                                            <tr>
                                                <th style="width:25%"></th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <select  class="form-control" id="s1-1CIENTIFICO">
                                                        <option value="1">Asistio</option>
                                                        <option value="2">Atraso</option>
                                                        <option value="3">Falta</option>
                                                        <option value="4">Falta Justificada</option>
                                                    </select>
                                                </td>
                                                <td style="vertical-align: middle">DIEGO ANDRES</td>
                                                <td style="vertical-align: middle">ALBAN COELLO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DIEGO UBALDO</td>
                                                <td style="vertical-align: middle">ARGUERO COSE</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CANDY LUCIA</td>
                                                <td style="vertical-align: middle">NAVARRO CORTEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ADONIS JOSUE</td>
                                                <td style="vertical-align: middle">BARZOLA LEDESMA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOAO PEDRO</td>
                                                <td style="vertical-align: middle">BONE PEÑA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIA DOMENICA</td>
                                                <td style="vertical-align: middle">CANEPA RAMOS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ROBERTO CARLOS</td>
                                                <td style="vertical-align: middle">CARAVEDO NIETO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">KARLA NATALIA</td>
                                                <td style="vertical-align: middle">CARPIO RODRIGUEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MAYLI MITZUE</td>
                                                <td style="vertical-align: middle">CEDEÑO SUD</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ODALIS ELIZABED</td>
                                                <td style="vertical-align: middle">CHIZAIZA GAMBOA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">SOLEDAD BETZABE</td>
                                                <td style="vertical-align: middle">COLLAGUARI LOPEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">BELEN NICOLE</td>
                                                <td style="vertical-align: middle">CORDOVA MAYOR</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GENESIS IVONNE</td>
                                                <td style="vertical-align: middle">GUERRA CLARK</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARJORIE NICOLE</td>
                                                <td style="vertical-align: middle">HARO QUIÑONEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ADRIANA ANDREA</td>
                                                <td style="vertical-align: middle">LARRERA LAVAEN</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">NICOLAS MATEO</td>
                                                <td style="vertical-align: middle">LOGROÑO ORTIZ</td>
                                            </tr>             
                                            <tr>
                                                <td style="vertical-align: middle">ARMANDO DUBERLIN</td>
                                                <td style="vertical-align: middle">MACIAS FERNANDEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DENNIS JOEL</td>
                                                <td style="vertical-align: middle">MANZANO VELASTEGUI</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">RONNY ALFREDO</td>
                                                <td style="vertical-align: middle">MEDINA GONZALEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">LEONARDO LEONIDAS</td>
                                                <td style="vertical-align: middle">NARANJO PEÑAFIEL</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ERICK ROLANDO</td>
                                                <td style="vertical-align: middle">ORELLANA MENDOZA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GABRIELA MAYLIN</td>
                                                <td style="vertical-align: middle">PLAZA TOMALA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">KAROL DOMENICA</td>
                                                <td style="vertical-align: middle">QUEVEDO WONG</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DAVID MOISES</td>
                                                <td style="vertical-align: middle">RIVERA ALAVA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GERALDINA BRIGGITTE</td>
                                                <td style="vertical-align: middle">SALINAS ANGULO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ANDREA BRIGGITTE</td>
                                                <td style="vertical-align: middle">SALINAS DOMENECH</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIA JOSE</td>
                                                <td style="vertical-align: middle">SOLORZANO DAVILA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CARLOS MANUEL</td>
                                                <td style="vertical-align: middle">TITUAÑA MOREIRA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JANNELLY NAHOMI</td>
                                                <td style="vertical-align: middle">ZAMBRANO RODRIGUEZ</td>
                                            </tr>
                                        </tbody> 
                                    </table>
                                </center>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            2DO BACHILLERATO CIENTIFICO
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE: </strong>
                                            CLAUDIA LOPEZ SANCHEZ
                                        </div>
                                    </a>                                               
                                </div>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <center>                                         
                                    <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                        <thead>
                                            <tr>
                                                <th style="width:25%"></th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle">WAGNER ANDRES</td>
                                                <td style="vertical-align: middle">AGUILAR GOMEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">KENYI JOEL</td>
                                                <td style="vertical-align: middle">ALVAREZ PEÑAFIEL</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">FERNANDO XAVIER</td>
                                                <td style="vertical-align: middle">BASTIDAS GARCIA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIA DANIELA</td>
                                                <td style="vertical-align: middle">BRITO ABAD</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">PAUL ANDRES</td>
                                                <td style="vertical-align: middle">BUSTAMANTE MORAN</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ALFONSO JOSHUE</td>
                                                <td style="vertical-align: middle">CAMACHO HIDALGO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GENESIS GABRIELA</td>
                                                <td style="vertical-align: middle">CASTRO ZAMBRANO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DARWIN JOSEPH</td>
                                                <td>CEVALLOS BARZOLA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">RICARDO ANDRES</td>
                                                <td style="vertical-align: middle">CONTRERAS FRANCO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CRISTOPHER ALEXANDER</td>
                                                <td style="vertical-align: middle">DUCHE YNEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ANAHI YAMILETH</td>
                                                <td style="vertical-align: middle">ESCOBAR DALMA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ANDREA STEFANIA</td>
                                                <td style="vertical-align: middle">ESCOBAR RENDOM</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">EMILIO DANILO</td>
                                                <td style="vertical-align: middle">ESPINOZA VIZCAINO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">RENE JOSUE</td>
                                                <td style="vertical-align: middle">GALLO ROUSSEAU</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">LENIN HENRY</td>
                                                <td style="vertical-align: middle">GARCIA PALMA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">NESTOR RICARDO</td>
                                                <td style="vertical-align: middle">GARCIA RODRIGUEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">WALESCA SOFIA</td>
                                                <td style="vertical-align: middle">GONZALES LOOR</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CARLA MADELEINE</td>
                                                <td style="vertical-align: middle">JACHO WONG</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ANGEL ISRAEL</td>
                                                <td style="vertical-align: middle">LOZANO LEON</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">KRISTELLE KARELYS</td>
                                                <td style="vertical-align: middle">LUCIN QUIÑONEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIA JOSE</td>
                                                <td style="vertical-align: middle">MACARLUPO GARCIA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">RICHARD ANDRES</td>
                                                <td style="vertical-align: middle">MACIAS TORRES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MELANIE NOEMI</td>
                                                <td style="vertical-align: middle">MERA ZUÑIGA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GABRIELA STEFANIA</td>
                                                <td style="vertical-align: middle">MIRANDA ORELLANA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DAYANNA THAIS</td>
                                                <td style="vertical-align: middle">MORA CALDERON</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIANA STEFANIA</td>
                                                <td style="vertical-align: middle">PAZAN RODRIGUEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">NELLY ROUSE</td>
                                                <td style="vertical-align: middle">PONCE GONZALES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">OSCAR DAVID</td>
                                                <td style="vertical-align: middle">QUINTERO HURTADO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JONATHAN JOSE</td>
                                                <td style="vertical-align: middle">REBUTTI MACIAS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIA DELIA</td>
                                                <td style="vertical-align: middle">REGALADO LARA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">VALERY GARDENIA</td>
                                                <td style="vertical-align: middle">RIVERA VERA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ERICK ALEXIS</td>
                                                <td style="vertical-align: middle">ROSERO MACIAS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CARLOS XAVIER</td>
                                                <td style="vertical-align: middle">VALENCIA RODRIGUEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIA FERNANDA</td>
                                                <td style="vertical-align: middle">VELASCO GUADALUPE</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ALINSON IVANA</td>
                                                <td style="vertical-align: middle">VELIZ TRIVIÑO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">LUANA GUADALUPE</td>
                                                <td style="vertical-align: middle">ZAMBRANO BURGOS</td>
                                            </tr>                
                                        </tbody>   
                                    </table>
                                </center>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            2DO BACHILLERATO INFORMATICA
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE: </strong>
                                            MARCOS PAZAN REYES
                                        </div>                                         
                                    </a>
                                </div>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <center>  
                                    <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                        <thead>
                                            <tr>
                                                <th style="width:25%"></th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle">NOEMY JULEISY</td>
                                                <td style="vertical-align: middle">ACOSTA DAVID</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ODALIS RAQUEL</td>
                                                <td style="vertical-align: middle">ASMAL MONTENEGRO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">KEVIN ISMAEL</td>
                                                <td style="vertical-align: middle">BERMEO ORTEGA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">POLL SEBASTIAN</td>
                                                <td style="vertical-align: middle">CAMPOVERDE JARAMILLO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JONATHAN ISRAEL</td>
                                                <td style="vertical-align: middle">GARCIA TAPIA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MICHAEL WANDERLEY</td>
                                                <td style="vertical-align: middle">MARIN PINEDA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ANGEL</td>
                                                <td style="vertical-align: middle">PLACIDO MERA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CRISTOPHER SMITH</td>
                                                <td style="vertical-align: middle">MORA SOLANO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GENESIS ELIZABETH</td>
                                                <td style="vertical-align: middle">RAMIREZ ROLDAN</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DAVIS JESUS</td>
                                                <td style="vertical-align: middle">ROMERO CEBALLOS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">RAFAEL ALEXANDER</td>
                                                <td style="vertical-align: middle">SANTILLAN VINCES</td>
                                            </tr>  
                                            <tr>
                                                <td style="vertical-align: middle">DAYANA NICOLES</td>
                                                <td style="vertical-align: middle">VILLALTA MORALES</td>
                                            </tr>        
                                        </tbody>   
                                    </table>
                                </center>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            3RO BACHILLERATO CIENTIFICO
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE: </strong>
                                            GLENDA CANDEL CARBO
                                        </div>                            
                                    </a>
                                </div>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <center>                                         
                                    <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                        <thead>
                                            <tr>
                                                <th style="width:25%"></th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle">CINDY MARCELA</td>
                                                <td style="vertical-align: middle">ALARCON MOROCHO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">BRAD ALEXANDER</td>
                                                <td style="vertical-align: middle">ALCIVAR VERA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOSUE MIGUEL</td>
                                                <td style="vertical-align: middle">ALVARADO AVILA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">LUIS ALBERTO</td>
                                                <td style="vertical-align: middle">ANDRADE FIGUEROA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ALLISON ANDREA</td>
                                                <td style="vertical-align: middle">ARREAGA ANDRADE</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOSE MIGUEL</td>
                                                <td>AGUILAR RAMIREZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">EILEEN GEOMARA</td>
                                                <td style="vertical-align: middle">BAREO SANJINES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">BRENDA CAROLINA</td>
                                                <td style="vertical-align: middle">BERNAL VELASQUEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CHRISTIAN JOAO</td>
                                                <td style="vertical-align: middle">BORJA SALAO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOSELINE ARIANA</td>
                                                <td style="vertical-align: middle">BUÑAY RAMOS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">STEFANI JAMILETH</td>
                                                <td style="vertical-align: middle">BURGOS FIGUEROA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MAYLEE NINOSKA</td>
                                                <td style="vertical-align: middle">BURNHAM MARCILLO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DAGMAR ALISON</td>
                                                <td style="vertical-align: middle">CAÑAS PEÑAFIEL</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DEREK JOSHUA</td>
                                                <td style="vertical-align: middle">CARDENAS AMBI</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GINGER LISBETH</td>
                                                <td style="vertical-align: middle">CASTRO RUIZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">SERGIO ANDRES</td>
                                                <td style="vertical-align: middle">CLAVIJO AGUAYZA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ALICIA YADIRA</td>
                                                <td style="vertical-align: middle">CORDOVA MAYOR</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GIUSEPPE OLIVER</td>
                                                <td style="vertical-align: middle">GARCIA INTRIAGO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CRISTOPHER JULIAN</td>
                                                <td style="vertical-align: middle">INTRIAGO LEON</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MAYLIN BRENDA</td>
                                                <td style="vertical-align: middle">JARAMILLO SANTILLAN</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MICHAEL DOUGLAS</td>
                                                <td style="vertical-align: middle">MONCADA LADINES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JEAN PIERRE</td>
                                                <td style="vertical-align: middle">MENDEZ APOLINARIO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">LADY LISBETH</td>
                                                <td style="vertical-align: middle">MORENO MANTILLA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DOMENICA ANTONIA</td>
                                                <td style="vertical-align: middle">OLVERA URBINA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">BRITANY SHAJAIRA</td>
                                                <td style="vertical-align: middle">ORDOÑEZ NIETO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ERIC JOSUE</td>
                                                <td style="vertical-align: middle">QUIMIS SOLIS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DAVID STALYN</td>
                                                <td style="vertical-align: middle">REBUTTI DELGADO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">NANCY BEATRIZ</td>
                                                <td style="vertical-align: middle">RIGCHAG AMANCHA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MERIDA ROBERTA</td>
                                                <td style="vertical-align: middle">RIVERA VERA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ENRIQUE GABRIEL</td>
                                                <td style="vertical-align: middle">RODRIGUEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIA EDITH</td>
                                                <td style="vertical-align: middle">SOTO CHICHANDE</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">THALIA NICOLE</td>
                                                <td style="vertical-align: middle">TAPIA LOOR</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">TAIS VERENICE</td>
                                                <td style="vertical-align: middle">TENORIO CARABALI</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ALLISON DOMENIQUE</td>
                                                <td style="vertical-align: middle">VARGAS MEZA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">KATTHYA MELISSA</td>
                                                <td style="vertical-align: middle">VARGAS MEZA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DOMENICA BELEN</td>
                                                <td style="vertical-align: middle">VILLOTA MOROCHO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIA BELEN</td>
                                                <td style="vertical-align: middle">VITERI JURADO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOSE JAVIER</td>
                                                <td>ZAMBRANO CABRERA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DAYANNA FIORELA</td>
                                                <td style="vertical-align: middle">ZHUMA TENEZACA</td>
                                            </tr>          
                                        </tbody>   
                                    </table>
                                </center>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            3RO BACHILLERATO CONTABILIDAD
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE: </strong>
                                            JUAN LOPEZ MARURI
                                        </div>                                         
                                    </a>
                                </div>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <center>                                                   
                                    <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                        <thead>
                                            <tr>
                                                <th style="width:25%"></th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle">NIDIA</td>
                                                <td style="vertical-align: middle">ALARCON ZURITA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ALEJANDRO MANUEL</td>
                                                <td style="vertical-align: middle">AYALA FARIAS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOSUE SANTIAGO</td>
                                                <td style="vertical-align: middle">BAIDAL SUAREZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DAVID SEBASTIAN</td>
                                                <td style="vertical-align: middle">BECERRA SANCHEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARIO ISRAEL</td>
                                                <td style="vertical-align: middle">CABALLERO CHILA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DAVID ESTEBAN</td>
                                                <td style="vertical-align: middle">CALDERON CARRERA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JEREMIE ELIAS</td>
                                                <td style="vertical-align: middle">DAQUILEMA NAVARRO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JAIME IVAN</td>
                                                <td style="vertical-align: middle">DUEÑAS CHOEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CARLOS JAVIER</td>
                                                <td style="vertical-align: middle">GARCIA RAMONES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ANDREA MELISA</td>
                                                <td style="vertical-align: middle">HABLICH PAREDES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">BRUNO MAURICIO</td>
                                                <td style="vertical-align: middle">LOGROÑO ORTIZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">LISSETTE PRISCILA</td>
                                                <td style="vertical-align: middle">MENDOZA AVILEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">BRYAN NORBERTO</td>
                                                <td style="vertical-align: middle">MOREIRA PARRALES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MAYERLI ADALIZ</td>
                                                <td style="vertical-align: middle">ORELLANA ROJAS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GERSSON ALEXANDER</td>
                                                <td style="vertical-align: middle">PEREZ NUÑEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">GRACE STEFANIE</td>
                                                <td style="vertical-align: middle">SOLORZANO MENDIETA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DIANA CAROLINA</td>
                                                <td style="vertical-align: middle">URRUTIA MOLINA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">YELENA MARIA</td>
                                                <td style="vertical-align: middle">VASQUEZ RODRIGUEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">WILSON GARLIS</td>
                                                <td style="vertical-align: middle">VELASCO CALERO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ANTHONY ISMAEL</td>
                                                <td style="vertical-align: middle">VELES GARCIA</td>
                                            </tr> 
                                            <tr>
                                                <td style="vertical-align: middle">DAYANA GISSELLE</td>
                                                <td style="vertical-align: middle">ZAMORA GUSMAN</td>
                                            </tr>          
                                        </tbody>   
                                    </table>
                                </center>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" style="color:black">
                                        <div class="col-lg-6">
                                            <img src="img/CURSO.png" width="15px">
                                            <strong class="curso-lista">CURSO:</strong>
                                            3RO BACHILLERATO INFORMATICA
                                        </div>
                                        <div class="col-lg-6">
                                            <strong>DIRIGENTE: </strong>
                                            ANGELICA VILLABLANCA TRUJILLO
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse">
                                <center> 
                                    <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                        <thead>
                                            <tr>
                                                <th style="width:25%"></th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle">EDNWING FABRICIO</td>
                                                <td style="vertical-align: middle">AMAGUAYA VILLAVICENCIO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">KARLA DOMINIQUE</td>
                                                <td style="vertical-align: middle">ALVARADO AVILES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">ANDRES MARCELINO</td>
                                                <td style="vertical-align: middle">BAQUE CANO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">VICTOR JOSUE</td>
                                                <td style="vertical-align: middle">BUÑAY CANTOS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">LILIBETH</td>
                                                <td style="vertical-align: middle">CONGUIA ESCOBAR</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">BRITTANY PAULINA</td>
                                                <td style="vertical-align: middle">CORREA PAZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MARJORIE MICHELE</td>
                                                <td style="vertical-align: middle">FIGUEROA ROBAYO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JAIME EDUARDO</td>
                                                <td style="vertical-align: middle">GARCIA CELI</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DANNA NOHELY</td>
                                                <td style="vertical-align: middle">HOLGUIN CISNEROS</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">DOLORES MARGARITA</td>
                                                <td style="vertical-align: middle">LOPEZ CANO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">MICHAEL STEVEN</td>
                                                <td style="vertical-align: middle">MARTINEZ PINO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">PAMELA LISETTE</td>
                                                <td style="vertical-align: middle">MOREIRA TORRES</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CRISTOPHER JOSUE</td>
                                                <td style="vertical-align: middle">MENDOZA COTO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOSE BENJAMIN</td>
                                                <td style="vertical-align: middle">MOROCHO PEÑAFIEL</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOSE RICARDO</td>
                                                <td style="vertical-align: middle">MUÑOZ SANCHEZ</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">RENSO GERMAN</td>
                                                <td style="vertical-align: middle">QUIÑONEZ QUINTERO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">JOSUE SAUL</td>
                                                <td style="vertical-align: middle">SABANDO LINDAO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">FREDDY YURIS</td>
                                                <td style="vertical-align: middle">SANCHEZ MONTERO</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">CESAR FERNANDO</td>
                                                <td style="vertical-align: middle">VASQUEZ BARAHONA</td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle">LUIS ANTONIO</td>
                                                <td style="vertical-align: middle">ENA RAMON</td>
                                            </tr>          
                                        </tbody>   
                                    </table>
                                </center>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {

            function reLoad(){
                $('.footable').footable();
            }
            
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
