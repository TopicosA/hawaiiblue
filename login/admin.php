<?php 
    session_start();
    
    if(isset($_SESSION["usuario_admin"]))
    {
    	echo "sesion";
    } 
    else{
        echo "no hay sesion";
    }
?>