<?php
    include('../conexion/conexion.php');
	$conx=new Conexion();
	$conx->conectar();
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $result=$conx->consultar("select * from usuario where usuario='$usuario' and password ='$password'");
    //$sql->execute();
    //print_r("select * from usuario where n_usuario='$usuario' and password ='$password'");
    //$array =  $sql->fetch(); // Use fetchAll() if you want all results, or just iterate over the statement, since it implements Iterator
	if ($result->num_rows > 0) {
					    // output data of each row
					    if($row = $result->fetch_assoc()) {
							session_start();
							$_SESSION["usuario_admin"] = $row["usuario"];
							echo $_SESSION["usuario_admin"];
							header('Location: ../control/index.php');

							
					    }
	}						

    // if(empty($sql)){
    	// echo "Usuario o Password erroneo";
    // }
    // else{
    	// session_start();
    	// $_SESSION["usuario_admin"] = $array["nombre"];
    	// //echo $_SESSION["usuario_admin"];
    	// echo 1;
    // }
	$conx->cerrarConexion();
?>

