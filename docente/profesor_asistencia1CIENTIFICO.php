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
                    <span class="not">TATIANA CARREÑO QUIROZ</span></p>
                    <p>              
                    Curso: 
                    <span class="not">1RO BACHILLERATO CIENTIFICO</span>   
                    </p>
                    <p>              
                    Materia: 
                    <span class="not">INVESTIGACION</span>             
                    </p>
                </h3>
                <span class="prof-asistencia">
                    <div class="lista-prof"> 
                        <select onchange="selectProfAsist()" class="form-control select-prof-asist" >
                          <option value='./profesor_asistencia1CIENTIFICO.php' selected="selected">ASISTENCIA</option>
                          <option value="./profesor_agendaescolar.php">AGENDA ESCOLAR</option>
                          <option value="./profesor_calificaciones1CIENTIFICO.php">CALIFICACIONES</option>
                          <option value="./profesor_perfiles1CIENTIFICO.php">PERFILES</option>
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
                    Asistencia </br>
                    <small >semana: 23-28 de Enero del 2017</small>
                    <button type="button" class="btn btn-primary btn-w-m" data-toggle="modal" data-target="#myModal6" style="color: white">Semana Anterior
                    </button>
                    </h2>
                </div>                                            
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <div class="responsive-table"> 
                            <table class="table table-bordered table-hover">
                                <thead style="background-color: #939598">
                                    <tr >
                                        <th class="text-center" style="background-color: #939598;color: white;width:50%; font-size: 2em;" ROWSPAN=2>Alumno</th> 
                                        <th class="text-center" style="background-color: #939598;color: white;width:10%">Martes</th>
                                        <th class="text-center" style="background-color: #939598;color: white;width:10%">Jueves</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="background-color: #939598">
                                            <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">9</span>
                                        </th>
                                        <th class="text-center" style="background-color: #939598">
                                            <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">2</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="background-color:white">
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">1</span>DIEGO ANDRES ALBAN COELLO</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas1"><label for="checkboxNotas1"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas2"><label for="checkboxNotas2"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">2</span>DIEGO UBALDO ARGUERO COSE</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas3"><label for="checkboxNotas3"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas4"><label for="checkboxNotas4"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">3</span>CANDY LUCIA NAVARRO CORTEZ</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas5"><label for="checkboxNotas5"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas6"><label for="checkboxNotas6"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">4</span>ADONIS JOSUE BARZOLA LEDESMA</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas7"><label for="checkboxNotas7"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas8"><label for="checkboxNotas8"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">5</span>JOAO PEDRO BONE PEÑA</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas9"><label for="checkboxNotas9"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas10"><label for="checkboxNotas10"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">6</span>MARIA DOMENICA CANEPA RAMOS</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas11"><label for="checkboxNotas11"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas12"><label for="checkboxNotas12"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">7</span>ROBERTO CARLOS CARAVEDO NIETO</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas13"><label for="checkboxNotas13"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas14"><label for="checkboxNotas14"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">8</span>KARLA NATALIA CARPIO RODRIGUEZ</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas15"><label for="checkboxNotas15"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas16"><label for="checkboxNotas16"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">9</span>MAYLI MITZUE CEDEÑO SUD</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas17"><label for="checkboxNotas17"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas18"><label for="checkboxNotas18"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">10</span>ODALIS ELIZABED CHIZAIZA GAMBOA</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas19"><label for="checkboxNotas19"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas20"><label for="checkboxNotas20"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">11</span>SOLEDAD BETZABE COLLAGUARI LOPEZ</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas21"><label for="checkboxNotas21"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas22"><label for="checkboxNotas22"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">12</span>BELEN NICOLE CORDOVA MAYOR</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas23"><label for="checkboxNotas23"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas24"><label for="checkboxNotas24"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">13</span>GENESIS IVONNE GUERRA CLARK</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas25"><label for="checkboxNotas25"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas26"><label for="checkboxNotas26"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">14</span>MARJORIE NICOLE HARO QUIÑONEZ</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas27"><label for="checkboxNotas27"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas28"><label for="checkboxNotas28"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">15</span>ADRIANA ANDREA LARRERA LAVAEN</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas29"><label for="checkboxNotas29"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas30"><label for="checkboxNotas30"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">16</span>NICOLAS MATEO LOGROÑO ORTIZ</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas31"><label for="checkboxNotas31"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas32"><label for="checkboxNotas32"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">17</span>ARMANDO DUBERLIN MACIAS FERNANDEZ</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas33"><label for="checkboxNotas33"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas34"><label for="checkboxNotas34"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">18</span>DENNIS JOEL MANZANO VELASTEGUI</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas35"><label for="checkboxNotas35"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas36"><label for="checkboxNotas36"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">19</span>RONNY ALFREDO MEDINA GONZALEZ</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas37"><label for="checkboxNotas37"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas38"><label for="checkboxNotas38"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">20</span>LEONARDO LEONIDAS NARANJO PEÑAFIEL</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas39"><label for="checkboxNotas39"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas40"><label for="checkboxNotas40"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">21</span>ERICK ROLANDO ORELLANA MENDOZA</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas41"><label for="checkboxNotas41"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas42"><label for="checkboxNotas42"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">22</span>GABRIELA MAYLIN PLAZA TOMALA</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas43"><label for="checkboxNotas43"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas44"><label for="checkboxNotas44"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">23</span>KAROL DOMENICA QUEVEDO WONG</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas45"><label for="checkboxNotas45"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas46"><label for="checkboxNotas46"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">24</span>DAVID MOISES RIVERA ALAVA</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas47"><label for="checkboxNotas47"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas48"><label for="checkboxNotas48"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">25</span>GERALDINA BRIGGITTE SALINAS ANGULO</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas49"><label for="checkboxNotas49"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas50"><label for="checkboxNotas50"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">26</span>ANDREA BRIGGITTE SALINAS DOMENECH</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas51"><label for="checkboxNotas51"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas52"><label for="checkboxNotas52"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">27</span>MARIA JOSE SOLORZANO DAVILA</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas53"><label for="checkboxNotas53"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas54"><label for="checkboxNotas54"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">28</span>CARLOS MANUEL TITUAÑA MOREIRA</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas55"><label for="checkboxNotas55"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas56"><label for="checkboxNotas56"></label></div>
                                          </td>
                                      </form>
                                    </tr>
                                    <tr>
                                      <td>
                                          <p class="student-list"><span class="list-asist">29</span>JANNELLY NAHOMI ZAMBRANO RODRIGUEZ</p>
                                      </td>
                                      <form action="">
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas57"><label for="checkboxNotas57"></label></div>
                                          </td>
                                          <td class="text-center">
                                              <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d2" id="checkboxNotas58"><label for="checkboxNotas58"></label></div>
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