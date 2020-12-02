<!DOCTYPE html>

<html>
    <head>
        <title>Ingreso Cursos Avanzados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1 class="h1">Ingreso Cursos Avanzados</h1>
        <div class="caja-ca">
            <form method="post" action="conexion.php" name="login">
                <div class="lbl_in">
                    <label>Usuario</label>
                    <input type="text" name="usuario" required/>
                </div>
                <div class="lbl_in2">
                    <label>Contraseña</label>
                    <input type="password" name="contraseña" required/>
                </div>
                <div class="btn_login">
                    <button type="submit" name="login" value="login">ENTRAR</button>
                </div>
                <div class="txt_contacto">
                    <p>¿Aún no tienes una cuenta para disfrutar de los cursos avanzados?
                        <br/><br/>
                        <strong>¡¿Qué estás esperando?!</strong>
                        <br/><br/>
                        Puedes comprar la tuya en el siguiente número de contacto:
                        <br/><br/>
                        +569 84138234
                        <br/><br/>
                        ¡¡No te pierdas las mejores ofertas para seguir aprendiendo con nosotros!!</p>
                </div>
            </form>
        </div>
    </body>
</html>
