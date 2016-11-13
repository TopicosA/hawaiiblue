<?php session_start();?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>lOGIN-HAWAII-BLUE</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/login.js"></script>
    </head>

    <body>
       <!-- Mostrar lista de todos los Administradores -->
			<table id="tablaAdministrador">
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
                    <h1>LOGIN ADMINISTRATIVOo</h1>
					<form action="login2.php" method="POST">
                    <input type="text" name="usuario" value="" placeholder="Username"/>
                    <input type="password" name="password" value="" placeholder="Password"/>
                    
                        <button type="submit" id="button_login">Login</button>
                    </form>
                    <!-- <p>Not a member? <span>Sign Up</span></p> -->
                </div>
            </div>
        </div>
        



    </body>
</html>
