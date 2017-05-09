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
                <h2 style="margin:1em 0">1RO BACHILLERATO CIENTIFICO</h2>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #939598">
                                <tr >
                                    <th class="text-center" style="background-color: #939598;color: white;width:50%">Alumno</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Lunes</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Martes</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Miercoles</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Jueves</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Viernes</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white">
                                <tr>
                                   <td>
                                        <p class="student-list">
                                            <span class="list-asist">1</span>
                                            DIEGO ANDRES ALBAN COELLO
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">2</span>
                                            DIEGO UBALDO ARGUERO COSE
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">3</span>
                                            CANDY LUCIA NAVARRO CORTEZ
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">4</span>
                                            ADONIS JOSUE BARZOLA LEDESMA 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">5</span>
                                            JOAO PEDRO BONE PEÑA
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">6</span>
                                            MARIA DOMENICA CANEPA RAMOS 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                   <td>
                                        <p class="student-list">
                                            <span class="list-asist">7</span>
                                            ROBERTO CARLOS CARAVEDO NIETO
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">8</span>
                                            KARLA NATALIA CARPIO RODRIGUEZ 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">9</span>
                                            MAYLI MITZUE CEDEÑO SUD 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">10</span>
                                            ODALIS ELIZABED CHIZAIZA GAMBOA
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">11</span>
                                            SOLEDAD BETZABE COLLAGUARI LOPEZ
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">12</span>
                                            BELEN NICOLE CORDOVA MAYOR 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">13</span>
                                            GENESIS IVONNE GUERRA CLARK
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">14</span>
                                            MARJORIE NICOLE HARO QUIÑONEZ
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">15</span>
                                            ADRIANA ANDREA LARRERA LAVAEN
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">16</span>
                                            NICOLAS MATEO LOGROÑO ORTIZ
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>             
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">17</span>
                                            ARMANDO DUBERLIN MACIAS FERNANDEZ 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">18</span>
                                            DENNIS JOEL >MANZANO VELASTEGUI 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">19</span>
                                            RONNY ALFREDO MEDINA GONZALEZ
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">20</span>
                                            LEONARDO LEONIDAS NARANJO PEÑAFIEL
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">21</span>
                                            ERICK ROLANDO ORELLANA MENDOZA 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">22</span>
                                            GABRIELA MAYLIN PLAZA TOMALA
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">23</span>
                                            KAROL DOMENICA QUEVEDO WONG
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">24</span>
                                            DAVID MOISES RIVERA ALAVA
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">25</span>
                                            GERALDINA BRIGGITTE SALINAS ANGULO
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">26</span>
                                            ANDREA BRIGGITTE SALINAS DOMENECH 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">27</span>
                                            MARIA JOSE SOLORZANO DAVILA 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">28</span>
                                            CARLOS MANUEL TITUAÑA MOREIRA
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <span class="list-asist">29</span>
                                            JANNELLY NAHOMI ZAMBRANO RODRIGUEZ 
                                        </p>
                                    </td>
                                    <form>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d1" id="checkboxNotas1">
                                                <label for="checkboxNotas1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d2" id="checkboxNotas2">
                                                <label for="checkboxNotas2"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="checkboxNotas"> 
                                                <input class="text-center" type="checkbox" value="d3" id="checkboxNotas3">
                                                <label for="checkboxNotas3"></label>
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
