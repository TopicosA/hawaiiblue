<?php 
include('../../../conexion/conexion.php');
        $tipoc=$_POST["tipoc"];
        $idcab=$_POST["idcab"];
		$sectorc=$_POST["sectorc"];
		$serialc=$_POST["serialc"];
		$marcac=$_POST["marcac"];
		if ($tipoc =="Dual") {
			$tipoc=1;
		} elseif ($tipoc =="Familiar") {
			$tipoc=2;
		} elseif ($tipoc=="Especial") {
			$tipoc=3;
		}
		$conx = new Conexion();
		$tab = "cabania";
        $valu = array($tipoc,$serialc,$sectorc,$marcac);
        $valPr = $idcab;
        $datPr ="idcabania";
		$dat = array("idtipoc", "serial", "sector_c","estadoc");
		
		$conx->conectar();
		$conx->update($tab, $valu, $valPr, $datPr, $dat);
		$conx->cerrarConexion();
?>
