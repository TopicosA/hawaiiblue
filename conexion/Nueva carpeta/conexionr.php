<?php
$array_ini = parse_ini_file("inicio.ini");
print_r($array_ini);
$motor=$array_ini["motor"];
$host=$array_ini["host"];
$based=$array_ini["basededatos"];
$usuari=$array_ini["usuario"];
$passwor=$array_ini["password"];
$puerto=$array_ini["puerto"];
$conn='';
try{
$conn = new PDO("$motor:host=$host;dbname=$based", "$usuari", "$passwor");
echo "entro leidy genial";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}
?>