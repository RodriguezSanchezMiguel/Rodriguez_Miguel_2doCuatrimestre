<?php
require_once "conexion.php";

$mensaje = isset($_GET["mensaje"]) ? $_GET["mensaje"] : "";
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : "";
$busqueda = isset($_GET["q"]) ? trim($_GET["q"]) : "";
$pagina = isset($_GET["pagina"]) ? (int) $_GET["pagina"] : 1;
$registrosPorPagina = 5;

if ($pagina < 1) {
    $pagina = 1;
}

$offset = ($pagina - 1) * $registrosPorPagina;

$autores = [];

$totalRegistros = 0;

if ($busqueda === "") {
    $resultadoTotal = mysqli_query($conn, "SELECT COUNT(*) AS total FROM autores");
    if ($resultadoTotal) {
        $filaTotal = mysqli_fetch_assoc($resultadoTotal);
        $totalRegistros = (int) $filaTotal["total"];
    }
} else {
    $sqlTotal = $conn->prepare("SELECT COUNT(*) AS total FROM autores WHERE nombre LIKE ?");
    $filtroTotal = "%" . $busqueda . "%";
    $sqlTotal->bind_param("s", $filtroTotal);
    $sqlTotal->execute();
    $resultadoTotal = $sqlTotal->get_result();
    if ($resultadoTotal) {
        $filaTotal = $resultadoTotal->fetch_assoc();
        $totalRegistros = (int) $filaTotal["total"];
    }
    $sqlTotal->close();
}

$totalPaginas = max(1, (int) ceil($totalRegistros / $registrosPorPagina));
if ($pagina > $totalPaginas) {
    $pagina = $totalPaginas;
    $offset = ($pagina - 1) * $registrosPorPagina;
}

if ($busqueda === "") {
    $sql = $conn->prepare("SELECT id, nombre, nacionalidad FROM autores ORDER BY id DESC LIMIT ? OFFSET ?");
    $sql->bind_param("ii", $registrosPorPagina, $offset);
    $sql->execute();
    $resultado = $sql->get_result();

    if ($resultado) {
        while ($fila = $resultado->fetch_assoc()) {
            $autores[] = $fila;
        }
    }

    $sql->close();
} else {
    $sql = $conn->prepare("SELECT id, nombre, nacionalidad FROM autores WHERE nombre LIKE ? ORDER BY id DESC LIMIT ? OFFSET ?");
    $filtro = "%" . $busqueda . "%";
    $sql->bind_param("sii", $filtro, $registrosPorPagina, $offset);
    $sql->execute();
    $resultado = $sql->get_result();

    if ($resultado) {
        while ($fila = $resultado->fetch_assoc()) {
            $autores[] = $fila;
        }
    }

    $sql->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Autores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 24px;
            background: #f4f6f8;
            color: #1f2937;
        }

        .contenedor {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            padding: 24px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr auto;
            gap: 12px;
            margin-bottom: 20px;
        }

        input {
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
        }

        button {
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1e40af;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        .mensaje-ok {
            padding: 10px;
            border-radius: 6px;
            background: #dcfce7;
            color: #166534;
            margin-bottom: 16px;
        }

        .mensaje-error {
            padding: 10px;
            border-radius: 6px;
            background: #fee2e2;
            color: #991b1b;
            margin-bottom: 16px;
        }

        .btn-eliminar {
            color: #b91c1c;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-editar {
            color: #1d4ed8;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
        }

        .btn-eliminar:hover {
            text-decoration: underline;
        }

        .btn-editar:hover {
            text-decoration: underline;
        }

        .vacio {
            color: #6b7280;
            margin: 0;
        }

        .form-busqueda {
            display: grid;
            grid-template-columns: 1fr auto auto;
            gap: 12px;
            margin-bottom: 16px;
        }

        .btn-limpiar {
            background: #e5e7eb;
            color: #111827;
            text-decoration: none;
            border-radius: 6px;
            padding: 10px 16px;
            text-align: center;
        }

        .paginacion {
            margin-top: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .paginacion a {
            color: #1d4ed8;
            text-decoration: none;
            font-weight: bold;
        }

        .paginacion a:hover {
            text-decoration: underline;
        }

        .estado-pagina {
            color: #374151;
        }

        .numeros-pagina {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .numero-pagina {
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 6px 10px;
            color: #1d4ed8;
            text-decoration: none;
            font-weight: bold;
            min-width: 18px;
            text-align: center;
        }

        .numero-pagina.activa {
            background: #1d4ed8;
            border-color: #1d4ed8;
            color: #fff;
        }

        @media (max-width: 700px) {
            form {
                grid-template-columns: 1fr;
            }

            .form-busqueda {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Gestor bibliotecario</h1>

        <?php if ($mensaje !== ""): ?>
            <div class="<?php echo $tipo === "ok" ? "mensaje-ok" : "mensaje-error"; ?>">
                <?php echo htmlspecialchars($mensaje); ?>
            </div>
        <?php endif; ?>

        <form action="procesar_registro.php" method="POST">
            <input type="text" name="nombre_autor" placeholder="Nombre del autor" required>
            <input type="text" name="nacionalidad" placeholder="Nacionalidad" required>
            <button type="submit">Registrar</button>
        </form>

        <form class="form-busqueda" action="index.php" method="GET">
            <input
                type="text"
                name="q"
                placeholder="Buscar por nombre"
                value="<?php echo htmlspecialchars($busqueda); ?>"
            >
            <button type="submit">Buscar</button>
            <a class="btn-limpiar" href="index.php">Limpiar</a>
        </form>

        <?php if (count($autores) === 0): ?>
            <p class="vacio">No se encontraron autores.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Nacionalidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($autores as $autor): ?>
                        <tr>
                            <td><?php echo (int) $autor["id"]; ?></td>
                            <td><?php echo htmlspecialchars($autor["nombre"]); ?></td>
                            <td><?php echo htmlspecialchars($autor["nacionalidad"]); ?></td>
                            <td>
                                <a
                                    class="btn-editar"
                                    href="editar_autor.php?id=<?php echo (int) $autor["id"]; ?>"
                                >Editar</a>
                                <a
                                    class="btn-eliminar"
                                    href="eliminar_autor.php?id=<?php echo (int) $autor["id"]; ?>"
                                    onclick="return confirm('Seguro que deseas eliminar este autor?');"
                                >Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="paginacion">
                <div>
                    <?php if ($pagina > 1): ?>
                        <a href="index.php?pagina=<?php echo $pagina - 1; ?>&q=<?php echo urlencode($busqueda); ?>">Anterior</a>
                    <?php endif; ?>
                </div>
                <div class="estado-pagina">
                    <div>Pagina <?php echo $pagina; ?> de <?php echo $totalPaginas; ?></div>
                    <div class="numeros-pagina">
                        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                            <a
                                class="numero-pagina <?php echo $i === $pagina ? "activa" : ""; ?>"
                                href="index.php?pagina=<?php echo $i; ?>&q=<?php echo urlencode($busqueda); ?>"
                            ><?php echo $i; ?></a>
                        <?php endfor; ?>
                    </div>
                </div>
                <div>
                    <?php if ($pagina < $totalPaginas): ?>
                        <a href="index.php?pagina=<?php echo $pagina + 1; ?>&q=<?php echo urlencode($busqueda); ?>">Siguiente</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
