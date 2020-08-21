<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de inicio</title>
</head>
<body>
    <h1><center>Proyecto Laravel</center></h1>
    <p><b><big><center>Nombre del Proyecto:</big></b>“M0V1E F0R A11” </center></p>
    <h2>*Acerca del proyecto:*</h2>
    <p>Primeramente, quiero hacer este proyecto debido a que fue mi primera inspiración de trabajo cuando comenzaba a 
    aprender programación, pero con el tiempo me fui dando cuenta que eso solo sería posible cuando manejara bien un 
    lenguaje de programación y un framework que en este caso serían: PHP y Laravel.<br>
    Esta idea vino cuando yo buscaba en internet películas o enlaces para ver dichas películas,
    pero me fui dando cuenta de que costaba mucho tiempo encontrar las películas con su información
    y su enlace a la vez por esa razón tuve la idea de hacer un sitio web que contenga películas famosas 
    con su respectiva información y su enlace para ver la película de modo gratuito.</p>
    
    <p><a href="<?php echo route('/categorias') ?>">Ir a las categorias</a></p>
    <p><a href="<?php echo route('/objetivo') ?>">Ir a los objetivos</a></p>
    <p><a href="<?php echo route('/necesidad') ?>">Ver la necesidad</a></p>
    <p><a href="<?php echo route('/alcance') ?>">Ver el alcance</a></p>
    <p><a href="<?php echo route('/futuro') ?>">ver el futuro</a></p>
    <p><a href="<?php echo route('/despedida') ?>">Despedida</a></p>

    <center><img src="https://economiatic.com/wp-content/uploads/2018/02/finanzas.jpg?ezimgfmt=rs:352x227/rscb11/ng:webp/ngcb11" width="350" height="250"></center>
    
    <style>
            html, body {
                background-color: #000000;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 2;
            }

        </style>
</body>
</html>