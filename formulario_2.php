<!DOCTYPE html>
<html>
<title>Análisis Empresarial</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap_V1/css/bootstrap.css">

<style type="text/css">
	body, html {height: 100%}
	.bgimg {
        background-image: url('tecnologies_3.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
    .caja { 
		font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; 
		color: #ffffff; 
		font-size: 18px; 
		font-weight: 400; 
		text-align: center; 
		background: #889ccf; 
		margin: 0 0 25px; 
		overflow: hidden; 
		padding: 20px; 
		border-radius: 0px 0px 35px 0px; 
		-moz-border-radius: 35px 0px 35px 0px; 
		-webkit-border-radius: 35px 0px 35px 0px; 
		border: 2px solid #5878ca;
	}
    .head{
    	padding:10px;
    	margin-top: 40px;
    	margin-bottom: 20px;
	   	cursor:pointer;
	   	display:block;
	   	width:290px;
	   	height: auto;
	   	margin: 0 auto;
    }
    .mdiv{
    	width: 300px;
    }
    .subhead{
    	margin-bottom: 10px;
    	display: block;
    	width: 100%;
    	height: auto;
    	margin: 0 auto;
    }
    .form-signin-heading {
      	text-align:center;
    	color: rgba(0,0,0,0.6);
    }
	.data-form{
		padding:90px;
	   	display:block;
	   	height: cover;
	   	margin-top: 20px;
	   	margin-left:200px;
	   	margin-right: 200px;
	   	background-color: #eee; 
    	border: 3px dotted rgba(0,0,0,0.1);
	}
	.colorgraph {
      height: 7px;
      border-top: 0;
      background: #c4e17f;
      border-radius: 5px;
      background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    }
    .transparent{
		opacity: 0.8;
		-moz-opacity: 0.8;
		filter: alpha(opacity=80);
		-khtml-opacity: 0.8;
	}
</style>
<body class="bgimg  w3-display-container w3-animate-opacity">
		<div class="head form-control form-signin" id=apen>
			<h2 class="form-signin-heading">APEN</h2>
			<hr class="colorgraph">
		</div>
		<form class="data-form transparent" method="post">
			
			<div class="caja">
				Encuesta de análisis empresarial
			</div>
			
			<div class="alert alert-dark">
				<label>1. Nombre de la empresa:</label>
				<div>
					<input type="text" name="nombre_empresa" class="form-control">
				</div>
			</div>
			
			<div class="alert alert-dark">
				<label>2. Número de empleados con los que cuenta la empresa:</label>
				<input type="number" name="num_empleados" class="form-control" placeholder="0" min="0">
			</div>
			
			<div class="alert alert-dark">
				<label>3. ¿Utiliza algún tipo de tecnología para administrar los recursos de la empresa? Ejemplo: Computadora, hojas de cálculo, archivos .txt o .CSV, notas en papel,otro software</label>
				<select name="pregunta_3" id=pregunta_3 class="form-control">
					<option>Sí</option>
					<option>No</option>
				</select>
			</div>
			
			<div class="alert alert-dark" id=4.1>
				<label>4. ¿Cuáles?:</label>
				<div class='form-check'>
					<label class="checkbox-inline">
					<input type="checkbox" value="" name="tipo_tecnologia">Programas editores de texto plano (.txt, .csv, etc)</label><br>
					
					<label class="checkbox-inline">
					<input type="checkbox" value="" name="tipo_tecnologia">Hojas de cálculo o herramientas ofimáticas electrónicas (Microsoft Office Word, Excel, etc)</label><br>
					
					<label class="checkbox-inline">
					<input type="checkbox" value="" name="tipo_tecnologia">Máquina de escribir o notas escritas a mano</label><br>
					
					<label class="checkbox-inline">
					<input type="checkbox" value="" name="tipo_tecnologia">Otros</label><br>
				</div>
			</div>
			
			<div class="alert alert-dark" id=4.2>
				<label>4. ¿Porqué?:</label>
				<input type="text" name="nombre_empresa" class="form-control">
			</div>
			
			<div class="alert alert-dark">
				<label>5. ¿Estaría dispuesto a comprar software con los siguientes especificaciones?: Soporte y asesoramiento al cliente, implementación del software, mantenimiento, gestión de recursos empresariales (capital humano, productos, servicios)</label>
				<select name="pregunta_5" class="form-control">
					<option>Sí</option>
					<option>No</option>
				</select>
			</div>
			
			<button class="btn btn-primary form-control" name=save_data>Guardar datos</button>
		</form>
</body>
</html>
<script type="text/javascript">
	function changeFunc(){
		var select_p3=document.getElementById("pregunta_3");
		var content=select_p3.options[select_p3.selectedIndex].value;
		if(content=="No"){
			document.getElementById("4.2").style.display = 'block';
			document.getElementById("4.1").style.display = 'none';
		}
		else{
			document.getElementById("4.1").style.display = 'block';
			document.getElementById("4.2").style.display = 'none';
		}
	}
	function click_head(){
		window.location.replace("index.php");
	}

	window.onload=changeFunc;
	document.getElementById("pregunta_3").addEventListener("change",changeFunc);
	document.getElementById("apen").addEventListener("click",click_head);
</script>
<?php
	if(isset($_REQUEST['save_data'])){
		echo "hola";
	}
?>