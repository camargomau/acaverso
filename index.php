<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acaverso</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">

    <link rel="stylesheet" href="auxiliary/styles.css">
    <script src="auxiliary/script.js"></script>
</head>
<body>
    <div id="content">

        <nav id="navbar">
            <a id="encabezado" href="index.php"><i id="encabezado-icon" data-lucide="book-a"></i><span id="encabezado-text">Acaverso</span></a>
            <a href="index.php" class="nav-item active"><i data-lucide="home"></i>Inicio</a>
            <a href="pages/anuncios.php" class="nav-item"><i data-lucide="megaphone"></i>Anuncios</a>
            <a href="pages/estudiantes.php" class="nav-item"><i data-lucide="graduation-cap"></i>Estudiantes</a>
            <a href="pages/ventas.php" class="nav-item"><i data-lucide="badge-dollar-sign"></i>Ventas</a>
            <a href="pages/citas.php" class="nav-item"><i data-lucide="message-circle-heart"></i>Citas</a>
            <a href="pages/profesores.php" class="nav-item"><i data-lucide="school"></i>Profesores</a>
            <a href="pages/acerca.php" class="nav-item about"><i data-lucide="info"></i>Acerca</a>
        </nav>

        <div id="posts-container">
            <?php
            $environment = getenv('ACAVERSO_ENV');

            if ($environment === 'azure') {
                $db = mysqli_init();
                mysqli_ssl_set($db, NULL, NULL, "auxiliary/DigiCertGlobalRootCA.pem", NULL, NULL);

                $hostname = getenv("DB_HOST");
                $username = getenv("DB_USER");
                $password = getenv("DB_PASSWORD");
                $database = getenv("DB_NAME");
                $port = getenv("DB_PORT");

                $db_connection = mysqli_real_connect($db, $hostname, $username, $password, $database, $port, MYSQLI_CLIENT_SSL);

                if (!$db_connection) {
                    die("Connection failed: " . mysqli_connect_error());
                }
            } else {
                include 'auxiliary/config-local.php';
            }

            $sql = "
                SELECT author_img, author_author, author_date, body_h2, NULL AS body_price, body_p, body_img, like_count, 'anuncios' AS table_name FROM anuncios
                UNION
                SELECT author_img, author_author, author_date, body_h2, NULL AS body_price, body_p, body_img, like_count, 'estudiantes' AS table_name FROM estudiantes
                UNION
                SELECT author_img, author_author, author_date, body_h2, body_price, body_p, body_img, like_count, 'ventas' AS table_name FROM ventas
                ORDER BY author_date DESC;
            ";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($row['table_name'] === 'anuncios' || $row['table_name'] === 'estudiantes') {
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
                    } else if ($row['table_name'] === 'ventas') {
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
                        echo '<h3 class="price">' . $row["body_price"] . '</h3>';
                        echo $row["body_p"];
                        if (!empty($row["body_img"])) {
                            echo '<img src="' . $row["body_img"] . '">';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } else {
                echo "<p>Ninguna publicación encontrada.</p>";
            }
            ?>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
