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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <a href="profesores.php" class="nav-item active"><i data-lucide="school"></i>Profesores</a>
            <a href="acerca.php" class="nav-item about"><i data-lucide="info"></i>Acerca</a>
        </nav>

        <div id="posts-container">

            <div class="post">
                <div class="body" style="margin-top: 0.5em;">
                    <span id="prof-comment">
                        <h1 style="margin: 0">Comentarios sobre Profesores</h1>
                        <h4>Escribe aquí los comentarios que tengas sobre algún profesor.</h4>

                        <form id="comentarios-prof">
                            <select name="carrera" id="carrera-selector">
                                <option value="actuaria">Actuaría</option>
                                <option value="arquitectura">Arquitectura</option>
                                <option value="cd">Ciencia de Datos</option>
                                <option value="cpap">Ciencias Políticas y Administración Pública</option>
                                <option value="comunicacion">Comunicación</option>
                                <option value="derecho">Derecho</option>
                                <option value="diseno">Diseño Gráfico</option>
                                <option value="economia">Economía</option>
                                <option value="ei">Enseñanza del Inglés</option>
                                <option value="filosofia">Filosofía</option>
                                <option value="historia">Historia</option>
                                <option value="ingenieria">Ingeniería Civil</option>
                                <option value="lengua">Lengua y Literatura Hispánicas</option>
                                <option value="mac">Matemáticas Aplicadas y Computación</option>
                                <option value="pedagogia">Pedagogía</option>
                                <option value="ri">Relaciones Internacionales</option>
                                <option value="sociologia">Sociología</option>
                            </select><br><br>

                            <label for="prof-name">Nombre del profesor</label><br>
                            <input type="text" id="prof-name" name="prof-name"><br>

                            <label for="curso">Curso</label><br>
                            <input type="text" id="curso" name="curso"><br>

                            <label for="comment">Comentario</label><br>
                            <textarea name="comment" rows="10" cols="20"></textarea>

                            <input type="submit" class="action-button" value="Enviar">
                        </form>
                    </span>
                </div>
            </div>

        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <script>
        $(document).ready(function() {
            $('#comentarios-prof').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: '../auxiliary/profesores-form.php',
                    data: formData,
                    success: function(response) {
                        alert("¡Gracias por tus comentarios! Se los haremos llegar a quien corresponda.");
                        $('#comentarios-prof')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + " - " + error);
                    }
                });
            });
        });
    </script>
</body>
</html>
