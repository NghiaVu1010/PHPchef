<!doctype html>
<html lang="en">
  <?php
    $styleSheet = "teams";
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
            <a class="nav-link shadows bold" href="index.php">Home</a>
          </li>
        </ul>
      </div>
    </nav>

    <main>
      <!-- Custom Header with customized button -->
      <header class="container text-center bronze obli mt-5">
        <h1 class="shadows">Who will be the next King of Iron Chef?</h1>
        <h3 class="white">Want to compete? Get your team and sign up now!</h3>
        <button type="button" class="btn btn-success my-3" id="addTeamBtn"><span>Create a Team </span></button>
        <h2 class="shadows">60 Minutes. One winner.</h2>
        <p class="offset-3 col-6 white">Iron Chef brings the passion of a high-energy kitchen and the thrill of a timed competition. 
          No two events are the same, with new teams and themes every month, we promise you'll come back for seconds.</p>
      </header>

      <form action="#" method="GET" id="searchForm">  
        <fieldset class="container">
          <legend class="mt-3 display-5 bronze shadows obli">Select a Division:</legend>
          <!-- Drop down selection of divisons -->
          <div class="row">
            <div class="col-lg-3">
              <select class="custom-select" id="divisionDDL" required>
                <option selected value="0" id="defaultChoose">Choose...</option>
              </select>
            </div>
          
            <!-- Add/ViewAll/Reset button-->
            <div class="col-lg-3">
              <button type="button" class="btn btn-primary" id="viewAllBtn">View All</button>
              <button type="reset" class="btn btn-secondary" id="resetBtn">Reset</button>
            </div>
          </div>
          
          <p class="white" id="divisionDetails"></p>

          <!-- Filter by gender -->
          <div class="white">
            <h4>Filter by:</h4>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="anyGender" value="Any" checked>
              <label class="form-check-label" for="anyGender">Any</label>
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
        </fieldset>
      </form>

      <!-- Table to display team info -->
      <div class="container">
        <table class="table m-3" id="teamTable">
          <thead id="teamHead">
            <tr>
              <th class="white">Team Name</th>
              <th class="white">Manager Name</th>
              <th class="white">Email</th>
              <th class="white">Current Size</th>
              <th class="white">Manage</th>
            </tr>
          </thead>
          <tbody class="white" id="teamBody">
          </tbody>
        </table>
        <div id="emptyDiv"></div>
      </div>
    </main>

    <!-- Modal for deleting a team -->
    <div class="modal fade" tabindex="-1" id="deleteModal" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">&nbsp;</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" id="cancelModalBtn" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-primary" id="confirmModalBtn" data-dismiss="modal">Confirm</button>
          </div>
        </div>
      </div>
    </div>

    <?php include("inc/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>

    <script src="scripts/teams.js"></script>
  </body>
</html>