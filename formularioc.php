<?php
function informacion()
{
    session_start();
}
$acceso=array(array("jesus","123"),array("jesus1","1234"));
informacion();
    if((isset($_SESSION['user'])) and (isset($_SESSION['pass'])))
{
  
    $j=0;
    $accesopass=0;
    $auto=0;
    while($j<2)
    {
       
        $i=0;
    while($i<2)
    {
        
        if($acceso[$j][$i]==$_SESSION['user'])
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
        if($acceso[$j][$i]==$_SESSION['pass'])
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
echo "Su información: </br>";
echo "Nombre: ".$_SESSION['nombre']."</br>";
echo "Apellidos: ".$_SESSION['apellidos']."</br>";
echo "DNI: ".$_SESSION['dni']."</br>";
echo "Correo: ".$_SESSION['correo']."</br>";


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
