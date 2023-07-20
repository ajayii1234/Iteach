<?php
require_once("guard/adminguard1.php");
    
    $contact = new Contact();
    $allcontacts = $contact->contactmessage();
    //print_r($allcontacts);
?>

<?php
   require_once("partials/header.php");
?>


    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped">
    <a href="adminprofile.php">Back to Profile</a>
        <h1 class="text-center">All Responses</h1>
        <thead>
            <th>Serial Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date created</th>
            <!-- <th>Username</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Address</th>
            <th>State</th> -->
        </thead>

        <tbody>
            <?php
            $sn = 1;
        
                foreach($allcontacts as $contacts){
                    ?>
            
                    
                    <tr>
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $contacts["contact_name"] ?></td>
                        <td><?php echo $contacts["contact_email"] ?></td>
                        <td><?php echo $contacts["contact_message"] ?></td>
                        <td><?php echo $contacts["date_created"] ?></td>
                      
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