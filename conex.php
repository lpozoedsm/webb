<?php 

 $host='DESKTOP-7JFPHTR';
    $dbname='BD_ASISTENCIA';
    $username='sa';
    $pasword ='Luis@1234';  
    $puerto=1433;
$con = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($con){
   
}else{
    echo"no hay conexion";
}
?>    
