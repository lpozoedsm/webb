<?php

if(!isset($_GET['dni']))exit();
$id=$_GET['dni'];
	
    require 'conex.php';    

    
    $stmt = $con->prepare("delete TB_EMPLEADO WHERE CODEMPLE =?");
    $stmt->execute([$id]);
    header('Location: index.php');
    
    ?>