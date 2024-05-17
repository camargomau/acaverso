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
            <a id="encabezado" href="../index.html"><i id="encabezado-icon" data-lucide="book-a"></i><span id="encabezado-text">Acaverso</span></a>
            <a href="../index.html" class="nav-item"><i data-lucide="home"></i>Inicio</a>
            <a href="anuncios.php" class="nav-item active"><i data-lucide="megaphone"></i>Anuncios</a>
            <a href="estudiantes.php" class="nav-item"><i data-lucide="graduation-cap"></i>Estudiantes</a>
            <a href="ventas.php" class="nav-item"><i data-lucide="badge-dollar-sign"></i>Ventas</a>
            <a href="citas.php" class="nav-item"><i data-lucide="message-circle-heart"></i>Citas</a>
            <a href="profesores.php" class="nav-item"><i data-lucide="school"></i>Profesores</a>
            <a href="acerca.php" class="nav-item about"><i data-lucide="info"></i>Acerca</a>
        </nav>

        <div id="posts-container">
            <?php
            include "../auxiliary/config-loader.php";

            $sql = "SELECT * FROM anuncios ORDER BY author_date DESC";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="post">';
                    echo '<div class="author">';
                    echo '<img src="' . $row["author_img"] . '">';
                    echo '<div class="author-text">';
                    echo '<span><b>' . $row["author_author"] . '</b></span>';
                    echo '<span class="date">' . $row["author_date"] . '</span>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="body">';
                    echo '<h2>' . $row["body_h2"] . '</h2>';
                    echo $row["body_p"];
                    if (!empty($row["body_img"])) {
                        echo '<img src="' . $row["body_img"] . '">';
                    }
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>Ninguna publicación.</p>";
            }
            $db->close();
            ?>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
