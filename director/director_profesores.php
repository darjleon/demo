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
                                    <strong class="font-bold">CARMEN OJEDA LEON</strong>
                                    <br><small class="profile-type">RECTOR</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>                
                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li class="active">
                    <a href="director_informacion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Informacion</span> 
                    </a>
                </li>
                <li>
                    <a href="director_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li>
                    <a href="director_cursos.php">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos </span>
                    </a>
                </li>
                <li>
                    <a href="director_horarios.php">
                        <i class="fa fa-clock-o"></i>
                        <span class="nav-label">Horarios </span>
                    </a>
                </li>
                <li>
                    <a href="director_asistencia.php">
                        <i class="fa fa-list"></i>
                        <span class="nav-label">Asistencia </span>
                    </a>
                </li>
                <li>
                    <a href="director_pagos.php">
                        <i class="fa fa-usd"></i>
                        <span class="nav-label">Pagos </span>
                    </a>
                </li>
                <li>
                    <a href="director_plancurricular.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Plan Curricular </span>
                    </a>
                </li>
                <li>
                    <a href="director_configuraciones.php">
                        <i class="fa fa-cogs"></i>
                        <span class="nav-label">Configuraciones </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper white-bg "> 
            <div class="col-xs-12 seleccion-curso">
                <h2 style="margin:1em 0" >
                    Lista de Profesores
                </h2>
                <div class="formatos">
                <div class="back">
                    <a href="director_informacion.php">
                        <button class="button-back cb">
                            <img style="margin: 0;" src="../img/return.png" alt="" width="17">
                        </button>
                    </a>
                </div>
                <a class="formatos-link" href="director_profesores_cuadricula.php"> 
                    <img src="../img/cuadricula.png" alt="" width="17">
                </a>                    
                <a class="formatos-link" href="#"> 
                    <img src="../img/list.png" alt="" width="20">
                </a>
                </div>
            </div>
        </div>
        <div class="row wrapper wrapper-content">                    
            <div class="col-xs-12 director-profesores">
                <div class="docente">
                    <div class="representante">                        
                        <p>
                            RUTH ARGUELLO MENDOZA 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            TATIANA ARICHAVALA CRESPIN
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            JAVIER ARVELAEZ MOSQUERA 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            MICHELL CAJAMARCA
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            LUIS CAJO
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            MARIANA CAMACHO CUJI
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            GLENDA CANDEL CARBO
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            TATIANA CARREÑO QUIROZ 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            HUGO CHAVEZ
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            VIVIANA CIRINO DE LA ROSA 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            LUIS CORREA ZAMBRANO  
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            GLORIA ESPAÑA ARIAS 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            RAUL HERRERA CERCADO
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            DANILO HERRERA MOREIRA 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            RUTH LLERENA YULAN  
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            DENISSE MARCILLO
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            JUAN LOPEZ MARURI  
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            CLAUDIA LOPEZ SANCHEZ  
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            MARCOS PAZAN REYES 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            ANA PLUA RIVERA 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            CAROLINA QUIROZ SANTOS  
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            SONIA RODRIGUEZ NOBOA 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            MERY URBINA ANDALUZ 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            ANGELICA VILLABLANCA TRUJILLO 
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
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
