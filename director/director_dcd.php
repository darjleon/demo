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
                    <a href="director.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
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
                <li class="active">
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
                <h2 style="margin:1em 0">Destrezas con Criterio de Desempeño</h2>
                <div class="formatos">
                    <div class="back">
                        <a href="director_plancurricular.php">
                            <button class="button-back cb">
                                <img style="margin: 0;" src="../img/return.png" alt="" width="17">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>PLANIFICACIÓN MICROCURRICULAR POR DESTREZAS CON CRITERIOS DE DESEMPEÑO PARA EGB Y BGU </h5>
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
                                    <td><strong>LOGO INSTITUCIONAL</strong></td>
                                    <td colspan="4"><strong>NOMBRE INSTITUCIONAL</strong></td>
                                    <td colspan="3"><strong>AÑO LECTIVO</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="8"><strong>PLAN DE  DESTREZAS CON CRITERIO DE DESEMPEÑO</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="8"><strong>1. DATOS INFORMATIVOS:</strong></td>                      
                                </tr>
                                <tr>
                                    <td width="20%">Docente:</td>
                                    <td width="20%">Nombre del docente que ingreso la información</td>
                                    <td>Área/Asignatura:</td>
                                    <td width="15%"></td>
                                    <td>Grado/Curso:</td>
                                    <td width="5%"></td>
                                    <td>Paralelo:</td>
                                    <td width="5%"></td>
                                </tr>
                                <tr>
                                    <td>N.° de unidad de planificación</td>
                                    <td width="3%">*</td>
                                    <td>Título de unidad de planificación:</td>
                                    <td width="15%">*</td>
                                    <td>Objetivos específicos de la unidad de planificación:</td>
                                    <td width="8%">*</td>
                                </tr>
                                <tr>
                                    <td colspan="8"><strong>2. PLANIFICACIÓN</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4">DESTREZAS CON CRITERIOS DE DESEMPEÑO A SER DESARROLLADAS:</td>
                                    <td colspan="4">INDICADORES ESENCIALES DE EVALUACIÓN:</td>
                                </tr>
                                <tr>
                                    <td colspan="4">Se escribirán las destrezas con criterios de desempeño (DCD) de los documentos curriculares vigentes.<br>Según la especificidad de la asignatura, algunas DCD están planteadas para que su desarrollo se lo realice a lo largo de todo el año escolar, por lo tanto estas podrán repetirse en las diferentes unidades que sea necesario.</td>
                                    <td colspan="4">*</td>                                    
                                </tr>
                                <tr>
                                    <td><strong>EJES TRANSVERSALES:</strong></td>
                                    <td>Los seleccionados para la unidad de planificación a desarrollar</td>
                                    <td><strong>PERIODOS:</strong></td>
                                    <td>Número de horas necesarias para trabajar esta destreza. Se lo calculará en función del total de horas pedagógicas asignado a cada unidad y el número de destrezas seleccionadas</td>
                                    <td><strong>SEMANA DE INICIO:</strong></td>
                                    <td>Según el número de semanas establecidos en el plan curricular anual</td>
                                </tr>
                                <tr>
                                    <td colspan="1"><strong>Estrategias metodológicas</strong></td>
                                    <td colspan="2"><strong>Recursos</strong></td>
                                    <td colspan="2"><strong>Indicadores de logro</strong></td>
                                    <td colspan="3"><strong>Actividades de evaluación/ Técnicas / Instrumentos</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Metodología y actividades concretas para el trabajo de las destrezas con criterios de desempeño seleccionadas, tomando en cuenta el alcance de cada una de estas, la articulación con las actividades y los diferentes momentos para su desarrollo.</td>
                                    <td colspan="2">Recursos necesaros para el trabajo de las DCD con los estudiantes.</td>
                                    <td colspan="2">Indicadores necesarios para evaluar el avance de los estudinates en la adquisición de las DCD propuestas en la unidad de planificación.</td>
                                    <td colspan="3">Descripción de las técnicas e instrumentos concretos que se emplearán para evaluar el logro de los aprendizajes a través de los indicadores propuestos.<br>Actividades que permitean evidenciar y validar los aprendizajes de los estudiantes.</td>
                                </tr>
                                <tr>
                                    <td colspan="8"><strong>3. ADAPTACIONES CURRICULARES</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Especificación de la necesidad educativa</strong></td>
                                    <td colspan="6"><strong>Especificación de la adaptación a ser aplicada</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Considerar la Guía de adaptaciones curriculares</td>
                                    <td colspan="6">Considerar la Guía de adaptaciones curriculares</td>
                                </tr>
                                <tr>
                                    <td><strong>ELABORADO</strong></td>
                                    <td colspan="2"><strong>REVISADO</strong></td>
                                    <td colspan="5"><strong>APROBADO</strong></td>
                                </tr>
                                <tr>
                                    <td>Docente:</td>
                                    <td colspan="2">Director del área/Docente responsable del área:</td>
                                    <td colspan="5">Vicerrector/Director/Subdirector/Líder educativo</td>
                                </tr>
                                <tr>
                                    <td>Firma:</td>
                                    <td colspan="2">Firma:</td>
                                    <td colspan="5">Firma:</td>
                                </tr>
                                <tr>
                                    <td>Fecha:</td>
                                    <td colspan="2">Fecha:</td>
                                    <td colspan="5">Fecha:</td>
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
