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
                                    <strong class="font-bold">CINTHIA HERA RODRIGUEZ</strong>
                                    <br><small class="profile-type">REPRESENTANTE</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="padre.php">
                        <i class="fa fa-th-large"></i><span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="padre_institucion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="padre_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <img src="../img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumno</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="padre_hijo1.php">
                                <img src="../img/icono persona.png" width="20px">ELKIN DAVID SANNA HERA
                            </a>
                        </li>
                        <li class="active">
                            <a href="padre_hijo2.php">
                                <img src="../img/icono persona.png" width="20px">ALAN JOEL SANNA HERA
                            </a>
                        </li>
                    </ul>
                </li>  
                <li>
                    <a>
                        <img src="../img/pago.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Pagos</span>
                        
                    </a>
                </li>                                       
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <?php include ('include/hijo2.php'); ?>    
            <div class="col-sm-4 col-lg-2 return-button">
                <a href="padre_hijo2.php">
                    <button type="button" class="btn btn-outline btn-success return">
                        <img src="../img/return.png" alt="" width="17">
                        <span>
                            Regresar
                        </span>
                    </button>
                </a>
            </div> 
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-left cb" style="margin-top:0">
                        <img src="../img/asistencia blanco.png" style="width:50px"> Asistencia 
                        <a href="padre_lista2.php">
                            <button type="button" class="button-asistencia btn btn-w-m" data-toggle="modal" data-target="#myModal" style="background-color: #0099D6;color: white"><strong>Lista de Alumnos</strong></button> 
                        </a>
                    </h2>
                </div>                                            
            </div> 
            <div class="row">
                <div class="card-asistencia">
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>DESARROLLO DEL PENSAMIENTO FILOSOFICO</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">GLENDA CANDEL CARBO
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>EDUCACION ARTISTICA</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">GLENDA CANDEL CARBO
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>EDUCACION FISICA</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">RAUL HERRERA CERCADO
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>FISICA</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">JAVIER ARVELAEZ MOSQUERA
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>FYOL</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">JUAN LOPEZ MARURI
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>HISTORIA Y CIENCIAS SOCIALES</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">SONIA RODRIGUEZ NOBOA
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>INFORMATICA APLICADA A LA EDUCACION</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">ANGELA CIRINO DE LA ROSA
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div> 
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>LEGUA EXTRANJERA</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">CLAUDIA LOPEZ SANCHEZ|
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>LENGUA Y LITERATURA</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">GLENDA CANDEL CARBO 
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>MATEMATICAS</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">CAROLINA QUIROZ SANTOS
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>PROGRAMACION EN LENGUAJE ESTRUCTURADO</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">MARCOS PAZAN REYES
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>QUIMICA</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">DENISSE MARCILLO
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>RELACION EN EL EQUIPO DE TRABAJO</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">JUAN LOPEZ MARURI
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>                                        
                    <div class="lista_alumnos">
                        <article class="alumnos">
                            <h2>VALORES HUMANOS</h2>
                            <hr>
                            <div class="docente"> 
                                <h2>
                                    <span> 
                                    <img src="../img/Docente.png" alt="" width="20">GLORIA ESPAÑA ARIAS
                                    </span>
                                </h2>
                                <div class="perfil">
                                    <span><a href="">Perfil</a></span>
                                <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        <hr>
                        <div class="asistencia">
                        <h4>Asistencia</h4>
                        <span>100%</span>
                        <button class="vermas"><a href="">Ver mas</a></button>
                        </div>
                        </article>
                    </div>
                    
                </div>
            </div>          
        </div>
    </div>
</div>
<?php include ('include/footer2.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>
