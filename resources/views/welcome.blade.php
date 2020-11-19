<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
  </head>
  <body>
   
    <div class="container">
      <div class="row">
      <div class="col-md-12 col-xs-12">
        <img id="logo" src="{{asset('images/logo1.png')}}" class="hide-from-desktop" />
        <center><img id="logo2" src="{{asset('images/logo2.png')}}" class="hide-from-cel" style="margin-top: 15px;" /></center>
      </div>
      <center>
      <div class="col-md-12 col-xs-12" style="margin-top: -100px;">
      <p class="titulo">Crear una cuenta</p>
      </div></center><br>
      <center><p class="subtitulo">Regístrate para obtener beneficios Kinky.</p></center>
      <center>
      <div class="lider">
      <div class="col col-md-4 col-xs-12 uno">
         <table><tr><td><img src="{{asset('images/Trazado 455.png')}}" class="icono" /></td>
                    <td style="padding-left: 5px;"><b class="negro">Guarda</b> tus Love Hotels y Habitaciones favoritas.</td>
                </tr>
         </table>
      </div>
      <div class="col col-md-4 col-xs-12 uno">
        <table><tr><td><img src="{{asset('images/Trazado 131.png')}}" class="icono2" /></td>
                   <td style="padding-left: 5px;"><b class="negro">Recibe</b> el mejor contenido.</td>
               </tr>
        </table>
      </div>
      <div class="col col-md-4 col-xs-12 uno">
        <table><tr><td><img src="{{asset('images/like.png')}}" class="icono3" /></td>
                   <td style="padding-left: 5px;"><b class="negro">Califica</b> los Love Hotels y sus habitaciones.</td>
               </tr>
        </table>
      </div>
      </div>
      </center>                
      <center>
        <div class="col-md-12 col-xs-11 formulario">
          <div class="col-md-6 col-xs-12">
           <div class="form-group">
            <p class="correo">Correo electronico*</p>
            <input type="mail" class="form-control cajacorreo" placeholder="correo@ejemplo.com">
            
          </div> 
          <p class="correo">Género*</p>
         
          <div class="col-md-4 col-xs-4">
            <button type="menu" class="btn btn-success">Mujer</button>
          </div>
          <div class="col-md-4 col-xs-4">
            <button type="menu" class="btn btn-success">Hombre</button>
          </div>
          <div class="col-md-4 col-xs-4">
            <button type="menu" class="btn btn-success">Otro</button>
          </div>
         
          <div class="form-group" >
            <p class="correo" style="margin-top:20%;">Fecha de nacimiento *</p>
            <input type="date" class="form-control datetime" style="margin-top: 2%;">
          </div>
          
          </div>
          <div class="col-md-6 col-xs-12">
            <p class="correo">Situación sentimental *</p>
         
            <div class="col-md-4 col-xs-4">
              <button type="menu" class="btn btn-success">Soltero</button>
            </div>
            <div class="col-md-4 col-xs-4">
              <button type="menu" class="btn btn-success">En pareja</button>
            </div>
            <div class="col-md-4 col-xs-4">
              <button type="menu" class="btn btn-success" style=" white-space: normal;">Es complicado</button>
            </div>
            <p class="textoobli">Campos obligatorios *</p> 
            <!-- Default radio -->
            <div class="radio radio12" >
              <label style="float:left;">
              <input type="radio" name="o3" value="">
              <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
              Deseo recibir el contenido más sensual
              </label>
            </div><br>

            <!-- Checked radio -->
            <div class="radio">
              <label style="float:left;">
              <input type="radio" name="o3" value="" checked>
              <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
              <b class="radio14">Acepto</b> <b class="radio13">Términos y Condiciones</b>
              </label>
            </div>
            <div class="col col-md-12 col-xs-12">
              <center><button type="button" class="btn btn-primary" style="margin-top:15%;width: 80%;
              height: 38px;
              background: var(--secondary-bf995c) 0% 0% no-repeat padding-box;
              background: #BF995C 0% 0% no-repeat padding-box;
              border-radius: 8px;
              opacity: 1;">Crear cuenta</button></center>
            </div>
            <br><br><br><br><br><br><br><br>

          </div>  

        </div>
      </center>
      </div>
    </div>
    <footer>
      
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>