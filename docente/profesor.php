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
                            <img src="../img/profile_small.jpg" class="img-circle" alt="profile" width="40%"/>
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
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
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
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">            
                    <li class="dropdown">
                        <a class="count-info" href="profesor_notificaciones.php">
                            <i class="fa fa-envelope"></i><span class="label label-warning">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i><span class="label label-primary">1</span>
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <i class="fa fa-sign-out"></i> Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg ">                        
            <div class="profile-image">
                <img src="../img/profile_small.jpg" class="img-circle circle-border m-b-md" alt="profile">
            </div>
            <div class="profile-info">
                <h2 class="no-margins">LUIS CORREA ZAMBRANO</h2>  
                <h3 style="padding-left:10px"><strong>PERFIL</strong></h3>                  
            </div>             
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
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
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">Dirigente de Curso:</label><br>
                                                    <label style="color: #676A6C">8 'A'</label>
                                                </div>
                                           
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">Materias que dicta:</label>
                                                    <ul>
                                                        <li style="color: #676A6C">MATEMATICAS</li>
                                                        <li style="color: #676A6C">INVESTIGACION</li>
                                                    </ul>
                                                </div>
                                                        
                                                <div class="col-lg-4">
                                                    <label class="cb" style="color: #676A6C">Cursos asignados:</label>
                                                    <ul>
                                                        <li style="color: #676A6C">8 'A'</li>
                                                        <li style="color: #676A6C">8 'B</li>
                                                        <li style="color: #676A6C">9 'A'</li>
                                                        <li style="color: #676A6C">1RO BACHILLERATO CIENTIFICO</li>
                                                        <li style="color: #676A6C">2DO BACHILLERATO CIENTIFICO</li>
                                                        <li style="color: #676A6C">2DO BACHILLERATO INFORMATICA</li>
                                                        <li style="color: #676A6C">3RO BACHILLERATO CIENTIFICO</li>
                                                        <li style="color: #676A6C">3RO BACHILLERATO CONTABILIDAD</li>
                                                        <li style="color: #676A6C">3RO BACHILLERATO INFORMATICA</li>
                                                    </ul>
                                                </div>                                               
                                        </div>                                                          
                                    </ul>   
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <ul class="list-unstyled m-t">
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">C.I:</label>
                                                </div>         
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">9162909190</label>
                                                </div>                                                
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">                
                                                    <label class="cb" style="color: #676A6C">Telefono:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">862959 - 099 240 6250</label>
                                                </div>
                                            </li> 
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">Correo:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">098 347 4339</label>
                                                </div>                                                
                                            </li> 
                                        </div>  
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">Correo:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">lual_977@hotmail.com</label>
                                                </div>                                                
                                            </li> 
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">Ciudad:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">DURAN</label>
                                                </div>                                                
                                            </li> 
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">Direccion:</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">CDLA PRIMAVERA 1 MZ B6 VILLA 16</label>
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
                                                    <label class="cb" style="color: #676A6C">Telefono de emergencia:</label>
                                                </div>                                       
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">042 55 99 88</label>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">Enfermedad:</label>
                                                </div> 
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">NO</label>
                                                </div>          
                                            </li>
                                        </div>                                        
                                        <div class="row">
                                            <li class="option-tabs">
                                                <div class="col-lg-3">
                                                    <label class="cb" style="color: #676A6C">Alergia:</label>
                                                </div>                                                
                                                <div class="col-lg-9">
                                                    <label  style="color: #676A6C">NO</label>
                                                </div>
                                            </li>
                                        </div>                                                          
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
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