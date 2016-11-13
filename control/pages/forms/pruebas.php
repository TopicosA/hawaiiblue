<?php 
echo "si entra<br/>";
$opcion=$_POST["opcion"];
include('../../../conexion/conexion.php');
switch ($opcion) {
    case 0:
        echo "si entra a r tipo c<br/>";
        $nombretipo=$_POST["nombretipo"];
		$descripciontipo=$_POST["descripciontipo"];
		$preciotipo=$_POST["preciotipo"];
		$conx = new Conexion();
		$tab = "tipo_cabania";
		$dat = array("nombre", "descripcion", "precio");
		$valu = array($nombretipo,$descripciontipo,$preciotipo);
		$conx->conectar();
		$conx->insertar($tab, $valu, $dat);
		$conx->cerrarConexion();
        break;
    case 1:
        $tipoc=$_POST["tipoc"];
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
		$dat = array("idtipoc", "serial", "sector_c","estadoc");
		$valu = array($tipoc,$serialc,$sectorc,$marcac);
		$conx->conectar();
		$conx->insertar($tab, $valu, $dat);
		$conx->cerrarConexion();
        break;
    case 2:
        echo "i es igual a 2";
        break;
}






//echo $_POST["tipoc"];
//echo $_POST["sectorc"];
//echo $_POST["serialc"];
//echo $_POST["marcac"];

?>
