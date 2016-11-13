<?php
include("../../../conexion/conexion.php");
$idtipo = $_POST['idtipo'];
$nombretip = $_POST['nombretip'];
$descripctip = $_POST['descripctip'];
$preciotip = $_POST['preciotip'];

$conx = new Conexion();
			$tab = "tipo_cabania";
            $valu = array($nombretip, $descripctip, $preciotip);
            $valPr = $idtipo;
            $datPr ="idtipoc";
			$dat = array("nombre", "descripcion", "precio");
			$conx->conectar();
			$conx->update($tab, $valu, $valPr, $datPr, $dat);
			$conx->cerrarConexion();
?>