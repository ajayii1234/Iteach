<?php
require_once("partials/header1.php");
?>
<div class="container-fluid bg-white">

    <div class="row">
        
        <div class="col-md-3"></div>

        <div class="col-md-6  bg-primary py-5 my-5 px-5" style="border-radius: 20px;">
            <h1 class="text-center text-white">Admin Login</h1>
            <form action="process/processadminlogin.php" method="POST" py-5 px-5>
            <div class="mb-3 row">
                                        <label for="email" class="col-4"><br>Email Adrress</label>
                                        <div class="col-8">
                                        <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                      <label for="password" class="col-4"><br>Password</label>
                                      <div class="col-8">
                                      <input type="password" id="password" name="password" class="form-control">
                                      </div>
                                  </div>

                <button type="submit" name="button" class="btn btn-danger btn-lg">Submit</button>
            </form>
            <p class="mt-3">Not yet a member?<a href="userregister.php" class="btn btn-default">Register Here</a></p>
        </div>
        <div class="col-md-3"></div> 
    </div> 
</div>



<?php
require_once("partials/footer.php");
?>