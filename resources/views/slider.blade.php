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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/estilosslider.css') }}" />

  </head>
  <body>
    <div class="container" style="padding-right: 2.4%;padding-left: 2.4%;">
       <h1 id="titulo">Slider</h1>
    
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

        @foreach($clasificaciones->take(3) as $cla)

          <div class="item @if ($loop->first) active @endif">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail" id="tarjetaimagen">
                        <img src="{{asset('images/'.$cla->imagen)}}" id="imagencarousel">
                        <a href="#" data-toggle="modal" data-target="#myModal{{$cla->id}}">
                            <img src="{{asset('images/info.png')}}" id="imageninfo">
                        </a>
                    <div class="caption"  style="padding-top: 67%;">
                        <div class="dropdown" style="position: relative;">
                            <p class="slide">Slide{{$cla->orden}}</p>
                            
                                    
                                    <a href="" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="float:right;"><span class="glyphicon glyphicon-option-vertical"></span></a>
                                   
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="whidth: 256px;position: relative;background: #DED2BF 0% 0% no-repeat padding-box;
                                        box-shadow: 0px 4px 3px #00000040;
                                        border-radius: 8px;
                                        opacity: 1;">

                                            @foreach($clasificaciones as $res)
                                            @if($cla->orden == $res->orden)
                                            
                                                <li role="presentation" id="encendido"><a role="menuitem" tabindex="-1" href="#">Slider{{$res->orden}}</a></li>
                                            
                                            @else
                                                
                                                <li role="presentation" id="apagado"><a role="menuitem" tabindex="-1" href="#">Slider{{$res->orden}}</a></li>
                                           
                                            @endif
                                            @endforeach
                                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
           {{-- <div class="carousel-caption">
                <p>Slide{{$cla->orden}}</p>
            </div>  --}}
          </div>
        <div class="modal fade" id="myModal{{$cla->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content" id="anchomodal">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 id="monse"><b>{{ $cla->nombre }}</b></h1>
                <p id="monse2">{{ $cla->descripcion }}</p><br><br>
                <center><button type="menu" class="btn btn-success" style="width: 100%;
                    height: 36px;">Ver habitacion</button></center>
                </div>
              </div>
            </div>
          </div>

          @endforeach
         
      </div>
    
    </div>
    
    <br>
    
        
            <p id="titulo">Blog</p>
       

        @foreach($resultado as $res)
        
        
            <div class="col-xs-12 col-md-5" style="padding-left: 0%;padding-right: 0%;">
                    <img src="{{asset('images/'.$res->img)}}" id="fondo1" />
                    <p id="nombretitulo">{{ $res->titulo}}</p>
                    <p id="fecha">10 marzo 2020</p>
                    <center><button type="menu" class="btn btn-success" style="position: relative;width: 140px;
                        height: 36px;">Ver más</button></center>
                        
                    <img src="{{asset('images/corazon.png')}}" id="imgcorazon" />
                    <img src="{{asset('images/envio.png')}}" id="imgenvio" />
            </div>
            <div class="col-md-1"></div>
  
        {{-- <br>
        <br> --}}
        @endforeach
    </div>
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>