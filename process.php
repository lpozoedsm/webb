<?php
require 'conex.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'create') {
        $id = $_POST['dni'];
        $name = $_POST['name'];
        $email = $_POST['ape']; 
        $area = $_POST['area']; 
        $empresa = $_POST['empresa'];
        $codstart = $_POST['start'];

        $stmt = $con->prepare("INSERT INTO TB_EMPLEADO (CODEMPLE,NOMBRES, APELLIDOS,AREA,EMPRESA,CODSTARSOTF) VALUES (?,?,?,?,?,?)");
        $stmt->execute([$id,$name, $email,$area,$empresa, $codstart]);

        header('Location: index.php');
    } elseif ($action === 'update') {
        $id = $_POST['dni'];
        $name = $_POST['nomb'];
        $email = $_POST['ape'];

        $stmt = $con->prepare("UPDATE TB_EMPLEADO SET NOMBRES =?, APELLIDOS =? WHERE CODEMPLE =?");
        $stmt->execute([$name, $email, $id]);

        header('Location: index.php');
    }
}
?>