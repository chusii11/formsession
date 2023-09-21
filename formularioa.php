    
    <?php
    $acceso=array(array("jesus","123"),array("jesus1","1234"));
    if((isset($_POST['user'])) and (isset($_POST['pass'])))
{
  
    $j=0;
    $accesopass=0;
    $auto=0;
    while($j<2)
    {
       
        $i=0;
    while($i<2)
    {
        
        if($acceso[$j][$i]==$_POST['user'])
        {
            $auto=1;
            $fila=$j;
            break;
        }else{
         
        }
        $i++;
    }
    $j++;
}
    $i=0;
    $j=0;
    while($j<2)
    {
        $i=0;
    while($i<2)
    {
        if($acceso[$j][$i]==$_POST['pass'])
        {
            $accesopass=1;
            $fila2=$j;
            break;
        }else{
           
        }
        $i++;
     
    }
    $j++;
}
 if($auto==1 and $accesopass==1 and $fila==$fila2 )
 {
    function login($informacion)
{
    session_start();
    $_SESSION['user']=$informacion['user'];
    $_SESSION['pass']=$informacion['pass'];
}
if(isset($_SESSION['user'])){
}else{
        login($_POST);
    }  

    ?>
    
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="formulariob.php" method="post">
    <label>Nombre</label>
    <input type="text" name="nombre">
    </br>
    <label>Apellidos</label>
    <input type="text" name="apellidos">
    </br>
    <label>DNI</label>
    <input type="text" name="dni">
    </br>
    <label>Correo</label>
    <input type="text" name="correo">
    </br>
   <input type="submit" value="Continuar"/>
    </form>
    </body>
    </html>
    <?php

 }else{
    echo "acceso no autorizado";
 }

}else{
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formularioa.php" method="post">
<label>introduce usuario</label>
<input type="text" name="user">
</br>
<label>introduce password</label>
<input type="pass" name="pass">
<input type="submit">
</form>
</body>
</html>

<?php

}


?>


