<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Platform</title>
</head>
<body>
    <h1>Posts</h1>
    <?php
    include 'config-remote.php';

    $sql = "SELECT username, content, post_date FROM posts ORDER BY post_date DESC";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='post'>";
            echo "<h2>" . htmlspecialchars($row['username']) . "</h2>";
            echo "<p>" . htmlspecialchars($row['content']) . "</p>";
            echo "<small>Posted on " . $row['post_date'] . "</small>";
            echo "</div>";
        }
    } else {
        echo "No posts available.";
    }

    $db->close();
    ?>
</body>
</html>
