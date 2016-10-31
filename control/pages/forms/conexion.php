    <form method='post' action=''>
    <input type='text' name='NombreCat'/>
    <input type='text' name='Descripcion'/>
    </form>
     
    <?php
    if(isset($_POST['NombreCat']) && isset($_POST['Descripcion'])) 
    crear_categoria(); 
     
    function crear_categoria() 
    { 
        $con = mysql_connect("localhost","usuario","contraseña"); 
        if (!$con) 
              { 
              die('Could not connect: ' . mysql_error()); 
              } 
     
        mysql_select_db("control_t", $con); 
     
    if(isset($_POST['nombre-usuario']) && isset($_POST['contrasena-usuario'])) 
    { 
        $sql=("INSERT INTO t_categorias(id, NombreCat, Descripcion) VALUES (' ' , '$_POST[NombreCat]','$_POST[Descripcion]')"); 
        if (!mysql_query($sql,$con)) 
              { 
              die('Error: ' . mysql_error()); 
              } 
        echo " El cliente se ha agregado"; 
    } 
    } 
     
    ?>