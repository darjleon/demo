<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pined | Profesor</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
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
                    <a href="docente/profesor.php">
                        <i class="fa fa-th-large"></i><span class="nav-label">Mi Perfil</span> 
                    </a>
                </li>
                <li>
                    <a href="docente/profesor_institucion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="docente/profesor_notificaciones.php">
                        <i class="fa fa-newspaper-o"></i><span class="nav-label">Notificaciones</span>
                    </a>
                </li>
                <li>
                    <a href="docente/profesor_cursos.php">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos</span>
                    </a>
                </li>
                <li>
                    <a href="docente/profesor_horario.php">
                        <i class="fa fa-clock-o"></i><span class="nav-label">Horarios</span>
                    </a>      
                </li>
                <li>
                    <a href="docente/profesor_calendario.php">
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
                        <a class="count-info" href="docente/profesor_notificaciones.php">
                            <i class="fa fa-envelope"></i><span class="label label-warning">1</span>
                        </a>                        
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i><span class="label label-primary">1</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i>Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper white-bg ">                        
            <div class="profile-image">
                <img src="img/profile_small.jpg" class="img-circle circle-border m-b-md" alt="profile">
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
                                    <div class="row" style="padding-top:10px">
                                        <div class="col-lg-3">
                                            <label class="cb" style="color: #676A6C">Dirigente de Curso:</label>
                                            <label style="color: #676A6C">8 'A'</label>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="cb" style="color: #676A6C">Materias que dicta:</label>
                                            <ul>
                                                <li style="color: #676A6C">MATEMATICAS</li>
                                                <li style="color: #676A6C">INVESTIGACION</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="cb" style="color: #676A6C">Cursos asignados:</label>
                                            <ul class="prof-cursosAsignados">
                                                <li style="color: #676A6C"><a href="docente/profesor_curso8B.php">8 'A'</a></li>
                                                <li style="color: #676A6C"><a href="docente/profesor_curso8B.php">8 'B'</a></li>
                                                <li style="color: #676A6C"><a href="docente/profesor_curso9A.php">9 'A'</a></li>
                                                <li style="color: #676A6C"><a href="docente/profesor_curso1CIENTIFICO.php">1RO BACHILLERATO CIENTIFICO</a></li>
                                                <li style="color: #676A6C"><a href="docente/profesor_curso2CIENTIFICO.php">2DO BACHILLERATO CIENTIFICO</a></li>
                                                <li style="color: #676A6C"><a href="docente/profesor_curso2INFORMATICA.php">2DO BACHILLERATO INFORMATICA</a></li>
                                                <li style="color: #676A6C"><a href="docente/profesor_curso3CIENTIFICO.php">3RO BACHILLERATO CIENTIFICO</a></li>
                                                <li style="color: #676A6C"><a href="docente/profesor_curso3CONTABILIDAD.php">3RO BACHILLERATO CONTABILIDAD</a></li>
                                                <li style="color: #676A6C"><a href="docente/profesor_curso3INFORMATICA.php">3RO BACHILLERATO INFORMATICA</a></li>
                                            </ul>
                                        </div>
                                    </div>                                                          
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
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>



    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {    
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 2000
                };
                toastr.success('Profesor', 'Bienvenido a Pined');

            }, 1300);

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];
        });
    </script>
</body>
</html>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>