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
            <div class="col-xs-12 profe-cuadricula lista-general">
                <h3 style="margin:1em 0">
                    <p>
                    Dirigente:  
                    <span class="not">GLENDA CANDEL CARBO</span></p>
                    <p>              
                    Curso: 
                    <span class="not">3RO BACHILLERATO CIENTIFICO</span>   
                    </p>
                    <p>              
                    Materia: 
                    <span class="not">INVESTIGACION</span>             
                    </p>
                </h3>
                <span class="prof-asistencia">
                    <div class="lista-prof"> 
                        <select onchange="selectProfAsist()" class="form-control select-prof-asist" >
                          <option value='./profesor_asistencia3CIENTIFICO.php' selected>ASISTENCIA</option>
                          <option value="./profesor_agendaescolar.php">AGENDA ESCOLAR</option>
                          <option value="./profesor_calificaciones3CIENTIFICO.php">CALIFICACIONES</option>
                          <option value="./profesor_perfiles3CIENTIFICO.php">PERFILES</option>
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
        </div>     
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-left prof-titulo-semana">
                    <figure> 
                        <img src="img/asistencia blanco.png" style="width:30px">
                    </figure>
                    Asistencia
                    <small >semana: 23-28 de Enero del 2017</small>
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
                                               CINDY MARCELA ALARCON MOROCHO
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
                                                <span class="list-asist">2</span> BRAD ALEXANDER ALCIVAR VERA
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
                                                <span class="list-asist">3</span> JOSUE MIGUEL ALVARADO AVILA 
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
                                                <span class="list-asist">4</span> LUIS ALBERTO ANDRADE FIGUEROA
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
                                                <span class="list-asist">5</span> ALLISON ANDREA ARREAGA ANDRADE
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
                                                <span class="list-asist">6</span> JOSE MIGUEL AGUILAR RAMIREZ
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
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas18">
                                                    <label for="checkboxNotas18"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                       <td>
                                            <p class="student-list">
                                                <span class="list-asist">7</span> EILEEN GEOMARA BAREO SANJINES
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
                                                <span class="list-asist">8</span> BRENDA CAROLINA BERNAL VELASQUEZ
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas22">
                                                    <label for="checkboxNotas22"></label>
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
                                                <span class="list-asist">9</span> CHRISTIAN JOAO BORJA SALAO
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
                                                <span class="list-asist">10</span> JOSELINE ARIANA BUÑAY RAMOS 
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
                                                <span class="list-asist">11</span> STEFANI JAMILETH BURGOS FIGUEROA
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
                                                <span class="list-asist">12</span> MAYLEE NINOSKA BURNHAM MARCILLO
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
                                                <span class="list-asist">13</span> DAGMAR ALISON CAÑAS PEÑAFIEL
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
                                                <span class="list-asist">14</span> DEREK JOSHUA CARDENAS AMBI
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
                                                <span class="list-asist">15</span> GINGER LISBETH CASTRO RUIZ
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
                                                <span class="list-asist">16</span> SERGIO ANDRES CLAVIJO AGUAYZA
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
                                               <span class="list-asist">17</span>  ALICIA YADIRA CORDOVA MAYOR
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
                                                <span class="list-asist">18</span> GIUSEPPE OLIVER GARCIA INTRIAGO
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
                                                <span class="list-asist">19</span> CRISTOPHER JULIAN INTRIAGO LEON
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
                                                <span class="list-asist">20</span> MAYLIN BRENDA JARAMILLO SANTILLAN
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
                                                <span class="list-asist">21</span> MICHAEL DOUGLAS MONCADA LADINES
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
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">22</span> LADY LISBETH MORENO MANTILLA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas64">
                                                    <label for="checkboxNotas64"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas65">
                                                    <label for="checkboxNotas65"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas66">
                                                    <label for="checkboxNotas66"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">23</span> DOMENICA ANTONIA OLVERA URBINA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas67">
                                                    <label for="checkboxNotas67"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas68">
                                                    <label for="checkboxNotas68"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas69">
                                                    <label for="checkboxNotas69"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">24</span> BRITANY SHAJAIRA ORDOÑEZ NIETO
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas70">
                                                    <label for="checkboxNotas70"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas71">
                                                    <label for="checkboxNotas71"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas72">
                                                    <label for="checkboxNotas72"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">25</span> ERIC JOSUE QUIMIS SOLIS
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas73">
                                                    <label for="checkboxNotas73"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas74">
                                                    <label for="checkboxNotas74"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas75">
                                                    <label for="checkboxNotas75"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">26</span> DAVID STALYN REBUTTI DELGADO
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas76">
                                                    <label for="checkboxNotas76"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas77">
                                                    <label for="checkboxNotas77"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas78">
                                                    <label for="checkboxNotas78"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">27</span> NANCY BEATRIZ RIGCHAG AMANCHA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas79">
                                                    <label for="checkboxNotas79"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas80">
                                                    <label for="checkboxNotas80"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas81">
                                                    <label for="checkboxNotas81"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">28</span> MERIDA ROBERTA RIVERA VERA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas82">
                                                    <label for="checkboxNotas82"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas83">
                                                    <label for="checkboxNotas83"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas84">
                                                    <label for="checkboxNotas84"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">29</span> ENRIQUE GABRIEL RODRIGUEZ
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas85">
                                                    <label for="checkboxNotas85"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas86">
                                                    <label for="checkboxNotas86"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas87">
                                                    <label for="checkboxNotas87"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">30</span> MARIA EDITHSOTO CHICHANDE
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas88">
                                                    <label for="checkboxNotas88"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas89">
                                                    <label for="checkboxNotas89"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas90">
                                                    <label for="checkboxNotas90"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">31</span> THALIA NICOLE TAPIA LOOR
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas91">
                                                    <label for="checkboxNotas91"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas92">
                                                    <label for="checkboxNotas92"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas93">
                                                    <label for="checkboxNotas93"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">32</span> TAIS VERENICE TENORIO CARABALI
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas94">
                                                    <label for="checkboxNotas94"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas95">
                                                    <label for="checkboxNotas95"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas96">
                                                    <label for="checkboxNotas96"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">33</span> ALLISON DOMENIQUE VARGAS MEZA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas97">
                                                    <label for="checkboxNotas97"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas98">
                                                    <label for="checkboxNotas98"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas99">
                                                    <label for="checkboxNotas99"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">34</span> KATTHYA MELISSA VARGAS MEZA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas100">
                                                    <label for="checkboxNotas100"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas101">
                                                    <label for="checkboxNotas101"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas102">
                                                    <label for="checkboxNotas102"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">35</span> DOMENICA BELEN VILLOTA MOROCHO
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas103">
                                                    <label for="checkboxNotas103"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas104">
                                                    <label for="checkboxNotas104"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas105">
                                                    <label for="checkboxNotas105"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">36</span> MARIA BELEN VITERI JURADO
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas106">
                                                    <label for="checkboxNotas106"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas107">
                                                    <label for="checkboxNotas107"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas108">
                                                    <label for="checkboxNotas108"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">37</span> JOSE JAVIER ZAMBRANO CABRERA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas109">
                                                    <label for="checkboxNotas109"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas110">
                                                    <label for="checkboxNotas110"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas111">
                                                    <label for="checkboxNotas111"></label>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>          
                                    <tr>
                                        <td>
                                            <p class="student-list">
                                                <span class="list-asist">38</span> DAYANNA FIORELA ZHUMA TENEZACA
                                            </p>
                                        </td> 
                                        <form>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d1" id="checkboxNotas112">
                                                    <label for="checkboxNotas112"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d2" id="checkboxNotas113">
                                                    <label for="checkboxNotas113"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkboxNotas"> 
                                                    <input class="text-center" type="checkbox" value="d3" id="checkboxNotas114">
                                                    <label for="checkboxNotas114"></label>
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