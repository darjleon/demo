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
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="padre_institucion.php">
                        <i class="fa fa-institution"></i> <span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="padre_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-primary">Nuevo</span>
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
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">            
                    <li class="dropdown">
                        <a class="count-info" href="padre_notificacion.php">
                            <i class="fa fa-envelope"></i><span class="label label-primary">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i><span class="label label-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="padre_notificacion.php">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Coordinación Académica
                                        <span class="pull-right text-muted small">ayer(11.15 am)</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="padre_notificacion.php">
                                        <strong>See All Alerts</strong><i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <i class="fa fa-sign-out"></i>Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
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
                                            <label>Ciudad:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <p>DAULE</p>
                                        </div>             
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col-lg-3">
                                            <label>Dirección:</label>
                                        </div>
                                        <div class="col-lg-9">
                                           <p>CDLA. CATALUÑA MZ 17 V 17</p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col-lg-3">
                                            <label>Telefono:</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <p>091 234 5678</p>
                                        </div>
                                    </li>
                                </div>
                            </ul>   
                        </div>
                        <div id="tab-2" class="row tab-pane">
                            <ul class="list-unstyled m-t-md">
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
                <a href="padre_calificaciones2.php">
                    <button type="button" class="btn btn-outline btn-success return">
                        <img src="../img/return.png" alt="" width="17">
                        <span>
                            Regresar
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-left" style="margin-top:0">
                        <img src="../img/calificaciones.png" style="width:50px"> | Calificaciones| Periodo : <label>2016-2017</label> | Quimestre 2
                    </h2>
                </div>                                            
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container" style="padding-top:10px">
                        <ul class="nav nav-tabs text-center">
                            <li class="active"><a data-toggle="tab" href="#tab-p1q1">P1-Q1</a></li>
                            <li><a data-toggle="tab" href="#tab-p2q1">P2-Q1</a></li>
                            <li><a data-toggle="tab" href="#tab-p3q1">P3-Q1</a></li>
                            <li><a data-toggle="tab" href="#tab-exq1">EXAMEN-Q1</a></li>
                            <li><a data-toggle="tab" href="#tab-q1">Q1</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-p1q1" class="tab-pane active">
                                <div class="ibox-content">
                                    <h3>Notas del Primer Parcial - Segundo Quimestre</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="width: 75%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Materia</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Tareas</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Actividades Individuales</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Actividades Grupales</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Lecciones</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Nota</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Conducta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>MATEMATICAS</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA Y LITERATURA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA EXTRANJERA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>QUIMICA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td> 
                                                </tr>
                                                <tr>
                                                    <td><strong>FISICA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>   
                                                </tr>
                                                <tr>
                                                    <td><strong>PROGRAMACION EN LENGUAJE ESTRUCTURADO</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>INFORMATICA APLICADA A LA EDUCACION</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>      
                                                </tr>
                                                <tr>
                                                    <td><strong>DESARROLLO DEL PENSAMIENTO FILOSOFICO</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION ARTISTICA</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RELACION EN EL EQUIPO DE TRABAJO</strong></td>
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n nb"><strong>9</strong></td>
                                                    <td class="n nb"><strong>B</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FYOL</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>HISTORIA Y CIENCIAS SOCIALES</strong></td>
                                                    <td class="n">5</td>          
                                                    <td class="n">5</td>     
                                                    <td class="n">5</td>
                                                    <td class="n">5</td>   
                                                    <td class="n nr"><strong>5</strong></td> 
                                                    <td class="n nr"><strong>D</strong></td>   
                                                </tr>
                                                <tr>
                                                    <td><strong>VALORES HUMANOS</strong></td>
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n nb"><strong>9</strong></td>
                                                    <td class="n nb"><strong>B</strong></td>  
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION FISICA</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td> 
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>                                   
                                    <ul class="text-center">
                                        <li class="semaforo"><span class="nverde"></span>Nota Buena</span></li>
                                        <li class="semaforo"><span class="nnaranja"></span>Nota Media</li>
                                        <li class="semaforo"><span class="nroja"></span>Nota Roja</li>
                                    </ul>
                                </div>  
                                <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                            </div>
                            <div id="tab-p2q1" class="tab-pane">
                                <div class="ibox-content inspinia-timeline">
                                    <h3>Notas del Segundo Parcial - Segundo Quimestre</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="width: 75%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Materia</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Tareas</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Actividades Individuales</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Actividades Grupales</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Lecciones</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Nota</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Conducta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>MATEMATICAS</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA Y LITERATURA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA EXTRANJERA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>QUIMICA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td> 
                                                </tr>
                                                <tr>
                                                    <td><strong>FISICA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>   
                                                </tr>
                                                <tr>
                                                    <td><strong>PROGRAMACION EN LENGUAJE ESTRUCTURADO</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>INFORMATICA APLICADA A LA EDUCACION</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>      
                                                </tr>
                                                <tr>
                                                    <td><strong>DESARROLLO DEL PENSAMIENTO FILOSOFICO</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>                            
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION ARTISTICA</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RELACION EN EL EQUIPO DE TRABAJO</strong></td>
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n nb"><strong>9</strong></td>
                                                    <td class="n nb"><strong>B</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FYOL</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>HISTORIA Y CIENCIAS SOCIALES</strong></td>
                                                    <td class="n">5</td>          
                                                    <td class="n">5</td>     
                                                    <td class="n">5</td>
                                                    <td class="n">5</td>   
                                                    <td class="n nr"><strong>5</strong></td> 
                                                    <td class="n nr"><strong>D</strong></td>   
                                                </tr>
                                                <tr>
                                                    <td><strong>VALORES HUMANOS</strong></td>
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n nb"><strong>9</strong></td>
                                                    <td class="n nb"><strong>B</strong></td>  
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION FISICA</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td> 
                                                </tr>
                                            </tbody>
                                        </table>    
                                    </div>                                
                                    <ul class="text-center">
                                        <li class="semaforo"><span class="nverde"></span>Nota Buena</span></li>
                                        <li class="semaforo"><span class="nnaranja"></span>Nota Media</li>
                                        <li class="semaforo"><span class="nroja"></span>Nota Roja</li>
                                    </ul>                                    
                                </div> 
                            </div>
                            <div id="tab-p3q1" class="tab-pane">
                                <div class="ibox-content inspinia-timeline">
                                    <h3>Notas del Tercer Parcial - Segundo Quimestre</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="width: 75%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Materia</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Tareas</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Actividades Individuales</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Actividades Grupales</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Lecciones</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Nota</th>
                                                    <th class="texto-vertical-2" style="background-color:#9A9B9F;color:white">Conducta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>MATEMATICAS</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA Y LITERATURA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA EXTRANJERA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>QUIMICA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td> 
                                                </tr>
                                                <tr>
                                                    <td><strong>FISICA</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>   
                                                </tr>
                                                <tr>
                                                    <td><strong>PROGRAMACION EN LENGUAJE ESTRUCTURADO</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>INFORMATICA APLICADA A LA EDUCACION</strong></td>
                                                    <td class="n">10</td>          
                                                    <td class="n">10</td>     
                                                    <td class="n">10</td>
                                                    <td class="n">10</td>   
                                                    <td class="n nb"><strong>10</strong></td>
                                                    <td class="n nb"><strong>A</strong></td>      
                                                </tr>
                                                <tr>
                                                    <td><strong>DESARROLLO DEL PENSAMIENTO FILOSOFICO</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>                            
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION ARTISTICA</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RELACION EN EL EQUIPO DE TRABAJO</strong></td>
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n nb"><strong>9</strong></td>
                                                    <td class="n nb"><strong>B</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FYOL</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>HISTORIA Y CIENCIAS SOCIALES</strong></td>
                                                    <td class="n">5</td>          
                                                    <td class="n">5</td>     
                                                    <td class="n">5</td>
                                                    <td class="n">5</td>   
                                                    <td class="n nr"><strong>5</strong></td> 
                                                    <td class="n nr"><strong>D</strong></td>   
                                                </tr>
                                                <tr>
                                                    <td><strong>VALORES HUMANOS</strong></td>
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n">9</td>          
                                                    <td class="n nb"><strong>9</strong></td>
                                                    <td class="n nb"><strong>B</strong></td>  
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION FISICA</strong></td>
                                                    <td class="n">7</td>          
                                                    <td class="n">7</td>     
                                                    <td class="n">7</td>
                                                    <td class="n">7</td>    
                                                    <td class="n nm"><strong>7</strong></td>
                                                    <td class="n nm"><strong>C</strong></td> 
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                    
                                    <ul class="text-center">
                                        <li class="semaforo"><span class="nverde"></span>Nota Buena</span></li>
                                        <li class="semaforo"><span class="nnaranja"></span>Nota Media</li>
                                        <li class="semaforo"><span class="nroja"></span>Nota Roja</li>
                                    </ul>
                                    <button type="button" class="btn btn-info">IMPRIMIR</button>
                                </div> 
                            </div>
                            <div id="tab-exq1" class="tab-pane">
                                <div class="ibox-content">
                                    <h3 class="text-center">Notas de Examen - Segundo Quimestre</h3>
                                    <center>
                                    <div class="table-responsive"> 
                                        <table class="table table-bordered" style="width:60%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Materia</th>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Examen</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>MATEMATICAS</strong></td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA Y LITERATURA</strong></td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA EXTRANJERA</strong></td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>QUIMICA</strong></td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FISICA</strong></td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>PROGRAMACION EN LENGUAJE ESTRUCTURADO</strong></td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>INFORMATICA APLICADA A LA EDUCACION</strong></td>
                                                    <td class="n nb"><strong>10</strong></td> 
                                                </tr>
                                                <tr>
                                                    <td><strong>DESARROLLO DEL PENSAMIENTO FILOSOFICO</strong></td>
                                                    <td class="n nm"><strong>7</strong></td>  
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION ARTISTICA</strong></td>
                                                    <td class="n nm"><strong>7</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RELACION EN EL EQUIPO DE TRABAJO</strong></td>
                                                    <td class="n nb"><strong>9</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FYOL</strong></td>
                                                    <td class="n nm"><strong>7</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>HISTORIA Y CIENCIAS SOCIALES</strong></td>
                                                    <td class="n nr"><strong>5</strong></td>      
                                                </tr>
                                                <tr>
                                                    <td><strong>VALORES HUMANOS</strong></td>
                                                    <td class="n nb"><strong>9</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION FISICA</strong></td>
                                                    <td class="n nm"><strong>7</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </center>
                                    <ul class="text-center">
                                        <li class="semaforo"><span class="nverde"></span>Nota Buena</span></li>
                                        <li class="semaforo"><span class="nnaranja"></span>Nota Media</li>
                                        <li class="semaforo"><span class="nroja"></span>Nota Roja</li>
                                    </ul>
                                    <button type="button" class="btn btn-info">IMPRIMIR</button>
                                </div> 
                            </div>
                            <div id="tab-q1" class="tab-pane">
                                <div class="ibox-content">                                    
                                    <h3 class="text-center">Notas Final - Segundo Quimestre</h3>
                                    <center>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="width:75%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Materia</th>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Parcial 1</th>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Parcial 2</th>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Parcial 3</th>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Examen</th>
                                                    <th class="text-center" style="background-color:#9A9B9F;color:white">Nota Quimestral</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>MATEMATICAS</strong></td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA Y LITERATURA</strong></td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LENGUA EXTRANJERA</strong></td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>QUIMICA</strong></td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FISICA</strong></td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>PROGRAMACION EN LENGUAJE ESTRUCTURADO</strong></td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td class="n nb"><strong>10</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>INFORMATICA APLICADA A LA EDUCACION</strong></td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td>10</td>
                                                    <td class="n nb"><strong>10</strong></td> 
                                                </tr>
                                                <tr>
                                                    <td><strong>DESARROLLO DEL PENSAMIENTO FILOSOFICO</strong></td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td class="n nm"><strong>7</strong></td>  
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION ARTISTICA</strong></td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td class="n nm"><strong>7</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RELACION EN EL EQUIPO DE TRABAJO</strong></td>
                                                    <td>9</td>
                                                    <td>9</td>
                                                    <td>9</td>
                                                    <td>9</td>
                                                    <td class="n nb"><strong>9</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FYOL</strong></td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td class="n nm"><strong>7</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>HISTORIA Y CIENCIAS SOCIALES</strong></td>
                                                    <td>5</td>
                                                    <td>5</td>
                                                    <td>5</td>
                                                    <td>5</td>
                                                    <td class="n nr"><strong>5</strong></td>      
                                                </tr>
                                                <tr>
                                                    <td><strong>VALORES HUMANOS</strong></td>
                                                    <td>9</td>
                                                    <td>9</td>
                                                    <td>9</td>
                                                    <td>9</td>
                                                    <td class="n nb"><strong>9</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>EDUCACION FISICA</strong></td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td class="n nm"><strong>7</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </center>
                                    <ul class="text-center">
                                        <li class="semaforo"><span class="nverde"></span>Nota Buena</span></li>
                                        <li class="semaforo"><span class="nnaranja"></span>Nota Media</li>
                                        <li class="semaforo"><span class="nroja"></span>Nota Roja</li>
                                    </ul>
                                    <button type="button" class="btn btn-info">IMPRIMIR</button>
                                </div>                                     
                            </div>                            
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