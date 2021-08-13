

<?php include '../Controller/registrationController.php'; ?>


<link rel="stylesheet" href="../assests/CSS/login.css">
<div class="container">
    <div class="my-content">
        <h5 class="font-weight-bold">Register Account</h5>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="logInForm" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control form-control-sm" name="email">
                <?php if (isset($emailErr)) { ?>
                    <p style="color: red;"><?php echo $emailErr ?></p>
                <?php   } ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-sm" name="password">
                <?php if (isset($passErr)) { ?>
                    <p style="color: red;"><?php echo $passErr ?></p>
                <?php   } ?>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control form-control-sm" name="cpassword">
                <?php if (isset($cpasswordErr)) { ?>
                    <p style="color: red;"><?php echo $cpasswordErr ?></p>
                <?php   } ?>
            </div>
            <button class="btn btn-primary" type="submit">Register</button>
        </form>
        <h6 class="font-weight-bold" style="color: red; text-align:center">
            <?php if (isset($exist)) {
                echo $exist;
            } ?>
        </h6>
        <p style="text-align: center;">Already Have an Account?</p>
        <button class="btn btn-success"><a href="login.php" style="color:white;">Go To LogIn Page</a></button>
    </div>
</div>


<script>  function validateForm(){
    let email = document.forms['logInForm']['email'].value;
    let password = document.forms['logInForm']['password'].value;
    if(email==""&&password==""){
        alert("email and password must be filled");
    }else if(email==""&&password!=""){
        alert("email is required");
    }else if(password==""&&email!=""){
        alert("password is required");
    }
}  </script>
