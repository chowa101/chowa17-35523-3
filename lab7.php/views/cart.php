<?php include '../include/header.php' ?>
<?php include '../controller/cartController.php'; ?>
<link rel="stylesheet" href="../assests/CSS/cart.css">

<div class="container">
  <div class="content">
    <h1 class="display-4"> My Cart</h1>
    <div class="cart-products">
      <?php
      if (isset($_SESSION["myCartProduct"])) {
        $totalPrice = 0;
        foreach ($_SESSION["myCartProduct"] as $myItems) { ?>

          <div class="single-product">
            <div class="d-flex" style="justify-content: space-between;">
              <div class="float-left d-flex">
                <img src="<?php echo $myItems->get_imagePath(); ?>" alt="Food Picture" class="img-fluid" style="width: 4em;">
                <h6><?php echo $myItems->get_title(); ?></h6>
              </div>
              <div class="float-right d-flex">
                <p>Quantity - <b>1</b></p>
                <p>Price :Tk <b> <?php echo $myItems->get_price(); ?></b></p>
              </div>
            </div>

          <?php
          $totalPrice = $totalPrice +  $myItems->get_price();
        } ?>

          <h6 class="font-weight-bold" style="text-align: right;">Total Price => <?php echo $totalPrice; ?></h6>


        <?php
      } else { ?>
          <h3 class="font-weight-bold mb-5">Oops! No Item in your Cart</h3>
        <?php }

        ?>


          </div>
    </div>
  </div>
</div>
</div>


<?php include '../include/footer.php' ?>