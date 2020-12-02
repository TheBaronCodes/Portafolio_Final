<!DOCTYPE html>

<html>
    <head>
        <title>Cursos Gratis - Introducción HTML</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/html_gratis.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <?php require '../header.php' ?> 
        <?php require 'menuCSS.php' ?>
        
        <div class="txt-box">
            <div class="p-box">
                <h2>Introducción a CSS</h2>
                <h3>¿Qué es CSS?</h3>
                <ul>
                    <li>CSS son las siglas de Cascading Style Sheets</li>
                    <li>Controla el diseño de como se mostrarán los elementos en la pantalla</li>
                    <li>Se almacenan normalmente en una hoja externa al HTML</li>
                </ul>
                <h3>¿Por qué utilizar CSS?</h3>
                CSS se utiliza para definir estilos de las páginas webs, incluidas todas las variantes de visualización y diferentes tamaños.
                <div class="code-ventana">
<pre>
body {
    background-color: blue;
}

h1 {
    color: white;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 20px;
}
</pre>
                </div>
            </div>
        </div>
    </body>
</html>

