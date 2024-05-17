<?php
include "../auxiliary/config-loader.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carrera = $_POST['carrera'];
    $nombre_prof = $_POST['prof-name'];
    $curso = $_POST['curso'];
    $comentario = $_POST['comment'];

    $carrera = mysqli_real_escape_string($db, $carrera);
    $nombre_prof = mysqli_real_escape_string($db, $nombre_prof);
    $curso = mysqli_real_escape_string($db, $curso);
    $comentario = mysqli_real_escape_string($db, $comentario);

    $sql = "INSERT INTO comentarios (carrera, nombre_prof, curso, comentario) VALUES ('$carrera', '$nombre_prof', '$curso', '$comentario')";

    if ($db->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

// Step 6: Close the database connection
$db->close();
?>
