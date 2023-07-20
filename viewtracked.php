<?php
require_once("guard/adminguard2.php");

    $tracks = new Tracker();
    $alltrackers = $tracks->fectcharecord();
    
?>

<?php
   require_once("partials/header.php");
?>


    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped">
    <a href="adminprofile.php">Back to Profile</a>
        <h1 class="text-center">All Tracked</h1>
        <thead>
            <th>Serial Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Section</th>
            <th>Title</th>
            <th>Content</th>
            
          
        </thead>

        <tbody>
            <?php
            $sn = 1;
        
                foreach($alltrackers as $track){
                    ?>
            
                    
                    <tr>
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $track["user_firstName"] ?></td>
                        <td><?php echo $track["user_lastName"] ?></td>
                        <td><?php echo $track["tracker_section"] ?></td>
                        <td><?php echo $track["tracker_title"] ?></td>
                        <td><?php echo $track["tracker_content"] ?></td>
                       
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