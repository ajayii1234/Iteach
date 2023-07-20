
<div class="container">
    
    <div class="row" style="background-color: #D1D4C9;">
  
    <div class="col-md-3 mb-4">
    <div class="card mt-4" style="border-radius: 20px;">
      <div class="card-header py-3" style="border-radius: 20px; border:2px solid grey">
        <h5 class="mb-0 text-center"><span><b><?php echo $user["user_firstName"]." " .$user["user_lastName"];?></b></span></h5>
      </div>
      <div class="card-body">
       <div class="row">
        <div class="col-12">
            <div class="text-center mb-3">
                
                <img src='<?php echo "process/".$user["user_image"]; ?>' class="img-fluid rounded-circle">

            </div>
             
            <hr>
             <div class="text-center">
             
            <span><i>Member From <?php echo date("d-m-y", strtotime($user["user_created"]))?> in <?php echo $user["user_state"];?></i></span>
        </div> 
        </div>

      
       </div>
      </div>
    </div>
  </div>


  <div class="col-md-9 mb-4">
    <div class="card mt-4" style="border-radius: 20px;">
      <div class="card-header py-3" style="border-radius: 20px;  border:2px solid grey">
      <h5 class="mb-0">Hello <?php echo $user["user_lastName"];?>!    <span style="float: right;"><a href="userprofile.php">Back to Profile</a></span></h5>
    
      </div>
      <div class="card-body" style="min-height:200px">