<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php


if(!isset($_GET['dni']))exit();
$id=$_GET['dni'];
	
    require 'conex.php';    

    
    $stmt = $con->prepare("SELECT * FROM TB_EMPLEADO WHERE CODEMPLE =?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC); 
    ?>

    <form action="process.php" method="post">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="dni" value="<?= htmlspecialchars($user['CODEMPLE']) ?>">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="nomb" value="<?= htmlspecialchars($user['NOMBRES']) ?>" required>
        <br>
        <label for="name">APELLIDOS:</label>
        <input type="text" id="email" name="ape" value="<?= htmlspecialchars($user['APELLIDOS']) ?>" required>
        <br>
        <button type="submit">Guardar Cambios</button>
    </form>
    <a href="index.php">Volver</a>
</body>
</html> 