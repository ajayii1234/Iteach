<?php
  require_once("partials/header1.php");
  session_start();
?>
    <div class="row justify-content-center first firstRow">
        <div class="col-md-9">
            
                <h1>Contact Us</h1>
                <p>If you have any questions or concerns, please feel free to get in touch with us using the form below:</p>
                <form action="process/processcontact.php" method="POST">
                <?php
                if(isset($_SESSION["submit"])){
                echo "<p class='text-danger'>". $_SESSION["submit"] ."</p>";
                unset($_SESSION["submit"]);
                }
                ?>
                  <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class='form-control mb-3'required>
                  </div>
                  <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control mb-3" required>
                  </div>
                  <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" class="form-control mb-3" required></textarea>
                  </div>
                  <button type="submit" name="button" class="btn btn-primary btn-lg mb-3">Send</button>
                </form>
                
                <div class="contact-info">
                  <h2>Our Address:</h2>
                  <p>14, Akinyemi Tawose Street<br>Ogudu, Lagos, Nigeria</p>
                  
                  <h2>Phone:</h2>
                  <p>+2347014252586</p>
                  
                  <h2>Email:</h2>
                  <p><a href="#" class="links">info@I-teach.com</a></p>
                </div>
              
        </div>
    </div>
   

    <?php
      require_once("partials/footer.php");
    ?>