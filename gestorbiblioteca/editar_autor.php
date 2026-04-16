<?php

require_once "conexion.php";

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

if ($id <= 0) {
    header("Location: index.php?mensaje=ID invalido&tipo=error");
    exit;
}

$sql = $conn->prepare("SELECT id, nombre, nacionalidad FROM autores WHERE id = ? LIMIT 1");
$sql->bind_param("i", $id);
$sql->execute();
$resultado = $sql->get_result();
$autor = $resultado ? $resultado->fetch_assoc() : null;

if (!$autor) {
    $sql->close();
    $conn->close();
    header("Location: index.php?mensaje=Autor no encontrado&tipo=error");
    exit;
}

$sql->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar autor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 24px;
            background: #f4f6f8;
            color: #1f2937;
        }

        .contenedor {
            max-width: 620px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            padding: 24px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        form {
            display: grid;
            gap: 12px;
        }

        input {
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
        }

        .acciones {
            display: flex;
            gap: 10px;
            margin-top: 6px;
        }

        .btn {
            border: none;
            border-radius: 6px;
            padding: 10px 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-guardar {
            background: #2563eb;
            color: #fff;
        }

        .btn-volver {
            background: #e5e7eb;
            color: #111827;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Editar autor</h1>
        <form action="procesar_edicion.php" method="POST">
            <input type="hidden" name="id" value="<?php echo (int) $autor["id"]; ?>">
            <input type="text" name="nombre_autor" value="<?php echo htmlspecialchars($autor["nombre"]); ?>" required>
            <input type="text" name="nacionalidad" value="<?php echo htmlspecialchars($autor["nacionalidad"]); ?>" required>
            <div class="acciones">
                <button class="btn btn-guardar" type="submit">Guardar cambios</button>
                <a class="btn btn-volver" href="index.php">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
