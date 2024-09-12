<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <a href="create.html">Crear Nuevo Usuario</a>
    <table border="1">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>APELLIDOS</th>
                <th>AREA</th>
                <th>EMPRESA</th>
                <th>CODSTARSOTF</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'conex.php';

            $stmt = $con->query("SELECT * FROM TB_EMPLEADO");
            while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>{$user['CODEMPLE']}</td>";
                echo "<td>{$user['NOMBRES']}</td>";
                echo "<td>{$user['APELLIDOS']}</td>";
                echo "<td>{$user['AREA']}</td>";
                echo "<td>{$user['EMPRESA']}</td>";
                echo "<td>{$user['CODSTARSOTF']}</td>";
                echo "<td>
                        <a href='update.php?dni={$user['CODEMPLE']}'>Editar</a> |
                        <a href='delete.php?dni={$user['CODEMPLE']}'>Eliminar</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>