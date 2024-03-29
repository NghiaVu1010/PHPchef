<!doctype html>
<html lang="en">
  <?php
    $styleSheet = "add_team";
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
            <a class="nav-link bold bronze shadows" href="teams.php">Teams</a>
          </li>
        </ul>
      </div>
    </nav>

    <main>
      <div class="container">
        <h1 class="white obli space-top bronze shadows">Here comes a new<br>Challenger!</h1>
        <!-- Registration Form -->
        <form class="row white" id="teamForm">
          <div class="col-md-6">
            <div class="form-group">
              <label for="teamNameField">Team Name</label>
              <input type="text" class="form-control" id="teamNameField" name="teamname"/>
            </div>

            <div>
              <label for="divisionDDL" class="white">Divison: </label>
              <select class="custom-select" id="divisionDDL" name="leaguecode" required>
                <option selected value="">Choose...</option>
              </select>
            </div>
  
            <div class="form-group">
              <label for="managerNameField">Manager Name</label>
              <input type="text" class="form-control" id="managerNameField" name="managername" required/>
            </div>
  
            <div class="form-group">
              <label for="managerEmailField">Manager Email</label>
              <input type="text" class="form-control" id="managerEmailField" name="manageremail" required/>
            </div>
  
            <div class="form-group">
              <label for="managerPhoneField">Manager Phone: </label>
              <input type="text" class="form-control" id="managerPhoneField" name="managerphone" required/>
            </div>
    
            <div class="row">
              <div class="form-group col-md-3">
                <label for="minAgeField">Min Age: </label>
                <select class="form-control" id="minAgeField" name="minmemberage" required>
                  <option value="" selected>...</option>
                </select>
              </div>
  
              <div class="form-group col-md-3">
                <label for="maxAgeField">Max Age: </label>
                <select class="form-control" id="maxAgeField" name="maxmemberage" required>
                  <option value="" selected>...</option>
                </select>
              </div>
  
              <div class="form-group col-md-3">
                <label for="maxTeamField">Team Size: </label>
                <select class="form-control" id="maxTeamField" name="maxteammembers" required>
                  <option value="" selected>...</option>
                </select>
              </div>
            </div>
  
            <span>Select team gender:</span>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="teamgender" id="maleGender" value="Male">
              <label class="form-check-label" for="maleGender">Male</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="teamgender" id="femaleGender" value="Female">
              <label class="form-check-label" for="femaleGender">Female</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="teamgender" id="anyGender" value="Any">
              <label class="form-check-label" for="anyGender">Any</label>
            </div>

            <div id="msgDiv"> 
              <ul id="errorMessages"></ul> 
            </div>
          </div>
        </form>

        <div class="row">
          <input type="button" class="col-md-3 btn btn-success bold" id="addTeamBtn" value="Add Team" />
          <input type="button" class="col-md-3 btn btn-secondary bold" id="cancelBtn" value="Cancel" />
        </div>
      </div>
    </main>

    <?php include("inc/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>

    <script src="scripts/add_team.js"></script>
  </body>
</html>