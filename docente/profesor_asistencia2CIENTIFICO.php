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
        <div class="row wrapper white-bg ">      
            <div class="col-xs-12 profe-cuadricula lista-general">
                <h3 style="margin:1em 0">
                    <p>
                    Dirigente:  
                    <span class="not">CLAUDIA LOPEZ SANCHEZ</span></p>
                    <p>              
                    Curso: 
                    <span class="not">2DO BACHILLERATO CIENTIFICO</span>   
                    </p>
                    <p>              
                    Materia: 
                    <span class="not">INVESTIGACION</span>             
                    </p>
                </h3>
                <span class="prof-asistencia">
                    <div class="lista-prof"> 
                        <select onchange="selectProfAsist()" class="form-control select-prof-asist" >
                          <option value='./profesor_asistencia2CIENTIFICO.php' selected="selected">ASISTENCIA</option>
                          <option value="./profesor_agendaescolar.php">AGENDA ESCOLAR</option>
                          <option value="./profesor_calificaciones2CIENTIFICO.php">CALIFICACIONES</option>
                          <option value="./profesor_perfiles2CIENTIFICO.php">PERFILES</option>
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
                        <div class="table-responsive"> 
                            <table class="table table-bordered table-hover">
                                <thead style="background-color: #939598">
                                    <tr >
                                        <th class="text-center" style="background-color: #939598;color: white;width: 50%; font-size: 2em;" ROWSPAN=2>Alumno</th>
                                        <th class="text-center" style="background-color: #939598;color: white;width: 10%">Miercoles</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="background-color: #939598">
                                            <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">2</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="background-color:white">
                                    <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">1</span>WAGNER ANDRES AGUILAR GOMEZ</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas1"><label for="checkboxNotas1"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">2</span>KENYI JOELALVAREZ PEÑAFIELE</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas2"><label for="checkboxNotas2"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">3</span>FERNANDO XAVIER BASTIDAS GARCIA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas3"><label for="checkboxNotas3"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">4</span>MARIA DANIELA BRITO ABAD</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas4"><label for="checkboxNotas4"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">5</span>PAUL ANDRES BUSTAMANTE MORAN</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas5"><label for="checkboxNotas5"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">6</span>ALFONSO JOSHUE CAMACHO HIDALGO</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas6"><label for="checkboxNotas6"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">7</span>GENESIS GABRIELA CASTRO ZAMBRANO</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas7"><label for="checkboxNotas7"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">8</span>DARWIN JOSEPH CEVALLOS BARZOLA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas8"><label for="checkboxNotas8"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">9</span>RICARDO ANDRES CONTRERAS FRANCO</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas9"><label for="checkboxNotas9"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">10</span>CRISTOPHER ALEXANDER DUCHE YNEZ</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas10"><label for="checkboxNotas10"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">11</span>ANAHI YAMILETH ESCOBAR DALMA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas11"><label for="checkboxNotas11"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">12</span>ANDREA STEFANIA ESCOBAR RENDOM</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas12"><label for="checkboxNotas12"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">13</span>EMILIO DANILO ESPINOZA VIZCAINO</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas13"><label for="checkboxNotas13"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">14</span>RENE JOSUE GALLO ROUSSEAU</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas14"><label for="checkboxNotas14"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">15</span>LENIN HENRY GARCIA PALMA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas15"><label for="checkboxNotas15"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">16</span>NESTOR RICARDO GARCIA RODRIGUEZ</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas16"><label for="checkboxNotas16"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">17</span>WALESCA SOFIA GONZALES LOOR</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas17"><label for="checkboxNotas17"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">18</span>CARLA MADELEINE JACHO WONG</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas18"><label for="checkboxNotas18"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">19</span>ANGEL ISRAEL LOZANO LEON</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas19"><label for="checkboxNotas19"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">20</span>KRISTELLE KARELYS LUCIN QUIÑONEZ</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas20"><label for="checkboxNotas20"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">21</span>MARIA JOSE MACARLUPO GARCIA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas21"><label for="checkboxNotas21"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">22</span>RICHARD ANDRES MACIAS TORRES</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas22"><label for="checkboxNotas22"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">23</span>MELANIE NOEMI MERA ZUÑIGA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas23"><label for="checkboxNotas23"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">24</span>GABRIELA STEFANIA MIRANDA ORELLANA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas24"><label for="checkboxNotas24"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">25</span>DAYANNA THAIS MORA CALDERON</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas25"><label for="checkboxNotas25"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">26</span>MARIANA STEFANIA PAZAN RODRIGUEZ</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas26"><label for="checkboxNotas26"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">27</span>NELLY ROUSE PONCE GONZALES</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas27"><label for="checkboxNotas27"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">28</span>OSCAR DAVID QUINTERO HURTADO</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas28"><label for="checkboxNotas28"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">29</span>JONATHAN JOSE REBUTTI MACIAS</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas29"><label for="checkboxNotas29"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">30</span>MARIA DELIA REGALADO LARA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas30"><label for="checkboxNotas30"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">31</span>VALERY GARDENIA RIVERA VERA</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas31"><label for="checkboxNotas31"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">32</span>ERICK ALEXIS ROSERO MACIAS</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas32"><label for="checkboxNotas32"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">33</span>CARLOS XAVIER VALENCIA RODRIGUEZ</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas33"><label for="checkboxNotas33"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">34</span>MARIA FERNANDA VELASCO GUADALUPE</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas34"><label for="checkboxNotas34"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">35</span>ALINSON IVANA VELIZ TRIVIÑO</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas35"><label for="checkboxNotas35"></label></div>
                                             </td>
                                         </form>
                                     </tr>
                                     <tr>
                                         <td>
                                             <p class="student-list"><span class="list-asist">36</span>LUANA GUADALUPE ZAMBRANO BURGOS</p>
                                         </td>
                                         <form action="">
                                             <td class="text-center">
                                                 <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas36"><label for="checkboxNotas36"></label></div>
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