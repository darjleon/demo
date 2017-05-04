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
                                <h3><strong class="font-bold">CINTHIA HERA RODRIGUEZ</strong></h3>
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo.png" width="50px" />
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
                        <li class="active">
                            <a href="padre_hijo1.php">
                                <img src="../img/icono persona.png" width="20px">ELKIN DAVID SANNA HERA
                            </a>
                        </li>
                        <li>
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
            <?php include ('include/hijo1.php'); ?>
            <div class="col-sm-4 col-lg-2 return-button">
                <a href="padre_hijo1.php">
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
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default" style="margin-bottom: 25px">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:black">
                                                    <div class="col-lg-12">
                                                        Asistencia
                                                    </div>
                                                </a>
                                            </div>                                                     
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <h5>Asistencia General: <label>98%</label></h5>
                                                <h5>Faltas Generales: <label>2%</label></h5>
                                                <br><br>
                                                <h4>Detalle de Faltas:</h4>
                                                <h5>20/04/2017 | 3 hora | MATEMATICAS | JULIO | FALTA</h5>
                                              
                                            </div>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default" style="margin-bottom: 25px">
                                        <div class="panel-heading">                 
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:black">
                                                    <div class="col-lg-12">
                                                        Aprovechamiento
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <strong>Materia</strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>Porcentaje</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong>Materia</strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>Porcentaje</strong>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        MATEMATICAS
                                                    </div>
                                                    <div class="col-lg-2">
                                                        100%
                                                    </div>
                                                    <div class="col-lg-4">
                                                        LENGUA Y LITERATURA
                                                    </div>
                                                    <div class="col-lg-2">
                                                        100%
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <strong></strong>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <strong>%</strong>
                                                    </div>

                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default" style="margin-bottom: 25px">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:black">
                                                    <div class="col-lg-12">
                                                        Justificaciones
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                    <H1>hOLA</H1>
                                                    <H2>HOLA 2</H2>
                                              
                                            </div>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
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

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            
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