<?php
require_once("guard/adminguard.php");
    
    $users = new User();
    $allusers = $users->fectchAllusers();
    //print_r($allusers);

       // Check if the delete button is clicked
   if (isset($_POST['delete'])) {
    $user_id = $_POST['user_id'];
    $users->deleteUser($user_id);
    }
?>

<?php
   require_once("partials/header.php");
?>


    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped">
    <a href="adminprofile.php">Back to Profile</a>
        <h1 class="text-center">All Users</h1>
        <thead>
            <th>Serial Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
          
        </thead>

        <tbody>
            <?php
            $sn = 1;
        
                foreach($allusers as $user){
                    ?>
            
                    
                    <tr>
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $user["user_firstName"] ?></td>
                        <td><?php echo $user["user_lastName"] ?></td>
                        <td><a href='userDetails.php?id=<?php echo $user["user_id"]?>' class="btn btn-outline-primary">View more details</a></td>
                        <td>
                            <form action="#" method="post" style="display: inline-block;">
                            <input type="hidden" name="user_id" value="<?php echo $user["user_id"]; ?>">
                            <button type="submit" class="btn btn-outline-primary" name="delete">Delete User</button>
                        </form>
                            </td>
                    </tr>
<?php
                }


            ?>
        </tbody>
</table>
            </div>
            </div>

 <?php
  require_once("partials/footer1.php");
?>