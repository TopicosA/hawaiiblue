<!DOCTYPE HTML>
<html>
    <head>
        <title>Conexion</title>
    </head>
    <body>
        <?php 

        class Conexion{

            //Atributos.
            private $host = "localhost";	//Host como localhost, como no tenemos un domio toca así jaja.
            private $user = "root";			//Usuario por defecto en MySQL.
            private $pw = "topicos";		//Me imagino que todos usaron como contraseña topicos como se dijo en el chat.
            private $db = "hwiblue";		//El nombre de la base de datos, espero todos la tengan con el mismo nombre.
            private $con;					//Objeto que mantendrá la conexión con la base de datos.

            //Métodos.

            public function conectar(){	//Método que conecta con la base de datos.
                $this->con = mysqli_connect($this->host, $this->user, $this->pw, $this->db);
                if (!$this->con) {
                    echo "<script>alert(\"Error al conectar a la base de datos\");</script>";//Una alerta por si hay un error al conectarse a la base de datos, lo hice en javascript porque no se hacerla así en php.
                }
            }

            public function cerrarConexion(){	//Método que cierra la conexión con la base de datos, muy importante hacer esto.
                mysqli_close($this->con);
            }

            /* 	Método creado para realizar cualquier consulta sql, insert,select, update, delete, etc. No se si es seguro hacer este 
				 *	metodo, planeo hacer un metodo para los update, select y demás para ahorrarles el escribir la consulta completa 
				 *	pero por ahora pueden usar este si necesitan hacer alguna otra cosa aparte de un insert
				 */
            public function consultar($query){		
				$result = $this->con->query($query);
				return $result;
            }

            /*	Método que sirve para realizar un insert a la bd
				 *	$tabla 		=>	El nombre la tabla a la que se le hara el insert
				 *	$valores 	=>	los valores de los campos de la tabla
				 *	$datos 		=>	El nombre de los campos que se insertaran valores, si se envia una cadena vacia o no se manda nada
				 *					se tomara como que se hara una insercion a todos los campos
				 */
            public function insertar($tabla, $valores, $datos = ""){	
                $sql = "INSERT INTO $tabla";

                if (!empty($datos[0])) {
                    $sql = $this->completarConsultaSql($datos, $sql, "");
                }


                $sql .= " VALUES";
                $sql = $this->completarConsultaSql($valores, $sql, "'");
                $sql .= ";";

                mysqli_query($this->con, $sql);
            }

            public function completarConsultaSql($datos, $sql, $simbolo){ // Método que sirve para ahorrar codigo
                $val = count($datos) -1;
                $sql .= " (";

                for($i = 0; $i <= $val; $i++) {
                    $sql .= $simbolo . $datos[$i] . $simbolo;

                    if ($i < $val) {
                        $sql .= ", ";
                    }

                }

                $sql .= ")";
                return $sql;
            }

            public function update($tabla, $valores, $vlrprincip, $datoprincip, $datos = ""){	
                $sql = "UPDATE $tabla";

                echo "primera cadena ".$sql;

                if (!empty($datos[0])) {
                    echo "entra al if datos no vacio";
                    $sql = $this->completarConsultaUpdt($datos, $valores, $datoprincip, $vlrprincip, $sql);
                    
                }
                echo "Se ha generado el sql ".$sql;
                mysqli_query($this->con, $sql);
                /*if (!mysqli_query($this->con, $sql)) { 
                    die('Error: ' . mysqli_error()); 
                } */
            }

            public function completarConsultaUpdt($datos, $valores, $datoprincip, $vlrprincip, $sql){ // Método que sirve para ahorrar codigo
                $val = count($datos) -1;
                $sql .= " SET ";
                for($i = 0; $i <= $val; $i++) {
                    $sql .=  $datos[$i] . "="."'".$valores[$i]."'";

                    if ($i < $val) {
                        $sql .= ", ";
                    }

                }

                $sql .= " WHERE ".$datoprincip."='".$vlrprincip."';";
                return $sql;
            }


            //public function consultar($consulta){ //Método que planeo usar para hacer los selects

            //}


        }

        /*
			$conx = new Conexion();
			$tab = "tipo_cabania";
			$dat = array("nombre", "descripcion", "precio");
			$valu = array("matrimonial", "casados", 23.543);
			$conx->conectar();
			$conx->insertar($tab, $valu, $dat);
			$conx->cerrarConexion();

*/			
        ?>
    </body>
</html>