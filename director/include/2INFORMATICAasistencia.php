            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #939598">
                                <tr>
                                    <th class="text-center" style="background-color: #939598;color: white;width:50%">Alumno</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Lunes</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Martes</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Miercoles</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Jueves</th>
                                    <th class="text-center" style="background-color: #939598;color: white;width:10%">Viernes</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white" id="asistencia-list">                            
                                       
                            </tbody> 
                        </table>
                    </div>            
                </div>
            </div>

<script type="text/javascript">

     var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          getAsistencia(this);
          
        }
      };
      xhttp.open("GET", "xml/course2INFORMATICA.xml", true);
      xhttp.send();

      function getAsistencia(xml){
        var i,j,k;
          var xmlDoc = xml.responseXML;
         //var table="<p><strong>Profesores</strong></p>";
          var x = xmlDoc.getElementsByTagName("student");
          for (i = 0; i <x.length; i++) { 
            var newtr = document.createElement('tr');
            var td1 = document.createElement('td');
            var pStd = document.createElement('p');
            pStd.setAttribute('class','student-list');

            /*var spanStd = document.createElement('span');
            spanStd.setAttribute('class','list-asist');*/
            pStd.innerHTML='<span class="list-asist">'+(i+1)+'</span>'+"  "+x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + " " + x[i].getElementsByTagName("lastName")[0].childNodes[0].nodeValue;

            
            td1.appendChild(pStd);
            newtr.appendChild(td1);



            var form = document.createElement('form');
            var td2 = document.createElement('td');
            td2.setAttribute('class','text-center');

            var divCheck = document.createElement('div');
            divCheck.setAttribute('class',"checkboxNotas");

            var input = document.createElement('input');
            input.setAttribute('class',"text-center");
            input.setAttribute('type',"checkbox");
            input.setAttribute('value',"d1");
            input.setAttribute('id',"checkboxNotas1");

            var label = document.createElement('label');
            label.setAttribute('for',"checkboxNotas1");

            divCheck.appendChild(input);
            divCheck.appendChild(label);

            td2.appendChild(divCheck);

            



            var td3 = document.createElement('td');
            td3.setAttribute('class','text-center');

            var divCheck2 = document.createElement('div');
            divCheck2.setAttribute('class',"checkboxNotas");

            var input2 = document.createElement('input');
            input2.setAttribute('class',"text-center");
            input2.setAttribute('type',"checkbox");
            input2.setAttribute('value',"d2");
            input2.setAttribute('id',"checkboxNotas2");

            var label2 = document.createElement('label');
            label2.setAttribute('for',"checkboxNotas2");

            divCheck2.appendChild(input2);
            divCheck2.appendChild(label2);

            td3.appendChild(divCheck2);

            



            var td4 = document.createElement('td');
            td4.setAttribute('class','text-center');

            var divCheck3 = document.createElement('div');
            divCheck3.setAttribute('class',"checkboxNotas");

            var input3 = document.createElement('input');
            input3.setAttribute('class',"text-center");
            input3.setAttribute('type',"checkbox");
            input3.setAttribute('value',"d3");
            input3.setAttribute('id',"checkboxNotas3");

            var label3 = document.createElement('label');
            label3.setAttribute('for',"checkboxNotas3");

            divCheck3.appendChild(input3);
            divCheck3.appendChild(label3);

            td4.appendChild(divCheck3);

            



            var td5 = document.createElement('td');
            td5.setAttribute('class','text-center');

            var divCheck4 = document.createElement('div');
            divCheck4.setAttribute('class',"checkboxNotas");

            var input4 = document.createElement('input');
            input4.setAttribute('class',"text-center");
            input4.setAttribute('type',"checkbox");
            input4.setAttribute('value',"d3");
            input4.setAttribute('id',"checkboxNotas3");

            var label4 = document.createElement('label');
            label4.setAttribute('for',"checkboxNotas3");

            divCheck4.appendChild(input4);
            divCheck4.appendChild(label4);

            td5.appendChild(divCheck4);

            


            var td6 = document.createElement('td');
            td6.setAttribute('class','text-center');

            var divCheck5 = document.createElement('div');
            divCheck5.setAttribute('class',"checkboxNotas");

            var input5 = document.createElement('input');
            input5.setAttribute('class',"text-center");
            input5.setAttribute('type',"checkbox");
            input5.setAttribute('value',"d3");
            input5.setAttribute('id',"checkboxNotas3");

            var label5 = document.createElement('label');
            label5.setAttribute('for',"checkboxNotas3");

            divCheck5.appendChild(input5);
            divCheck5.appendChild(label5);

            td6.appendChild(divCheck5);

            



            /*newtr.appendChild(form);*/

            newtr.appendChild(td2);
            newtr.appendChild(td3);
            newtr.appendChild(td4);
            newtr.appendChild(td5);

            newtr.appendChild(td6);








            document.getElementById("asistencia-list").appendChild(newtr);


          }



      }
</script>