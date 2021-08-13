<?php


$emailErr = $passErr = $cpasswordErr =  "";
$email = $password = "";
$exist ="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"])){
        $emailErr = "email  is required!";
    }else{
        $email = $_POST["email"];
    }

    if(empty($_POST["password"])){
        $passErr ="password can not be empty";
    }else{
        $password = $_POST["password"];
    }

    if($_POST["password"]!==$_POST["cpassword"]){
        $cpasswordErr = "password does not match";
    }

    if(!empty($_POST["email"])&& !empty($_POST["password"])&&$_POST["password"]==$_POST["cpassword"]){
        $conn = new mysqli('localhost', 'root', '', 'restaurant');

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "insert into user(email,password,category) values('{$_POST["email"]}','{$_POST["password"]}','customer')";
        

        if ($conn->query($sql) === TRUE) {
            header("Location:index.php");
            exit();
          } else {
            $exist="Opps! I don't know why this error occourd but I Can not insert you as a user!";
        }
    }
}


