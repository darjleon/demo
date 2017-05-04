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
                    <a href="#">
                        <i class="fa fa-th-large"></i><span class="nav-label">Mi Perfil</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_institucion.html">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_notificaciones.html">
                        <i class="fa fa-newspaper-o"></i><span class="nav-label">Notificaciones</span>
                    </a>
                </li>
                <li class="active">
                    <a href="profesor_cursos.html">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos</span>
                    </a>
                </li>
                <li>
                    <a href="profesor_horario.html">
                        <i class="fa fa-clock-o"></i><span class="nav-label">Horarios</span>
                    </a>      
                </li>
                <li>
                    <a href="profesor_calendario.html">
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
        <div class="row wrapper white-bg" style="padding-top:5px">      
            <div class="col-lg-2 text-right">                
                <img src="img/CURSO.png" style="width:35px">
            </div>                
            <div class="col-lg-5 text-left">                
                <h4 style="margin-left:0;margin-bottom: 0;margin-top: 10px"><strong>CURSO: </strong>2DO BACHILLERATO INFORMATICA</h4>
                <h4 style="margin-top:0;margin-bottom: 0"><strong>DIRIGENTE: </strong>MARCOS PAZAN REYES</h4>
                <h4 style="margin-top: 10px"><strong>MATERIA: </strong>INVESTIGACION</h4>         
            </div>
            <div class="col-lg-5 text-right">
                <a href="profesor_cursos.html">
                    <button type="button" class="btn btn-outline btn-success" style="margin-top:5px;margin-bottom: 5px">Regresar</button>
                </a>
            </div>                                                 
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover" style="margin-top:10px">
                            <thead style="background-color: #939598">
                                <tr style="background-color: #939598">
                                    <th class="text-center" style="background-color: #939598;color: white">Alumno</th>
                                    <th class="text-center" style="background-color: #939598;color: white">Representante</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white">                            
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            NOEMY JULEISY ACOSTA DAVID |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            ODALIS RAQUEL ASMAL MONTENEGRO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            KEVIN ISMAEL BERMEO ORTEGA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            POLL SEBASTIAN CAMPOVERDE JARAMILLO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            JONATHAN ISRAEL GARCIA TAPIA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            MICHAEL WANDERLEY MARIN PINEDA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            ANGEL PLACIDO MERA |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            CRISTOPHER SMITH MORA SOLANO |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            GENESIS ELIZABETH RAMIREZ ROLDAN |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            DAVIS JESUS ROMERO CEBALLOS |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            RAFAEL ALEXANDER SANTILLAN VINCES |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                </tr>  
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            DAYANA NICOLES VILLALTA MORALES |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/REPRESENTANTE.png">
                                            Nombres y Apellidos |
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModa3" style=""><small>PERFIL</small></button>
                                        </p>
                                    </td>
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
