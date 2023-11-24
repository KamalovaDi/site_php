<?php
include("..\php\dbconnect.php");
 
// Запрос на выборку всех изображений из базы данных
$query = "SELECT id, name, created_at FROM images";
$result = $mysqli->query($query);
 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div>';
        echo '<img src="image.php?id=' . $row['id'] . '" alt="' . $row['name'] . '">';
        echo '<p>' . $row['created_at'] . '</p>';
        echo '</div>';
    }
} else {
    echo "Изображения отсутствуют в базе данных.";
}
 

?>