<!DOCTYPE html>
  <html>
    <head>
      <link href="css/materialize-icons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Contactanos</title>
    </head>

    <body>

    <header>
      <div class="row">
        <?php
          include("cabecera.php"); 
        ?>
      </div>
    </header>
    

    <br><br>
    <div class="container">
      <div class="row">
        <P>SI ERES UN CANTANTE SALSERO Y DESEAS QUE PROMOCIONEMOS TUS CANCIONES, SIN COSTO ALGUNO, ENVIANOS TU<br>
        AUDIO POR MEDIO DEL SIGUIENTE FORMULARIO, ASI COMO TAMBIEN ENVIANOS TUS DATOS PARA UNA ENTREVISTA<br>
        EN CUALQUIERA DE NUESTROS PROGRAMAS.</P>
      </div>
    </div>

    <div class="container">
       
             <form action="" class="col s12">
               <div class="input-field">
                 <input type="text" name="nombre" id="nombre">
                 <label for="nombre">NOMBRE</label>
               </div>

               <div class="input-field">
                 <input type="text" name="apellido" id="apellido">
                 <label for="apellido">APELLIDO</label>
               </div>

               <div class="input-field">
                 <input type="tel" name="telefono" id="telefono">
                 <label for="telefono">TELEFONO</label>
               </div>

               <div class="input-field">
                 <input type="email" name="correo" id="correo" class="validate">
                 <label for="email">CORREO DE CONTACTO</label>
               </div>

               <div class="input-field">
                 <textarea name="mensaje" id="mensaje"></textarea>
                 <label for="mensaje">COMENTARIO</label>
               </div>

               <div class="input-field">
                 <input type="submit" Value="GUARDAR" id="guardar">
                 <input type="reset" Value="CANCELAR" id="cancelar">
               </div>
             </form>
       </div>
    </div>

      <script>
        $(document).ready(function(){
         $('.collapsible').collapsible();
        });
     </script>
    </body>
  </html>