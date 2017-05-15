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
                    <span class="not">MARCOS PAZAN REYES</span></p>
                    <p>              
                    Curso: 
                    <span class="not">2DO BACHILLERATO INFORMATICA</span>   
                    </p>
                    <p>              
                    Materia: 
                    <span class="not">INVESTIGACION</span>             
                    </p>
                </h3>
                <span class="prof-asistencia">
                    <div class="lista-prof"> 
                        <select onchange="selectProfAsist()" class="form-control select-prof-asist" >
                          <option value='./profesor_asistencia2INFORMATICA.php' selected="selected">ASISTENCIA</option>
                          <option value="./profesor_agendaescolar.php">AGENDA ESCOLAR</option>
                          <option value="./profesor_calificaciones2INFORMATICA.php">CALIFICACIONES</option>
                          <option value="./profesor_perfiles2INFORMATICA.php">PERFILES</option>
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
                        <div class="table-responsive"> 
                            <table class="table table-bordered table-hover">
                                <thead style="background-color: #939598">
                                    <tr >
                                        <th class="text-center" style="background-color: #939598;color: white;width:50%; font-size: 2em;" ROWSPAN=2>Alumno</th> 
                                        <th class="text-center" style="background-color: #939598;color: white;width:10%">Martes</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="background-color: #939598">
                                            <span style="padding-top:2px;padding-bottom:2px;padding-right:8px;padding-left:8px;background-color: #D1D2D4">9</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="background-color:white">  
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">1</span>NOEMY JULEISY ACOSTA DAVID</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas1"><label for="checkboxNotas1"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">2</span>ODALIS RAQUEL ASMAL MONTENEGRO</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas2"><label for="checkboxNotas2"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">3</span>KEVIN ISMAEL BERMEO ORTEGA</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas3"><label for="checkboxNotas3"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">4</span>POLL SEBASTIAN CAMPOVERDE JARAMILLO</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas4"><label for="checkboxNotas4"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">5</span>JONATHAN ISRAEL GARCIA TAPIA</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas5"><label for="checkboxNotas5"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">6</span>MICHAEL WANDERLEY MARIN PINEDA</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas6"><label for="checkboxNotas6"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">7</span>ANGEL PLACIDO MERA</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas7"><label for="checkboxNotas7"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">8</span>CRISTOPHER SMITH MORA SOLANO</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas8"><label for="checkboxNotas8"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">9</span>GENESIS ELIZABETH RAMIREZ ROLDAN</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas9"><label for="checkboxNotas9"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">10</span>DAVIS JESUS ROMERO CEBALLOS</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas10"><label for="checkboxNotas10"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">11</span>RAFAEL ALEXANDER SANTILLAN VINCES</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas11"><label for="checkboxNotas11"></label></div>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="student-list"><span class="list-asist">12</span>DAYANA NICOLES VILLALTA MORALES</p>
                                        </td>
                                        <form action="">
                                            <td class="text-center">
                                                <div class="checkboxNotas"><input type="checkbox" class="text-center" value="d1" id="checkboxNotas12"><label for="checkboxNotas12"></label></div>
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