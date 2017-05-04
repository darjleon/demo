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
                        <img alt="logo" src="img/logo unico.png" width="50px"/>
                    </div>
                </li>
                <li>
                    <a href="profesor.html">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_institucion.html">
                        <i class="fa fa-institution"></i> <span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="profesor_notificaciones.html">
                        <i class="fa fa-newspaper-o"></i><span class="nav-label">Notificaciones</span>
                    </a>
                </li>
                <li class="active">
                    <a href="profesor_listaalumnos.html">
                        <img src="img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumnos</span>
                    </a>
                </li>
                <li>
                    <a href="profesor_asistencia.html">
                        <i class="fa fa-list"></i><span class="nav-label">Asistencia</span>
                    </a>      
                </li>
                <li>
                    <a href="profesor_horario.html">
                        <i class="fa fa-table"></i><span class="nav-label">Horarios</span>
                    </a>      
                </li>                                                          
                <li>
                    <a href="profesor_calificaciones.html">
                        <i class="fa fa-fw fa-list-alt"></i><span class="nav-label">Calificaciones</span>
                    </a>      
                </li> 
                <li>
                    <a href="#">
                        <i class="fa fa-institution"></i>
                        <span class="nav-label">Planificaciones</span><span class="fa arrow"></span>
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
        <div class="row wrapper white-bg">                  
            <h2 style="padding-bottom:0;margin-bottom:0">Alumnos</h2>                     
            <div class="pull-right" style="margin-right: -15px">
                <a href="#">
                    <span style="font-size:14px"><img src="img/LISTA.png" width="25px"></span>
                </a> 
                <a href="profesor_listaalumnos_cuadricula.html">
                    <span style="font-size:14px;padding-right:-15px"><img src="img/ICONO.png" width="25px"></span>
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

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                        <strong class="curso-lista">CURSO:</strong>
                                                        8 'A'
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE:</strong>
                                                        LUIS CORREA ZAMBRANO    
                                                    </div>
                                                </a>                                              
                                            </div>                                                     
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <center>                                                   
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>SHIRLEY</td> 
                                                        <td>ARIAS ASCENCIO</td>             
                                                    </tr>
                                                    <tr>
                                                        <td>BRYAN</td>              
                                                        <td>ARONE SAAVEDRA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ARACELI</td>                
                                                        <td>CAQUEO VILLARREAL</td>              
                                                    </tr>
                                                    <tr>
                                                        <td>JESSENIA GABRIELA</td>   
                                                        <td>CHAMBA FLORES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ITALO JAVIER</td>              
                                                        <td>CONDORI VELASQUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SONIA</td>              
                                                        <td>CRUZ CRUZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NATHALIE ALEXANDRA</td> 
                                                        <td>DAVILA RIOS</td>            
                                                    </tr>
                                                    <tr>
                                                        <td>LENIN MAXIMO</td> 
                                                        <td>ELONS CARRASCO</td>             
                                                    </tr>
                                                    <tr>
                                                        <td>JAHAIRA KIMBERLY</td>              
                                                        <td>MESTANZA RODAS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PETER JOSEPH</td>              
                                                        <td>NARVAEZ ASENCIO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CRISTHIAN ALEX</td>  
                                                        <td>PACHECO VERA</td>          
                                                    </tr>
                                                    <tr>
                                                        <td>LUIS ALEJANDRO</td>              
                                                        <td>REYES NUÑEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANDREA NICOL</td>              
                                                        <td>SALAZAR SALAZAR</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KAREN ALEX</td>              
                                                        <td>SANTIAGO RAYMONDI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LUIS DAVID</td>              
                                                        <td>SIFUENTES CORDOVA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NICOLLE VALERIA</td> 
                                                        <td>SPENCER PUCA </td>            
                                                    </tr>
                                                    <tr>
                                                        <td>MELISSA JAHAIRA</td>              
                                                        <td>URBANO HUAMANI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DANIEL JESUS</td>              
                                                        <td>VARAS RODRIGUEZ</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </center>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">                 
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                        <strong class="curso-lista">CURSO:</strong>
                                                        8 'B' 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE: </strong>RUTH ARGUELLO MENDOZA
                                                    </div>
                                                </a> 
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <center>                                                   
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>LEONARDO MIGUEL</td>
                                                        <td>APAZA BASILIO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RONALDO TYSON</td>
                                                        <td>BALDERA OBREGON</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOEL ALEXANDER</td>
                                                        <td>CALDERON GUEVARA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ISAAC MANUEL</td>
                                                        <td>ESTELA SAMANEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MILAGROS JANETH</td>
                                                        <td>FLORES MESA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JORGE LUIS</td>
                                                        <td>GUEVARA MERA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>HUGO MANUEL</td>
                                                        <td>LOPEZ PUCA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GRISSEL ADRIANA</td>
                                                        <td>MALASQUEZ DESPOSORIO</td>
                                                    </tr>            
                                                    <tr>
                                                        <td>FAUSTO ENRIQUE</td>
                                                        <td>PAREDES PORTUGAL</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JULIO CESAR</td>
                                                        <td>SALAZAR DAGA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VIANCA ROXANA</td>
                                                        <td>SALVATIERRA AYALA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JAIRO ANTHONY</td>
                                                        <td>SILVA MARQUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VICTOR JESUS</td>
                                                        <td>SOLANO VILMA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GONZALO ALBERTO</td>
                                                        <td>TAIPE HUAMANI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ROBINSON LUIS</td>
                                                        <td>VILLANUEVA ASENCIO</td>
                                                    </tr>                                    
                                                </tbody>
                                            </table>
                                            </center>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                        <strong class="curso-lista">CURSO:</strong>
                                                        9 'A'
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE: </strong>MERY URBINA ANDALUZ
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <center>                                                   
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>JUAN MANUEL</td>
                                                        <td>AGUILERA QUISPE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANDREA PAOLA</td>
                                                        <td>ALEGRE CASTRO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>FABIOLA PAMELA</td>
                                                        <td>CASTILLO MISARI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANYEL ALEXANDRA</td>
                                                        <td>DAVILA CHAVEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>REYNALDO JERSON</td>
                                                        <td>FILIOS HERNANDEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KEVIN ADRIAN</td>
                                                        <td>LOPEZ GOYZUETA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MELANY ROCIO</td>
                                                        <td>PADILLA CHAUCA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>EDER ANDRES</td>
                                                        <td>PAIVA PISCOYA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LUIS ENRIQUE</td>
                                                        <td>PAREDES POCCO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CRISTHIAN ANDRES</td>
                                                        <td>PINEDA ROJAS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SELENA STEFANIA</td>
                                                        <td>QUEREVALU DAVILA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANGELA BRIGGITTE</td>
                                                        <td>QUISPE RODRÍGUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SAUL ALEXIS</td>
                                                        <td>REGALADO ALFARO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TANIA MARCELA</td>
                                                        <td>ROMERO SALVATIERRA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LORENA ROXANA</td>
                                                        <td>SAENZ TEJADA</td>
                                                    </tr>                                    
                                                </tbody>
                                            </table>
                                            </center>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                        <strong class="curso-lista">CURSO:</strong>1RO BACHILLERATO CIENTIFICO
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE: </strong>TATIANA CARREÑO QUIROZ
                                                    </div>                                         
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <center>                                                  
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>DIEGO ANDRES</td>
                                                        <td>ALBAN COELLO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DIEGO UBALDO</td>
                                                        <td>ARGUERO COSE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CANDY LUCIA</td>
                                                        <td>NAVARRO CORTEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ADONIS JOSUE</td>
                                                        <td>BARZOLA LEDESMA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOAO PEDRO</td>
                                                        <td>BONE PEÑA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIA DOMENICA</td>
                                                        <td>CANEPA RAMOS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ROBERTO CARLOS</td>
                                                        <td>CARAVEDO NIETO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KARLA NATALIA</td>
                                                        <td>CARPIO RODRIGUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MAYLI MITZUE</td>
                                                        <td>CEDEÑO SUD</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ODALIS ELIZABED</td>
                                                        <td>CHIZAIZA GAMBOA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SOLEDAD BETZABE</td>
                                                        <td>COLLAGUARI LOPEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BELEN NICOLE</td>
                                                        <td>CORDOVA MAYOR</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GENESIS IVONNE</td>
                                                        <td>GUERRA CLARK</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARJORIE NICOLE</td>
                                                        <td>HARO QUIÑONEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ADRIANA ANDREA</td>
                                                        <td>LARRERA LAVAEN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NICOLAS MATEO</td>
                                                        <td>LOGROÑO ORTIZ</td>
                                                    </tr>             
                                                    <tr>
                                                        <td>ARMANDO DUBERLIN</td>
                                                        <td>MACIAS FERNANDEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DENNIS JOEL</td>
                                                        <td>MANZANO VELASTEGUI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RONNY ALFREDO</td>
                                                        <td>MEDINA GONZALEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LEONARDO LEONIDAS</td>
                                                        <td>NARANJO PEÑAFIEL</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ERICK ROLANDO</td>
                                                        <td>ORELLANA MENDOZA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GABRIELA MAYLIN</td>
                                                        <td>PLAZA TOMALA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KAROL DOMENICA</td>
                                                        <td>QUEVEDO WONG</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DAVID MOISES</td>
                                                        <td>RIVERA ALAVA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GERALDINA BRIGGITTE</td>
                                                        <td>SALINAS ANGULO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANDREA BRIGGITTE</td>
                                                        <td>SALINAS DOMENECH</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIA JOSE</td>
                                                        <td>SOLORZANO DAVILA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CARLOS MANUEL</td>
                                                        <td>TITUAÑA MOREIRA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JANNELLY NAHOMI</td>
                                                        <td>ZAMBRANO RODRIGUEZ</td>
                                                    </tr>
                                                </tbody> 
                                            </table>
                                            </center>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                        <strong class="curso-lista">CURSO:</strong>2DO BACHILLERATO CIENTIFICO
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE: </strong>CLAUDIA LOPEZ SANCHEZ
                                                    </div>
                                                </a>                                               
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <center>                                         
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>WAGNER ANDRES</td>
                                                        <td>AGUILAR GOMEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KENYI JOEL</td>
                                                        <td>ALVAREZ PEÑAFIEL</td>
                                                    </tr>
                                                    <tr>
                                                        <td>FERNANDO XAVIER</td>
                                                        <td>BASTIDAS GARCIA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIA DANIELA</td>
                                                        <td>BRITO ABAD</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PAUL ANDRES</td>
                                                        <td>BUSTAMANTE MORAN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ALFONSO JOSHUE</td>
                                                        <td>CAMACHO HIDALGO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GENESIS GABRIELA</td>
                                                        <td>CASTRO ZAMBRANO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DARWIN JOSEPH</td>
                                                        <td>CEVALLOS BARZOLA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RICARDO ANDRES</td>
                                                        <td>CONTRERAS FRANCO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CRISTOPHER ALEXANDER</td>
                                                        <td>DUCHE YNEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANAHI YAMILETH</td>
                                                        <td>ESCOBAR DALMA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANDREA STEFANIA</td>
                                                        <td>ESCOBAR RENDOM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMILIO DANILO</td>
                                                        <td>ESPINOZA VIZCAINO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RENE JOSUE</td>
                                                        <td>GALLO ROUSSEAU</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LENIN HENRY</td>
                                                        <td>GARCIA PALMA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NESTOR RICARDO</td>
                                                        <td>GARCIA RODRIGUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>WALESCA SOFIA</td>
                                                        <td>GONZALES LOOR</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CARLA MADELEINE</td>
                                                        <td>JACHO WONG</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANGEL ISRAEL</td>
                                                        <td>LOZANO LEON</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KRISTELLE KARELYS</td>
                                                        <td>LUCIN QUIÑONEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIA JOSE</td>
                                                        <td>MACARLUPO GARCIA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RICHARD ANDRES</td>
                                                        <td>MACIAS TORRES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MELANIE NOEMI</td>
                                                        <td>MERA ZUÑIGA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GABRIELA STEFANIA</td>
                                                        <td>MIRANDA ORELLANA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DAYANNA THAIS</td>
                                                        <td>MORA CALDERON</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIANA STEFANIA</td>
                                                        <td>PAZAN RODRIGUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NELLY ROUSE</td>
                                                        <td>PONCE GONZALES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>OSCAR DAVID</td>
                                                        <td>QUINTERO HURTADO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JONATHAN JOSE</td>
                                                        <td>REBUTTI MACIAS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIA DELIA</td>
                                                        <td>REGALADO LARA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VALERY GARDENIA</td>
                                                        <td>RIVERA VERA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ERICK ALEXIS</td>
                                                        <td>ROSERO MACIAS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CARLOS XAVIER</td>
                                                        <td>VALENCIA RODRIGUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIA FERNANDA</td>
                                                        <td>VELASCO GUADALUPE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ALINSON IVANA</td>
                                                        <td>VELIZ TRIVIÑO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LUANA GUADALUPE</td>
                                                        <td>ZAMBRANO BURGOS</td>
                                                    </tr>                
                                                </tbody>   
                                            </table>
                                            </center>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                        <strong class="curso-lista">CURSO:</strong>2DO BACHILLERATO INFORMATICA
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE: </strong>MARCOS PAZAN REYES
                                                    </div>                                         
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse">
                                            <center>  
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>NOEMY JULEISY</td>
                                                        <td>ACOSTA DAVID</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ODALIS RAQUEL</td>
                                                        <td>ASMAL MONTENEGRO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KEVIN ISMAEL</td>
                                                        <td>BERMEO ORTEGA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>POLL SEBASTIAN</td>
                                                        <td>CAMPOVERDE JARAMILLO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JONATHAN ISRAEL</td>
                                                        <td>GARCIA TAPIA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MICHAEL WANDERLEY</td>
                                                        <td>MARIN PINEDA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANGEL</td>
                                                        <td>PLACIDO MERA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CRISTOPHER SMITH</td>
                                                        <td>MORA SOLANO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GENESIS ELIZABETH</td>
                                                        <td>RAMIREZ ROLDAN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DAVIS JESUS</td>
                                                        <td>ROMERO CEBALLOS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RAFAEL ALEXANDER</td>
                                                        <td>SANTILLAN VINCES</td>
                                                    </tr>  
                                                    <tr>
                                                        <td>DAYANA NICOLES</td>
                                                        <td>VILLALTA MORALES</td>
                                                    </tr>        
                                                </tbody>   
                                            </table>
                                            </center>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                    <strong class="curso-lista">CURSO:</strong>
                                                    3RO BACHILLERATO CIENTIFICO
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE: </strong>GLENDA CANDEL CARBO
                                                    </div>                            
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseSeven" class="panel-collapse collapse">
                                            <center>                                         
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>CINDY MARCELA</td>
                                                        <td>ALARCON MOROCHO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BRAD ALEXANDER</td>
                                                        <td>ALCIVAR VERA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOSUE MIGUEL</td>
                                                        <td>ALVARADO AVILA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LUIS ALBERTO</td>
                                                        <td>ANDRADE FIGUEROA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ALLISON ANDREA</td>
                                                        <td>ARREAGA ANDRADE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOSE MIGUEL</td>
                                                        <td>AGUILAR RAMIREZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>EILEEN GEOMARA</td>
                                                        <td>BAREO SANJINES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BRENDA CAROLINA</td>
                                                        <td>BERNAL VELASQUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CHRISTIAN JOAO</td>
                                                        <td>BORJA SALAO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOSELINE ARIANA</td>
                                                        <td>BUÑAY RAMOS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>STEFANI JAMILETH</td>
                                                        <td>BURGOS FIGUEROA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MAYLEE NINOSKA</td>
                                                        <td>BURNHAM MARCILLO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DAGMAR ALISON</td>
                                                        <td>CAÑAS PEÑAFIEL</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DEREK JOSHUA</td>
                                                        <td>CARDENAS AMBI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GINGER LISBETH</td>
                                                        <td>CASTRO RUIZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SERGIO ANDRES</td>
                                                        <td>CLAVIJO AGUAYZA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ALICIA YADIRA</td>
                                                        <td>CORDOVA MAYOR</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GIUSEPPE OLIVER</td>
                                                        <td>GARCIA INTRIAGO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CRISTOPHER JULIAN</td>
                                                        <td>INTRIAGO LEON</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MAYLIN BRENDA</td>
                                                        <td>JARAMILLO SANTILLAN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MICHAEL DOUGLAS</td>
                                                        <td>MONCADA LADINES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JEAN PIERRE</td>
                                                        <td>MENDEZ APOLINARIO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LADY LISBETH</td>
                                                        <td>MORENO MANTILLA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DOMENICA ANTONIA</td>
                                                        <td>OLVERA URBINA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BRITANY SHAJAIRA</td>
                                                        <td>ORDOÑEZ NIETO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ERIC JOSUE</td>
                                                        <td>QUIMIS SOLIS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DAVID STALYN</td>
                                                        <td>REBUTTI DELGADO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NANCY BEATRIZ</td>
                                                        <td>RIGCHAG AMANCHA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MERIDA ROBERTA</td>
                                                        <td>RIVERA VERA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENRIQUE GABRIEL</td>
                                                        <td>RODRIGUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIA EDITH</td>
                                                        <td>SOTO CHICHANDE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>THALIA NICOLE</td>
                                                        <td>TAPIA LOOR</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TAIS VERENICE</td>
                                                        <td>TENORIO CARABALI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ALLISON DOMENIQUE</td>
                                                        <td>VARGAS MEZA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KATTHYA MELISSA</td>
                                                        <td>VARGAS MEZA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DOMENICA BELEN</td>
                                                        <td>VILLOTA MOROCHO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIA BELEN</td>
                                                        <td>VITERI JURADO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOSE JAVIER</td>
                                                        <td>ZAMBRANO CABRERA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DAYANNA FIORELA</td>
                                                        <td>ZHUMA TENEZACA</td>
                                                    </tr>          
                                                  </tbody>   
                                            </table>
                                            </center>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                        <strong class="curso-lista">CURSO:</strong>3RO BACHILLERATO CONTABILIDAD
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE: </strong>JUAN LOPEZ MARURI
                                                    </div>                                         
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseEight" class="panel-collapse collapse">
                                            <center>                                                   
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>NIDIA</td>
                                                        <td>ALARCON ZURITA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ALEJANDRO MANUEL</td>
                                                        <td>AYALA FARIAS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOSUE SANTIAGO</td>
                                                        <td>BAIDAL SUAREZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DAVID SEBASTIAN</td>
                                                        <td>BECERRA SANCHEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARIO ISRAEL</td>
                                                        <td>CABALLERO CHILA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DAVID ESTEBAN</td>
                                                        <td>CALDERON CARRERA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JEREMIE ELIAS</td>
                                                        <td>DAQUILEMA NAVARRO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JAIME IVAN</td>
                                                        <td>DUEÑAS CHOEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CARLOS JAVIER</td>
                                                        <td>GARCIA RAMONES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANDREA MELISA</td>
                                                        <td>HABLICH PAREDES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BRUNO MAURICIO</td>
                                                        <td>LOGROÑO ORTIZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LISSETTE PRISCILA</td>
                                                        <td>MENDOZA AVILEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BRYAN NORBERTO</td>
                                                        <td>MOREIRA PARRALES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MAYERLI ADALIZ</td>
                                                        <td>ORELLANA ROJAS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GERSSON ALEXANDER</td>
                                                        <td>PEREZ NUÑEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GRACE STEFANIE</td>
                                                        <td>SOLORZANO MENDIETA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DIANA CAROLINA</td>
                                                        <td>URRUTIA MOLINA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>YELENA MARIA</td>
                                                        <td>VASQUEZ RODRIGUEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>WILSON GARLIS</td>
                                                        <td>VELASCO CALERO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANTHONY ISMAEL</td>
                                                        <td>VELES GARCIA</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>DAYANA GISSELLE</td>
                                                        <td>ZAMORA GUSMAN</td>
                                                    </tr>          
                                                  </tbody>   
                                            </table>
                                            </center>
                                            <button type="button" class="btn btn-info" style="margin-left:10px">IMPRIMIR</button>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" style="color:black">
                                                    <div class="col-lg-6">
                                                        <img src="img/CURSO.png" width="15px">
                                                        <strong class="curso-lista">CURSO:</strong>3RO BACHILLERATO INFORMATICA
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <strong>DIRIGENTE: </strong>ANGELICA VILLABLANCA TRUJILLO
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseNine" class="panel-collapse collapse">
                                            <center> 
                                            <table class="table table-bordered table-hover" style="width:50%;margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>EDNWING FABRICIO</td>
                                                        <td>AMAGUAYA VILLAVICENCIO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>KARLA DOMINIQUE</td>
                                                        <td>ALVARADO AVILES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ANDRES MARCELINO</td>
                                                        <td>BAQUE CANO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VICTOR JOSUE</td>
                                                        <td>BUÑAY CANTOS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LILIBETH</td>
                                                        <td>CONGUIA ESCOBAR</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BRITTANY PAULINA</td>
                                                        <td>CORREA PAZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MARJORIE MICHELE</td>
                                                        <td>FIGUEROA ROBAYO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JAIME EDUARDO</td>
                                                        <td>GARCIA CELI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DANNA NOHELY</td>
                                                        <td>HOLGUIN CISNEROS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>DOLORES MARGARITA</td>
                                                        <td>LOPEZ CANO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MICHAEL STEVEN</td>
                                                        <td>MARTINEZ PINO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PAMELA LISETTE</td>
                                                        <td>MOREIRA TORRES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CRISTOPHER JOSUE</td>
                                                        <td>MENDOZA COTO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOSE BENJAMIN</td>
                                                        <td>MOROCHO PEÑAFIEL</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOSE RICARDO</td>
                                                        <td>MUÑOZ SANCHEZ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RENSO GERMAN</td>
                                                        <td>QUIÑONEZ QUINTERO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>JOSUE SAUL</td>
                                                        <td>SABANDO LINDAO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>FREDDY YURIS</td>
                                                        <td>SANCHEZ MONTERO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CESAR FERNANDO</td>
                                                        <td>VASQUEZ BARAHONA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LUIS ANTONIO</td>
                                                        <td>YERBABUENA RAMON</td>
                                                    </tr>          
                                                </tbody>   
                                            </table>
                                            </center>
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
<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>