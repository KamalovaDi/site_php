<?php
include("dbconnect.php");
 
$query = "SELECT * FROM qwerty";
$result = $mysqli->query($query); //mysql - подключение к базе, query - запрос


while ($row = $result->fetch_assoc()) {
    echo $row["id"] . ': ' . $row["name"] . ': ' . $row["surname"] . ': ' . $row["sex"]; 
}
?>
<form action="dbconnect.php">
     <input type="submit" value="Перейти на dbconnect11111" class="button1" /> <!--переход по кнопке на страницу -->
</form>
