<!DOCTYPE html>

<html>
    <head>
        <title>Cursos Gratis - Párrafos HTML</title>
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
                <h2>Párrafos HTML</h2>
                Un párrafo siempre comienza en una nueva línea y suele ser un bloque de texto.
                <br/>
                El elemento &lt;p&gt; deine un párrafo.
                <div class="code-ventana">
                    &lt;p&gt; Esto es un párrafo &lt;/p&gt;
                </div>
                <h3>Saltos de línea</h3>
                El elemento &lt;br&gt; define un salto de línea.
                <div class="code-ventana">
                    &lt;p&gt; Es es &lt;br&gt; un párrafo &lt;br&gt; con salto de línea &lt;/p&gt;
                    <br/><br/>
                    <strong>Muestra:</strong>
                    <p>Esto es <br> un párrafo <br/> con salto de línea</p>
                </div>
                <h3>Elemento &lt;pre&gt;</h3>
                El elemento &lt;pre&gt; define un texto preformateado, es decir, se muestra la fuente de un ancho fijo y se conservan tanto los espacios como los saltos de línea
                <div class="code-ventana">
<pre>
&lt;pre&gt;
    El texto conserva su tamaño.

    Respeta los saltos de línea.

    Sin la necesidad de usar más etiquetas.
&lt;/pre&gt;
</pre>
                </div>
            </div>
        </div>
    </body>
</html>

