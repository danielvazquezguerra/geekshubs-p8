<?php

require_once '../lib/bd.php';

$platos = getPlatos($conector);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    
</head>
<body>


    <section id="menu" class="menu">

<?php
    
        foreach($platos as $plato) {
            foreach($plato as $detalles) {
                
?>

        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="images/office.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i
                        class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i
                        class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
        </div>

<?php
    
        }
    }
    
?>


    </section>




    
</body>
</html>




