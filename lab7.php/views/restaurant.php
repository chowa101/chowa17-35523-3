<?php include '../include/header.php'; ?>
<?php include '../controller/restaurantListController.php'; ?>



<link rel="stylesheet" href="../assests/CSS/Restaurant.css" />


<div class="container">
  <div class="content">
    <h1 class="content-h1 display-4">Popular Restaurant</h1>
    <div class="row">



      <?php
      $n = count($allRestaurant);
      for ($i = 0; $i < $n; $i++) {
      ?>

        <div class="col-md-3">
        <?php $thisRestaurantUrl = "food.php?restaurantId={$allRestaurant[$i]->get_id()}"; ?>
          <a href="<?php echo $thisRestaurantUrl; ?>" class="card-link">
            <div class="card">
              <img src="<?php echo $allRestaurant[$i]->get_imagePath(); ?>" alt="Card-image" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">   <?php echo $allRestaurant[$i]->get_title(); ?>    </h4>
                <p>    <?php echo $allRestaurant[$i]->get_description(); ?>      </p>
              </div>
            </div>
          </a>
        </div>


      <?php } ?>





    </div>
  </div>
</div>
<?php include '../include/footer.php' ?>