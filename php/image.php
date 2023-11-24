<?php

// Проверка, был ли передан идентификатор изображения
if (isset($_GET['id'])) {
    $id = $_GET['id']; // Идентификатор изображения
 
    // Запрос на выборку данных изображения из базы данных
    $query = "SELECT image FROM images WHERE id = $id LIMIT 1";
    $result = $mysqli->query($query);
 
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Content-type: image/jpeg"); // Задаем тип контента
 
        echo $row['image']; // Выводим данные изображения
    }
}
 
// Закрытие соединения с базой данных
$mysqli->close();
?>