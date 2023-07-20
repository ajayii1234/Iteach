<?php
session_start();
require_once("partials/header1.php");


?>
<div class="container-fluid bg-white">

    <div class="row">
        
        <div class="col-md-3"></div>

        <div class="col-md-6  bg-primary py-3 my-5 px-5 form" style="border-radius: 20px;">

            <h1 class="text-center text-white">Sign Up</h1>
           
            <form action="process/registerprocess.php" method="POST" enctype="multipart/form-data" py-5 px-5>
            <?php

if(isset($_SESSION["sum_form_error"])){
 echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
 unset($_SESSION["sum_form_error"]);
}



 ?>
                                    <div class="mb-3 row">
                                        <div class="col-4">
                                        <label for="firstname">First Name&nbsp <span style="color:red">*</span></label>
                                    </div>
                                        <div class="col-8">
                                        <input type="text" id="firstname" name="firstname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-4">
                                      <label for="lastname">Last Name&nbsp <span style="color:red">*</span></label>
                                    </div>
                                      <div class="col-8">
                                      <input type="text" id="lastname" name="lastname" class="form-control">
                                      </div>
                                  </div>

                                  <div class="mb-3 row">
                                    <div class="col-4">
                                      <label for="password" class="col-4">Password&nbsp<span style="color:red">*</span></label>
                                    </div>
                                      <div class="col-8">
                                      <input type="password" id="password" name="password" class="form-control">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <div class="col-4">
                                      <label for="conpwd" class="col-4">Confirm&nbsp<span style="color:red">*</span> Password</label>
                                    </div>
                                      <div class="col-8">
                                      <input type="password" id="conpwd" name="confirmpassword" class="form-control">
                                      </div>
                                  </div>
                                  
                                
                                  <div class="mb-3 row">
                                    <div class="col-4">
                                      <label for="cover">Upload Picture&nbsp <span style="color:red">*</span></label>
                                    </div>
                                      <div class="col-8">
                                      <input type="file" id="cover" name="cover" class="form-control">
                                      </div>
                                  </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-4">
                                        <label for="email">Email Address&nbsp <span style="color:red">*</span></label>
                                        </div>
                                        <div class="col-8">
                                        <input type="email" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <div class="col">
                                      <label for="phone">Phone Number&nbsp <span style="color:red">*</span></label>
                                        </div>
                                      <div class="col-8">
                                      <input type="number" id="phone"  name="phone" class="form-control">
                                      </div>
                                  </div>

                                  <div class="row">
                                          <div class="col-md-4">
                                              <label for="gender">Gender&nbsp <span style="color:red">*</span></label>
                                          </div>
                                          <div class="col-md-8 mb-3">
                                          <input class="form-check-input" type="radio" name="gender" value="male">&nbsp<label>Male</label>&nbsp&nbsp
                                          <input class="form-check-input" type="radio" name="gender" value="female">&nbsp<label>Female</label>
                                          </div>
                                      </div>


                                    <div class="row mb-3">
                                        <div class="col-4">
                                        <label for="addr">Home Address</label>
                                        </div>
                                        <div class="col-8">
                                        <input type="text" id="addr"name="addr" class="form-control">
                                        </div>
                                    </div>

                                  <div class="mb-3 row">
                                    <div class="col">
                                      <label for="password">State&nbsp <span style="color:red">*</span></label>
                                    </div>
                                      <div class="col-8">
                                      <select class="form-control" aria-label="Default select example" name="state">
                                      <option selected>Open this select menu</option>
                                      <option value="Lagos">Lagos</option>
                                      <option value="Abuja">Abuja</option>
                                      <option value="Kano">Kano</option>
                                      <option value="Ogun">Ogun</option>
                                      <option value="Enugu">Enugu</option>
                                      <option value="Ondo">Ondo</option>
                                      </select>
                                  </div>
                                  </div>
                                  
                                  <div col-md-2>
                                  <input type="submit" name="button" id="button" class="btn btn-danger btn-lg">
                                  </div>
            </form>
           
            <p class="mt-3">Already registered?<a href="login.php" class="btn btn-default">Login Here</a></p>
        </div>
        <div class="col-md-3"></div> 
    </div> 
</div>



<?php
require_once("partials/footer.php");
?>