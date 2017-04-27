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
            <div class="col-lg-1 text-right">                
                <img src="img/CURSO.png" style="width:30px">
            </div>               
            <div class="col-lg-5">                
                <h4 style="margin-left:0;margin-bottom: 0"><strong>CURSO: </strong>3RO BACHILLERATO CIENTIFICO</h4>
                <h4><strong>DIRIGENTE: </strong>GLENDA CANDEL CARBO</h4>
                <h4 style="margin-top: 10px"><strong>MATERIA: </strong>INVESTIGACION</h4>        
            </div>
            <div class="col-lg-6 text-right" style="margin-top:5px;margin-right: -15px">
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
                        <a href="profesor_calificaciones3CIENTIFICO.php">
                            <h5 class="btn btn-student-list">Calificaciones</h5>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="profesor_perfiles3CIENTIFICO.php">
                            <h5 class="btn btn-student-list">Perfiles</h5>
                        </a>
                    </li>
                </ul>
                <a href="profesor_horario.php">
                    <button type="button" class="btn btn-outline btn-success" style="margin-top:5px;margin-bottom: 5px">Regresar</button>
                </a>
            </div>                                                  
        </div>     
        <div class="wrapper wrapper-content">
            
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-left" style="margin-top:0;padding-left:10px">
                        <img src="img/asistencia blanco.png" style="width:30px"> Asistencia |
                        <small>semana:</small><small style="padding:25px">23-28 de Enero del 2017</small> |
                        <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal6" style="color: white"><h5>Semana Anterior</h5></button>
                    </h2>
                </div>                                            
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover" style="margin-top:10px;width: 70%">
                            <thead style="background-color: #939598">
                                <tr >
                                    <th class="text-center" style="background-color: #939598;color: white;width:50%" ROWSPAN=2>Alumno</th> 
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Lunes</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Miercoles</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Jueves</th>
                                </tr>
                                <tr>
                                    <th class="text-center" style="background-color: #939598">
                                        <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">2</span>
                                    </th>
                                    <th class="text-center" style="background-color: #939598">
                                        <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">1</span>
                                    </th>
                                    <th class="text-center" style="background-color: #939598">
                                        <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">7</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white">                            
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            CINDY MARCELA ALARCON MOROCHO 
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
                                            BRAD ALEXANDER ALCIVAR VERA
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
                                            JOSUE MIGUEL ALVARADO AVILA
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
                                            LUIS ALBERTO ANDRADE FIGUEROA
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
                                            ALLISON ANDREA ARREAGA ANDRADE
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
                                            JOSE MIGUEL AGUILAR RAMIREZ
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
                                            EILEEN GEOMARA BAREO SANJINES
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
                                            BRENDA CAROLINA BERNAL VELASQUEZ 
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
                                            CHRISTIAN JOAO BORJA SALAO
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
                                            JOSELINE ARIANA BUÑAY RAMOS
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
                                            STEFANI JAMILETH BURGOS FIGUEROA
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
                                            MAYLEE NINOSKA BURNHAM MARCILLO
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
                                            DAGMAR ALISON CAÑAS PEÑAFIEL
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
                                            DEREK JOSHUA CARDENAS AMBI 
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
                                            GINGER LISBETH CASTRO RUIZ
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
                                            SERGIO ANDRES CLAVIJO AGUAYZA
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
                                            ALICIA YADIRA CORDOVA MAYOR 
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
                                            GIUSEPPE OLIVER GARCIA INTRIAGO 
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
                                            CRISTOPHER JULIAN INTRIAGO LEON
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
                                            MAYLIN BRENDA JARAMILLO SANTILLAN
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
                                            MICHAEL DOUGLAS MONCADA LADINES
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
                                            JEAN PIERRE MENDEZ APOLINARIO
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
                                            LADY LISBETH MORENO MANTILLA
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
                                            DOMENICA ANTONIA OLVERA URBINA
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
                                            BRITANY SHAJAIRA ORDOÑEZ NIETO 
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
                                            ERIC JOSUE QUIMIS SOLIS
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
                                            DAVID STALYN REBUTTI DELGADO 
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
                                            NANCY BEATRIZ RIGCHAG AMANCHA
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
                                            MERIDA ROBERTA RIVERA VERA
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
                                            ENRIQUE GABRIEL RODRIGUEZ 
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
                                            MARIA EDITHSOTO CHICHANDE
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
                                            THALIA NICOLE TAPIA LOOR
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
                                            TAIS VERENICE TENORIO CARABALI
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
                                            ALLISON DOMENIQUE VARGAS MEZA
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
                                            KATTHYA MELISSA VARGAS MEZA
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
                                            DOMENICA BELEN VILLOTA MOROCHO
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
                                            MARIA BELEN VITERI JURADO
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
                                            JOSE JAVIER ZAMBRANO CABRERA
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
                                            DAYANNA FIORELA ZHUMA TENEZACA 
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