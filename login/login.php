<?php
	
	$cnn = mysqli_connect("localhost", "edsn", "1234", "hwiblue");				
	if (mysqli_connect_errno())
		die("<br><br>ERROR: No se logro la conexion a la base de datos...<br><br><br>" . mysqli_connect_error());
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>lOGIN-HAWAII-BLUE</title>
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
       <!-- Mostrar lista de todos los Administradores -->
			<table id="tablaAdministrador">
			<?php			
				if( $rs = mysqli_query($cnn, "SELECT * FROM usuario")) {	
					mysqli_free_result($rs);
				}else{
					die("<br><br>ERROR: No se ejecuto con exito la consulta sql...<br><br><br>" . mysqli_error($cnn));
				}
			?>		
			</table>
        <div class="vid-container">
            <video id="Video1" class="bgvid back" autoplay="true" muted="muted" preload="auto" loop>
                <source src="../media/milky.mp4" type="video/mp4">
            </video>
            <div class="inner-container">
                <video id="Video2" class="bgvid inner" autoplay="true" muted="muted" preload="auto" loop>
                    <source src="../media/milky.mp4" type="video/mp4">
                </video>
                <div class="box">
                    <h1>LOGIN ADMINISTRATIVO</h1>
                    <input type="text" placeholder="Username"/>
                    <input type="text" placeholder="Password"/>
                    <form action="../control/index.html">
                        <button type="submit">Login</button>
                    </form>
                    <!---<p>Not a member? <span>Sign Up</span></p>--->
                </div>
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>



    </body>
</html>
