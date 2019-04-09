<!DOCTYPE html>
  <html>
    <head>
      <link href="css/materialize-icons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Perfil</title>
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

    <br><br>

    <div class="container">
    <div class="row">
      <div class="col s12">
        <ul class="collapsible" data-collapsible="accordion">
          <li class="active">
            <div class="collapsible-header"><i class="material-icons">flare</i>Mision</div>
            <div class="collapsible-body"><span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">flare</i>Vision</div>
            <div class="collapsible-body"><span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">flare</i>Valores</div>
            <div class="collapsible-body"><span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></div>
          </li>
        </ul>
      </div>
    </div>
  </div>

      <script>
        $(document).ready(function(){
         $('.collapsible').collapsible();
        });
     </script>
    </body>
  </html>
