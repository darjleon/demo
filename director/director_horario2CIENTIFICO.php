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
                <li class="active">
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
                <h2 style="margin:1em 0">Horario 2DO BACHILLERATO CIENTIFICO</h2>
                <div class="formatos">
                    <div class="back">
                        <a href="director_horarios.php">
                            <button class="button-back cb">
                                <img style="margin: 0;" src="../img/return.png" alt="" width="17">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default"> 
                        <div class="horario-clases">
                            <div class="table-responsive">
                                <table class="table ss1">
                                    <thead class="scheduler ss1">
                                        <tr>
                                            <th class="text-center scheduler"><!-- Hora --></th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Lunes</th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Martes</th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Miercoles</th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Jueves</th>
                                            <th class="text-center scheduler" style="font-size: 1.6em;">Viernes</th>
                                        </tr>
                                    </thead>
                                    <tbody id="horario">
                                        <!--<tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    7:00<br>7:45
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>1</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td> 
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td> 
                                            <td class="subject" style="vertical-align: middle">FISICA QUIMICA</td>
                                            <td class="subject" style="vertical-align: middle">FISICA QUIMICA</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    7:45<br>8:30
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>2</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td> 
                                            <td class="subject" style="vertical-align: middle">INVESTIGACION</td> 
                                            <td class="subject" style="vertical-align: middle">EMPRENDIMIENTO Y GESTION</td>
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    8:30<br>9:15
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>3</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">FISICA QUIMICA</td> 
                                            <td class="subject" style="vertical-align: middle">EDUCACION PARA LA CIUDADANIA</td> 
                                            <td class="subject" style="vertical-align: middle">DIBUJO TECNICO</td> 
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td>
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    9:15<br>10:00
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>4</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                            <td class="subject" style="vertical-align: middle">FISICA QUIMICA</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td>
                                            <td class="subject" style="vertical-align: middle">EDUCACION PARA LA CIUDADANIA</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    10:30<br>11:15
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>5</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">EDUCACION ARTISTICA</td> 
                                            <td class="subject" style="vertical-align: middle">FISICA QUIMICA</td> 
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td> 
                                            <td class="subject" style="vertical-align: middle">EDUCACION PARA LA CIUDADANIA</td>
                                            <td class="subject" style="vertical-align: middle">INFORMATICA APLICADA A LA EDUCACION</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    11:15<br>12:00
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>6</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">EDUCACION ARTISTICA</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td> 
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA Y LITERATURA</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    12:00<br>12:45
                                                </span> 
                                                <span class="hour hour-1">
                                                    <span>7</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">BIOLOGIA</td> 
                                            <td class="subject" style="vertical-align: middle">EMPRENDIMIENTO Y GESTION</td> 
                                            <td class="subject" style="vertical-align: middle">LENGUA EXTRANJERA</td> 
                                            <td class="subject" style="vertical-align: middle">BIOLOGIA</td> 
                                            <td class="subject" style="vertical-align: middle">MATEMATICAS</td>                
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    13:15<br>14:00
                                                </span> 
                                                <span class="hour hour-2">
                                                    <span>8</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">BIOLOGIA</td> 
                                            <td class="subject" style="vertical-align: middle">VALORES HUMANOS</td> 
                                            <td class="subject" style="vertical-align: middle">EDUCACION PARA LA CIUDADANIA</td> 
                                            <td class="subject" style="vertical-align: middle">BIOLOGIA</td>
                                            <td class="subject" style="vertical-align: middle">BIOLOGIA</td>  
                                        </tr>
                                        <tr>
                                            <td class="scheduler horas" style="vertical-align: middle">
                                                <span class="c-hour">
                                                    14:00<br>14:45
                                                </span> 
                                                <span class="hour hour-3">
                                                    <span>9</span>
                                                </span>
                                            </td>
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td> 
                                            <td class="subject" style="vertical-align: middle">INFORMATICA APLICADA A LA EDUCACION</td> 
                                            <td class="subject" style="vertical-align: middle">EDUCACION FISICA</td> 
                                            <td class="subject" style="vertical-align: middle">HISTORIA Y CIENCIAS SOCIALES</td>
                                            <td class="subject" style="vertical-align: middle">INVESTIGACION</td>  
                                        </tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          getSchedule(this);
          
        }
      };
      xhttp.open("GET", "xml/schedule2CIENTIFICO.xml", true);
      xhttp.send();

      function getSchedule(xml){
        var i,j,k;
          var xmlDoc = xml.responseXML;
          var x = xmlDoc.getElementsByTagName("hour");
          for (i = 0; i <x.length; i++) { 
                var newtr = document.createElement('tr');
                
                var newtd = document.createElement("td");
                newtd.setAttribute('class',"scheduler horas");
                newtd.setAttribute('style',"vertical-align: middle;");

                var span1 = document.createElement('span');
                span1.setAttribute('class', "c-hour");

                var span2 = document.createElement('span');
                


                switch(x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue) {
                    case '1':
                        span1.innerHTML="7:00<br>7:45";
                        span2.setAttribute('class', "hour hour-1");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '2':
                        span1.innerHTML="7:45<br>8:30";
                        span2.setAttribute('class', "hour hour-2");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '3':
                        span1.innerHTML="8:30<br>9:15";
                        span2.setAttribute('class', "hour hour-3");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '4':
                        span1.innerHTML="9:15<br>10:00";
                        span2.setAttribute('class', "hour hour-1");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '5':
                        span1.innerHTML="10:30<br>11:15";
                        span2.setAttribute('class', "hour hour-2");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '6':
                        span1.innerHTML="11:15<br>12:00";
                        span2.setAttribute('class', "hour hour-3");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '7':
                        span1.innerHTML="12:00<br>12:45";
                        span2.setAttribute('class', "hour hour-1");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '8':
                        span1.innerHTML="13:15<br>14:00";
                        span2.setAttribute('class', "hour hour-2");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    
                }

                newtd.appendChild(span1);
                newtd.appendChild(span2);

                var newtd1 = document.createElement("td");
                newtd1.setAttribute('class',"subject");
                newtd1.setAttribute('style',"vertical-align: middle;");
                newtd1.innerHTML=x[i].getElementsByTagName("day1")[0].childNodes[0].nodeValue;
                var newtd2 = document.createElement("td");
                newtd2.setAttribute('class',"subject");
                newtd2.setAttribute('style',"vertical-align: middle;");
                newtd2.innerHTML=x[i].getElementsByTagName("day2")[0].childNodes[0].nodeValue;
                var newtd3 = document.createElement("td");
                newtd3.setAttribute('class',"subject");
                newtd3.setAttribute('style',"vertical-align: middle;");
                newtd3.innerHTML=x[i].getElementsByTagName("day3")[0].childNodes[0].nodeValue;
                var newtd4 = document.createElement("td");
                newtd4.setAttribute('class',"subject");
                newtd4.setAttribute('style',"vertical-align: middle;");
                newtd4.innerHTML=x[i].getElementsByTagName("day4")[0].childNodes[0].nodeValue;
                var newtd5 = document.createElement("td");
                newtd5.setAttribute('class',"subject");
                newtd5.setAttribute('style',"vertical-align: middle;");
                newtd5.innerHTML=x[i].getElementsByTagName("day5")[0].childNodes[0].nodeValue;

                newtr.appendChild(newtd);
                newtr.appendChild(newtd1);
                newtr.appendChild(newtd2);
                newtr.appendChild(newtd3);
                newtr.appendChild(newtd4);
                newtr.appendChild(newtd5);

                document.getElementById("horario").appendChild(newtr);



          }

      }

</script>

<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>
