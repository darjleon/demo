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
                <h2 style="margin:1em 0">2DO BACHILLERATO CIENTIFICO</h2>
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
                                            WAGNER ANDRES AGUILAR GOMEZ
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
                                            KENYI JOELALVAREZ PEÑAFIELE.pn
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
                                            FERNANDO XAVIER BASTIDAS GARCIA
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
                                            MARIA DANIELA BRITO ABAD
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
                                            PAUL ANDRES BUSTAMANTE MORAN
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
                                            ALFONSO JOSHUE CAMACHO HIDALGO
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
                                            GENESIS GABRIELA CASTRO ZAMBRANO
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
                                            DARWIN JOSEPH CEVALLOS BARZOLA
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
                                            RICARDO ANDRES CONTRERAS FRANCO
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
                                            CRISTOPHER ALEXANDER DUCHE YNEZ
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
                                            ANAHI YAMILETH ESCOBAR DALMA
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
                                            ANDREA STEFANIA ESCOBAR RENDOM
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
                                            EMILIO DANILO ESPINOZA VIZCAINO
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
                                            RENE JOSUE GALLO ROUSSEAU 
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
                                            LENIN HENRY GARCIA PALMA
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
                                            NESTOR RICARDO GARCIA RODRIGUEZ
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
                                            WALESCA SOFIA GONZALES LOOR
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
                                            CARLA MADELEINE JACHO WONG
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
                                            ANGEL ISRAEL LOZANO LEON
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
                                            KRISTELLE KARELYS LUCIN QUIÑONEZ
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
                                            MARIA JOSE MACARLUPO GARCIA
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
                                            RICHARD ANDRES MACIAS TORRES
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
                                            MELANIE NOEMI MERA ZUÑIGA
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
                                            GABRIELA STEFANIA MIRANDA ORELLANA
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
                                            DAYANNA THAIS MORA CALDERON
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
                                            MARIANA STEFANIA PAZAN RODRIGUEZ
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
                                            NELLY ROUSE PONCE GONZALES
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
                                            OSCAR DAVID QUINTERO HURTADO
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
                                            JONATHAN JOSE REBUTTI MACIAS
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
                                            <span class="list-asist">30</span>
                                            MARIA DELIA REGALADO LARA
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
                                            <span class="list-asist">31</span>
                                            VALERY GARDENIA RIVERA VERA
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
                                            <span class="list-asist">32</span>
                                            ERICK ALEXIS ROSERO MACIAS
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
                                            <span class="list-asist">33</span>
                                            CARLOS XAVIER VALENCIA RODRIGUEZ
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
                                            <span class="list-asist">34</span>
                                            MARIA FERNANDA VELASCO GUADALUPE
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
                                            <span class="list-asist">35</span>
                                            ALINSON IVANA VELIZ TRIVIÑO
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
                                            <span class="list-asist">36</span>
                                            LUANA GUADALUPE ZAMBRANO BURGOS 
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
