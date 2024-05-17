<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acaverso</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">

    <link rel="stylesheet" href="../auxiliary/styles.css">
    <script src="../auxiliary/script.js"></script>
</head>
<body>
    <div id="content">

        <nav id="navbar">
            <a id="encabezado" href="../index.php"><i id="encabezado-icon" data-lucide="book-a"></i><span id="encabezado-text">Acaverso</span></a>
            <a href="../index.php" class="nav-item"><i data-lucide="home"></i>Inicio</a>
            <a href="anuncios.php" class="nav-item"><i data-lucide="megaphone"></i>Anuncios</a>
            <a href="estudiantes.php" class="nav-item"><i data-lucide="graduation-cap"></i>Estudiantes</a>
            <a href="ventas.php" class="nav-item"><i data-lucide="badge-dollar-sign"></i>Ventas</a>
            <a href="citas.php" class="nav-item"><i data-lucide="message-circle-heart"></i>Citas</a>
            <a href="profesores.php" class="nav-item"><i data-lucide="school"></i>Profesores</a>
            <a href="acerca.php" class="nav-item about active"><i data-lucide="info"></i>Acerca</a>
        </nav>

        <div id="posts-container">

            <div class="post">
                <div class="body" style="margin-top: 0.5em;">
                    <h1 style="margin: 0">Acerca</h1>
                    <p>
                        <b>Matemáticas Aplicadas y Computación.</b>
                        <br>
                        <b>Facultad de Estudiantes Superiores Acatlán.</b>
                    </p>
                    <p>
                        Primer proyecto para <em>Desarrollo Web</em>. Grupo 2602, profesora Alma López Blanco.
                    </p>
                    <p>
                        <a href="https://github.com/camargomau/acaverso">Repositorio GitHub.</a>
                    </p>
                    <p>
                        Elaborado por:
                    </p>
                    <ul>
                        <li>Burciaga Piña Erick Osvaldo</li>
                        <li>Camargo Badillo Luis Mauricio</li>
                        <li>Gudiño Romero Miguel Angel</li>
                        <li>Gutiérrez Flores Daniel</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
