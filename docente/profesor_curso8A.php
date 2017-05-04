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
                    <a href="profesor.php">
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
                <li class="active">
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
        <div class="row wrapper white-bg">  
            <div class="col-xs-12 profe-cuadricula">
                <div class="nombres">
                    <h3>Luis Correa Zambrano</h3>
                    <p><strong>Curso 8 'A'</strong></p>
                </div>
                <div class="back">
                    <a href="profesor_cursos.php">
                        <button class="button-back cb">
                            <img src="../img/return.png" alt="" width="17">Regresar
                        </button>
                    </a>
                </div>
            </div>
        </div>     
        <div class="wrapper wrapper-content">
            <?php include ('include/8Alista.php'); ?>            
        </div>
    </div> 
</div>




<?php include ('include/footer.php'); ?>
<!--<div class="col-xs-12"> 

        <div class="docente">
            <div class="alumno">
                <div class="alumno-name">Alumno</div>
                <p ><img class="icono-alumno student-list-icon" src="img/icono_persona.png"> Shirley Arias Ascencio <a href="">Perfil</a></p>
            </div>
            <div class="separador"></div>
            <div class="representante">
                <div class="representante-name">Representante</div>
                <p>
                    <img class="icono-alumno student-list-icon" src="../img/REPRESENTANTE.png"> Nombres y Apellidos 
                    <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                    </button><a href="">Perfil</a>
                    </span>
                </p>
            </div>

        </div>  
               
    </div>-->


<script type="text/javascript">


     var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          getCourse(this);
          
        }
      };
      xhttp.open("GET", "xml/course8A.xml", true);
      xhttp.send();

      function getCourse(xml){
        var i,j,k;
          var xmlDoc = xml.responseXML;
         //var table="<p><strong>Profesores</strong></p>";
          var x = xmlDoc.getElementsByTagName("student");
          for (i = 0; i <x.length; i++) { 
            var newdiv = document.createElement('div');
            newdiv.setAttribute('class',"col-xs-12")
            var newtr = document.createElement('div');
            newtr.setAttribute('class',"docente");
            var tdName=document.createElement('div');
            tdName.setAttribute('class',"alumno");

            var divAl=document.createElement('div');
            divAl.setAttribute('class',"alumno-name");

            var pImg=document.createElement('p');
            

            var imgAl=document.createElement('img');
            imgAl.setAttribute('class',"icono-alumno student-list-icon");
            imgAl.setAttribute('src',"img/icono_persona.png");
            pImg.appendChild(imgAl);

            var textName = document.createTextNode(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + " " + x[i].getElementsByTagName("lastName")[0].childNodes[0].nodeValue);

            pImg.appendChild(textName);

            //pImg.insertAdjacentHTML( 'beforeBegin', imgAl );

            //pImg.insertAdjacentHTML("beforeBegin",imgAl);

            var aAl=document.createElement('a');
            aAl.setAttribute('href',"");

            aAl.innerHTML = "Perfil";

            pImg.appendChild(aAl);

            tdName.appendChild(divAl);
            tdName.appendChild(pImg);

            newtr.appendChild(tdName);


            var divsep=document.createElement('div');
            divsep.setAttribute('class',"separador");

            var tdRep=document.createElement('div');
            tdRep.setAttribute('class',"representante");

            var divRep=document.createElement('div');
            divRep.setAttribute('class',"representante-name");
            divRep.innerHTML="Representante";

            tdRep.appendChild(divRep);

            var pImgRep=document.createElement('p');



            var imgRep=document.createElement('img');
            imgRep.setAttribute('class',"icono-alumno student-list-icon");
            imgRep.setAttribute('src',"../img/REPRESENTANTE.png");


            var textNameRep = document.createTextNode("Nombres y Apellidos");


            pImgRep.appendChild(imgRep);
            pImgRep.appendChild(textNameRep);

            var span = document.createElement('span');

            var btnRep = document.createElement('button');
            btnRep.setAttribute('type',"button");
            btnRep.setAttribute('class',"btn btn-student-list");
            btnRep.setAttribute('data-toggle',"modal");
            btnRep.setAttribute('data-target',"#myModal2");

             var imgRepMail=document.createElement('img');
            
            imgRepMail.setAttribute('src',"../img/mail.png");

            imgRepMail.setAttribute('alt',"");

            btnRep.appendChild(imgRepMail);

            span.appendChild(btnRep);

            

            var aRep=document.createElement('a');
            aRep.setAttribute('href',"");

            aRep.innerHTML = "Perfil";

            span.appendChild(aRep);

            pImgRep.appendChild(span);

            tdRep.appendChild(pImgRep);

            newtr.appendChild(divsep);

            newtr.appendChild(tdRep);

            newdiv.appendChild(newtr);

            document.getElementById("alumnos-list").appendChild(newdiv);


          }



      }
</script>


<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>
