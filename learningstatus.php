<?php
   
    require_once("guard/customerguard1.php");
    $track = new Tracker();
    $alltracked = $track->fectchAllrecords();

?>

<?php

  require_once("classes/Others.php"); //to get the details of the user

$user_id = $_SESSION["user_id"];

$userone = new User();
$user = $userone->GetUserDetails($user_id);

//print_r($user);
//die();

?>

<?php require_once("partials/header1.php");?>
   
<?php require_once("partials/sidebar.php");?>
                              
        <h1 class="text-center">Tracked Progress</h1>
   
    <table class="table table-striped ml-4">
        <thead>
            <th>Serial Number</th>
            <th>session</th>
            <th>title</th>
            <th>content</th>
            <th>status</th>
            <th>date</th>
            <th>Action</th>

        </thead>

        <tbody>

            <?php

        $sn = 1;
                foreach($alltracked as $tracks){

                    ?>

                        <tr> 
                            <td><?php echo $sn++ ?></td>
                            <td><?php echo $tracks["tracker_section"] ?></td>
                            <td><?php echo $tracks["tracker_title"] ?></td>
                            <td><?php echo $tracks["tracker_content"] ?></td>
                            <td><?php echo $tracks["tracker_status"] ?></td>
                            <td><?php echo $tracks["tracker_date"] ?></td>
                            <td> <div><a href='updatetracker.php?id=<?php echo $tracks["tracker_id"];?>' target="_blank"  class="btn btn-outline-primary">Update Tracker</a></div></td>
                        </tr>

        

                    <?php
                }


            ?>
        </tbody>
</table>
            </div>
            </div>
            </div>
            
   
 <?php

  require_once("partials/footer.php");
?>



