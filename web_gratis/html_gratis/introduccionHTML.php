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
        <?php require 'menuHtml.php' ?>
        
        <div class="txt-box">
            <div class="p-box">
                <h2>Introducción HTML</h2>
                <ul>
                    <li>HTML son las siglas de Hyper Text Markup Lenguage</li>
                    <li>HTML es el lenguaje de marcado estándar para crear páginas web</li>
                    <li>HTML crea la estructura de una página web</li>
                    <li>Los elementos de HTML le dicen al navegador cómo mostrar el contenido</li>
                    <li>Los elementos de HTML etiquetan el contenido de la web</li>
                </ul>
                <div class="code-ventana">
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Titulo&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Mi primer Heading&lt;/h1&gt;
        &lt;p&gt;Mi primer paragraph.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;    
</pre>                  
                </div>
                <h3>Ejemplo explicado</h3>
                <ul>
                    <li>La declaración &lt;!DOCTYPE html&gt; define que este documento es HTML5</li>
                    <li>El elemento &lt;html&gt; es la raíz de una web HTML</li>
                    <li>El elemento &lt;head&gt; contiene metainformación sobre la web</li>
                    <li>El elemento &lt;title&gt; especifica un título para la web, mismo que se muestra en la barra del navegador</li>
                    <li>El elemento &lt;body&gt; define el cuerpo del documento y es un contenedor para todo lo visible de la web</li>
                    <li>El elemento &lt;h1&gt; define el encabezado más grande</li>
                    <li>el elemento &lt;p&gt; define un párrafo</li>
                </ul>
                <h3>¿Qué es un elemento HTML?</h3>
                Un elemento HTML se define mediante una etiqueta de inicio, algo de contenido y una etiqueta final.
                <br/>
                <h4>&lt;nombre de etiqueta&gt; El contenido va aquí... &lt;/nombre de etiqueta&gt;</h4>
                El elemento HTML es todo, desde la etiqueta inicial hasta la final.
                <br/><br/>
            </div>
        </div>
    </body>
</html>
