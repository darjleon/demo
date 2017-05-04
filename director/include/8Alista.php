<div id="alumnos-list" class="row">
    <div class="col-xs-12"> 
        <div class="docente-title"> 
            <h2>Alumno</h2>
            <h2>Representante</h2>    
        </div>
    </div>
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
</div>

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
            imgAl.setAttribute('src',"../img/icono_persona.png");
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