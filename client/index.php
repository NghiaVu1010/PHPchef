<!doctype html>
<html lang="en">
  <?php
    $styleSheet = "index";
  ?>
  <?php include("inc/head.php"); ?>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="navbar-brand obli bronze shadows" href="#">Iron Chef</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <!-- Nav bar links -->
      <div class="collapse navbar-collapse" id="navbarTop">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link bold bronze shadows" href="teams.php">Search</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <main>
      <!-- Parallax Header -->
      <div class="parallaxHeader paraImg1">
      </div>

      <!-- First Featurette -->
      <div class="container my-4">

        <h1 class="featurette-heading obli bronze shadows text-center">Welcome to the King of Iron Chef Tournament!</h1>

        <div class="row featurette mt-5">
          <div class="col-md-7 text-right">
            <h2 class="featurette-heading obli bronze shadows">Master Iron Chef</h2>
            <p class="lead white">Iron Chef carries on the legend of our famed "secret ingredient" battles. 
              World-class chefs battle it out against other legends such as: Bobby Flay, Mario Batali, 
              Masaharu Morimoto, Cat Cora, Jose Garces, Michael Symon, Marc Forgione and Geoffrey Zakarian.</p>
              <p class="lead bronze shadows">Who will be crowned the next King of Iron Chef?</p>
            <input class="btn btn-success" id="masterBtn" type="button" value="Compete Now &raquo;" />
          </div>
          <div class="col-md-5">
            <img class="featurette-image rounded" src="images/sideImg1.jpg" alt="Master Chef">
          </div>
        </div>

        <div class="row featurette my-3">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading obli bronze shadows">Professional Iron Chef</h1>
            <p class="lead white">Competitions play a vital role in culinary arts as they continually raise the standards of 
              culinary excellence. There is no better way for a culinarian to hone their craft than by putting their skills 
              and knowledge to the test in a Iron Chef Tournament!</p>
            <input class="btn btn-success" id="professionalBtn" type="button" value="Get Started &raquo;" />
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image rounded" src="images/sideImg2.jpeg" alt="Professional Chef">
          </div>
        </div>


      </div>

      <!-- Parallax Body 1-->
      <div class="parallaxBody paraImg2"></div>

      <!-- Second Featurette -->
      <div class="container mt-4">
        <div class="row featurette mt-5">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading obli bronze shadows">Amatuer Iron Chef</h1>
            <p class="lead white">Iron Chef welcomes amatuers and home chefs to also battle it out for a shot at fame! Join a team or sign up
              with your own to duke it out amongst your rivals!
            </p>
            <input class="btn btn-success" id="amatuerBtn" type="button" value="Sign Up &raquo;" />
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image rounded" src="images/sideImg3.jpg" alt="Amatuer Chef">
          </div>
        </div>

        <div class="row featurette my-3">
          <div class="col-md-7 text-right">
            <h2 class="featurette-heading obli bronze shadows">Master Chef Junior</h1>
            <p class="lead white">Any teens between ages thirteen and eighteen can apply to become a contestant on Iron Chef by joining online. 
              Children who love to cook get a chance to become a Iron Chef Junior!</p>
            <input class="btn btn-success" id="juniorBtn" type="button" value="Join Now &raquo;" />
          </div>
          <div class="col-md-5">
            <img class="featurette-image rounded" src="images/sideImg4.jpg" alt="Junior Chef">
          </div>
        </div>
      </div>

      <!-- Parallax Body 2 -->
      <!-- <div class="parallax paraImg3"></div> -->
    </main>

    <?php include("inc/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>

    <script src="scripts/index.js"></script>
  </body>
</html>