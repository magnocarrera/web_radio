<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="css/materialize-icons.css" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pagina Principal</title>

  <style type="text/css">
  #lista_redes li {
  display: inline-block;
  list-style: none;
  padding: 0px 30px;
  }

  </style>
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

  <section>
  <div class="row">
    <div class="col s12">
      <div class="col s8">
        <div class="slider">
          <ul class="slides">
            <li><img src="imagenes/galeria/Imagen-2.JPG"></li>
            <li><img src="imagenes/galeria/imagen5.JPG"></li>
            <li><img src="imagenes/galeria/imagen7.JPG"></li>
          </ul>
        </div>
      </div>

   <div class="col s4">
      <div class="container">
        <ul id="lista_redes">
          <li><img src="imagenes/redes/facebook.png" height="40"></li>
          <li><img src="imagenes/redes/twitter.png" height="40"></li>
        </ul>
      </div>
      <br>
      <div class="container">
        <img src="imagenes/BAYA1.png" height="330" width="330">
      </div>
  </div>
  </div>
  </div>

  <div class="row">
      <div class="col s12">
        <div class="col s8">
              <img src="imagenes/galeria/imagen8.JPG" alt="BAYA PROMOCIONAL" width="630" height="380">
        </div>

        <div class="col s4">
          <div class="container">
            <img src="imagenes/BAYA1.png" width="330" height="330">
          </div>
        </div>
      </div>
  </div>
  </section>

     <script>
        $(document).ready(function(){
         $('.collapsible').collapsible();
        });

        $(function(){
         $(".slider").slider();
        });

        jQuery(document).ready(function($){
         $('ul.tabs').tabs();
        });
     </script>

  </body>
</html>
