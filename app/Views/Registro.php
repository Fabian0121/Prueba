<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
    </head>
    <body>
        <form>
        	<center>
        		<form method="post" action="index.php?controller=Usuario&action=verificarRegistro">
        			<label>Nombre</label><br>
                    <input type="text" name="nombre" requiered value="">
                    <br>
        			<label>Apellido Materno</label> <br>
                    <input type="text" name="apellidoP" requiered value=""></p>
                    <br>
                    <label>Apellido Materno</label> <br>
                    <input type="text" name="apellidoM" requiered value=""></p>
                    <br>
                    <label>Correo</label> <br>
                    <input type="texts" name="correo" requiered value=""></p>
                    <br>
                    <label>Edad</label> <br>
                    <input type="text" name="edad" requiered value=""></p>
                    <br>
                    <label>Contrasenia</label> <br>
                    <input type="text" name="contrasenia" requiered value=""></p>
                    <br>
        			<input type="submit" name="enviar">
        		</form>
        	</center>
        </form>
    </body>
</html>