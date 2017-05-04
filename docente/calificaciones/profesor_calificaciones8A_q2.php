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
        <div class="row wrapper white-bg ">      
            <div class="col-lg-2 text-right">                
                <img src="img/CURSO.png" style="width:35px">
            </div>                
            <div class="col-lg-5 text-left">                
                <h3 style="margin-left:0"><strong>CURSO: </strong>8 'A'</h3>
                <h3><strong>DIRIGENTE: </strong>LUIS CORREA ZAMBRANO</h3>        
            </div>
            <div class="col-lg-5 text-right" style="margin-top:5px;margin-right: -15px">
                <ul>
                    <li style="display:inline-block">
                        <a href="profesor_asistencia8A.html">
                            <h5 class="btn btn-student-list">Asistencia</h5>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="profesor_agendaescolar.html">
                            <h5 class="btn btn-student-list">Agenda Escolar</h5>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="profesor_asistencia8A.html">
                            <h5 class="btn btn-student-list">Calificaciones</h5>
                        </a>
                    </li>
                </ul>
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
                                    <th class="text-center" style="background-color: #939598;color: white">
                                        Tareas
                                        <button type="button" class="btn btn-more" data-toggle="modal" data-target="#myModal1">+</button>
                                    </th>   
                                    <th class="text-center" style="background-color: #939598;color: white">
                                        Actividades Individuales
                                        <button type="button" class="btn btn-more" data-toggle="modal" data-target="#myModal2">+</button>
                                    </th>
                                    <th class="text-center" style="background-color: #939598;color: white">
                                        Actividades Grupales
                                        <button type="button" class="btn btn-more" data-toggle="modal" data-target="#myModal3">+</button>
                                    </th>
                                    <th class="text-center" style="background-color: #939598;color: white">
                                        Lecciones
                                        <button type="button" class="btn btn-more" data-toggle="modal" data-target="#myModal4">+</button>
                                    </th>    
                                    <th class="text-center" style="background-color: #939598;color: white">
                                        Nota                                        
                                    </th>
                                    <th class="text-center" style="background-color: #939598;color: white">
                                        Conducta
                                    </th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white">
                                <tr >
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            SHIRLEY ARIAS ASCENCIO
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td>            
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            BRYAN ARONE SAAVEDRA
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            ARACELI CAQUEO VILLARREAL
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td>               
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            JESSENIA GABRIELA CHAMBA FLORES
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            ITALO JAVIER CONDORI VELASQUEZ
                                            
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            SONIA CRUZ CRUZ
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            NATHALIE ALEXANDRA DAVILA RIOS
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td>             
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            LENIN MAXIMO ELONS CARRASCO
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td>              
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            JAHAIRA KIMBERLY MESTANZA RODAS 
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">    
                                            PETER JOSEPH NARVAEZ ASENCIO
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            CRISTHIAN ALEX PACHECO VERA
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td>         
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            LUIS ALEJANDRO REYES NUÑEZ
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            ANDREA NICOL SALAZAR SALAZAR
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            KAREN ALEX SANTIAGO RAYMONDI
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            LUIS DAVID SIFUENTES CORDOVA
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            NICOLLE VALERIA SPENCER PUCA
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td>            
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            MELISSA JAHAIRA URBANO HUAMANI
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
                                </tr>
                                <tr>
                                    <td>
                                        <p class="student-list">
                                            <img class="icono-alumno student-list-icon" src="img/icono_persona.png">
                                            DANIEL JESUS VARAS RODRIGUEZ
                                        </p>
                                    </td>
                                    <td class="n">10</td>              
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n">10</td>       
                                    <td class="n nb"><strong>10</strong></td>
                                    <td class="n nb"><strong>A</strong></td> 
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