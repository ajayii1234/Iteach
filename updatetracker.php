<?php
require_once("guard/customerguard1.php");
require_once("partials/header1.php");
require_once("classes/Others.php");
require_once("classes/Tracker.php");

$user_id = $_SESSION["user_id"];

$userone = new User();
$user = $userone->GetUserDetails($user_id);

$use = $_SESSION["user_id"];

$newtrack = new Tracker();
$newtrackers = $newtrack->fectchAllrecords();

?>

<?php require_once("partials/sidebar.php");?> 

<h2 class="text-center">Update Tracker</h2>

<?php foreach ($newtrackers as $newtracker): ?>
    <?php if (isset($_GET['record_id']) && $_GET['record_id'] == $newtracker['tracker_id']) : ?>
        <form action="process/processtrackerupdate.php" method="post">
            <div class="mb-3">
                <label for="section" class="form-label">Choose section</label>
                <select class="form-control" aria-label="Default select example" name="section">
                    <option selected>..Open this select menu..</option>
                    <option value="New Word">New Word</option>
                    <option value="History">History</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Enter Word or History Question</label>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo $newtracker['tracker_title']; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Input Word Definition or History content</label>
                <textarea type="email" class="form-control" id="content" name="content" aria-describedby="emailHelp"><?php echo $newtracker['tracker_content']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="ability" class="form-label">Learning status</label>
                <select class="form-control" aria-label="Default select example" name="ability">
                    <option selected>Open this select menu</option>
                    <option value="don't understand">don't understand</option>
                    <option value="still comprehending">still comprehending</option>
                    <option value="fully understands">fully understands</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp">
            </div>
            <input type="hidden" name="tracker_id" value="<?php echo $newtracker['tracker_id']; ?>">
            <button type="submit" class="btn btn-danger mb-3" name="updatebtn">Set Tracker</button>
        </form>
    <?php else : ?>
        <a href="?record_id=<?php echo $newtracker['tracker_id']; ?>">Edit Tracker <?php echo $newtracker['tracker_id']; ?></a>
    <?php endif; ?>
<?php endforeach; ?>
    

<?php require_once("partials/footer.php"); ?>
 
   