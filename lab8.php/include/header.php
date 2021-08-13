<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant Management System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../assests/CSS/style.css">
</head>

<body>
  <div class="full-wrapper">
    <div class="container">
      <div class="d-flex between">
        <h4>Suraiya Restaurant</h4>
        <div class="float-right d-flex">
          <i class='fa fa-user user-logo'></i>
          <p class="login"><a href="login.php">LogIn</a></p>
          <a href="cart.php"><i class="fa fa-shopping-cart shopping-cart-logo"></i></a>
        </div>
      </div>
      <nav class="navbar navbar-expand-sm justify-content-center menu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="restaurant.php" class="nav-link">Restaurant</a>
          </li>
        </ul>
      </nav>
      <div class="content">
        <h1 class="display-4">
          Food delivery from best restaurants
        </h1>
        <div class="d-flex input-box">
          <input type="text" class="form-control" placeholder="Enter Your Desired Restaurant Name" onkeyup="showResult(this.value)">
          <button class="btn btn-warning">Find Restaurant</button>
        </div>
        <div class="search-result" id="search-result" style="cursor: pointer;"> 
        </div>
      </div>
    </div>
  </div>
  </div>



  <script>
    function showResult(str) {

      if (str.length == 0) {
        document.getElementById("search-result").innerHTML = "";
        document.getElementById("search-result").style.border = "0px";
        return;
      }
      let xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
        output = "";
        if (this.status == 200) {
          console.log(this.responseText);
          const products = JSON.parse(this.responseText);
          for (let i in products) {
            output += `<ul> <li> <a href="food.php?restaurantId= ${products[i].id}">  ${products[i].title} </a> </li></ul>`;
            /* output += products[i].title; */
          }

          document.getElementById('search-result').innerHTML = output;
        }
      }
      xmlhttp.open("GET", "../Controller/livesearch.php?q=" + str, true);
      xmlhttp.send();
    }
  </script>