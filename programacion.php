<!DOCTYPE html>
  <html>


    <head>
      <!--Import Google Icon Font-->
      <link href="css/materialize-icons.css" rel="stylesheet">
      <link href="css/lista.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Programacion</title>
      <script>
      $(function(){
         $(".slider").slider({
            indicators: true,
          });
        });
      </script>
    </head>


    <body>

    <header>
      <div class="row">
        <?php
          include("cabecera.php"); 
        ?>
      </div>
    </header>
    <br>
  

    <div class="container">
    <div class="row">
      <div class="col s12 center-align"> 
       <div class="slider">
        <ul class="slides">
           <li><img src="imagenes/slider_programas/Pro_FB_CAMARON.jpg"></li> 
           <li><img src="imagenes/slider_programas/Prog_FB_CONTODAS.jpg"></li> 
           <li><img src="imagenes/slider_programas/Prog_FB_SELECTEO.jpg"></li>
           <li><img src="imagenes/slider_programas/Prog_FB_OYEMISON.jpg"></li>
           <li><img src="imagenes/slider_programas/Prog_FB_GIGANTESENACCION.jpg"></li> 
           </ul>
       </div>
      </div>
    </div>
    </div>
   

    
    <div class="row">

      <div class="col s12">        
        <div class="col s8 left-align">
          <ul id="menu_especial">
            <li class="dia"><a class="modal-trigger" href="#modal1">LUNES</a></li>
            <li class="dia"><a class="modal-trigger" href="#modal2">MARTES</a></li>
            <li class="dia"><a class="modal-trigger" href="#modal3">MIERCOLES</a></li>
            <li class="dia"><a class="modal-trigger" href="#modal4">JUEVES</a></li>
            <li class="dia"><a class="modal-trigger" href="#modal5">VIERNES</a></li>
            <li class="dia"><a class="modal-trigger" href="#modal6">SABADO</a></li>
            <li class="dia"><a class="modal-trigger" href="#modal7">DOMINGO</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <?php
            include("lunes.php");
          ?>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-action modal-close btn black">OK</a>
        </div>
      </div>
      
      <div id="modal2" class="modal modal-fixed-footer">
        <div class="modal-content">
          <?php
            include("martes.php");
          ?>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-action modal-close btn black">OK</a>
        </div>
      </div>

      <div id="modal3" class="modal modal-fixed-footer">
        <div class="modal-content">
          <?php
            include("miercoles.php");
          ?>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-action modal-close btn black">OK</a>
        </div>
      </div>

      <div id="modal4" class="modal modal-fixed-footer">
        <div class="modal-content">
          <?php
            include("jueves.php");
          ?>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-action modal-close btn black">OK</a>
        </div>
      </div>

    </div>
          
          

    
    
   
    <script>
      $(function(){
        $('#modal1, #modal2, #modal3, #modal4').modal();
      })
    </script>
      
    </body>
  </html>