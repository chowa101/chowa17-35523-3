<?php
require_once '../model/food.php';

$restaurantId = $_GET["restaurantId"];
$conn = new mysqli('localhost', 'root', '', 'restaurant');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from food where restaurantId = '{$restaurantId}'";
$result = $conn->query($sql);

$allFood = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $thisFood = new Food($row["id"], $row["title"], $row["imagePath"], $row["price"], $row["restaurantId"]);
    array_push($allFood, $thisFood);
  }
}
