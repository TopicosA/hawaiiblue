<?php 
    session_start();
    if(isset($_SESSION["usuario_admin"]))
    {
        $html = file_get_contents('index.html');
        $html = str_replace('Usuario Administrador',$_SESSION["usuario_admin"],$html);
        echo $html;
    } 
    else{
        echo '<html><script type="text/javascript">
            window.location.href = "http://localhost/xxx/hawaiiblue/login/";
        </script></html>';
    }
?>

