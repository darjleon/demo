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
                <li class="active">
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
                <li>
                    <a href="profesor_horario.php">
                        <i class="fa fa-clock-o"></i><span class="nav-label">Horarios</span>
                    </a>      
                </li>
                <li class="active">
                    <a href="#">
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
            <div class="col-lg-12">
                <h2 style="margin: 1em 0">Calendario Academico</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>A. PRIMER QUIMESTRE <small>(Inicia del 2 de Mayo y concluye el 30 de Septiembre del 2016)</small> </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                    <tr>
                                        <td class="text-center" width="10%"><strong>MESES</strong></td>
                                        <td class="text-center" width="25%"><strong>FECHAS</strong></td>
                                        <td class="text-center" width="5%"><strong>DIAS</strong></td>
                                        <td class="text-center"><strong>OBSERVACIONES</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Mayo</td>
                                        <td>Del 2 al 31 de mayo del 2016</td>       
                                        <td class="text-center">21</td>
                                        <td>
                                            <p>-El 20 de mayo se efectuará la jornada de siembra de árboles; solamnete con los estudiantes de Bachillerato.</p>
                                            <p>-El 27 de mayo es feriado (Batalla de Pichincha).</p>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Junio</td>
                                        <td>Del 1 al 30 de junio del 2016</td>
                                        <td class="text-center">22</td>
                                        <td>
                                            <p>El 9 de junio se efectuará la "Fiesta de la Lectura".</p>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Julio</td>
                                        <td>Del 1 al 29 de julio del 2016</td>
                                        <td class="text-center">20</td>
                                        <td>
                                            <p>El 29 de julio vacación para los estudiantes.*</p>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Agosto</td>
                                        <td>Del 1 al 31 de agosto del 2016</td>
                                        <td class="text-center">22</td>
                                        <td>
                                            <p>El 12 de agosto es feriado.</p>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Septiembre</td>
                                        <td>Del 1 al 30 de septiembre del 2016</td>
                                        <td class="text-center">22</td>
                                        <td>
                                            <p>-El 26 de septiembre es el Juramento a la Bandera</p>
                                            <p>El viernes 30 de septiembre se realizará un simulacro total de evacuación en las instituciones educativas fiscales; en coordinación con los encargados de la gestión de riesgos, a nivel local.</p>
                                            <p><strong>Los exámenes quimestrales son desde el 23 de septiembre al 30 de septiembre</strong></p>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td></td>
                                        <td class="text-center"><strong>TOTAL DE DIAS</strong></td>
                                        <td class="text-center"><strong>107</strong></td>
                                        <td></td>
                                    </tr> 
                                </tbody>
                            </table>
                             * En ese día los docentes realizarán círculos de estudio en cada institución educativa.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>B. SEGUNDO QUIMESTRE <small>(Inicia del 10 de Octubre del 2016 y concluye el 24 de Febrero del 2017)</small> </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                    <tr>
                                        <td class="text-center" width="10%"><strong>MESES</strong></td>
                                        <td class="text-center" width="25%"><strong>FECHAS</strong></td>
                                        <td class="text-center" width="5%"><strong>DIAS</strong></td>
                                        <td class="text-center"><strong>OBSERVACIONES</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Octubre</td>
                                        <td>Del 10 al 31 de octubre del 2016</td>
                                        <td class="text-center">16</td>
                                        <td></td>
                                    </tr>                            
                                    <tr>
                                        <td>Noviembre</td>
                                        <td>Del 1 al 30 de noviembre del 2016</td>
                                        <td class="text-center">20</td>
                                        <td>
                                            <p>-El 2 , 3 y 4 de noviembre son días de feriado.</p>
                                            <p>-El sábado 12 de noviembre segunda “Minga por la educación” para instituciones educativas fiscales (recuperación del 4 de noviembre).</p>
                                            <p>-El 25 de noviembre se realiza la segunda “Fiesta de la Lectura”.</p>
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>Diciembre</td>
                                        <td>Del 1 al 23 de diciembre del 2016</td>
                                        <td class="text-center">17</td>
                                        <td>
                                            <p>Desde el 24 de diciembre de 2016 hasta el 2 de enero de 2017 son vacaciones por festividades navideñas y de fin de año para estudiantes y docentes.</p>
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>Enero</td>
                                        <td>Del 2 al 31 de enero del 2017</td>
                                        <td class="text-center">22</td>
                                        <td>
                                            <p>Las actividades escolares correspondientes al lunes 02 de enero de 2017 se compensarán con tareas dirigidas. El lunes 02 de enero no hay asistencia a clases (feriado).El 29 de enero se efectuará la segunda siembra de árboles</p>
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>Febrero</td>
                                        <td>Del 1 al 24 de febrero del 2017</td>
                                        <td class="text-center">18</td>
                                        <td>
                                            <p>-Los días 27 y 28 de febrero de 2017 son feriados por carnaval.</p>
                                            <p>-El viernes 17 de febrero se realizará un simulacro total de evacuación en las instituciones educativas fiscales; en coordinación con los encargados de la gestión de riesgos, a nivel local.</p>
                                            <p>-Al finalizar el examen quimestral, el día 24 de febrero de 2017, tendrán que realizar la tercera “Minga por la educación” - Instituciones educativas fiscales.</p>
                                            <p>-Los exámenes del segundo quimestre son del 20 al 24 de febrero.</p>
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td></td>
                                        <td class="text-center"><strong>TOTAL DE DIAS</strong></td>
                                        <td class="text-center"><strong>93</strong></td>
                                        <td></td>
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