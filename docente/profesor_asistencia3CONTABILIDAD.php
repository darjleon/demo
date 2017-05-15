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
                        <img alt="logo" src="img/logo unico.png" width="50px"/>
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
            <div class="col-xs-12 profe-cuadricula lista-general">
                <h3 style="margin:1em 0">
                    <p>
                    Dirigente:  
                    <span class="not">JUAN LOPEZ MARURI</span></p>
                    <p>              
                    Curso: 
                    <span class="not">3RO BACHILLERATO CONTABILIDAD</span>   
                    </p>
                    <p>              
                    Materia: 
                    <span class="not">INVESTIGACION</span>             
                    </p>
                </h3>
                <span class="prof-asistencia">
                    <div class="lista-prof"> 
                        <select onchange="selectProfAsist()" class="form-control select-prof-asist" >
                          <option value='./profesor_asistencia3CONTABILIDAD.php' selected="selected">ASISTENCIA</option>
                          <option value="./profesor_agendaescolar.php">AGENDA ESCOLAR</option>
                          <option value="./profesor_calificaciones3CONTABILIDAD.php">CALIFICACIONES</option>
                          <option value="./profesor_perfiles3CONTABILIDAD.php">PERFILES</option>
                        </select>
                    </div>
                    <div class="back">
                        <a href="profesor_horario.php">
                            <button class="button-back cb">
                                <img src="../img/return.png" alt="" width="17">Regresar
                            </button>
                        </a>
                    </div> 
                </span>
            </div>    
