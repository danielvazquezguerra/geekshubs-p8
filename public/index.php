<?php


?>

<!DOCTYPE html5>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
       <link rel="stylesheet" href="styles/styles.scss">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <main class="wrapper">
            
            <?=include '../src/containers/header/header.php'?>
            <?=include '../src/containers/main/main.php'?>
            <?=include '../src/containers/menu/menu.php'?>
            
        </main>
      
      <!--JavaScript at end of body for optimized loading-->
       <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>