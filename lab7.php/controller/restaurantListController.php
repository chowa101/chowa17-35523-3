<?php
require_once '../model/restaurant.php';
        $conn = new mysqli('localhost', 'root', '', 'restaurant');

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select * from restaurant";
        $result = $conn->query($sql);

        $allRestaurant = array();

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $thisRestaurant = new Restaurant($row["id"],$row["title"],$row["imagePath"],$row["description"]);
                array_push($allRestaurant,$thisRestaurant);
            }
        }
