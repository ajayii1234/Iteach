<?php
  require_once("partials/header1.php");
?>

<style>
  *{
box-sizing:border-box;
}
	

.form{
  border-radius: 20px;
}

div{
border:0px solid red;
}

.one{
font-size: 2rem;
}

.two{
  background-size: 85%;
}

.off_canvas{
  background-color: gray;
}

.termsOfuse{
  color:red;
  text-decoration: none;
}

.list{
  list-style:none;
}

.customer{
  background-color: #9AB3F5;
}

.review{
  background-color: #B9FFFC;
}

.transaction{
  background-color: #A3DAF4;
}

h1,h2,h3,h4,h5,p,a,button,input,div{
  font-family:algerian serif;
}

.links{
  text-decoration: none;
}

.footer{
  color:white;
}

.bg-last{
  background-color:#5E3B4D;
}

.footer-padding{
  padding-left:30px;
}

.firstRow{
  background-color: #D1D4C9;
  padding-top:30px;
}

.first{
  padding-top:20px;
}

.second{
  background-color: #F4E5C2;
}

.firstFeature{
  background-color: #F7F5DD;
}

#a1{
	min-height:630px;
	width:100%;
	background-image:url(assets/images/banner.jpg);

}

#a2{
	height:640px;
	width:100%;
	background-color:rgba(0,0,0,0.7);
}

.hero-button {
  background-color: rgb(13,110,253);
  color: white;
  padding: 10px 20px;
  border-radius: 20px;
  text-decoration: none;
  font-size: 18px;
  margin-top: 20px;
}

.hero-button:hover {
  background-color: rgb(25, 45, 156);
}

.overlay {
  background-color: rgba(0, 0, 0, 0.6);
}

.safefix{
  text-align: center;
}



.image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px; 
}

.image-container img {
  max-width: 100%;
  max-height: 100%;
}

.text-container {
  text-align: center;
  margin-top: 20px;
}


/* #a1{
	height:700px;
	width:100%;
	background-image:url(assets/images/repair.jpg);
} */

/* video starts */

/* video ends */

</style>

<!-- overlay -->

<section>
  <div class="card text-bg-primary d-none d-sm-block safefix" id="ho">
    <img src="assets/images/irobot1.png" class="card-img" alt="phones">
    <div class="card-img-overlay overlay animate__animated animate__fadeIn">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 pt-5 animate__animated animate__slideInUp" style="color: white">
          <h1><strong class="animate__animated animate__bounceIn">Learning is easy and fun with Intelligent Teach</strong></h1>
          <p class="card-text animate__animated animate__fadeInLeft"><strong>With I-teach, you can easily search out new words and know their meanings and learn about political History and more at the comfort of your home and loved ones.</strong></p>
          <p class="card-text animate__animated animate__fadeInRight"><small><a href="userregister.php" class="btn hero-button btn-primary animate__animated animate__slideInLeft">Register</a>
          <a href="login.php" class="btn hero-button btn-primary animate__animated animate__slideInRight">Login</a></small></p>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
</section>

  



        <!-- Features Section -->
        <section>
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="image-container">
        <img src="assets/images/robot7.jpg" class="image-fluid">
      </div>
      <div class="text-container">
        <h2>Embracing the Future of Education</h2>
        <p> I-Teach, an innovative learning platform, harnesses the power of artificial intelligence (AI) to empower learners. Through personalized instruction, interactive engagement, and accessible education.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image-container">
        <img src="assets/images/robot1.png">
      </div>
      <div class="text-container">
        <h2>Elevate Your Learning Journey</h2>
        <p>With I-Teach, embark on a transformative learning journey where knowledge becomes a catalyst for personal growth. Experience the power of AI-driven instruction as I-Teach enables users to track their learning progress, providing valuable insights and fostering a sense of accomplishment. Discover a world of limitless intellectual development, where continuous learning and self-improvement are at the forefront. Join I-Teach today and unlock your full intellectual potential.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image-container">
        <img src="assets/images/robot4.png">
      </div>
      <div class="text-container">
        <h2>Unleashing the Power of AI-Driven Instruction</h2>
        <p id="ho"> I-Teach inspires curiosity, enhances knowledge retention. Join I-Teach on the journey to unlock the full potential of education through AI-driven instruction.




</p>
      </div>
    </div>
  </div>
</section>




      <?php
      require_once("partials/footer.php");
      ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="assets/scripts/jquery.js"></script>
<script>
$(document).ready(function() {
  // Code to be executed when the document is ready
  $("#ho").fadeIn(500);
});


</script>
