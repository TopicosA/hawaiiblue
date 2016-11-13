<?php
session_start();
unset($_SESSION["usuario_admin"]);
session_destroy();
echo 1;
?>