<!DOCTYPE html>

<html>
    <head>
        <title>Cursos Gratis - Estilos HTML</title>
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
                <h2>Estilos HTML</h2>
                El style es un atributo que se usa para agregar diferentes estilos a un elemento.
                <div class="code-ventana">
                    <p style="color:red;">Soy rojo</p>
                    <p style="color:blue;">Soy azul</p>
                    <p style="font-size:28px;">Soy grande</p>
                </div>
                <h3>El atributo de estilo</h3>
                El atributo tiene la siguiente sintaxis:
                <div class="code-ventana">
                    &lt;elemento style="propiedad:valor;"&gt;
                </div>
                la propiedad corresponde a un valor CSS.
                <h3>Color de Fondo</h3>
                La propiedad background-color define el color de fondo de un elemento.
                <div class="code-ventana">
<pre>
&lt;body style="background-color:powderblue;"&gt;

&lt;/body&gt;
</pre>
                </div>
                <h3>Color de Texto</h3>
                La propiedad color define el color de texto de un elemento.
                <div class="code-ventana">
                    &lt;h1 style="color:blue"&gt; Esto es un título &lt;/h1&gt;
                </div>
                <h3>Fuentes</h3>
                La propiedad font-family de CSS define la fuente del texto a utilizar.
                <div class="code-ventana">
                    &lt;h1 style="font-family:verdana"&gt; Esto es un título &lt;/h1&gt;
                </div>
                <h3>Tamaño de Fuente</h3>
                La propiedad font-size de CSS define el tamaño de la fuente a utilizar.<br/>
                Se puede utilizar en px o %
                <div class="code-ventana">
                    &lt;h1 style="font-size:300%;"&gt; Esto es un título &lt;/h1&gt;<br/>
                    &lt;p style="font-size:30px;"&gt; Esto es un título &lt;/p&gt;
                </div>
                <h3>Alineación del Texto</h3>
                La propiedad text-align de CSS define la alineación horizontal del texto.
                <div class="code-ventana">
                    &lt;h1 style="text-align:center;"&gt; Esto es un título &lt;/h1&gt;<br/>
                    &lt;p style="text-align:justify;"&gt; Esto es un título &lt;/p&gt;
                </div>
            </div>
        </div>
    </body>
</html>

