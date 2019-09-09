<!doctype html>
<html lang="en">
  <?php
    $styleSheet = "add_member";
  ?>
  <?php include("inc/head.php"); ?>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="navbar-brand obli bronze shadows" href="index.php">Iron Chef</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <!-- Nav bar links -->
      <div class="collapse navbar-collapse" id="navbarTop">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link bold bronze shadows" href="#" id="teamLink">Team Detail</a>
          </li>
        </ul>
      </div>
    </nav>

    <main>
      <div class="container">
        <h1 class="white obli space-top bronze shadows">Prepare a new <br>Challenger!</h1>
        <!-- Registration Form -->
        <form enctype="multipart/form-data" class="row white" id="memberForm">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nameField">Name</label>
              <input type="text" class="form-control" id="nameField" name="membername" required/>
            </div>
  
            <div class="form-group">
              <label for="emailField">Email</label>
              <input type="text" class="form-control" id="emailField" name="email" required/>
            </div>
  
            <div class="form-group">
              <label for="phoneField">Phone: </label>
              <input type="text" class="form-control" id="phoneField" name="phone" required/>
            </div>
  
            <div class="form-group">
              <label for="contactField">Contact Name: </label>
              <input type="text" class="form-control" id="contactField" name="contactname" required/>
            </div>
    
            <div class="form-group">
              <label for="ageField">Age: </label>
              <select class="form-control" id="ageField" name="age" required>
                <option value="" selected>...</option>
              </select>
            </div>
  
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male">
              <label class="form-check-label" for="maleGender">Male</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female">
              <label class="form-check-label" for="femaleGender">Female</label>
            </div>

            <!-- TRYING TO UPLOAD AN IMAGE -->
            <div class="form-group">
              <p>Upload a Profile Picture...</p>
              <input type="file" name="file" id="file" value="">
            </div>

            <div id="msgDiv"> 
              <ul id="errorMessages"></ul> 
            </div>
          </div>
        </form>

        <div class="row">
          <input type="button" class="col-md-3 btn btn-success bold" id="confirmBtn" value="Confirm" />
          <input type="button" class="col-md-3 btn btn-secondary bold" id="cancelBtn" value="Cancel" />
        </div>
      </div>
    </main>

    <?php include("inc/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>

    <script src="scripts/add_member.js"></script>
  </body>
</html>