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
                    <a href="#">
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
            <div class="profile-image">
                <img src="img/profile_small.jpg" class="img-circle circle-border m-b-md" alt="profile">
            </div>
            <div class="profile-info">
                <h2 class="no-margins">LUIS CORREA ZAMBRANO</h2>  
                <h3><strong>PERFIL</strong></h3>                  
            </div>             
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="widget widget-tabs">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab-1">INFORMACION INSTITUCION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2">INFORMACION GENERAL</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3">INFORMACION MEDICA</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <ul class="list-unstyled m-t">
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Dirigente de Curso:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    8 'A'
                                                </div>                                            
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Materias que dicta:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <ul>
                                                        <li>MATEMATICAS</li>
                                                        <li>INVESTIGACION</li>
                                                    </ul>
                                                </div>                                            
                                            </li>   
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Cursos asignados:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <ul>
                                                        <li>8 'A'</li>
                                                        <li>8 'B</li>
                                                        <li>9 'A'</li>
                                                        <li>1RO BACHILLERATO CIENTIFICO</li>
                                                        <li>2DO BACHILLERATO CIENTIFICO</li>
                                                        <li>2DO BACHILLERATO INFORMATICA</li>
                                                        <li>3RO BACHILLERATO CIENTIFICO</li>
                                                        <li>3RO BACHILLERATO CONTABILIDAD</li>
                                                        <li>3RO BACHILLERATO INFORMATICA</li>
                                                    </ul>
                                                </div>                                                
                                            </li>
                                        </div>                                                          
                                    </ul>   
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <ul class="list-unstyled m-t">
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>C.I:</label>
                                                </div>         
                                                <div class="col-lg-9">
                                                    9162909190
                                                </div>                                                
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">                
                                                    <label>Telefono:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    2862959 - 099 240 6250
                                                </div>
                                            </li> 
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Correo:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    098 347 4339
                                                </div>                                                
                                            </li> 
                                        </div>  
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Correo:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    lual_977@hotmail.com
                                                </div>                                                
                                            </li> 
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Ciudad:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    DURAN
                                                </div>                                                
                                            </li> 
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Direccion:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    CDLA PRIMAVERA 1 MZ B6 VILLA 16
                                                </div>                                                
                                            </li> 
                                        </div>                                    
                                    </ul> 
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <ul class="list-unstyled m-t">
                                        <div class="row">                                            
                                            <li class="option-tabs">        
                                                <div class="col-lg-3">
                                                    <label>Telefono de emergencia:</label>
                                                </div>                                       
                                                <div class="col-lg-9">
                                                    042 55 99 88
                                                </div>
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Enfermedad:</label>
                                                </div> 
                                                <div class="col-lg-9">
                                                    NO
                                                </div>          
                                            </li>
                                        </div>                                        
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label>Alergia:</label>
                                                </div>                                                
                                                <div class="col-lg-9">
                                                    NO
                                                </div>
                                            </li>
                                        </div>                                                          
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
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