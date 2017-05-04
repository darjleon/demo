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
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xs-12 col-lg-6"> 
                        <div class="profile-image">
                            <img src="../img/estudiantes.png" class="img-circle circle-border m-b-md" alt="profile" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6"> 
                        <div class="profile-info">
                            <h3 style="margin-top:5px;margin-bottom:0">ALAN JOEL SANNA HERA</h3>
                            <hr>
                            <div class="curso"> 
                                <!-- <img src="img/curso.png" alt="" width="25"> -->
                                <h4 style="margin-bottom:0"><strong>Curso: </strong>1RO DE BACHILLERATO INFORMATICA</h4> 
                                <h4 style="margin-top:0"><strong>Dirigente: </strong>ANA PLUA RIVERA</h4>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>                
            <div id="tabs" class="col-sm-8 col-lg-4">
                <div class="tabs-container" style="padding-top:10px">
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#tab-1">Domicilio</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Informacion Medica</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="row tab-pane">
                            <ul class="list-unstyled m-t-md">
                                <div class="row">
                                    <li>                                        
                                        <div class="col-lg-3">
                                            <label style="padding-left:50px">Ciudad:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            DAULE
                                        </div>                                    
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col-lg-3">
                                            <label style="padding-left:50px">Dirección:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            CDLA. CATALUÑA MZ 17 V 17
                                        </div>
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col-lg-3">
                                            <label style="padding-left:50px">Telefono:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            091 234 5678
                                        </div>
                                    </li>
                                </div>
                            </ul>   
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <ul class="list-unstyled m-t-md" style="padding-left: 25px">
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Teléfono de emergencia:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            042 55 99 88
                                        </div>                                                          
                                    </li>
                                </div>
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Grupo sanguinero:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            O-
                                        </div>                                                          
                                    </li>
                                </div> 
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Sufre de enfermedad:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            NO
                                        </div>                                                          
                                    </li>
                                </div>                               
                                <div class="row">
                                    <li> 
                                        <div class="col-lg-4">
                                            <label>Alergia:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            NO
                                        </div>                                                          
                                    </li>
                                </div>                              
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
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
                    </h2>
                </div>                                            
            </div> 
            <div class="row">
                <div class="col-lg-12" >
                    <div style="background-color: #939598; color: white; padding: .5em .3em; margin: .5em 0"> 
                        <h2 class="cl " style="font-weight: bold; margin: 0;">Lista de alumnos</h2>
                    </div>
                </div>
            </div>  
            <?php include ('include/lista.php'); ?>
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
