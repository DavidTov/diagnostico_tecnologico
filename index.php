<!DOCTYPE html>
<html>
<title>Análisis Empresarial</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    body,h1 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image: url('tecnologies_3.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
    .wrapper {    
      margin-top: 80px;
      margin-bottom: 20px;
    }
    .form-signin {
      max-width: 420px;
      padding: 30px 38px 66px;
      margin: 0 auto;
      background-color: #eee;
      border: 3px dotted rgba(0,0,0,0.1);  
      }
    .form-signin-heading {
      text-align:center;
      margin-bottom: 30px;
    }

    .transparent{
    opacity: 0.8;
    -moz-opacity: 0.8;
    filter: alpha(opacity=80);
    -khtml-opacity: 0.8;
  }
  .form-control {

   padding:10px;
   cursor:pointer;
   display:block;
   width:290px;
   height: auto;
   margin: 0 auto;
      /*font-size: 16px;
      height: auto;
      width: auto;
      padding: 10px;*/
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
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
 
  <div class="w3-display-middle">
    <form class="transparent w3-display-middle form-control form-signin" method="post">
      <img src="apen_logo.png" style="margin: 0 auto;padding: 10px;margin: 0 auto;display: block;" border="0" width="100" height="100">
        <h2 class="form-signin-heading">APEN</h2>
        <h4 class="form-signin-heading">Apoyo a Pequeños Negocios</h4>
        <hr class="colorgraph"><br>  
        <h5 class="form-signin-heading">Universidad Politécnica de Victoria</h5>
        <button class="w3-large w3-center btn btn-lg btn-primary btn-block" name="Login" >Registrarse</button>
        <br><p></p>
    </form>
    <p class="w3-large w3-center"></p>
  </div>

  <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
  </div>
</div>

</body>
</html>
<?php
  if(isset($_REQUEST['Login']))
    header("Location: formulario_1.php");
?>