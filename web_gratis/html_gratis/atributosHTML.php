<!DOCTYPE html>

<html>
    <head>
        <title>Cursos Gratis - Atributos HTML</title>
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
                <h2>Atributos HTML</h2>
                Los atributos HTML proporcionan información adicional sobre los elementos.
                <ul>
                    <li>Todos los elementos HTML pueden tener atributos</li>
                    <li>Los atributos proporcionan información adicional sobre los elementos</li>
                    <li>Los atributos siempre se especifican en la etiqueta de inicio</li>
                    <li>Los atributos generalmente vienen en pares nombre/valor, por ejemplo: nombre = "valor"</li>
                </ul>
                <h3>Atributo href</h3>
                La etiqueta &lt;a&gt; define un hipervínculo. El atributo href especifica la url de la página que se está en enlazando:
                <div class="code-ventana">
                    &lt;a href="aquí va el URL"&gt; Texto para mostrar &lt;/a&gt;
                </div>
                <h3>Atributo src</h3>
                La etiqueta &lt;img&gt; se utiliza para inscrutar una imagen en la web. El atributo src especifica la ruta a la imagen:
                <div class="code-ventana">
                    &lt;img src="URL de la imagen"&gt;
                </div>
                <h3>Atributo alt</h3>
                El atributo alt requerido para la etiqueta &lt;img&gt; especifica un texto alternativo en caso de que la imagen no se pueda cargar.
                <div class="code-ventana">
                    &lt;img src="URL de la imagen" alt="Texto alternativo"&gt;
                </div>
                <h3>Atributo style</h3>
                El atributo style se usa para agregar estilos a un elemento; color, fuente, tamaño, etc.
                <div class="code-ventana">
                    &ltp style="color:red;"&gt; Esto es un Texto &lt;/p&gt;
                </div>
            </div>
        </div>
    </body>
</html>

