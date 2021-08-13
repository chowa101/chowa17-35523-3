<?php
require_once '../Model/Food.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $foodId = $_POST["foodId"];
    $conn = new mysqli('localhost', 'root', '', 'restaurant');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from food where id = '{$foodId}'";
    $result = $conn->query($sql);

    $myCartProduct = array();
    if ($result->num_rows > 0) {
        $tempProduct = $result->fetch_assoc();
        $thisProduct = new Food($tempProduct["id"], $tempProduct["title"], $tempProduct["imagePath"], $tempProduct["price"], $tempProduct["restaurantId"]);
        if(isset($_SESSION["myCartProduct"])){
            foreach($_SESSION["myCartProduct"] as $product){
                array_push($myCartProduct,$product);
            }
        }
        array_push($myCartProduct,$thisProduct);
        $_SESSION["myCartProduct"] = $myCartProduct;
    } 



}