<!--             <div class="col-lg-1 text-right">                
                <img src="img/CURSO.png" style="width:30px">
            </div>                
            <div class="col-lg-5">                
                <h4 style="margin-left:0;margin-bottom: 0"><strong>CURSO: </strong>3RO BACHILLERATO CONTABILIDAD</h4>
                <h4><strong>DIRIGENTE: </strong>JUAN LOPEZ MARURI</h4>      
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
                <a href="profesor_horario.php">
                    <button type="button" class="btn btn-outline btn-success" style="margin-top:5px;margin-bottom: 5px">Regresar</button>
                </a>
            </div>  -->                                                   
        </div>     
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-left prof-titulo-semana">
                    <figure> 
                        <img src="img/asistencia blanco.png" style="width:30px">
                    </figure>
                    <small >semana: 23-28 de Enero del 2017</small>|
                    <button type="button" class="btn btn-primary btn-w-m" data-toggle="modal" data-target="#myModal6" style="color: white">Semana Anterior
                    </button>
                    </h2>
                </div>                                            
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <div class="table-responsive"> 
                            <table class="table table-bordered table-hover">
                                <thead style="background-color: #939598">
                                    <tr >
                                        <td class="text-center" style="background-color: #939598;color: white;width:50%; font-size: 2em;" rowspan=2>Alumno</td> 
                                        <td class="text-center" style="background-color: #939598;color: white;width:10%">Lunes</td>
                                        <td class="text-center" style="background-color: #939598;color: white;width:10%">Martes</td>
                                        <td class="text-center" style="background-color: #939598;color: white;width:10%">Viernes</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="background-color: #939598">
                                            <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">1</span>
                                        </td>
                                        <td class="text-center" style="background-color: #939598">
                                            <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">2</span>
                                        </td>
                                        <td class="text-center" style="background-color: #939598">
                                            <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">8</span>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody style="background-color:white">  
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                               <span class="list-asist">1</span> 
                                               NIDIA ALARCON ZURITA
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
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">2</span> ALEJANDRO MANUEL AYALA FARIAS
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas4">
                                                    <label for="checkboxNotas4"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas5">
                                                    <label for="checkboxNotas5"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas6">
                                                    <label for="checkboxNotas6"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">3</span> JOSUE SANTIAGO BAIDAL SUAREZ 
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas7">
                                                    <label for="checkboxNotas7"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas8">
                                                    <label for="checkboxNotas8"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas9">
                                                    <label for="checkboxNotas9"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">4</span> DAVID SEBASTIAN BECERRA SANCHEZ
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas10">
                                                    <label for="checkboxNotas10"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas11">
                                                    <label for="checkboxNotas11"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas12">
                                                    <label for="checkboxNotas12"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">5</span> MARIO ISRAEL CABALLERO CHILA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas13">
                                                    <label for="checkboxNotas13"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas14">
                                                    <label for="checkboxNotas14"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas15">
                                                    <label for="checkboxNotas15"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">6</span> DAVID ESTEBAN CALDERON CARRERA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas16">
                                                    <label for="checkboxNotas16"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas17">
                                                    <label for="checkboxNotas17"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="18">
                                                    <label for="18"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                       <td>
                                            <p class="student-list">
                                                <span class="list-asist">7</span> JEREMIE ELIAS DAQUILEMA NAVARRO
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas19">
                                                    <label for="checkboxNotas19"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas20">
                                                    <label for="checkboxNotas20"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas21">
                                                    <label for="checkboxNotas21"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                       <td>
                                            <p class="student-list">
                                                <span class="list-asist">8</span> JAIME IVAN DUEÑAS CHOEZ
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas2">
                                                    <label for="checkboxNotas2"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas23">
                                                    <label for="checkboxNotas23"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas24">
                                                    <label for="checkboxNotas24"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">9</span> CARLOS JAVIER GARCIA RAMONES
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas25">
                                                    <label for="checkboxNotas25"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas26">
                                                    <label for="checkboxNotas26"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas27">
                                                    <label for="checkboxNotas27"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">10</span> ANDREA MELISA HABLICH PAREDES 
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas28">
                                                    <label for="checkboxNotas28"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas29">
                                                    <label for="checkboxNotas29"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas30">
                                                    <label for="checkboxNotas30"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">11</span> BRUNO MAURICIO LOGROÑO ORTIZ
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas31">
                                                    <label for="checkboxNotas31"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas32">
                                                    <label for="checkboxNotas32"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas33">
                                                    <label for="checkboxNotas33"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">12</span> LISSETTE PRISCILA MENDOZA AVILEZ
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas34">
                                                    <label for="checkboxNotas34"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas35">
                                                    <label for="checkboxNotas35"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas36">
                                                    <label for="checkboxNotas36"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">13</span> BRYAN NORBERTO MOREIRA PARRALES
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas37">
                                                    <label for="checkboxNotas37"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas38">
                                                    <label for="checkboxNotas38"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas39">
                                                    <label for="checkboxNotas39"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">14</span> MAYERLI ADALIZ ORELLANA ROJAS 
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas40">
                                                    <label for="checkboxNotas40"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas41">
                                                    <label for="checkboxNotas41"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas42">
                                                    <label for="checkboxNotas42"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">15</span> GERSSON ALEXANDER PEREZ NUÑEZ
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas43">
                                                    <label for="checkboxNotas43"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas44">
                                                    <label for="checkboxNotas44"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas45">
                                                    <label for="checkboxNotas45"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">16</span> GRACE STEFANIE SOLORZANO MENDIETA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas46">
                                                    <label for="checkboxNotas46"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas47">
                                                    <label for="checkboxNotas47"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas48">
                                                    <label for="checkboxNotas48"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                               <span class="list-asist">17</span>  DIANA CAROLINA URRUTIA MOLINA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas49">
                                                    <label for="checkboxNotas49"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas50">
                                                    <label for="checkboxNotas50"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas51">
                                                    <label for="checkboxNotas51"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">18</span> YELENA MARIA VASQUEZ RODRIGUEZ
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas52">
                                                    <label for="checkboxNotas52"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas53">
                                                    <label for="checkboxNotas53"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas54">
                                                    <label for="checkboxNotas54"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">19</span> WILSON GARLIS VELASCO CALERO
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas55">
                                                    <label for="checkboxNotas55"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas56">
                                                    <label for="checkboxNotas56"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas57">
                                                    <label for="checkboxNotas57"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">20</span> ANTHONY ISMAELVELES GARCIA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas58">
                                                    <label for="checkboxNotas58"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas59">
                                                    <label for="checkboxNotas59"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas60">
                                                    <label for="checkboxNotas60"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">21</span> DAYANA GISSELLE ZAMORA GUSMAN
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas61">
                                                    <label for="checkboxNotas61"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas62">
                                                    <label for="checkboxNotas62"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas63">
                                                    <label for="checkboxNotas63"></label>
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
</div>
<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>