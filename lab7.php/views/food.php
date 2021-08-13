<?php include '../include/header.php'; ?>
<?php include '../controller/foodController.php';?>
<link rel="stylesheet" href="../assests/css/food.css" />


<div class="container">
  <div class="content">
    <h1 class="display-4">&#128293; Popular in this Restaurant</h1>
  </div>
  <div class="foods">
    <div class="row">

      <?php
      $n = count($allFood);
      for ($i = 0; $i < $n; $i++) {
      ?>

        <div class="col-md-6">
          <div class="food">
            <div class="d-flex" style="justify-content: space-between">
              <div class="food-info d-flex">
                <img src="<?php echo $allFood[$i]->get_imagePath(); ?>" alt="Food Picture" class="img-fluid food-image" />
                <div class="food-description">
                  <h4 class="card-title"><?php echo $allFood[$i]->get_title(); ?></h4>
                  <p>Tk <?php echo $allFood[$i]->get_price();?></p>
                </div>
              </div>
              <form action="cart.php" method="POST">
                  <input type="text" value="<?php echo  $allFood[$i]->get_id(); ?>" style="display: none;" name="foodId">
                  <button class="btn btn-danger food-add-btn" type="submit">+</button>
              </form>
            </div>
          </div>
        </div>

      <?php } ?>


    </div>
  </div>
</div>



<?php include '../include/footer.php' ?>