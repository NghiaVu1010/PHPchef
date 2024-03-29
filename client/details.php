<!doctype html>
<html lang="en">
  <?php
    $styleSheet = "details";
  ?>
  <?php include("inc/head.php"); ?>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="navbar-brand shadows obli" href="index.php">Iron Chef</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <!-- Nav bar links -->
      <div class="collapse navbar-collapse" id="navbarTop">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link shadows bold" href="teams.php">Teams</a>
          </li>
        </ul>
      </div>
    </nav>

    <main>
      <h1 class="bronze obli space-top text-center shadows" id="teamName">&nbsp;</h1>

      <!-- Display details -->
      <div class="container">
        <!-- Manager/Team Card generated here (WILL THROW A WARNING, DYNAMIC GENERATION FIXES) -->
        <section class="row" id="team-details"></section>

        <!-- Player Cards generated here (WILL THROW A WARNING, DYNAMIC GENERATION FIXES) -->
        <section class="row justify-content-md-center" id="team-members"></section>

        <!-- Buttons to Add team members or cancel-->
        <div class="row justify-content-center my-3">
          <input type="button" class="col-md-2 btn btn-success bold" id="addMemberBtn" value="Add Member" />
          <input type="button" class="col-md-2 btn btn-secondary bold" id="cancelBtn" value="Cancel" />
        </div>
      </div>

      <!-- Modal to Edit Team -->
      <div class="modal fade" tabindex="-1" id="editTeamModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Team</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <!-- Edit manager/team info, hide/show -->
              <form id="editTeamForm">
                <div class="container">
                  <div class="form-group">
                    <label for="teamNameField">Team Name</label>
                    <input type="text" class="form-control" id="teamNameField" name="teamname"/>
                  </div>
                  <div>
                    <label for="leagueField">League Code</label>
                    <input type="text" class="form-control" id="leagueField" name="leaguecode" readonly/>
                    <small>Please create a new team if you want to switch leagues</small>
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
                      <label for="minAgeField">Min Age:</label>
                      <select class="form-control" id="minAgeField" name="minmemberage" required>
                        <option value="" selected>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="maxAgeField">Max Age:</label>
                      <select class="form-control" id="maxAgeField" name="maxmemberage" required>
                        <option value="" selected>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="maxTeamField">Team Size:</label>
                      <select class="form-control" id="maxTeamField" name="maxteammembers" required>
                        <option value="" selected>...</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="teamgender" id="teamMaleGender" value="Male">
                    <label class="form-check-label" for="teamMaleGender">Male</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="teamgender" id="teamFemaleGender" value="Female">
                    <label class="form-check-label" for="teamFemaleGender">Female</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="teamgender" id="teamAnyGender" value="Any">
                    <label class="form-check-label" for="teamAnyGender">Any</label>
                  </div>
                </div>
              </form>
            </div>
            
            <!-- Error messages for modal -->
            <div class="msgDiv">
              <ul id="errorTeamMessages"></ul> 
            </div>

            <!-- Buttons for modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" id="cancelTeamModalBtn" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-outline-primary" id="confirmTeamModalBtn">Confirm</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal to Edit Member or Delete Member -->
      <div class="modal fade" tabindex="-1" id="editMemberModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editMemberTitle">&nbsp;</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <p id="deleteMsg"></p>
              <!-- Edit member info -->
              <form id="editMemberForm">
                <div class="container">
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
                </div>
              </form>
            </div>

            <!-- Error messages for modal -->
            <div class="msgDiv"> 
              <ul id="errorMemberMessages"></ul> 
            </div>

            <!-- Buttons for modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" id="cancelMemberModalBtn" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-outline-primary" id="confirmMemberModalBtn">Confirm</button>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include("inc/footer.php"); ?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>

    <script src="scripts/validation.js"></script>
    <script src="scripts/details.js"></script>
  </body>
</html>