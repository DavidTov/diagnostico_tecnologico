$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../funcs/cargar_grupos.php'
  })
  .done(function(grupos){
    $('#grupoSel').html(grupos)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los grupos')
  })

  $('#grupoSel').on('change', function(){
    var id = $('#grupoSel').val()
    $.ajax({
      type: 'POST',
      url: '../funcs/cargar_alumnos.php',
      data: {'id': id}
    })
    .done(function(alumnos){
      $('#alumnoSel').html(alumnos)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los alumnos')
    })
  })
    
    

  $('#cargarCal').on('click', function(){
    var valor = ($('#alumnoSel').val()).substr(0,6);
    $.ajax({
        url:'../funcs/otroAlumnos.php',
        type: 'POST',
        data: 'valor='+valor+'&boton=buscar'
    })
    .done(function(resp){
      var valores = eval(resp);
        html="<table class='table table-striped'><thead><tr><th>Materia</th><th>1° Bim</th><th>2° Bim</th><th>3° Bim</th><th>4° Bim</th><th>5° Bim</th><th>Promedio</th><th></th></tr></thead><tbody>";
        for(i=0;i<valores.length;i++){
            datos=valores[i][0]+"*"+valores[i][1]+"*"+valores[i][3]+"*"+valores[i][4]+"*"+valores[i][5]+"*"+valores[i][6]+"*"+valores[i][7]+"*"+valores[i][8];
            html+="<tr><td>"+valores[i][2]+"</td><td>"+valores[i][3]+"</td><td>"+valores[i][4]+"</td><td>"+valores[i][5]+"</td><td>"+valores[i][6]+"</td><td>"+valores[i][7]+"</td><td>"+valores[i][8]+"</td><td><button class='btn btn-primary' data-toggle='modal' data-target='#modificar' onclick='mostrar("+'"'+datos+'"'+");'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Modificar</button></td></tr>";
        }
        html+="</tbody></table>";
        $("#lista").html(html);
    })
    .fail(function(){
      alert('Hubo un errror al cargar los alumnos')
    })
  })
    
})


