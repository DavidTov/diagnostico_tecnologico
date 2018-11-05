function lista_alumnos(valor){
    $.ajax({
        url:'../funcs/otroAlumnos.php',
        type: 'POST',
        data: 'valor='+valor+'&boton=buscar'
    }).done(function(resp){
        //alert(resp);
        /*var valores = eval(resp);
        html="<table class='table table-striped'><thead><tr><th>Materia</th><th>1° Bim</th><th>2° Bim</th><th>3° Bim</th><th>4° Bim</th><th>5° Bim</th><th>Promedio</th><th></th></tr></thead><tbody>";
        for(i=0;i<valores.length;i++){
            datos=valores[i][0]+"*"+valores[i][1]+"*"+valores[i][3]+"*"+valores[i][4]+"*"+valores[i][5]+"*"+valores[i][6]+"*"+valores[i][7]+"*"+valores[i][8];
            html+="<tr><td>"+valores[i][2]+"</td><td>"+valores[i][3]+"</td><td>"+valores[i][4]+"</td><td>"+valores[i][5]+"</td><td>"+valores[i][6]+"</td><td>"+valores[i][7]+"</td><td>"+valores[i][7]+"</td><td><button class='btn btn-primary' data-toggle='modal' data-target='#modificar' onclick='mostrar("+'"'+datos+'"'+");'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Modificar</button></td></tr>";
        }
        html+="</tbody></table>";
        $("#lista").html(html);*/
    });
}

function guardar(){
    var datosform=$("#f_insertar").serialize();
    $.ajax({
        url:'../funcs/otroAlumnos.php',
        type: 'POST',
        data: datosform+"&boton=actualizar"
    }).done(function(resp){
       
    });
}

function mostrar(datos){
    var d=datos.split("*");
    $("#idMat").val(d[0]);
    $("#matAl").val(d[1]);
    $("#bim1").val(d[2]);
    $("#bim2").val(d[3]);
    $("#bim3").val(d[4]);
    $("#bim4").val(d[5]);
    $("#bim5").val(d[6]);

}