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

      <form class="container white" id="signinForm">
        <div class="row">
          <img class="" src="images/IronChefBanner1.jpg" alt="SignIn Banner">
        <div>

        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox mb-3">
          <label><input type="checkbox" value="remember-me"> Remember me</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </main>

    <?php include("inc/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>

    <script src="scripts/login.js"></script>
  </body>
</html>