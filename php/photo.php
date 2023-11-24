
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="image" accept="image/*">
  <input type="submit" value="Загрузить">
</form>

<?php
include("..\php\dbconnect.php");
// Проверка, был ли файл изображения отправлен
if (isset($_FILES['tovar'])) {
    $name = $_FILES['tovar']['NameTov']; // Имя файла
    $image = addslashes(file_get_contents($_FILES['tovar']['tmp_NameTov'])); // Данные изображения
 
    // Запись изображения в базу данных
    $query = "INSERT INTO images (name, image, created_at) VALUES ('$name', '$image', NOW())";
 
    if ($mysqli->query($query) === TRUE) {
        echo "Изображение успешно загружено в базу данных.";
    } else {
        echo "Ошибка загрузки изображения в базу данных: " . $mysqli->error;
    }
 
    // Закрытие соединения с базой данных
    $mysqli->close();
}
?>
